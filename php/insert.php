<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_REQUEST['fname'];
    $email = $_REQUEST['Email'];
    $password = $_REQUEST['password111'];
    $confirm_pass = $_REQUEST['confirmpass'];
    $phno = $_REQUEST['phno'];
    $address = $_REQUEST['addr'];
    $bdate = $_REQUEST['bdate'];

    if(!empty($name) || !empty($email) || !empty($password) || !empty($confirm_pass) || !empty($phno)){
        if($password==$confirm_pass)
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
                $SELECT="SELECT email From user Where email=? Limit 1";
                $INSERT="INSERT Into user values(?,?,?,?,?,?)";

                //Prepare statement
                $stmt=$conn->prepare($SELECT);
                $stmt->bind_param("s", $email);
                $stmt->execute();
                $stmt->bind_result($email);
                $stmt->store_result();
                $rnum=$stmt->num_rows;

                if($rnum==0){
                    $stmt->close();
                    $stmt=$conn->prepare($INSERT);
                    $stmt->bind_param("ssssss",$name,$email,$password,$phno,$address,$bdate);
                    $stmt->execute();
                    echo '<script>
                            alert(' . '"SignUp Successful ");
                            window.location.href="../mainpage.php";
                            </script>';
                }else{
                    echo '<script>
                            alert(' . '"Someone already signed up using this username ");
                            window.location.href=../index.php";
                            </script>';
                }
                $stmt->close();
                $conn->close();
            } 
        }
        else
        {
            echo " Entered password doesnt matches!! Please try Again";
        }
       
    }else{
        echo "All field are required";
        die();
    }
}
    
    ?>