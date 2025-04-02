<?php require_once __DIR__ . '/templates/header.php'; ?>

<h2 class="mb-4">📋 Détail de la fiche client</h2>

<p><strong>Nom : </strong> <?= $client->getName() ?></p>
<p><strong>Email : </strong> <?= $client->getEmail() ?></p>
<p><strong>Téléphone : </strong> <?= $client->getTelephone() ?></p>
<p><strong>Créée le : </strong> <?= $client->getCreatedAt() ?></p>

<a href="?action=edit&id=<?= $client->getId() ?>" class="btn btn-warning">Modifier la fiche client</a>
<a href="?" class="btn btn-secondary">Retour à la liste</a>

<?php require_once __DIR__ . '/templates/footer.php'; 