<?php

require_once __DIR__ . '/controllers/ClientController.php';
require_once __DIR__ . '/controllers/OrderController.php';

$clientController = new ClientController();
$orderController = new OrderController();

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
    case 'view-order':
            $orderController->showOrder($id);
            break;
    case 'create-order':
            $orderController->createOrder();
            break;
    case 'index-order':
            $orderController->orderHome();
            break;
    case 'store-order':
            $orderController->storeOrder();
            break;
    case 'edit-order':
            $orderController->editOrder($id);
            break;
    case 'update-order':
            $orderController->updateOrder();
            break;
    case 'delete-order':
            $orderController->deleteOrder($id);
            break;
    default:
        $clientController->forbidden();
        break;
}
