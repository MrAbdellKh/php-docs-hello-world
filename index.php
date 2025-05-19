<?php
session_start();
require_once 'config/firebase-config.php';

// Récupérer les produits depuis Firebase
$products = $database->getReference('products')->getValue();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Korchi App - Votre Boutique en Ligne</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
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
                        <a class="nav-link active" href="index.php">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="produits.php">Produits</a>
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
        <div class="jumbotron">
            <h1 class="display-4">Bienvenue sur Korchi App</h1>
            <p class="lead">Découvrez notre sélection de produits de qualité à des prix compétitifs.</p>
            <hr class="my-4">
            <p>Explorez notre catalogue et trouvez les meilleures offres.</p>
            <a class="btn btn-primary btn-lg" href="produits.php" role="button">Voir les produits</a>
        </div>

        <div class="row mt-4">
            <div class="col-md-4">
                <div class="card">
                    <img src="images/i1.jpeg" class="card-img-top" alt="Produits Populaires">
                    <div class="card-body">
                        <h5 class="card-title">Produits Populaires</h5>
                        <p class="card-text">Découvrez nos produits les plus vendus.</p>
                        <a href="produits.php?filter=popular" class="btn btn-primary">Voir plus</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="images/i2.jpeg" class="card-img-top" alt="Nouveautés">
                    <div class="card-body">
                        <h5 class="card-title">Nouveautés</h5>
                        <p class="card-text">Explorez nos derniers produits ajoutés.</p>
                        <a href="produits.php?filter=new" class="btn btn-primary">Voir plus</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="images/i3.jpeg" class="card-img-top" alt="Promotions">
                    <div class="card-body">
                        <h5 class="card-title">Promotions</h5>
                        <p class="card-text">Profitez de nos offres spéciales.</p>
                        <a href="produits.php?filter=sale" class="btn btn-primary">Voir plus</a>
                    </div>
                </div>
            </div>
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
    <script type="module" src="dist/bundle.js"></script>
</body>
</html>
