<?php
    session_start();
    $email = $_SESSION['username'];
    $oldpass = $_POST['oldpass'];
    $newpass = $_POST['newpass'];
    $confirmpass = $_POST['conpass'];


    if(!empty($oldpass) || !empty($newpass) || !empty($confirmpass)){
        if($newpass==$confirmpass)
        {
        $host="localhost:3308";
        $dbUsername="root";
        $dbPassword="";
        $dbname="WebD";

        //create connection
        $conn= new mysqli($host,$dbUsername,$dbPassword,$dbname);

        if(mysqli_connect_error()){
            die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
        }else{
            $SELECT="UPDATE user set Password=?  Where Email=?";

            //Prepare statement
            $stmt=$conn->prepare($SELECT);
            $stmt->bind_param("ss", $newpass,$email);
           $temp= $stmt->execute();
            // $_SESSION["username"]= 
            if($temp==true){
                $stmt->close();
                // echo $_SESSION["username"];
                  echo '<script>
                         alert(' . '"Password Changed Successfully ");
                        window.location.href="../mobiles.php";
                        </script>';
                    // header('Location: trainhome.php');
            }
            else{
               echo '<script>
                    alert(' . '"Error Occured!!! ");
                    window.location.href="../index.php";
                    </script>';

            }
            $conn->close();
        } 
        }
        else
        {
            echo "Error!!!Password and confirm password should be same";
        }
        
    }else{
        echo "All field are required";
        die();
    }
  
    ?>