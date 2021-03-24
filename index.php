<!DOCTYPE html>
<html lang="fr">

<head>
    <link id="style" rel="stylesheet" href="css/style.css">
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
                <li><a id="apropos" href="#apropos">A propos</a></li>
                <li><a id="competences" href="#competences">Compétence</a></li>
                <li><a id="projets" href="#projets">Projets</a></li>
                <li><a id="formation" href="#formation">Formation et experience</a></li>
                <li><a id="contact" href="#contact">Contact</a></li>
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
        <h3 id="dev" class="animate__animated animate__bounceInLeft">Développeur Junior</h3>
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
                        <img src="media/Logohtml.svg" alt="">
                        <p>HTML</p>
                    </div>
                    <div class="logo">
                        <img src="media/Logocss.svg" alt="">
                        <p>CSS</p>
                    </div>
                    <div class="logo">
                        <img src="media/Logojavascript.svg" alt="">
                        <p>JAVASCRIPT</p>
                    </div>
                    <div class="logo">
                        <img src="media/Logophp.svg" alt="">
                        <p>PHP</p>
                    </div>
                    <div class="logo">
                        <img src="media/Logoillustrator.svg" alt="">
                        <p>ILLUSTRATOR</p>
                    </div>
                    <div class="logo">
                        <img src="media/Logophotoshop.svg" alt="">
                        <p>PHOTOSHOP</p>
                    </div>
                    <div class="logo">
                        <img src="media/Logobootstrap.svg" alt="">
                        <p>BOOTSTRAP</p>
                    </div>
                    <div class="logo">
                        <img src="media/Logosass.svg" alt="">
                        <p>SASS</p>
                    </div>
                    <div class="logo">
                        <img src="media/Logomysql.svg" alt="">
                        <p>MYSQL</p>
                    </div>
                    <div class="logo">
                        <img src="media/Logosymfony.svg" alt="">
                        <p>SYMFONY</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ------------------------------- PROJETS ------------------------------- -->
        <section data-aos="fade-up" id="projets">
            <h2 class="title">Projets</h2>
            <div id="contenerarticle">
                <article id="gites"></article>
                <article id="ampoule"><img src="media/articleampoule.png" alt=""></article>
                <article>SOON !!!</article>
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
                    <form action="php/mail.php" method="post">
                        <div id="name">
                            <div class="wrap">
                                <label for="">Votre Nom</label>
                                <input type="text" name="lastname" placeholder="Nom" required>
                            </div>
                            <div class="wrap">
                                <label for="">Votre Prénom</label>
                                <input type="text" name="firstname" placeholder="Prénom" required>
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
                        <a href=""><img src="media/github.svg" alt=""></a>
                    </div>
                </div>
            </div>
        </section>


    </main>
</body>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<script src="JS/main.js"></script>

</html>