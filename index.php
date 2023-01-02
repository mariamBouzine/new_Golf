<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
</head>

<body>
    <!-- navbar -->
    <?php include("nav.php") ?>
    <!-- header -->
    <header>
        <div class="header">
            <div class="slideshow-container">
                <div class="mySlides fade">
                    <img src="img/header.png" alt="image_header" />
                </div>

                <div class="mySlides fade">
                    <img src="img/header.png" alt="image_header" />
                </div>

                <div class="mySlides fade">
                    <img src="img/header.png" alt="image_header" />
                </div>

            </div>
            <div class="box_dot" style="text-align:center">
                <span class="dot active"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title aos-init  " data-aos="fade-up" data-aos-duration="2500">
                            <h1 class="aos-init " data-aos="fade-up" data-aos-duration="2500"> NT Golf Academy</h1>
                            <h3 data-aos="fade-up">Golfeur debutant ou expermente</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="box_Decouvrir" data-aos="fade-up" class="box_Decouvrir">
            <h1>Golfeur debutant ou expermente</h1>
            <button class="btn_decouvrir login-button" href="#"><span>Decouvrir</span>
                <i class="las la-long-arrow-alt-right icon_btn"></i></button>
        </div>
    </header>
    <div class="arrow_link">
        <div class="arrow bounce">
            <a href="#box_Decouvrir" aria-label="scroll_down">
                <svg width="8" height="61" viewBox="0 0 8 61" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3.64645 60.3536C3.84171 60.5488 4.15829 60.5488 4.35355 60.3536L7.53553 57.1716C7.7308 56.9763 7.7308 56.6597 7.53553 56.4645C7.34027 56.2692 7.02369 56.2692 6.82843 56.4645L4 59.2929L1.17157 56.4645C0.976311 56.2692 0.659728 56.2692 0.464466 56.4645C0.269204 56.6597 0.269204 56.9763 0.464466 57.1716L3.64645 60.3536ZM4.5 60L4.5 0H3.5L3.5 60H4.5Z" fill="white"></path>
                </svg>
            </a>
        </div>
    </div>
    <section class="about_section layout_padding">
        <div class="container">
            <div class="row" data-aos="fade-up">
                <div class="col-lg-6 px-0">
                    <div class="detail-box">
                        <div class="heading_container  ">
                            <h2 data-aos="fade-up">
                                NT Golf Academy
                            </h2>
                            <h3 data-aos="fade-up">Coach</h3>
                        </div>
                        <p data-aos="fade-up">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                            enim ad minim veniam, quis nostrud exercitation ullamco laboris
                            nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                            in reprehenderit in voluptate velit
                        </p>
                        <div class="box_btn_1" data-aos="fade-up">
                            <a class="btn_propos " href="#">A propos <i class="las la-long-arrow-alt-right icon_btn2"></i></a>
                            <a class="btn_Votre" href="#">Votre coach <i class="las la-long-arrow-alt-right icon_btn"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 px-0">
                    <div class="img_container">
                        <div class="img-box">
                            <img src="./img/img_about.png" alt="">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="box box_" style="background-image:url('./img/img_home2.png')">
        <div class="container">
            <div class="row" data-aos="fade-up">
                <div class="col-12 px-0">
                    <div class="box_content">
                        <h1 data-aos="fade-up"> NT Golf Academy</h1>
                        <h3 data-aos="fade-up">Nos Cours</h3>
                        <p data-aos="fade-up">orem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
                            Lorem ipsum dolor sit amet, c</p>
                        <div data-aos="fade-up" class="box_btn_2">
                            <a class="btn_voyages btn_propos" href="#">Nos voyages <img src="./img/icons/decouvrir.svg" /></a>
                            <a class="btn_Inscriptio btn_Votre" href="#">Inscriptio <img src="./img/icons/decouvrir.svg" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="box" style="background-image:url('./img/header.png')">
        <div class="container py-5">
            <div class="row py-2">
                <div class="col-12 px-0">
                    <div class="voyage_h">
                        <div class="voyage_dec">
                            <div style="background-image:url('')">
                                <h2 data-aos="fade-up" class="services_voyage_title">NT GOLF ACADEMY</h2>
                                <h2 data-aos="fade-up" class="sous_titre">Voyage</h2>
                                <div data-aos="fade-up" class="services1_desc">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.<br>
                                        Lorem ipsum dolor sit amet</p>
                                </div>
                                <div data-aos="fade-up" class="box_btn_1">
                                    <a class="btn_voyages btn_propos2" href="#">A propos <img src="./img/icons/decouvrir.svg" /></a>
                                    <a class="btn_Inscriptio btn_coach" href="#">Votre coach <img src="./img/icons/decouvrir2.svg" /></a>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        </div>
    </section>
    <section class="about_section about_section2 layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 px-0">
                    <div data-aos="fade-up" class="">
                        <div class="img_box" style="background-image: url('./img/img_home3.png');">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 px-0">
                    <div class="about_content detail-box  img_container">
                        <div class="heading_container ">
                            <h2 data-aos="fade-up">
                                NT Golf Academy
                            </h2>
                            <h3 data-aos="fade-up">Coach</h3>
                        </div>
                        <p data-aos="fade-up">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                            enim ad minim veniam, quis nostrud exercitation ullamco laboris
                            nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                            in reprehenderit in voluptate velit
                        </p>
                        <div class="box_btn_1">
                            <a class="btn_propos " href="#">A propos <img src="./img/icons/decouvrir.svg" /></a>
                            <a class="btn_Votre" href="#">Votre coach <img src="./img/icons/decouvrir.svg" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="welcome" style="background-image:url('./img/img_home2.png')">
        <div class="container">
            <div class="row">
                <div class="col-12 px-0">
                    <div data-aos="fade-up" class="crs_dec">
                        <h2 data-aos="fade-up" class="services_voyage_title">NT GOLF ACADEMY</h2>
                        <h2 data-aos="fade-up" class="sous_titre">Video coaching</h2>
                        <div data-aos="fade-up" class="services1_desc">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.<br>
                                Lorem ipsum dolor sit amet, c</p>
                        </div>
                        <div data-aos="fade-up" class="box_btn_1 d-flex mt-5">
                            <a href="#" class="btn_voyages btn_propos2 btn_services_right_1 mt-6 d-flex">
                                <span>A propos</span>
                                <img src="./img/icons/decouvrir.svg" />
                            </a>
                            <a href="#" class="btn_Inscriptio btn_coach btn_services_right_1 mt-6 d-flex">
                                <span>Votre coach</span>
                                <img src="./img/icons/decouvrir3.svg" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container">
        <div class="row cards">
            <div class="col">
                <div class="card" data-aos="fade-up" style="background-image: url('./img/back_card.png');">
                    <div class="details">
                        <h2 data-aos="fade-up" class="card_title">NT GOLF ACADEMY</h2>
                        <h2 data-aos="fade-up" class="card_sous_titre"> Blog</h2>
                        <p data-aos="fade-up">orem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl .</p>
                        <a href="#" class="btn_voyages btn_propos2 btn_services_right_1 card_btn mt-6 d-flex">
                            <span>A propos</span>
                            <img src="./img/icons/decouvrir.svg" />
                        </a>
                    </div>
                    <h4>18 <br><span>JUI</span></h4>
                    <p data-aos="fade-up" class="footer_card">Envie de voyager, mais quelle destination?</p>
                </div>
            </div>
            <div class="col">
                <div class="card" data-aos="fade-up" style="background-image: url('./img/back_card.png');">
                    <div class="details">
                        <h2 data-aos="fade-up" class="card_title">NT GOLF ACADEMY</h2>
                        <h2 data-aos="fade-up" class="card_sous_titre"> Blog</h2>
                        <p data-aos="fade-up">orem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl .</p>
                        <a href="#" class="btn_voyages btn_propos2 btn_services_right_1 card_btn mt-6 d-flex">
                            <span>A propos</span>
                            <img src="./img/icons/decouvrir.svg" />
                        </a>
                    </div>
                    <h4>18 <br><span>JUI</span></h4>
                    <p data-aos="fade-up" class="footer_card">Envie de voyager, mais quelle destination?</p>
                </div>
            </div>
            <div class="col">
                <div class="card" data-aos="fade-up" style="background-image: url('./img/back_card.png');">
                    <div class="details">
                        <h2 data-aos="fade-up" class="card_title">NT GOLF ACADEMY</h2>
                        <h2 data-aos="fade-up" class="card_sous_titre"> Blog</h2>
                        <p data-aos="fade-up">orem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl .</p>
                        <a href="#" class="btn_voyages btn_propos2 btn_services_right_1 card_btn mt-6 d-flex">
                            <span>A propos</span>
                            <img src="./img/icons/decouvrir.svg" />
                        </a>
                    </div>
                    <h4>18 <br><span>JUI</span></h4>
                    <p data-aos="fade-up" class="footer_card">Envie de voyager, mais quelle destination?</p>
                </div>
            </div>
        </div>
    </section>
    <section class="services">
        <div data-aos="fade-up" class="title_services">
            <h2 class="services_title">NT Golf Academy</h2>
            <h2 class="services_sous_titre">Nos valeurs</h2>
        </div>
        <div class="container">
            <div class="row cards">
                <div data-aos="fade-up" class="col">
                    <img src="./img/icons/valeur1.png" alt="">
                    <span>valeur1</span>
                </div>
                <div data-aos="fade-up" class="col">
                    <img src="./img/icons/valeur2.png" alt="">
                    <span>valeur2</span>
                </div>
                <div data-aos="fade-up" class="col">
                    <img src="./img/icons/valeur3.png" alt="">
                    <span>valeur3</span>
                </div>
                <div data-aos="fade-up" class="col">
                    <img src="./img/icons/valeur4.png" alt="">
                    <span>valeur4</span>
                </div>
            </div>
        </div>
    </section>
    <section class="contact">
        <h2 data-aos="fade-up" class="contact_title">NT Golf Academy</h2>
        <h2 data-aos="fade-up" class="contact_sous_titre">Nos valeurs</h2>
        <p data-aos="fade-up" class="paragraph_contact">orem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
        <div data-aos="fade-up" class="d-flex justify-content-center mt-5">
            <div class="frm-concact">
                <span class="wpcf7-form-control-wrap" data-name="mail">
                    <input type="email" name="mail" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email nl_email" aria-required="true" aria-invalid="false" placeholder="E-mail">
                </span><br>
                <input type="submit" value="Decouvrir" class="btn_contact wpcf7-form-control has-spinner wpcf7-submit nl_btns">
                <span class="wpcf7-spinner"></span>
            </div>
        </div>

    </section>
    <?php include("footer.php") ?>
    <script>
        AOS.init({
            duration: 1200,
        })
        //function slider
        let slideIndex = 0;
        showSlides();

        function showSlides() {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            setTimeout(showSlides, 2000); 
        }
    </script>
</body>

</html>