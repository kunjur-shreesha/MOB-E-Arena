<?php
    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(!empty($username) || !empty($password)){
        $host="localhost:3308";
        $dbUsername="root";
        $dbPassword="";
        $dbname="WebD";

        //create connection
        $conn= new mysqli($host,$dbUsername,$dbPassword,$dbname);

        if(mysqli_connect_error()){
            die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
        }else{
            $SELECT="SELECT * From user Where Email=? and Password=? Limit 1";

            //Prepare statement
            $stmt=$conn->prepare($SELECT);
            $stmt->bind_param("ss", $username,$password);
            $stmt->execute();
            $stmt->store_result();
            $rnum=$stmt->num_rows;
            // $_SESSION["username"]= 
            if($rnum==1){
                $_SESSION["username"] = $username;
                $_SESSION["logged"] = true;
                $stmt->close();
                // echo $_SESSION["username"];
             

                if( $_SESSION["logged"])
                  echo '<script>
                         alert(' . '"Login Successful ");
                        window.location.href="../mobiles.php";
                        </script>';
                    // header('Location: trainhome.php');
            }
            else{
               echo '<script>
                    alert(' . '"Invalid Crediantials ");
                    window.location.href="../index.php";
                    </script>';

            }
            $conn->close();
        } 
    }else{
        echo "All field are required";
        die();
    }
  
    ?>