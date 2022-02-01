<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Boulangerie</title>
    <link rel="stylesheet" href="./assets/css/styles.css">
    <script src="https://kit.fontawesome.com/f7f33bc48f.js" crossorigin="anonymous"></script>
</head>
<body>

<main>
    <?php include './php/inc/_header.php'; ?>
    <section class="welcome">
        <div class="container">
            <article>
                <img src="https://www.parcasterix.fr/sites/default/files/styles/other_contents_block/public/images/restaurants/haut/AST_1012.jpg.webp?itok=6_5ZOkAp" alt="Accueil"/>
                <div class="content">
                    <h2>Le mot du directeur</h2>
                    <span class="separator s-w"></span>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, veniam facilis quod unde
                        totam architecto
                        dignissimos eaque! Vero, quae, laboriosam, iure earum dignissimos ab et voluptatem culpa eius
                        dicta fugiat
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, veniam facilis quod unde
                        totam architecto
                        dignissimos eaque! Vero, quae, laboriosam, iure earum dignissimos ab et voluptatem culpa eius
                        dicta fugiat
                    </p>
                </div>
            </article>
        </div>
    </section>
    <section class="products">
        <div class="container">
            <div class="title">
                <h2>Nos produits phare</h2>
            </div>
            <span class="separator"></span>
            <div class="content">
                <p>Nos produits phare sont les plus vendu en boutique. Nous actualisons cette liste tous les mois.</p>
            </div>
            <div class="grid g-3">
                <div class="col-4">
                    <div class="card">
                        <div class="image">
                            <img src="./assets/img/baguette.jpg" alt="Baguette">
                        </div>
                        <div class="content">
                            <h3>Allergenes</h3>
                            <ul class="alerg">
                                <li><i class="fab fa-nutritionix"></i>Trace de fruits a coques</li>
                                <li><i class="fas fa-seedling"></i>Céréale</li>
                                <li><i class="fas fa-egg"></i>Oeufs</li>
                            </ul>
                            <div class="social-icon">
                                <ul>
                                    <li class="icon"><a href="#"><i class="fas fa-heart"></i></a></li>
                                    <li class="icon"><a href="#"><i class="fas fa-shopping-bag"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <div class="image">
                            <img src="./assets/img/croissant.png" alt="Baguette">
                        </div>
                        <div class="content">
                            <h3>Allergenes</h3>
                            <ul class="alerg">
                                <li><i class="fab fa-nutritionix"></i>Trace de fruits a coques</li>
                                <li><i class="fas fa-seedling"></i>Céréale</li>
                                <li><i class="fas fa-egg"></i>Oeufs</li>
                            </ul>
                            <div class="social-icon">
                                <ul>
                                    <li class="icon"><a href="#"><i class="fas fa-heart"></i></a></li>
                                    <li class="icon"><a href="#"><i class="fas fa-shopping-bag"></i></a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <div class="image">
                            <img src="./assets/img/seigle.jpg" alt="Baguette">
                        </div>
                        <div class="content">
                            <h3>Allergenes</h3>
                            <ul class="alerg">
                                <li><i class="fab fa-nutritionix"></i>Trace de fruits a coques</li>
                                <li><i class="fas fa-seedling"></i>Céréale</li>
                                <li><i class="fas fa-egg"></i>Oeufs</li>
                            </ul>
                            <div class="social-icon">
                                <ul>
                                    <li class="icon"><a href="#"><i class="fas fa-heart"></i></a></li>
                                    <li class="icon"><a href="#"><i class="fas fa-shopping-bag"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="reward">
        <div class="stars">
            <div class="display-stars">
                <span id="one"><i class="fas fa-star"></i></span>
                <span id="two"><i class="fas fa-star"></i></span>
                <span id="three"><i class="fas fa-star"></i></span>
                <span id="four"><i class="fas fa-star"></i></span>
                <span id="five"><i class="fas fa-star"></i></span>
            </div>
        </div>
        <div class="title">
            <h2>Recompense du meilleur croissant du maine & loire</h2>
        </div>
        <div class="image">
            <img src="./assets/img/croissant.png" alt="croissant">
        </div>
        <div class="container">
            <div class="content">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa, iusto, ducimus nostrum consequatur
                    minima commodi sint labore cupiditate optio? Debitis, suscipit delectus fugiat eligendi accusantium
                    blanditiis similique! Amet, nihil, reiciendis, veritatis maxime asperiores magni accusantium
                    voluptatem
                    nesciunt quia laudantium numquam natus odio veniam rem molestias temporibus voluptatum fugit
                    assumenda
                    at quidem tenetur omnis dolor alias. Omnis, quia, impedit, deleniti, fugiat molestiae cumque hic et
                    incidunt dolorem officia illum asperiores iure.</p>
            </div>
        </div>
    </section>
</main>
<?php include './php/inc/_footer.php'; ?>
<script type="text/javascript" src="./assets/js/script.js"></script>
</body>
</html>
