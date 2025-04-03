<?php

require_once __DIR__ . '/../clients.php';
require_once __DIR__ . '/../orders.php';
require_once __DIR__ . '/../../lib/database.php';

class OrderRepository
{
    public DatabaseConnection $connection;

    public function __construct()
    {
        $this->connection = new DatabaseConnection();
    }

    public function getOrders(): array
    {
        $statement = $this->connection->getConnection()->query('SELECT * FROM Orders');
        $result = $statement->fetchAll();
        $orders = [];
        foreach ($result as $row) {
            $order = new Order();
            $order->setId($row['id']);
            $order->setTitle($row['title']);
            $order->setStatus($row['status']);
            $order->setCreatedAt(date_create_from_format('Y-m-d H:i:s', $row['created_at']));
            $order->setUpdatedAt(date_create_from_format('Y-m-d H:i:s', $row['created_at']));
            $orders[] = $order;
        }

        return $orders;
    }

    

    public function getOrder(int $id): ?Order
    {
        $statement = $this->connection->getConnection()->prepare("SELECT * FROM Orders WHERE id=:id");
        $statement->execute(['id' => $id]);
        $result = $statement->fetch();

        if (!$result) {
            return null;
        }

        $order = new Order();
        $order->setId($result['id']);
        $order->setTitle($result['title']);
        $order->setStatus($result['status']);
        $order->setCreatedAt(date_create_from_format('Y-m-d H:i:s', $result['created_at']));
        $order->setUpdatedAt(date_create_from_format('Y-m-d H:i:s', $result['created_at']));
        return $order;
    }

    public function createOrder(Order $order): bool
    {
        $statement = $this->connection
                ->getConnection()
                ->prepare('INSERT INTO orders (title, status) VALUES (:title, :status);');

        return $statement->execute([
            'title' => $order->getTitle(),
            'status' => $order->getStatus(),
        ]);
    }

    public function updateOrder(Order $order): bool
    {
        $statement = $this->connection
                ->getConnection()
                ->prepare('UPDATE orders SET title = :title, status = :status WHERE id = :id');

        return $statement->execute([
            'id' => $order->getId(),
            'title' => $order->getTitle(),
            'statut' => $order->getStatus(),
        ]);
    }

    public function deleteOrder(int $id): bool
    {
        $statement = $this->connection
                ->getConnection()
                ->prepare('DELETE FROM orders WHERE id = :id');
        $statement->bindParam(':id', $id);

        return $statement->execute();
    }

}