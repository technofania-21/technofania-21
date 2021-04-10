<?php
    session_start();
    ?>
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
    <link rel="stylesheet" href="assets/css/stylesregister.css">
    
    <title>Registration</title>
    <script>
        function fun()
        {
            <?php
            session_destroy();
            ?>
        }
        </script>
</head>

<body id="body-pd" onload=fun()>
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

                    <a href="2023.php" class="nav__link">
                        <i class='bx bx-user nav__icon'></i>
                        <span class="nav__name">Team</span>
                    </a>

                    <a href="registration.php" class="nav__link active">
                        <i class='bx bx-bookmark nav__icon'></i>
                        <span class="nav__name">Registration</span>
                    </a>
                </div>
            </div>
        </nav>
    </div>
    <link href="maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
  
    <div class="container contact-form">
                <div class="contact-image">
                    <img src="https://pbs.twimg.com/profile_images/1317003743431331840/yktwuBHn_400x400.jpg" alt="agamya"/>
                </div>
                <form action="connect.php" method="POST" enctype="multipart/form-data">
                    <h3>REGISTRATION</h3>

                    <div class="msg">
                        <p id="status">
                            
                        </p>
                    </div>
                   <div class="row">
                        <div class="col-md-6">
                          
                            <div class="form-group">
                                <input type="text" name="Team_Name" class="form-control1" placeholder="team name*" value="" required/>
                            </div>
                          
                         <div class="align">
                           <div class="member1">
                            <div class="form-group">
                             <input type="text" name="member1" class="form-control" pattern="[A-Za-z\s]{05,50}" title="enter letters only" placeholder="member 1*" value="" required/> <input type="text" name="roll_number1" class="form-control" pattern="[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]" title="enter 9 digit roll number" placeholder="roll number*" value="" required/>
                            </div>
                          </div>
                            <div class="form-group">
                               <input type="text" name="member2" class="form-control" pattern="[A-Za-z\s]{05,50}" title="enter letters only" placeholder="member 2*" value="" required/> <input type="text" name="roll_number2" class="form-control" pattern="[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]" title="enter 9 digit roll number"  placeholder="roll number*" value="" required/>
                            </div>
                            <div class="form-group">
                               <input type="text" name="member3" class="form-control" pattern="[A-Za-z\s]{05,50}" title="enter letters only" placeholder="member 3*" value="" required/> <input type="text" name="roll_number3" class="form-control" pattern="[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]" title="enter 9 digit roll number"  placeholder="roll number *" value="" required/>
                            </div>
                            <div class="form-group">
                              <input type="text" name="member4" class="form-control" pattern="[A-Za-z\s]{05,50}" title="enter letters only" placeholder="member 4*" value="" required/> <input type="text" name="roll_number4" class="form-control" pattern="[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]" title="enter 9 digit roll number"  placeholder="roll number*" value="" required/>
                            </div>
                            <div class="form-group">
                                 <input type="text" name="member5" class="form-control" pattern="[A-Za-z\s]{05,50}" title="enter letters only" placeholder="member 5*" value="" /> <input type="text" name="roll_number5" class="form-control" pattern="[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]" title="enter 9 digit roll number"  placeholder="roll number*" value="" />
                             </div>
                           </div>
                           <div class="form-group">
                            <input type="file" name="abstract" class="form-control2" required/>
                        </div>
                            <div class="form-group">
                                <input type="submit" name="btnSubmit" class="btnContact" value = "REGISTER"/>
                                
                            </div>

                           

                        </div>
                        <div class="error" style="color:red;text-align: center; font-family: 'Balsamiq Sans', cursive;">
                        
                        <?php
                            if(isset($_SESSION["error"])){
                            $error = $_SESSION["error"];
                            echo "<span>$error</span>";
                            }
                        ?>
                        </div>
                        <div class="suceess" style="color:black;text-align: center; font-family: 'Balsamiq Sans', cursive;">
                        <?php
                            if(isset($_SESSION["success"])){
                                $error = $_SESSION["success"];
                                echo "<span>$error</span>";
                            }
                ?>
                </div>
                       
                        
                    </div>
                 
                </form>
    </div>
    <!--===== MAIN JS =====-->
    <script src="assets/js/main.js"></script>
</body>

</html>