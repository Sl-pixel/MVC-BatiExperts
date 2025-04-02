<?php require_once __DIR__ . '/templates/header.php'; ?>

<h2 class="mb-4">⊕ Créer une nouvelle fiche client</h2>

<form action="?action=store" method="POST">
    <div class="mb-3">
        <label for="name" class="form-label">Nom :</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email :</label>
        <textarea class="form-control" id="email" name="email" rows="3" required></textarea>
    </div>
    <div class="mb-3">
        <label for="telephone" class="form-label">Téléphone :</label>
        <textarea class="form-control" id="telephone" name="telephone" rows="3" required></textarea>
    </div>
    
    <button type="submit" class="btn btn-primary">Ajouter</button>
</form>

<a href="?" class="btn btn-secondary">Retour à la liste</a>

<?php require_once __DIR__ . '/templates/footer.php'; 