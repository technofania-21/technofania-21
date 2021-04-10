<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="img/tech.png" type="image/">

    <!-- ===== BOX ICONS ===== -->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <link rel='stylesheet' href='https://rawcdn.githack.com/SochavaAG/example-mycode/master/_common/css/reset.css'>
    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="assets/css/stylehome.css">

    <title>Home</title>
</head>

<body id="body-pd">
    <div class="clg">
        <a href="#" onclick="window.open('https://www.nitt.edu/')"><img class="clg-logo" src="img/nitt.png"></a>
    </div>
    <header class="header" id="header">
        <div class="header__toggle">
            <i class='bx bx-menu' id="header-toggle"></i>
        </div>

        <div class="header__img">
            <a href="#" onclick="window.open('https://osoc.nitt.edu/index.php')"><img src="img/osoc_white.png" alt=""></a>
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
                    <a href="index.php" class="nav__link active">
                        <i class='bx bx-grid-alt nav__icon'></i>
                        <span class="nav__name">Home</span>
                    </a>

                    <a href="Event.php" class="nav__link">
                        <i class='bx bx-message-square-detail nav__icon'></i>
                        <span class="nav__name">Event</span>
                    </a>

                    <a href="2023.php" class="nav__link">
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
    <div class ="count">
        <div class="ag-format-container">
            <div id="js-countdown"></div>
        </div>
    </div>
        <!-- partial -->  
    <div class = "technofanialogo">
        <img src = "img/tech.png" style="width:15%">
    </div>
    <div class="sinir">
        <div class="box" id="box1">T</div>
        <div class="box" id="box2">E</div>
        <div class="box" id="box3">C</div>
        <div class="box" id="box4">H</div>
        <div class="box" id="box5">N</div>
        <div class="box" id="box1">O</div>
        <div class="box" id="box2">F</div>
        <div class="box" id="box3">A</div>
        <div class="box" id="box4">N</div>
        <div class="box" id="box5">I</div>
        <div class="box" id="box1">A</div>
        <div class="box" id="box2">'</div>
        <div class="box" id="box3">2</div>
        <div class="box" id="box4">1</div>
      </div>

    <!--===== MAIN JS =====-->
    <script src="assets/js/main.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery.min.js'></script>
    <script src='https://rawcdn.githack.com/SochavaAG/example-mycode/master/pens/timer-countdown/libs/TimeCircles.min.js'></script>
      <script  src="assets/js/script.js"></script>
      
</body>

</html>