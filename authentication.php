<?php      
    ob_start();
    session_start();
    include('connection.php');  

function alert($message)
{
    echo "<script>alert('$message');</script>";
}

    $email = $_POST['email'];  
    $mobile = $_POST['mobile'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($email);  
        $password = stripcslashes($mobile);  
        $username = mysqli_real_escape_string($con, $email);  
        $password = mysqli_real_escape_string($con, $mobile);  
      
        $sql = "select * from information where email = '$email' and mobile = '$mobile'";   
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count >0){  
            $_SESSION['email'] = $row['email'];
            $_SESSION['valid'] = true;
            $_SESSION['timeout'] = time();
           header("Location: home.html"); 
           exit();
        }  
        else{  
                alert("Invalid login credentials");
                  header("Location: index.html"); 
            } 
            
?>
