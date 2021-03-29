<!DOCTYPE html>
<html lang="fr">

<head>
    <link id="style" rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/hover.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <!-- ----------------------------------------------------------------------- -->
    <!--                                 HEADER                                  -->
    <!-- ----------------------------------------------------------------------- -->
    <header>
        <div class="menu-area">
            <ul>
                <li><a id="accueillink" href="#cover">Accueil</a></li>
                <li><a id="aproposlink" href="#apropos">A propos</a></li>
                <li><a id="competenceslink" href="#competences">Compétence</a></li>
                <li><a id="projectslink" href="#projects">Projets</a></li>
                <li><a id="formationlink" href="#formation">Formation et experience</a></li>
                <li><a id="contactlink" href="#contact">Contact</a></li>
            </ul>
        </div>
        <div id="menu_burger">
            <h3 id="menu_burger_nom" class="animate__animated animate__bounceInLeft">Pierre Gonzales</h3>
            <img id="burgerBtn" src="media/Hamburger.svg" alt="">
            <h3 id="menu_burger_dev" class="animate__animated animate__bounceInLeft">Développeur Web Junior</h3>
        </div>
        <div id="menu_nav">
            <ul>
                <li><a id="accueillink" href="#cover">Accueil</a></li>
                <li><a id="aproposlink" href="#apropos">A propos</a></li>
                <li><a id="competenceslink" href="#competences">Compétence</a></li>
                <li><a id="projectslink" href="#projects">Projets</a></li>
                <li><a id="formationlink" href="#formation">Formation et experience</a></li>
                <li><a id="contactlink" href="#contact">Contact</a></li>
            </ul>
        </div>
    </header>

    <!-- ----------------------------------------------------------------------- -->
    <!--                                  COVER                                  -->
    <!-- ----------------------------------------------------------------------- -->
    <div id="cover">
        <h3 id="nom" class="animate__animated animate__bounceInLeft">Pierre Gonzales</h3>
        <div class=' loading-page'>
            <div class='loading-anim'>
                <div class='border out'></div>
                <div class='border in'></div>
                <div class='border mid'></div>
                <button id="switch">Switch Style</button>
            </div>
        </div>
        <h3 id="dev" class="animate__animated animate__bounceInLeft">Développeur Web Junior</h3>
    </div>

    <!-- ----------------------------------------------------------------------- -->
    <!--                                  MAIN                                   -->
    <!-- ----------------------------------------------------------------------- -->
    <main>

        <!-- ------------------------------ A PROPOS ------------------------------- -->
        <section data-aos="fade-up" id="apropos">
            <h2 class="title">A propos</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde deserunt blanditiis amet, hic maxime
                sapiente dolor pariatur molestiae eius ipsam quidem quaerat qui ad et exercitationem odit excepturi
                ipsa
                facere?Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iste, incidunt odit ab, eos accusamus
                vel praesentium dicta repellendus repellat esse reprehenderit soluta saepe iure qui ex odio cumque,
                culpa facere. Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima debitis cupiditate,
                temporibus perferendis sint, voluptatum earum enim a eveniet hic nesciunt odio sapiente ad eum doloribus
                impedit eligendi nihil esse?</p>
        </section>

        <!-- ----------------------------- COMPETENCES ----------------------------- -->
        <section data-aos="fade-up" id="competences">
            <h2 class="title">Compétences</h2>
            <div id="aligncontent">
                <div id="contenerlogo">
                    <div class="logo">
                        <img src="media/Logohtml.svg" alt="" class="hvr-bob">
                        <p>HTML</p>
                    </div>
                    <div class="logo">
                        <img src="media/Logocss.svg" alt="" class="hvr-bob">
                        <p>CSS</p>
                    </div>
                    <div class="logo">
                        <img src="media/Logojavascript.svg" alt="" class="hvr-bob">
                        <p>JAVASCRIPT</p>
                    </div>
                    <div class="logo">
                        <img src="media/Logophp.svg" alt="" class="hvr-bob">
                        <p>PHP</p>
                    </div>
                    <div class="logo">
                        <img src="media/Logoillustrator.svg" alt="" class="hvr-bob">
                        <p>ILLUSTRATOR</p>
                    </div>
                    <div class="logo">
                        <img src="media/Logophotoshop.svg" alt="" class="hvr-bob">
                        <p>PHOTOSHOP</p>
                    </div>
                    <div class="logo">
                        <img src="media/Logobootstrap.svg" alt="" class="hvr-bob">
                        <p>BOOTSTRAP</p>
                    </div>
                    <div class="logo">
                        <img src="media/Logosass.svg" alt="" class="hvr-bob">
                        <p>SASS</p>
                    </div>
                    <div class="logo">
                        <img src="media/Logomysql.svg" alt="" class="hvr-bob">
                        <p>MYSQL</p>
                    </div>
                    <div class="logo">
                        <img src="media/Logosymfony.svg" alt="" class="hvr-bob">
                        <p>SYMFONY</p>
                    </div>
                </div>
                <div id="download">
                    <h3>Telecharger mon CV</h3><a href=""><img src="media/download.svg" alt=""></a>
                </div>

            </div>
        </section>

        <!-- ------------------------------- PROJETS ------------------------------- -->
        <section data-aos="fade-up" id="projects">
            <h2 class="title">Projets</h2>
            <div id="contenerprojects">
                <div class="parent">
                    <article class="child bg_one" id="gites">
                        <h3 id="">Projet Gîtes</h3>
                        <a href="">Un projet en groupe de type location de gîtes mêlant les languages HTML, CSS, PHP,
                            Javascript et la gestion de bases de données mySQL pour obtenir un site complet de location
                            de residence de vacance pour les particuliers.<br><br>Ce site propose une partie utilisateur
                            permettant de visionner et rechercher un gîte dans une region donnée et de le réserver au
                            date choisi.</a>
                    </article>
                </div>
                <div class="parent">
                    <article class="child bg_two" id="ampoule">
                        <h3 id="">Projet Ampoule</h3>
                        <a href="">Un projet permettant de gérer les changements d'ampoules d'un immeuble avec affichage
                            d'historique et ajout modification des entrée de la base de donnée</a>
                    </article>
                </div>
            </div>
        </section>

        <!-- ------------------------------ FORMATION ------------------------------ -->
        <section data-aos="fade-up" id="formation">
            <h2 class="title">Formation et experience</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde deserunt blanditiis amet, hic maxime
                sapiente dolor pariatur molestiae eius ipsam quidem quaerat qui ad et exercitationem odit excepturi
                ipsa
                facere?Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iste, incidunt odit ab, eos accusamus
                vel praesentium dicta repellendus repellat esse reprehenderit soluta saepe iure qui ex odio cumque,
                culpa facere. Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima debitis cupiditate,
                temporibus perferendis sint, voluptatum earum enim a eveniet hic nesciunt odio sapiente ad eum doloribus
                impedit eligendi nihil esse?</p>
        </section>

        <!-- ------------------------------- CONTACT ------------------------------- -->
        <section data-aos="fade-up" id="contact">
            <h2 class="title">Contact</h2>
            <div id="contenercontact">
                <div id="formulaire">
                    <h3>Contactez-moi</h3>
                    <form method="post">
                        <div id="name">
                            <div class="wrap">
                                <label for="">Votre Nom</label>
                                <input type="text" name="lastname" placeholder="Nom" required>
                            </div>
                            <div class="wrap">
                                <label for="">Votre Prénom</label>
                                <input type="text" id="firstname" name="firstname" placeholder="Prénom" required>
                            </div>
                        </div>
                        <div class="wrap">
                            <label for="">Object de votre Email</label>
                            <input type="text" name="object" placeholder="Objet" required>
                        </div>
                        <div class="wrap">
                            <label for="">Votre Email</label>
                            <input type="email" name="email" placeholder="Email" required>
                        </div>
                        <div class="wrap">
                            <label for="">Votre Message</label>
                            <input type="text" name="message" placeholder="Message" required>
                        </div>
                        <input type="submit" value="Envoyer" name="submit" id="sendBtn">
                    </form>
                </div>
                <div id="social">
                    <h3>Retrouvez-moi ici:</h3>
                    <div>
                        <a href=""><img src="media/linkedin.svg" alt=""></a>
                        <a href="https://github.com/pierre01470"><img src="media/github.svg" alt=""></a>
                    </div>
                </div>
            </div>
        </section>

    </main>
    <?php
    if (isset($_POST['submit']) && !empty($_POST['message'])) {
        $dest = "gonzales.pierre01470@gmail.com";
        $send = $_POST['email'];
        $sujet = $_POST['object'];
        $message = $_POST['lastname'] . ' ' . $_POST['firstname'] . '</br>' . $_POST['message'];
        $header = "From: $send";

        $mail = mail($dest, $sujet, $message, $header);
        if($mail){
            echo '<div id="modal">
                <p>Votre mail à été envoyé</p>
                    </div>';
        }
    }
    ?>
    
</body>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<script src="JS/main.js"></script>

</html>