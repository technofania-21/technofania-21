<?php
    session_start();
    $Team_Name = $_POST['Team_Name'];
    $member1 = $_POST['member1'];
    $roll_number1 = $_POST['roll_number1'];
    $member2 = $_POST['member2'];
    $roll_number2 = $_POST['roll_number2'];
    $member3 = $_POST['member3'];
    $roll_number3 = $_POST['roll_number3'];
    $member4 = $_POST['member4'];
    $roll_number4 = $_POST['roll_number4'];
    $member5 = $_POST['member5'];
    $roll_number5 = $_POST['roll_number5'];
   
    //Database connection
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $conn = new mysqli('localhost','technupr','dR$!+6D2a9G7@?lR','technupr_technofania');
   
    if($conn->connect_error)
    {
        
        die('Connection Failed : '.$conn->connect_error);
    }
    else{
        // $stmt = $conn->prepare("insert into agamya(Team_Name,member1,member2,member3)
        // values(?,?,?,?)");
        // $stmt->bind_param("ssss",$Team_Name,$member1,$member2,$member3);
        // $stmt->execute();
        

        if(isset($_POST['btnSubmit'])){
            $filename = $_FILES['abstract']['name'];
            $destination = 'manish123abc123/' .$filename;
            $extension = pathinfo($filename, PATHINFO_EXTENSION);
            $file = $_FILES['abstract']['tmp_name'];
            $size = $_FILES['abstract']['size'];
            if (!in_array($extension, ['zip', 'pdf', 'docx'])) {
                echo "You file extension must be .zip, .pdf or .docx";
            } elseif ($_FILES['abstract']['size'] > 10000000) { // file shouldn't be larger than 1Megabyte
                echo "File too large!";
            } else {
                // move the uploaded (temporary) file to the specified destination
                if (move_uploaded_file($file, $destination)) {
                    $sql = "INSERT INTO agamya (Team_Name,member1,roll_number1,member2,roll_number2,member3,roll_number3,member4,roll_number4,member5,roll_number5,abstract) VALUES ('$Team_Name','$member1','$roll_number1','$member2','$roll_number2','$member3','$roll_number3','$member4','$roll_number4','$member5','$roll_number5','$filename')";
                    if (mysqli_query($conn, $sql)) {
                        unset($_SESSION["error"]);
                        $_SESSION["success"]="Registered Successfully!";
                        // echo "Registration Successful";
                    }
                } else {
                    unset($_SESSION["success"]);
                    $_SESSION["error"]="Registration failed";
                    echo "Registration failed.";
                }
            }
            
            // $stmt->close();
            // $conn->close();
        }

        
        header('Location:registration.php');  
    }
   
   
   
    ?>
