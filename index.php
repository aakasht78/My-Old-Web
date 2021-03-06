
<?php
include("connection.php");
error_reporting(0);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/assets/css/styles.css">
    <link rel="stylesheet" href="/assets/pepsi/style.css">

    <!-- =====BOX ICONS===== -->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

    <title>Aakash Web Developer </title>
</head>

<body>
    <!--===== HEADER =====-->
    <header class="l-header">
        <nav class="nav bd-grid">
            <div>
                <a href="#" class="nav__logo"> AAKASH </a>
            </div>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item"><a href="#home" class="nav__link active">Home</a></li>
                    <li class="nav__item"><a href="#about" class="nav__link">About</a></li>
                    <li class="nav__item"><a href="#skills" class="nav__link">Skills</a></li>
                    <li class="nav__item"><a href="#work" class="nav__link">Work</a></li>
                    <li class="nav__item"><a href="#contact" class="nav__link">Contact</a></li>
                </ul>
            </div>

            <div class="nav__toggle" id="nav-toggle">
                <i class='bx bx-menu'></i>
            </div>
        </nav>
    </header>

    <main class="l-main">
        <!--===== HOME =====-->
        <section class="home bd-grid" id="home">
            <div class="home__data">
                <h1 class="home__title">Hi,<br>I'am <span class="home__title-color">AAKASH</span><br> Web Designer</h1>

                <a href="#contact" class="button">Contact</a>
            </div>

            <div class="home__social">
                <a href="" class="home__social-icon"><i class='bx bxl-linkedin'></i></a>
                <a href="" class="home__social-icon"><i class='bx bxl-behance'></i></a>
                <a href="" class="home__social-icon"><i class='bx bxl-github'></i></a>
            </div>

            <div class="home__img">
                <img src="assets/img/aakash.png" alt="">
            </div>
        </section>

        <!--===== ABOUT =====-->
        <section class="about section " id="about">
            <h2 class="section-title">About</h2>

            <div class="about__container bd-grid">
                <div class="about__img">
                    <img src="assets/img/thor.png" alt="">
                </div>

                <div>
                    <h2 class="about__subtitle">I'am Aakash</h2>
                    <p class="about__text">Hi! I am Aakash Tiwari, a web designer/developer focused on crafting great
                        web experiences. Designing and Coding have been my passion since the days I started working with
                        computers but I found myself into web design/development since 2020. I enjoy creating
                        beautifully designed, intuitive and functional websites.

                        For over past 1 years, I have worked for some of the best digital agencies and wonderful clients
                        to create some award winning works. And, I can make this happen for your business as well.</p>
                </div>
            </div>
        </section>

        <!--===== SKILLS =====-->
        <section class="skills section" id="skills">
            <h2 class="section-title">Skills</h2>

            <div class="skills__container bd-grid">
                <div>
                    <h2 class="skills__subtitle">Profesional Skills</h2>
                    <p class="skills__text">Motivated designer and developer with experience creating custom websites
                        through HTML and CSS. Strong collaboration skills and proven history of application development
                    </p>
                    <div class="skills__data">
                        <div class="skills__names">
                            <i class='bx bxl-html5 skills__icon'></i>
                            <span class="skills__name">HTML5</span>
                        </div>
                        <div class="skills__bar skills__html">

                        </div>
                        <div>
                            <span class="skills__percentage">95%</span>
                        </div>
                    </div>
                    <div class="skills__data">
                        <div class="skills__names">
                            <i class='bx bxl-css3 skills__icon'></i>
                            <span class="skills__name">CSS3</span>
                        </div>
                        <div class="skills__bar skills__css">

                        </div>
                        <div>
                            <span class="skills__percentage">85%</span>
                        </div>
                    </div>
                    <div class="skills__data">
                        <div class="skills__names">
                            <i class='bx bxl-javascript skills__icon'></i>
                            <span class="skills__name">JAVASCRIPT</span>
                        </div>
                        <div class="skills__bar skills__js">

                        </div>
                        <div>
                            <span class="skills__percentage">65%</span>
                        </div>
                    </div>
                    <div class="skills__data">
                        <div class="skills__names">
                            <i class='bx bxs-paint skills__icon'></i>
                            <span class="skills__name">UX/UI</span>
                        </div>
                        <div class="skills__bar skills__ux">

                        </div>
                        <div>
                            <span class="skills__percentage">85%</span>
                        </div>
                    </div>
                </div>

                <div>
                    <img src="assets/img/work3.jpg" alt="" class="skills__img">
                </div>
            </div>
        </section>

        <!--===== WORK =====-->
        <section class="work section" id="work">
            <h2 class="section-title">Work</h2>

            <div class="work__container bd-grid">
                <div class="work__img">
                    <div class="aakash">
                        <a href="pepsi.html"><img src="/assets/img/pepsi.jpg" alt="" height="750px" width="750px"></a>
                    </div>
                </div>
                <div class="work__img">
                    <div class="aakash1">
                        <a href="shoes.html"> <img src="assets/img/shoes123.jpg" alt="" height="750px" width="750px">
                        </a>
                    </div>
                </div>
                <div class="work__img">
                    <div class="aakash1">
                    <a href="watch.html"> <img src="assets/img/watch.jpg" alt=""> </a>
                </div>
                </div>
                <div class="work__img">
                    <a href="digitalclock.html"></a> <img src="assets/img/work4.jpg" alt="">
                </div>
                <div class="work__img">
                    <img src="assets/img/work5.jpg" alt="">
                </div>
                <div class="work__img">
                    <img src="assets/img/work6.jpg" alt="">
                </div>
              <a href="/seemore.html"> <button class="btn-6">See More Work</button></a>
                
            </div>

        </section>
        

        <!--===== CONTACT =====-->
        <section class="contact section" id="contact">
            <h2 class="section-title">Contact</h2>

            <div class="contact__container bd-grid">
                <form action="" class="contact__form">
                    <input type="text" placeholder="Name" class="contact__input">
                    <input type="mail" placeholder="Email" class="contact__input">
                    <textarea name="" id="" cols="0" rows="10" class="contact__input"></textarea>
                    <input type="button" value="Submit" class="contact__button button">
                </form>
            </div>
        </section>
    </main>

    <!--===== FOOTER =====-->
    <footer class="footer">
        <p class="footer__title">AAKASH</p>
        <div class="contact__container bd-grid">
                <form action="" class="contact__form">
                    <input type="text" placeholder="Name" name="name" class="contact__input">
                    <input type="mail" placeholder="Email" name="email" class="contact__input">
                   <!-- <input type="text" name="info" placeholder="information" class="contact__input" cols="0" row="10"> -->
                   <textarea name="info" id="" cols="0" rows="10" placeholder="information"  class="contact__input" name="info"></textarea>
                    <input type="submit" value="Submit" class="contact__button button" name="submit">
                </form>
            </div>
        <p>&#169; 2020 copyright all right reserved</p>
    </footer>


    <!--===== SCROLL REVEAL =====-->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!--===== MAIN JS =====-->
    <script src="assets/js/main.js"></script>

</body>

</html>

<?php



$fn=$_GET['name'];
$em=$_GET['email'];
$in=$_GET['info'];

$query="INSERT INTO contact VALUES ('$fn','$em','$in')";
$data=mysqli_query($conn,$query);

if ($data) {
   echo "Data inserted into Database";
}
else 
{
    echo "Failed to insert Data into Database";
}
?>