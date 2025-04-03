<?php

require_once __DIR__ . '/../models/repositories/OrderRepository.php';
require_once __DIR__ . '/../models/orders.php';
class OrderController
{
    private OrderRepository $orderRepository;

    public function __construct()
    {
        $this->orderRepository = new OrderRepository();
    }

    public function orderHome()
    {
        $orders = $this->orderRepository->getOrders();

        require_once __DIR__ . '/../views/homeOrder.php';
    }

    public function showOrder(int $id) 
    {
        $order = $this->orderRepository->getOrder($id);

        require_once __DIR__ . '/../views/viewOrder.php';
    }

    public function createOrder()
    {
        require_once __DIR__ . '/../views/createOrder.php';
    }

    public function storeOrder()
    {
        $order = new Order();
        $order->setTitle($_POST['title']);
        $order->setStatus($_POST['status']);
        $this->orderRepository->create($order);

        header('Location: ?');
    }

    public function edit(int $id)
    {
        $order = $this->orderRepository->getOrder($id);
        require_once __DIR__ . '/../views/editOrder.php';
    }

    public function update()
    {
        $order = new Order();
        $order->setId($_POST['id']);
        $order->setTitle($_POST['title']);
        $order->setStatus($_POST['status']);
        $this->orderRepository->update($order);

        header('Location: ?');
    }

    public function delete(int $id)
    {
        $this->orderRepository->delete($id);

        header('Location: ?');
    }

    public function forbidden()
    {
        require_once __DIR__ . '/../views/404.php';
        http_response_code(404);
    }
}