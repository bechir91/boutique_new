<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Ma Boutique</title>
</head>

<body>

    <div class="container-fluid">

        <div class="row">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark justify-content-end">
                <a class="navbar-brand" href="index.php">
                    <img src="photo/shopping-cart-20377.png" width="50" height="50" class="d-inline-block align-center" alt="">
                    Bienvenue sur ma boutique
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Boutique<span class="sr-only"></span></a>
                        </li>

                        <!-- Si je ne suis pas connecté j'affiche les pages connexion/inscription -->
                        <?php if (!internauteEstConnecte()) { ?>
                            <li class="nav-item">
                                <a class="nav-link" href="connexion.php">Connexion</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="inscription.php">Inscription</a>
                            </li>
                        <?php } else { ?>
                            <li class="nav-item">
                                <a class="nav-link" href="profil.php">Mon Profil</a>
                            </li>
                        <?php } ?>

                        <li class="nav-item position_relative">
                            <?php if (isset($_SESSION["panier"]["id_produit"]) && count($_SESSION["panier"]["id_produit"]) > 0) { ?>
                                <span class='number_elem_in_cart'> <?php echo afficherNombreProduitsPanier(); ?> </span>

                            <?php } ?>
                            <a class="nav-link" href="panier.php">Panier</a>
                        </li>

                        <!-- Si l'internaute est connecté j'affiche le bouton de déconnexion -->
                        <?php if (internauteEstConnecte()) { ?>

                            <li class="nav-item">
                                <a class="nav-link font-italic" href="connexion.php?action=deconnexion">
                                    Se déconnecter
                                </a>
                            </li>

                        <?php } ?>

                        <?php if (internauteEstConnecteEtAdmin()) { ?>
                            <li class="nav-item">
                                <a class="nav-link" href="admin/index.php">Back Office</a>
                            </li>
                        <?php } ?>

                    </ul>
                </div>
            </nav>
        </div>
    </div>

    <main class="bg-light p-5">
        <div class="row col-md-10 mx-auto justify-content-center"