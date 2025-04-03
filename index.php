<?php

require_once __DIR__ . '/controllers/ClientController.php';

$clientController = new ClientController();

$action = $_GET['action'] ?? 'index'; // Si $_GET['action'] est null ou vide, alors on renvoi index. Sinon on renvoi $_GET['action']
$id = $_GET['id'] ?? null;

switch ($action) {
    case 'view':
        $clientController->show($id);
        break;
    case 'create':
        $clientController->create();
        break;
    case 'index':
        $clientController->home();
        break;
    case 'store':
        $clientController->store();
        break;
    case 'edit':
        $clientController->edit($id);
        break;
    case 'update':
        $clientController->update();
        break;
    case 'delete':
        $clientController->delete($id);
        break;
    default:
        $clientController->forbidden();
        break;
}

require_once __DIR__ . '/controllers/OrderController.php';

$orderController = new OrderController();

$action = $_GET['action'] ?? 'index';
$id = $_GET['id'] ?? null;

switch ($action) {
    case 'view':
        $orderController->showOrder($id);
        break;
    case 'create':
        $orderController->createOrder();
        break;
    case 'index':
        $orderController->orderHome();
        break;
    case 'store':
        $orderController->storeOrder();
        break;
    case 'edit':
        $orderController->editOrder($id);
        break;
    case 'update':
        $orderController->updateOrder();
        break;
    case 'delete':
        $orderController->deleteOrder($id);
        break;
    default:
        $orderController->forbidden();
        break;
}
