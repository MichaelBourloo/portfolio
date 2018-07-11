<!DOCTYPE html>
<html lang="en">
<!-- head -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, userscalable=no initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MichaelBourloo.be - Portfolio</title>
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css">
    <link rel="stylesheet" href="./src/css/main.css">
    <!-- CSS -->

    <!-- font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <!-- font -->

    <!-- meta seo -->
    <meta name="description" content="Portfolio de michael bourloo marcinelle charleroi stage becode">
    <meta name="keywords" content="webdeveloppeur, becode, stage, front-end">
    <!-- meta seo -->
    
</head>
<!-- head -->
<!-- Photo by Khachik Simonian on Unsplash -->

<!-- body -->
<body>
    <div class="block">
        <header class="header">
            <a id="#" href="#" class="header-logo">MichaelBourloo - Portfolio</a>
            <nav class="header-menu">
                <!-- <a href="#accueil">Accueil</a> -->
                <a href="#aboutme">Á propos</a>
                <a href="#travaux">Mes travaux</a>
                <a href="#contact">Contact</a>
            </nav>
        </header>
    </div>
    <div class="block">
        <div class="banner">
            <img src="./src/img/khachik-simonian-267840-unsplash.jpg" alt="urban" class="banner-image">
            <div class="banner-content">
                <h1 class="title is-1">Bienvenue sur mon Portfolio</h1>
                <h2 class="subtitle">Mes travaux, mon monde !</h2>
                <a href="#contact" class="button is-info is-outlined is-large" id="open_modaltest">Contactez-moi</a>
            </div>
        </div>
    </div>
    <div class="modal" id="modal_to_open">
        <div class="modal-background"></div>
            <div class="modal-card">
                <header class="modal-card-head">
                <p class="modal-card-title">Modal title</p>
                <button class="delete" aria-label="close"></button>
                </header>
                <section class="modal-card-body">
                <!-- Content ... -->
                </section>
                <footer class="modal-card-foot">
                <button class="button is-success">Save changes</button>
                <button class="button">Cancel</button>
                </footer>
            </div>
        </div>
    <div class="block">
        <h2 id="aboutme" class="subtitle heading-site">About Me</h2>
        <div class="container about">
            <div class="columns">
                <div class="column about-single-element">
                    <i class="fas fa-terminal icon"></i>
                    <p>                        
                        Je suis orienté Front-End (HTML5/CSS3), j'utilise Git comme logiciel de gestion et je commence sérieusement a me pencher a l'utilisation du CMS WordPress. 
                        J'ai acquis de bonnes bases dans ces 2 langages mais je m'intéresse aussi au JavaScript (Vue.js/React.js).
                        Je suis en ce moment même à la recherche d'un stage dans le développement web, je suis bien entendu ouvert a l'apprentissage d'autres langages.
                    </p>
                </div>
                <div class="column about-single-element">
                    <i class="fas fa-user-alt icon"></i>
                    <p>
                        Suite a une trajectoire professionelle, j'ai atteri dans le monde de la digitalisation et plus particulièrement dans le développement web et les technologies numériques au sein d'une formation (BeCode).
                        L'accès a cette formation m'a été bénéfique a bien des niveaux, avoir une certaine confiance en moi, apprendre à apprendre, la gestion de projet en groupe et bien entendu la compréhension de langages qui ne m'étaient pas familiers il y a de ca quelques mois.
                    </p>
                </div>
                <div class="column about-single-element">
                    <i class="fas fa-gamepad icon"></i>
                    <p>
                        On peut se demander quel a été l'apport du jeu video dans ma vie, il occupe une place importante tout comme un bon film, ce sont pour moi de grandes expériences émotionelles la plupart m'ont donné l'envie d'aller au-delà de certaines mécaniques et ont affûté ma sensibilité artistique et émotionnelle.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="block">
        <h2 id="travaux" class="subtitle heading-site">Portfolio</h2>
        <div class="container">
            <div class="columns">
                <div class="column">
                    
                    <div class="notification">                        
                        <a href="http://michaelbourloo.be/website-didier-motte/Views/header.php"><img src="./src/img/dm.jpg" alt="didiermotte">Didier Motte - reproduction</a>                        
                    </div>
                </div>
                <div class="column">
                    <div class="notification">
                        <a href="http://michaelbourloo.be/website-interpromo/"><img src="./src/img/lje.jpg" alt="lesjeunesentreprises">Les jeunes entreprises</a>
                    </div>
                </div>
                <div class="column">
                    <div class="notification">
                        <a href="http://michaelbourloo.be/allstage/"><img src="./src/img/spada.jpg" alt="stage">Mini-site (stage)</a>                        
                    </div>
                </div>
                <div class="column">
                    <div class="notification">
                        <a href="#"><img src="./src/img/modern.jpg" alt="modernsite">Modern website</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <footer class="footer">
            <h2 id="contact" class="subtitle heading-site">Contactez-moi</h2>
            <div class="footer-contact-form">
                <form action="mail.php" method="POST">
                    <div class="field">
                        <label class="label">Votre nom</label>
                        <div class="control">
                            <input id="name" class="input" type="text" placeholder="ex : Smith" name="name">
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Votre prénom</label>
                        <div class="control">
                            <input id="firstname" class="input" type="text" placeholder="ex : Alex" name="firstname">
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Votre email</label>
                        <div class="control">
                            <input id="email" class="input" type="text" placeholder="ex : Alexsmith@gmail.com" name="email">
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Votre message</label>
                        <div class="control">
                            <textarea id="message" class="textarea" placeholder="En quoi puis-je vous aider ?" name="message"></textarea>
                        </div>
                    </div>
                    <button type='submit' class="button is-success" name="submit" id="send_email">
                        <span class="icon is-small">
                        <i class="fas fa-check"></i>
                        </span>
                        <span>Envoi</span>
                    </button>
                </form>
            </div>
            <div class="footer-informations">
                <p>265, rue de la Grande Cheneviere - 6001 Marcinelle</p>
                <p>Tel: 0491/04.80.15 - Mail: Michael.bourloo@gmail.com</p>
                <ul>
                    <li>
                        <a href="https://twitter.com/michaelbourloo">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/in/michaelbourloo/">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://github.com/MichaelBourloo">
                            <i class="fab fa-github-alt"></i>
                        </a>
                    </li>
                </ul>

            </div>
        </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- <script src="./src/js/main.js"></script>     -->
</body>
<!-- body -->
</html>