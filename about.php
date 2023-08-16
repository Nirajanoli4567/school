<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AboutUs</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        * {
            font-family: 'Outfit', sans-serif;
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;

        }

        :root {

            --bg-color: #f1efef;
            --text-color: #333;
            --main-color: #8063e0;
            --white-color: #fdfdfd;
            --shadow-color: rgba(0, 0, 0, .2);


        }

        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            padding: 20px 128px;
            background: var(--bg-color);
            display: flex;
            align-items: center;
            justify-content: space-between;
            z-index: 100;

        }

        .logo img {
            height: 35px;
            width: 35px;

        }

        nav a,
        i {
            font-size: 18px;
            color: black;
            text-decoration: none;
            font-weight: 450;
            margin-left: 30px;
        }

        nav a:hover,
        nav a.active {
            color: rgb(52, 64, 152);
        }

        .img {
            width: 100%;
            height: 900px;
            margin: auto;
            overflow: hidden;
            position: relative;


        }

        .gallary {
            position: relative;
            display: inline-block;
        }

        .gallary-content {
            display: none;
            position: absolute;
            background-color: #afb3ec;
            min-width: 200px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            padding: 8px;
            font-size: 1rem;
            border-radius: 8px;
            z-index: 1;
            opacity: .8;
        }

        .gallary-content a {
            color: rgb(58, 57, 57);

        }

        .gallary:hover .gallary-content {
            display: block;
            background: lightskyblue;
        }

        /* about links dropdown */
        .aboutt {
            position: relative;
            display: inline-block;
        }

        .aboutt-content {
            display: none;
            position: absolute;
            background-color: #afb3ec;
            min-width: 200px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            padding: 8px;
            font-size: 1rem;
            border-radius: 8px;
            z-index: 1;
            opacity: .8;
        }

        .aboutt-content a {
            color: rgb(58, 57, 57);


        }

        .aboutt:hover .aboutt-content {
            display: block;

        }

        .aboutt-content a:hover {

            color: white;
        }

        .foooster {
            background: var(--main-color);
            padding: 10px 0 0 0;
            margin-top: 14%;
            width: 100%;
        }

        .foooster .footer-text {
            color: var(--white-color);
            font-weight: 300;
            align-content: center;
            text-align: center;
            padding-bottom: 20px;
        }


        .containeer {
            max-width: 1170px;
            /* background: red; */
            margin: auto;

        }

        .row {
            display: flex;
            /* flex-wrap: wrap;  */
            /* justify-content: space-between; */
        }

        .row ul li {
            list-style: none;
        }

        .footer-col {
            /* text-decoration: none; */
            width: 25%;
            padding: 0 5px 0 5px;
        }

        .footer-col h4 {
            font-size: 18px;
            color: var(--white-color);
            text-transform: capitalize;
            margin-bottom: 30px;
            font-weight: 500;
            position: relative;
            text-decoration: none;
        }

        .footer-col h4::before {
            content: '';
            position: absolute;
            left: 0;
            bottom: -3px;
            background: #ca90a3;
            height: 2px;
            box-sizing: border-box;
            width: 50px;

        }

        .footer-col ul li {
            margin-bottom: 8px;
        }

        .footer-col ul li a {
            color: var(--white-color);

            font-size: 16px;
            text-decoration: none;
            text-transform: capitalize;
            font-weight: 300;
            display: block;
            transition: all 0.3s ease;
        }

        .footer-col ul li a:hover {
            padding-left: 8px;
        }

        .foooster #social a {
            /* display: inline-block; */
            display: flex;
            align-items: center;
            font-size: 2rem;
            /* text-decoration: none; */
        }

        #map {
            height: 200px;
            width: 400px;
        }

        .ab {
            width: 100vw;
            height: 100vh;
        }

        .ab .imag {
            width: 100%;
            height: 50vh;
        }

        .ab .imag img {
            width: 100%;
            height: 80vh;
        }

        .cont {
            height: 50vh;
            width: 100vw;
            align-items: left;
            margin-top: 15%;

            /* color: white; */
            font-size: 20px;
            font-weight: 400;
        }
    </style>
</head>

<body>
    <!-- header section  -->
    <header class="header">
        <a href="#" class="logo"> <img src="images/logo.png"></a>

        <nav class="navbar">
            <a href="home.php" class="active">Home</a>
            <div class="aboutt">
                <a href="about.php">About Us</a>
                <div class="aboutt-content">
                    <a href="about.php">About School</a>
                    <a href="#">Our Team </a>
                </div>
            </div>

            <a href="">Notice</a>
            <div class="gallary">
                <a href="">Gallery</a>
                <div class="gallary-content">
                    <a href="#">Photo Gallary</a>
                    <a href="#">Video Gallary</a>
                </div>
            </div>

            <a href="">Contact</a>
            <i class='bx bxs-moon' id="darkmod"></i>
            <i class='bx bx-user'></i>
        </nav>
    </header>
    <section class="ab">
        <div class="imag">
            <img src="images/scl.jpg" alt="">
        </div>
        <div class="cont">
            <h2>About Us</h2>
            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.

                The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
        </div>
    </section>
    <footer class="foooster" id="footer">
        <div class="containeer">
            <div class="row">
                <div class="footer-col">
                    <h4>Little God Academy</h4>
                    <ul>
                        <li> <a href="#">Shantinagar-06,Tilwari Dang</a></li>

                    </ul>
                </div>
                <div class="footer-col">
                    <h4> Contact Us</h4>
                    <ul>
                        <li> <a href="#"><i class='bx bxs-phone'></i>9812341234</a></li>
                        <li>
                            <a href="#"><i class='bx bxs-envelope'></i>little@gmail.com</a>
                        </li>

                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Follow Us</h4>
                    <ul id="social">


                        <li> <a href="#"><i class='bx bxl-facebook-circle'></i></a></li>
                        <li><a href="#"><i class='bx bxl-twitter'></i></a></li>
                        <li><a href="#"><i class='bx bxl-youtube'></i></a></li>
                        <li><a href="#"><i class='bx bxl-tiktok'></i></a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Our Location</h4>
                    <ul>
                        <li> <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3518.912904869264!2d82.14172963961695!3d28.118684607329968!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39981f2708e15791%3A0x5149cbe8c7d34380!2sLittle%20God%20Academy!5e0!3m2!1sen!2snp!4v1691912057148!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-text">
            <p> &copy; Copyright 2023 All rights are reserved to: Little God Academy<br>
                Designed By: <a href="https://nirajanoli.netlify.app/main.html" style="color:white;text-decoration:none"> Nirajan Oli</a>
            </p>


        </div>

    </footer>

</body>

</html>