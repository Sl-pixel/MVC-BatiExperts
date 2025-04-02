<?php require_once __DIR__ . '/templates/header.php'; ?>

<h2 class="mb-4">📋 Détail de la Commande</h2>

<p><strong>ID : </strong> <?= $order->getId() ?></p>
<p><strong>Titre : </strong> <?= $order->getTitre() ?></p>
<p><strong>Statut : </strong> <?= $order->getStatus() ?></p>
<p><strong>Créée le : </strong> <?= $order->getCreatedAt() ?></p>
<p><strong>Modifiée le : </strong> <?= $order->getUpdatedAt() ?></p>

<a href="?action=edit&id=<?= $order->getId() ?>" class="btn btn-warning">Modifier la Commande</a>
<a href="?" class="btn btn-secondary">Retour à la liste</a>

<?php require_once __DIR__ . '/templates/footer.php'; 