<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page historique</title>
    <link rel="stylesheet" href="../page/stylnav.css">
    <link rel="stylesheet" href="page/footerloc.css">
</head>

<body>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100&family=Roboto:wght@100&display=swap');

        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
            scroll-behavior: smooth;
        }


        .contain {
            margin-top: 15px;
            max-width: 1570px;
            margin: auto;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
        }

        ul {
            list-style: none;
        }

        .footer {
            background-color: #24232a;
        }

        .footer-cool {
            width: 25%;
            padding: 0 15px;
        }

        .footer-cool h4 {
            font-size: 18px;
            color: #fff;
            text-transform: capitalize;
            margin-bottom: 35px;
            font-weight: 500;
            position: relative;
        }

        .footer-cool h4::before {
            content: '';
            position: absolute;
            left: 0;
            bottom: -10px;
            background-color: #45f3ff;
            height: 2px;
            box-sizing: border-box;
            width: 50px;
        }

        .footer-cool ul li:not(:last-child) {
            margin-bottom: 10px;
        }

        .footer-cool ul li a {
            font-size: 16px;
            text-transform: capitalize;
            color: #fff;
            text-decoration: none;
            font-weight: 500;
            color: #bbb;
            display: block;
            transition: all 0.3s ease;
        }

        .footer-cool ul li a:hover {
            color: #fff;
            padding-left: 8px;
            transition: all 0.3s ease;
        }

        .footer-cool .social-links a {
            display: inline-block;
            height: 40px;
            width: 40px;
            background-color: rgba(255, 255, 255, 0.2);
            margin: 0 10px 10px 0;
            text-align: center;
            line-height: 40px;
            border-radius: 50%;
            color: #fff;
            transition: all 0.5s ease;
        }

        .footer-cool .social-links a:hover {
            color: #24262b;
            background-color: #fff;
        }

        /* responsive */
        @media(max-width: 767px) {
            .footer-cool {
                width: 50%;
                margin-bottom: 30px;
            }
        }

        @media(max-width: 574px) {
            .footer-cool {
                width: 100%;

            }
        }
    </style>
    </head>

    <body>
        <div class="navigation">
            <ul>
                <li class="list active">
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>

                        </span>
                        <span class="text">Home</span>
                    </a>
                </li>
                <li class="list">
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="person-outline"></ion-icon>
                        </span>
                        <span class="text">Profil</span>
                    </a>
                </li>
                <li class="list">
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="chatbubble-outline"></ion-icon>
                        </span>
                        <span class="text">Message</span>
                    </a>
                </li>
                <li class="list">
                    <a href="../page/mapAddress.php">
                        <span class="icon">
                            <ion-icon name="navigate-outline"></ion-icon> </span>
                        <span class="text">Maps</span>
                    </a>
                </li>
                </li>
                <li class="list">
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="settings-outline"></ion-icon>
                        </span>
                        <span class="text">Settings</span>
                    </a>
                </li>
                <div class="indicator"></div>
            </ul>
        </div>
        <style>
            body {
                margin: 0;
                padding: 0;
                background-color: #F9F8F8;
            }

            h1 {
                margin-top: 50px;
                font-weight: bold;
                margin-left: 40%;
            }

            .div-mere {
                display: flex;
                width: 100%;
                justify-content: space-around;

            }

            .div-mere img {
                width: 100%;
                height: 100%;
                border: 0.1em solid black;
            }

            .div-mere .part1 {

                width: 40%;
            }

            .div-mere .part2 {

                width: 40%;
            }

            .div-mere .part1 .div1 .img {
                height: 20em;

            }

            .div-mere .part2 .div1 .img {
                height: 20em;

            }

            .div-mere .h2 {
                margin-top: 2%;
                margin-bottom: 2%;
                margin-left: 25%;
                border: 0.2em solid black;
                border-radius: 0.1em;
                width: 50%;
            }

            .div-mere .h2 h2 {
                font-size: 1.3em;
                text-align: center;
            }

            .div-mere .h2 a {
                text-decoration: none;
                color: black;
                
            }
        </style>
        <h1>Où souhaitez vous aller?</h1>
        <div class="div-mere">
            <div class="part1">
                <div class="div1">
                    <div class="img">
                        <img src="../image/maxresdefault.jpg" alt="plateau nord">
                    </div>
                    <div class="h2">
                        <h2><a href="nord.php">PLATEAU-NORD</a></h2>
                    </div>

                </div>
                <div class="div1">
                    <div class="img">
                        <img src="../image/plateau(1).jpg" alt="plateau sud">
                    </div>
                    <div class="h2">
                        <h2><a href="sud.php">PLATEAU-SUD</a></h2>
                    </div>
                </div>
            </div>
            <div class="part2">
                <div class="div1">
                    <div class="img">
                        <img src="../image/plateau.jpg" alt="plateau centre">
                    </div>
                    <div class="h2">
                        <h2><a href="centre.php">PLATEAU-CENTRE</a></h2>
                    </div>
                </div>
                <div class="div1">
                    <div class="img">
                        <img src="../image/Plateau_abidjan.jpg" alt="plateau ouest">
                    </div>
                    <div class="h2">
                        <h2><a href="ouest.php">PLATEAU-OUEST</a></h2>
                    </div>
                </div>
            </div>
        </div>
        <?php
        include("../page/footer.php");

        ?>
        <script>
            const list = document.querySelectorAll('.list');
            function activeLink() {
                list.forEach((item) => item.classList.remove('active'));
                this.classList.add('active');

            }
            list.forEach((item) => item.addEventListener('click', activeLink));
        </script>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    </body>

</html>