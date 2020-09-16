<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/style.css" /> 
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/jquery.js"></script><script type="text/javascript" src="js/fluid_scroll.js"></script>
    <title>William Kowalinski</title>
</head>

<body>

    <!-- Menu -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-transparent">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link active ml-2 mr-2" href="#home">HOME <span
                        class="sr-only">(current)</span></a>
                <a class="nav-item nav-link ml-2 mr-2" href="#about">À PROPOS</a>
                <a class="nav-item nav-link ml-2 mr-2" href="#skills">COMPETENCES</a>
                <a class="nav-item nav-link ml-2 mr-2" href="#timeline">FORMATION</a>
                <a class="nav-item nav-link ml-2 mr-2" href="#experience">EXPERIENCES</a>
                <a class="nav-item nav-link ml-2 mr-2" href="#portfolio">PORTFOLIO</a>
                <a class="nav-item nav-link ml-2 mr-2" href="#contact">CONTACT</a>
            </div>
        </div>
        <a class="text-center" id="download" href="img/CV_William_Kowalinski.pdf"  onclick="window.open(this.href);return false;">Téléchargez mon<br> CV en PDF</a>
    </nav>

    <!-- Home -->
    <header id="home">
        <div class="container">
            <section>
                <article>
                    <div class="row">
                        <div class="offset-md-3 col-md-6">
                            <h1 id="name" class="pb-4">William Kowalinski</h1>
                            <h2>Développeur web Junior</h2>
                        </div>
                    </div>
                </article>
            </section>
        </div>
    </header>

    <!-- About -->
    <div class="pt-5 pb-5" id="about">
        <div class="container">
            <div class="row">
                <div class="offset-md-1 col-md-10 about-p">
                    <div class="container-fluid">
                        <h1 class="pb-3">À Propos</h1>
                    </div>
                    <div>
                        <img src="img/kowalinski5.jpg" alt="William_Kowalinski"
                            class="rounded-circle float-left mr-4 pb-3 pt-3" width="110px">
                        <p class="text-left ml-5 h5"> Fort d'une expérience dans différents domaines et notamment 8 ans en comptabilité, je tente l'aventure
                            de partir vivre à l'île de la Réunion.<br> Ainsi, après diverses rencontres et expériences enrichissantes, je finis par découvrir le
                            développement web qui est très passionnant et prenant. Je me forme donc en autodidacte puis suis une formation de 3 mois de développeur
                            web. Mais cela ne me suffit pas, je veux continuer à apprendre, et pour cela je souhaite démarrer un contrat de professionnalisation
                            en alternance en France métropolitaine dès le mois de septembre. Je reste bien évidemment ouvert à tous autres types de contrats, même
                            un simple stage. Toute expérience est bonne à prendre.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


<!--Skills-->
    <script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js"></script>

    <div class="jquery-script-clear"></div>

    <div class="pt-5 mt-5 mb-5 pb-5 container-fluid" id="skills">
        <h1 class="text-center pb-5">Compétences</h1>


        <div class="row">
            <div class="col-lg-1 col-md-1 col-sm-1 col-1"></div>

            <div class="col-lg-1 col-md-1 col-sm-1 col-1">
                <h6>Html</h6>
            </div>
            <div id="bar1" class="barfiller mt-4 mb-4">
                <div class="tipWrap">
                    <span class="tip"></span>
                </div>
                <span class="fill" data-percentage="90"></span>
            </div>

            <div class="col-lg-1 col-md-1 col-sm-1 col-1"></div>

            <div class="col-lg-1 col-md-1 col-sm-1 col-1">
                <h6>Css</h6>
            </div>
            <div id="bar2" class="barfiller mt-4 mb-4">
                <div class="tipWrap">
                    <span class="tip"></span>
                </div>
                <span class="fill" data-percentage="90"></span>
            </div>

            <div class="col-lg-1 col-md-1 col-sm-1 col-1"></div>
        </div>


        <div class="row">
            <div class="col-lg-1 col-md-1 col-sm-1 col-1"></div>

            <div class="col-lg-1 col-md-1 col-sm-1 col-1">
                <h6>Bootstrap</h6>
            </div>
            <div id="bar3" class="barfiller mt-4 mb-4">
                <div class="tipWrap">
                    <span class="tip"></span>
                </div>
                <span class="fill" data-percentage="75"></span>
            </div>

            <div class="col-lg-1 col-md-1 col-sm-1 col-1"></div>

            <div class="col-lg-1 col-md-1 col-sm-1 col-1">
                <h6>Javascipt</h6>
            </div>

            <div id="bar4" class="barfiller mt-4 mb-4">
                <div class="tipWrap">
                    <span class="tip"></span>
                </div>
                <span class="fill" data-percentage="60"></span>
            </div>
            <div class="col-lg-1 col-md-1 col-sm-1 col-1"></div>
        </div>


        <div class="row">
            <div class="col-lg-1 col-md-1 col-sm-1 col-1"></div>

            <div class="col-lg-1 col-md-1 col-sm-1 col-1">
                <h6>PHP</h6>
            </div>
            <div id="bar5" class="barfiller mt-4 mb-4">
                <div class="tipWrap">
                    <span class="tip"></span>
                </div>
                <span class="fill" data-percentage="20"></span>
            </div>
            <div class="col-lg-1 col-md-1 col-sm-1 col-1"></div>

            <div class="col-lg-1 col-md-1 col-sm-1 col-1">
                <h6>Laravel</h6>
            </div>

            <div id="bar6" class="barfiller mt-4 mb-4">
                <div class="tipWrap">
                    <span class="tip"></span>
                </div>
                <span class="fill" data-percentage="10"></span>
            </div>
            <div class="col-lg-1 col-md-1 col-sm-1 col-1"></div>
        </div>


        <div class="row">
            <div class="col-lg-1 col-md-1 col-sm-1 col-1"></div>

            <div class="col-lg-1 col-md-1 col-sm-1 col-1">
                <h6>Jquery</h6>
            </div>
            <div id="bar7" class="barfiller mt-4 mb-4">
                <div class="tipWrap">
                    <span class="tip"></span>
                </div>
                <span class="fill" data-percentage="10"></span>
            </div>

            <div class="col-lg-1 col-md-1 col-sm-1 col-1"></div>

            <div class="col-lg-1 col-md-1 col-sm-1 col-1">
                <h6>Git/Github</h6>
            </div>

            <div id="bar8" class="barfiller mt-4 mb-4">
                <div class="tipWrap">
                    <span class="tip"></span>
                </div>
                <span class="fill" data-percentage="40"></span>
            </div>
            <div class="col-lg-1 col-md-1 col-sm-1 col-1"></div>
        </div>

        <div class="row">
            <div class="col-lg-1 col-md-1 col-sm-1 col-1"></div>

            <div class="col-lg-1 col-md-1 col-sm-1 col-1">
                <h6>Wordpress</h6>
            </div>
            <div id="bar9" class="barfiller mt-4 mb-4">
                <div class="tipWrap">
                    <span class="tip"></span>
                </div>
                <span class="fill" data-percentage="5"></span>
            </div>
</div>

    </div>

    <script src="js/jquery.barfiller.js" type="text/javascript"></script>
    <script type="text/javascript">

        $(document).ready(function () {

            $('#bar1').barfiller({ barColor: '#39b3ff', duration: 3000 });
            $('#bar2').barfiller({ barColor: '#39b3ff', duration: 3000 });
            $('#bar3').barfiller({ barColor: '#39b3ff', duration: 3000 });
            $('#bar4').barfiller({ barColor: '#39b3ff', duration: 3000 });
            $('#bar5').barfiller({ barColor: '#39b3ff', duration: 3000 });
            $('#bar6').barfiller({ barColor: '#39b3ff', duration: 3000 });
            $('#bar7').barfiller({ barColor: '#39b3ff', duration: 3000 });
            $('#bar8').barfiller({ barColor: '#39b3ff', duration: 3000 });
            $('#bar9').barfiller({ barColor: '#39b3ff', duration: 3000 });


        });

    </script>

    <!--[if lt IE 9 ]>

<![endif]-->

    <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
 chromium.org/developers/how-tos/chrome-frame-getting-started -->
    <!--[if lt IE 7 ]>
<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
<![endif]-->
    <script type="text/javascript">

        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-36251023-1']);
        _gaq.push(['_setDomainName', 'jqueryscript.net']);
        _gaq.push(['_trackPageview']);

        (function () {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();

    </script>


    <!--Education TimeLine-->

    <div class="container pt-5 pb-5" id="timeline">
        <h1 class="text-center pb-5" >Formation</h1>
        <div class="row">
            <div class="main-timeline">
                <div class="timeline">
                    <div class="timeline-icon"></div>
                    <div class="timeline-content">
                        <span class="date">Janvier 2019 à mars 2019,
                            Simplon Réunion, Ile de la Réunion</span>
                        <h5 class="title">Certification Coder et déployer des applications web simple</h5>
                        <p class="description">
                            Formation développeur web : HTML, CSS, Bootstrap, Javascript, Jquery, PHP, phpMyAdmin,
                            Laravel, Méthode Agile
                        </p>
                    </div>
                </div>

                <div class="timeline">
                    <div class="timeline-icon"></div>
                    <div class="timeline-content">
                        <span class="date">Février 2019, Opquast, Ile de la Réunion</span>
                        <h5 class="title">Certification Opquast</h5>
                        <p class="description">
                            Connaissance des fondamentaux des bonnes pratiques qualité Web et des termes du Web. Capacités suffisantes pour comprendre les autres
                            professionnels du Web.
                        </p>
                    </div>
                </div>
                <div class="timeline">
                    <div class="timeline-icon"></div>
                    <div class="timeline-content">
                        <span class="date">Août 2018 à décembre 2018,
                            En autodidacte, Ile de la Réunion</span>
                        <h5 class="title">Formation Développeur Web</h5>
                        <p class="description">
                            Apprentissage du CSS / HTML / JAVASCRIPT sur les sites <br>Pierre-Giraud.com, Udemy et
                            OpenClassRoom.
                        </p>
                    </div>
                </div>

                <div class="timeline">
                    <div class="timeline-icon"></div>
                    <div class="timeline-content">
                        <span class="date">2014 à 2016, ESPE - École
                            supérieure du professorat et de l'éducation, Ile de la Réunion</span>
                        <h5 class="title">CRPE</h5>
                        <p class="description">
                            Préparation au concours de recrutement de professeur des écoles
                        </p>
                    </div>
                </div>
                <div class="timeline">
                    <div class="timeline-icon"></div>
                    <div class="timeline-content">
                        <span class="date">2002 à 2004, Lycée
                            Philibert Delorme, L’Isle-d’Abeau, France</span>
                        <h5 class="title">BTS assistant de gestion PME-PMI</h5>

                    </div>
                </div>

                <div class="timeline">
                    <div class="timeline-icon"></div>
                    <div class="timeline-content">
                        <span class="date">1999 à 2002, Lycée
                            Philibert Delorme, L’Isle-d’Abeau, France</span>
                        <h5 class="title">BAC STT comptabilité-Gestion</h5>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Experiences -->

    <div class="pt-5 pb-5" id="experience">
        <h1 class="text-center pb-5">Expériences</h1>

        <div class="exp pb-3 pt-3 pl-5">
            <span class="date_exp">Février 2020 à mars 2020, Stage, Marrakech</span>
            <h5 class="title_exp">Développeur Web</h5>
            <p class="description_exp">
            Création de la structure d'un site. (HTML, CSS, BOOTSTRAP, JQUERY, PHP).
            </p>
        </div>
    
        <div class="exp pb-3 pt-3 pl-5">
            <span class="date_exp">Avril 2019 à Mai 2019, freelance</span>
            <h5 class="title_exp">Développeur Web</h5>
            <p class="description_exp">
                Création de mon site perso-portfolio.
            </p>
        </div>

        <div class="exp pb-3 pt-3 pl-5">
            <span class="date_exp">2006 à 2014, Jean Delatour</span>
            <h5 class="title_exp">Comptable</h5>
            <p class="description_exp">
                Tenue de la comptabilité générale de 6 magasins.
            </p>
        </div>

        <div class="exp pb-3 pt-3 pl-5">
            <span class="date_exp">2004 à 2006, MGF</span>
            <h5 class="title_exp">Préparateur de commande</h5>
            <p class="description_exp">
                Préparation de commande avec chariot élévateur (CACES 1).
            </p>
        </div>

    </div>

    <!-- Portfolio -->
    <div class="portfolio pt-5 pb-5" id="portfolio">
        <div class="container">
            <section>
                <article>
                    <div class="row">
                        <div class="offset-md-3 col-md-6 portfolio-p">
                            <h1>Portfolio</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <!-- <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active bg-dark" id="pills-all" data-toggle="pill"
                                        href="#pills-all" role="tab" aria-controls="pills-all"
                                        aria-selected="true">All</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-dark" id="pills-webdesign-tab" data-toggle="pill"
                                        href="#pills-webdesign" role="tab" aria-controls="pills-webdesign"
                                        aria-selected="false">Web Design</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-dark" id="pills-branding-tab" data-toggle="pill"
                                        href="#pills-branding" role="tab" aria-controls="pills-branding"
                                        aria-selected="false">Branding</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-dark" id="pills-graphic-tab" data-toggle="pill"
                                        href="#pills-graphic" role="tab" aria-controls="pills-graphic"
                                        aria-selected="false">Graphic</a>
                                </li>
                            </ul> -->
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active all-portfolio" id="pills-all" role="tabpanel"
                                    aria-labelledby="pills-all-tab">
                                    <a href="https://william-kowalinski.fr/"  onclick="window.open(this.href);return false;"><img src="img/portfolio.jpg" alt="portfolio1"></a>
                                    <a href="https://aminepolak.github.io/Marrakech/"  onclick="window.open(this.href);return false;"><img src="img/marrakech.jpg" alt="portfolio1"></a>
                                    <a href="https://aminepolak.github.io/jeu_serpent/"  onclick="window.open(this.href);return false;"><img src="img/serpentin.jpg" alt="portfolio1"></a>

                                    <!--   <img src="img/portfolio4.jpg" alt="portfolio4">
                                    <img src="img/portfolio5.jpg" alt="portfolio5">
                                    <img src="img/portfolio6.jpg" alt="portfolio6"> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </section>
        </div>
    </div>

    <!-- Contact -->
    <div class="contact pt-5 pb-5" id="contact">
        <h1 class="text-center pb-5">Contactez-moi</h1>
        <div class="container pt-5">
            <section>
                <article>
                    <div class="row">
                        <div class="col-md-8">
                            <form method="post" action="mail.php">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control" id="inputName" name="name"
                                            placeholder="Name*" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="email" class="form-control" id="inputEmail" name="email"
                                            placeholder="Email*" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="inputSubject" name="subject"
                                        placeholder="Subject">
                                </div>
                                <div class="form-group">
                                    <div class="mb-3">
                                        <textarea class="form-control" id="validationTextarea" name="message"
                                            placeholder="Message*" required></textarea>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-dark">SEND</button>
                            </form>
                        </div>
                        <div class="col-md-4">
                            <p>197 rue Marcel Mérieux,
                                <br>Résidence Studio 7, studio A206
                                <br>69007 Lyon</p>
                            <p>07 69 61 35 41</p>
                            <p>william.kowalinski@laposte.net</p>
                        </div>
                    </div>
                </article>
            </section>
        </div>
    </div>


    <!-- footer -->
    <footer>
        <div class="row">
            <div class="offset-md-4 col-md-4">
                <h3>William Kowalinski </h3>
                <p>Copyright © 2019, All rights Reserved. <br>
                    Created by William Kowalinski </p>
                <p><i class="far fa-envelope  fa-2x pr-2"></i>
                    <i class="fab fa-linkedin fa-2x pr-2"></i></p>

            </div>
        </div>
    </footer>

</body>

</html>