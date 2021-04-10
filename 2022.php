<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="img/tech.png" type="image/">

    <!-- ===== BOX ICONS ===== -->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="assets/css/styles.css">

    <title>Batch 2022</title>
</head>

<body id="body-pd">
    <div class="clg"> 
        <img class="clg-logo" src="img/nitt.png">
      </div>
    <header class="header" id="header">
        <div class="header__toggle">
            <i class='bx bx-menu' id="header-toggle"></i>
        </div>

        <div class="header__img">
            <a href="#" onclick="window.open('https://osoc.nitt.edu/')"><img src="img/osoc_white.png" alt=""></a>
        </div>
    </header>

    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div>
                <a href="#" class="nav__logo">
                    <i class='bx bx-layer nav__logo-icon'></i>
                    <span class="nav__logo-name">Technofania'21</span>
                </a>

                <div class="nav__list">
                    <a href="index.php" class="nav__link">
                        <i class='bx bx-grid-alt nav__icon'></i>
                        <span class="nav__name">Home</span>
                    </a>

                    <a href="Event.php" class="nav__link">
                        <i class='bx bx-message-square-detail nav__icon'></i>
                        <span class="nav__name">Event</span>
                    </a>

                    <a href="2023.php" class="nav__link active">
                        <i class='bx bx-user nav__icon'></i>
                        <span class="nav__name">Team</span>
                    </a>

                    <a href="registration.php" class="nav__link">
                        <i class='bx bx-bookmark nav__icon'></i>
                        <span class="nav__name">Registration</span>
                    </a>
                </div>
            </div>
        </nav>
    </div>

    <h1>Our Team</h1>
    <div class="dropdown">
        <select class="drop_down1" onchange="location = this.value;">
            <option class="drop_down" value="2021.php" >Batch 2k21</option>
            <option class="drop_down" value="2022.php" selected>Batch 2k22</option>
            <option class="drop_down" value="2023.php">Batch 2k23</option>
        </select>
    </div>

   <div class="staff">
        <ul class="headshot committee">
            <li>
                <figure>
                    <img src="img/B.Janetmaam.jpeg" width="214px" height="270px" alt="" />
                    <figcaption>

                        <div>
                            <h2>DR.(MRS.) B.JANET</h2><br>
                            <h3>Staff Advisor</h3>
                        </div>

                    </figcaption>
                </figure>
            </li>
        </ul>
    </div>


    <h1>Batch 2022</h1>
    <div class="container">
        <ul class="headshot committee">

            <li>
                <figure>
                    <img src="img/2022/twinkle.jpg" width="214px" height="270px" alt="" />
                    <figcaption>

                        <div>
                            <h2>TWINKLE AGARWAL</h2><br>
                            <h3>Chairperson</h3>
                        </div>

                    </figcaption>
                </figure>
            </li>

            <li>
                <figure>
                    <img src="img/2022/sunil.jpeg" width="214px" height="270px" alt="" />
                    <figcaption>

                        <div>
                            <h2>SUNIL SOLANKI</h2><br>
                            <h3>Overall Coordinator</h3>
                        </div>

                    </figcaption>
                </figure>
            </li>
            <li>
                <figure>
                    <img src="img/2022/rakshat.jpeg" width="214px" height="270px" alt="" />
                    <figcaption>

                        <div>
                            <h2>RAKSHAT PURANIK</h2><br>
                            <h3>Treasurer</h3>
                        </div>

                    </figcaption>
                </figure>
            </li>
            <li>
                <figure>
                    <img src="img/2022/anshika.jpeg" width="214px" height="270px" alt="" />
                    <figcaption>

                        <div>
                            <h2>ANSHIKA PANDEY</h2><br>

                        </div>

                    </figcaption>
                </figure>
            </li>
        </ul>

        <ul class="headshot committee">
            <li>
                <figure>
                    <img src="img/2022/mayank.jpeg" width="214px" height="270px" alt="" />
                    <figcaption>

                        <div>
                            <h2>MAYANK SHARMA</h2><br>
                        </div>

                    </figcaption>
                </figure>
            </li>
            <li>
                <figure>
                    <img src="img/2022/mrinal.jpeg" width="214px" height="270px" alt="" />
                    <figcaption>

                        <div>
                            <h2>MRINAL SATYAWANSHI</h2><br>
                        </div>

                    </figcaption>
                </figure>
            </li>
            <li>
                <figure>
                    <img src="img/2022/sumit.jpeg" width="214px" height="270px" alt="" />
                    <figcaption>

                        <div>
                            <h2>SUMIT PARMAR</h2><br>

                        </div>

                    </figcaption>
                </figure>
            </li>


        </ul>

    </div>


    <!--===== MAIN JS =====-->
    <script src="assets/js/main.js"></script>
</body>

</html>