<?php require_once __DIR__ . '/templates/header.php'; ?>

<h2 class="mb-4">📋 Détail de la fiche client</h2>

<p><strong>Nom : </strong> <?= $client->getName() ?></p>
<p><strong>Email : </strong> <?= $client->getEmail() ?></p>
<p><strong>Téléphone : </strong> <?= $client->getTelephone() ?></p>
<p><strong>Créée le : </strong> <?= $client->getCreatedAt() ?></p>

<br>
<table class="table table-striped table-bordered">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Titre</th>
            <th>Statut</th>
            <th>Date de création</th>
            <th>Date de modification</th>
            <th>Actions</th>
            <th>ID client</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($orders as $order): ?>

            <tr>
          

                <td><?= $order->getId(); ?></td>
                <td><a href="?action=view&id=<?= $order->getId() ?>"><?= $order->getTitle(); ?></a></td>
                <td><?= $order->getStatus(); ?></td>
                <td><?= $order->getCreatedAt(); ?></td>
                <td><?= $order->getUpdatedAt() ?></td>
                <td><?= $order->getClientId() ?></td>
                <td>
                    <a href="?action=view&id=<?= $order->getId() ?>" class="btn btn-primary btn-sm">👀</a>
                    <a href="?action=edit&id=<?= $order->getId() ?>" class="btn btn-warning btn-sm">✏️</a>
                    <a onclick="return confirm('T’es sûr ?');" href="?action=delete&id=<?= $order->getId() ?>" class="btn btn-dark btn-sm">❌</a>
                </td>

            </tr>

        <?php endforeach; ?>

<a href="?action=edit&id=<?= $client->getId() ?>" class="btn btn-warning">Modifier la fiche client</a>
<a href="?" class="btn btn-secondary">Retour à la liste</a>

<?php require_once __DIR__ . '/templates/footer.php'; 