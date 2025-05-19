<?php
// Simuler une base de données de produits
$produits = [
    [
        'id' => 1,
        'nom' => 'Smartphone XYZ',
        'prix' => 499.99,
        'image' => 'https://via.placeholder.com/200',
        'description' => 'Un smartphone puissant avec un excellent appareil photo.'
    ],
    [
        'id' => 2,
        'nom' => 'Laptop Pro',
        'prix' => 899.99,
        'image' => 'https://via.placeholder.com/200',
        'description' => 'Ordinateur portable performant pour les professionnels.'
    ],
    [
        'id' => 3,
        'nom' => 'Casque Audio Premium',
        'prix' => 199.99,
        'image' => 'https://via.placeholder.com/200',
        'description' => 'Casque sans fil avec réduction de bruit active.'
    ],
    [
        'id' => 4,
        'nom' => 'Montre Connectée',
        'prix' => 299.99,
        'image' => 'https://via.placeholder.com/200',
        'description' => 'Montre intelligente avec suivi d\'activité.'
    ]
];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produits - Korchi App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">Korchi App</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="produits.php">Produits</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="panier.php">Panier</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <a href="connexion.php" class="btn btn-outline-light me-2">Connexion</a>
                    <a href="inscription.php" class="btn btn-primary">Inscription</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <h1 class="mb-4">Nos Produits</h1>
        
        <!-- Filtres -->
        <div class="row mb-4">
            <div class="col-md-3">
                <select class="form-select" id="tri">
                    <option value="">Trier par</option>
                    <option value="prix-asc">Prix croissant</option>
                    <option value="prix-desc">Prix décroissant</option>
                    <option value="nom">Nom</option>
                </select>
            </div>
            <div class="col-md-3">
                <input type="text" class="form-control" placeholder="Rechercher un produit...">
            </div>
        </div>

        <!-- Grille de produits -->
        <div class="row">
            <?php foreach ($produits as $produit): ?>
            <div class="col-md-3 mb-4">
                <div class="card h-100">
                    <img src="<?php echo $produit['image']; ?>" class="card-img-top" alt="<?php echo $produit['nom']; ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $produit['nom']; ?></h5>
                        <p class="card-text"><?php echo $produit['description']; ?></p>
                        <p class="card-text"><strong><?php echo number_format($produit['prix'], 2); ?> €</strong></p>
                        <a href="#" class="btn btn-primary">Ajouter au panier</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

    <footer class="bg-dark text-light mt-5 py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5>Korchi App</h5>
                    <p>Votre boutique en ligne de confiance</p>
                </div>
                <div class="col-md-6 text-end">
                    <p>&copy; <?php echo date('Y'); ?> Korchi App. Tous droits réservés.</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 