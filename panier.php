<?php
session_start();

// Simuler un panier
$panier = [
    [
        'id' => 1,
        'nom' => 'Smartphone XYZ',
        'prix' => 499.99,
        'quantite' => 1,
        'image' => 'https://via.placeholder.com/100'
    ],
    [
        'id' => 2,
        'nom' => 'Laptop Pro',
        'prix' => 899.99,
        'quantite' => 1,
        'image' => 'https://via.placeholder.com/100'
    ]
];

$total = array_reduce($panier, function($carry, $item) {
    return $carry + ($item['prix'] * $item['quantite']);
}, 0);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panier - Korchi App</title>
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
                        <a class="nav-link" href="index.php">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="produits.php">Produits</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="panier.php">Panier</a>
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

    <div class="container mt-5">
        <h1 class="mb-4">Votre Panier</h1>
        
        <?php if (empty($panier)): ?>
            <div class="alert alert-info">
                Votre panier est vide. <a href="produits.php" class="alert-link">Continuer vos achats</a>
            </div>
        <?php else: ?>
            <div class="row">
                <div class="col-md-8">
                    <?php foreach ($panier as $item): ?>
                        <div class="cart-item">
                            <div class="row align-items-center">
                                <div class="col-md-2">
                                    <img src="<?php echo $item['image']; ?>" alt="<?php echo $item['nom']; ?>" class="img-fluid rounded">
                                </div>
                                <div class="col-md-4">
                                    <h5><?php echo $item['nom']; ?></h5>
                                    <p class="text-muted">Prix unitaire: <?php echo number_format($item['prix'], 2); ?> €</p>
                                </div>
                                <div class="col-md-3">
                                    <div class="input-group">
                                        <button class="btn btn-outline-secondary" type="button">-</button>
                                        <input type="text" class="form-control text-center" value="<?php echo $item['quantite']; ?>">
                                        <button class="btn btn-outline-secondary" type="button">+</button>
                                    </div>
                                </div>
                                <div class="col-md-2 text-end">
                                    <p class="h5"><?php echo number_format($item['prix'] * $item['quantite'], 2); ?> €</p>
                                    <button class="btn btn-link text-danger p-0">
                                        <i class="fas fa-trash"></i> Supprimer
                                    </button>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Récapitulatif</h5>
                            <div class="d-flex justify-content-between mb-2">
                                <span>Sous-total</span>
                                <span><?php echo number_format($total, 2); ?> €</span>
                            </div>
                            <div class="d-flex justify-content-between mb-2">
                                <span>Livraison</span>
                                <span>Gratuite</span>
                            </div>
                            <hr>
                            <div class="d-flex justify-content-between mb-3">
                                <strong>Total</strong>
                                <strong class="text-primary"><?php echo number_format($total, 2); ?> €</strong>
                            </div>
                            <button class="btn btn-primary w-100">
                                Passer la commande
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
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