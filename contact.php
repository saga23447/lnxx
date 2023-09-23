<?php


//  $servername = "localhost";
//  $username = "root";
//  $password = "";
//  $dbname = "contact";

//  $con= mysqli_connect($servername,$username,$password,$dbname);



include 'connection.php';

if (isset($_POST['submit'])) 
{
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    $sql = "INSERT INTO information(first_name,last_name,email,mobile,subject,message)values('$first_name','$last_name','$email','$mobile','$subject','$message')";
    $iquery = mysqli_query($con, $sql);
}

?>



















<!doctype html>
<html lang="en">
<style>
    * {
        /* margin-left: 10px;
        margin-right: 10px; */
        input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    margin: 0; 
}
    }
    input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

form{
    text-align: center;
}

    .main {
        display: flex;
        justify-content: center;
    }

    .type1:hover {
        color: white;
    }

    .type1:hover {

        background-color: #62B79E;
        color: white;

    }

    .type:hover {

        background-color: #62B79E;
        color: white;
    }

    .type1 {
        color: #62B79E;
    }

    .type {
        color: #62B79E;
    }

    .text img {
        float: left;

    }
    input::placeholder{
        color: #5EB495;
        padding-left: 10px;
    }
    textarea::placeholder{
        color: #5EB495;
    }
    

    button:hover {
        background-color: #5EB495;
        ;
        color: white;
    }

    article {
        background-image: url(images/placeholder_logo.png);
        background-position: center;
        background-repeat: no-repeat;
        background-size: 320px;
    }

    header {
        background-image: url(images/placeholder_logo.png);
        background-repeat: no-repeat;
        background-position: center;
        background-size: 320px;
    }

    .ul li a {
        text-decoration: none;
        color: black;
    }

    .li ul a {
        text-decoration: none;
        color: black;
        font-weight: 600px;
    }

    .navbar-expand-lg {
        color: red;
    }
    input{
        width: 400px;
        height: 50px;
        border-radius: 4px;
        padding-right: 15PX;
        text-align: center;
      
    }
    textarea{
        width: 400px;
        margin-top: 15px;
    }
    input#name{
background-image: url(images/user.png);
background-repeat: no-repeat;
background-position:  10PX 10PX;

    }
    input#last{
background-image: url(images/card.png);
background-position: right;
background-repeat: no-repeat;
background-position:  10PX 10PX;


    }
    input#email{
background-image: url(images/gmail\ \(1\).png);
background-position: right;
background-repeat: no-repeat;
background-position:  10PX 10PX;

    }
    input#subject{
background-image: url(images/search.png);
background-position: right;
background-repeat: no-repeat;
background-position:  10PX 10PX;

    }
    input#mobile{
background-image: url(images/smartphone.png);
background-position: right;
background-repeat: no-repeat;
background-position:  10PX 10PX;

    }
    textarea{
background-image: url(images/comments.png);
background-position: right;
background-repeat: no-repeat;
background-position:  10PX 10PX;

    }
</style>
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>vztor.in</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inria+Sans:wght@300;400;700&family=Open+Sans:wght@300;400&display=swap"
        rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body text-body" style="height: 65px;  font-size: 16px;line-height: 23px;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="https://vztor.in/assets/frontend/images/lnxx_logo.svg"
                    class="img-fluid" alt="..." height="40px" style="padding-top: 10px; width: 100px;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="text-md-end" id="navbarNav" style="color: #929292;">
                <ul class="navbar-nav" style="font-size: 17px; margin-top: 30px; color: #929292;">
                    <li class="nav-item" style="color: #929292">
                        <a class="nav-link " aria-current="page" href="index.html"
                            style="margin-right: 20px;color: #929292;">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" style="margin-right: 30px;color: #929292;">About </a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" style="margin-right: 30px; color: #929292;">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" style="margin-right: 30px;color: #929292;">App Reviews</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="" style="margin-right: 30px;color: #929292;">Contact
                            Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" style="margin-right: 30px;color: #929292;">Sign IN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" style="margin-right: 20px;"><img src="images/download.png"
                                class="img-fluid" alt="..."></a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <hr>
<div class="form" style="border: 1px solid #5EB495; margin-left: 200px;margin-right: 200px;">
    <h2 style="color: #5EB495; text-align: center; padding-top: 10px;">We Love to hear From You</h2><hr>
    <form action="contact.php" method="POST">
      


        <input type="text" name="first_name" placeholder="ENTER YOUR FIRST NAME " required id="name" style="margin-right: 10px;  ; "><br>
        <input type="text" name="last_name" placeholder="ENTER YOUR LAST NAME " id="last" required style="margin-top: 15px;"><br>
        <input type="email" name="email" placeholder="ENTER YOUR EMAIL" required id="email"  style="margin-top: 15px;"><br>
        <input type="number" name="mobile" placeholder="ENTER YOUR MOBILE  " id="mobile" required style="margin-top: 15px;  input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    margin: 0; "><br>
        <input type="text" name="subject" placeholder="SUBJECT " id="subject" required style="margin-top: 15px;"><br>
        <textarea name="message" name="message" id="" cols="30" rows="10" required placeholder="MESSAGE"  style="margin-top: 15PX;"> HI, HOW ARE YOU</textarea><br>
        <button type="submit" name="submit" style="border: #5EB495; border-radius: 10PX; width: 150px; margin-top: 25px; margin-bottom: 10px;"> SUBMIT</button>



    </form>
</div>
   <br><br>
    <div class="footer" style="display: flex;">
        <div class="im" style="margin-left: 50px;">
            <img src="https://vztor.in/assets/frontend/images/lnxx_logo.svg" alt="" style="height: 50px;"><br><br>
            <p style="color: #ABAAAA;"> An online financial services platform for UAE's citizens.</p>
        </div>
        <div class="li" style="width: 250px; margin-right: 300px; margin-left: 100px;">
            <ul type="none" style="text-decoration: none; ">
                <li> <a href="">Home</a></li>
                <li> <a href="">About US</a> </li>
                <li> <a href="">Credit Cards</a> </li>
                <li> <a href="">Personal LOan</a></li>
                <li> <a href="">Business Loan</a> </li>
                <li> <a href="">Mortgage Loan</a></li>
                <li> <a href="">Contact Us</a></li>

            </ul>










        </div>
        <div class="ul" style="width: 350px;">
            <ul type="none">

                <li><a href="" style="text-decoration: none;">Community</a> </li>
                <li><a href="">Disclaimer</a></li>
                <li><a href="">Privacy Policy</a></li>
                <li><a href="">Terms & Conditions</a></li>
            </ul>
            <img src="images/twitter.png" alt="" width="30px">
            <img src="images/instagram.png" alt="" width="30px">
            <img src="images/facebook (1).png" alt="" width="30px">
            <img src="images/youtube.png" alt="" width="30px">
            <img src="images/linkedin.png" alt="" width="30px">
        </div>
    </div>
    <br><br>
    <hr>
    <div class="copy" style="text-align: center; margin-bottom: 50px;">
        &copy; lnxx 2022 | All Rights Reserved
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">



        </script>
</body>

</html>