<?php require_once __DIR__ . '/templates/header.php'; ?>

<h2 class="mb-4">✏️ Modifier une la commande</h2>

<form action="?action=update" method="POST">
    <input type="hidden" name="id" value="<?= $order->getId() ?>">
    <div class="mb-3">
        <label for="title" class="form-label">Titre :</label>
        <input type="text" class="form-control" id="title" name="title" value="<?= $order->getTitle() ?>" required>
    </div>
    <div class="mb-3">
        <label for="status" class="form-label">Statut :</label>
        <textarea class="form-control" id="status" name="status" rows="3" required><?= $order->getStatus() ?></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Modifier</button>
</form>

<a href="?" class="btn btn-secondary">Retour à la liste</a>


<?php require_once __DIR__ . '/templates/footer.php'; 