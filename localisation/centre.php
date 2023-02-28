<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plateau-nord</title>
    <link rel="stylesheet" href="../page/stylnav.css">
    <link rel="stylesheet" href="../page/footerloc.css">
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


        /* contenu */

        
        h1 {
                margin-top: 50px;
                text-align: center;
            }

            h2 {
                text-align: center;
                font-size: 1.5em;
            }

            .grid {
                max-width: 1300px;
                width: 60%;
                height: 120em;
                margin: 1em auto;

                display: grid;
                grid-template-rows: 1fr 1fr 1fr;
                justify-content: center;

            }

            .gridElement {
                display: grid;
                grid-template-columns: 1fr 1fr 1fr;
            }

            .grid-item {
     
                display: grid;
                grid-template-rows: 70% 30%;
            }

            .img {
                width: 80%;
                height: 100%;
            }


            .img>img {
                width: 100%;
                height: 100%;
                box-shadow: 0 0 0 0 black;
                animation: pulse 1.3s infinite;
            }

            @keyframes pulse {
                to {
                    box-shadow: 0 0 0 8px rgba(0, 0, 0, 0.51);
                }
            }


            .grid-item>* {
                width: 80%;
                height: 100%;
                margin: 0 auto;
            }

            .grid .gridElement .grid-item .text a{
            background-color: #45f3ff;
            color: #000;
            border-radius:5px
            text-decoration: none;
        }

        .reserv{
            text-decoration: none;
            width: 100px;
        }
        .reserv h2{
            width: 100%;
            background-color: #ccc;
            color: #fff;
            border-radius: 1.2rem;
        }

        /* footer */
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
                        <span class="text">acceuil</span>
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
                    <a href="#">
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
                        <span class="text">paramètres</span>
                    </a>
                </li>
                <div class="indicator"></div>
            </ul>
        </div>
    
        <h1>LISTE DES BAIES DISPONIBLES </h1>
        <h2>Choisissez en une</h2>

        <div class="grid">
            <div class="gridElement">
                <div class="grid-item">
                    <div class="img">
                        <img src="../image/iStock-1270269968.jpg" alt="">
                    </div>
                    <div class="text">
                        <h3>parking15 baie41(près de PIGIER)</h3>
                        <h3 style="color: red;">libre</h3>
                        <a class="reserv" href="../paiement/option.php"><h2>Reserver</h2></a>
                    </div>
                </div>
                <div class="grid-item">
                    <div class="img">
                        <img src="../image/parking-fromentine-labarredemonts.jpg" alt="">
                    </div>
                    <div class="text">
                        <h3>parking15 baie13(près de lycée moderne du plateau)</h3>
                        <h3 style="color: red;">libre</h3>
                        <a class="reserv" href="../paiement/option.php"><h2>Reserver</h2></a>
                    </div>
                </div>
                <div class="grid-item">
                    <div class="img">
                        <img src="../image/parking-fromentine-labarredemonts.jpg" alt="">
                    </div>
                    <div class="text">
                        <h3>parking5 baie12(près de l'ESAM)</h3>
                        <h3 style="color: red;">libre</h3>
                        <a class="reserv" href="../paiement/option.php"><h2>Reserver</h2></a>
                    </div>
                </div>
            </div>
            <div class="gridElement">
                <div class="grid-item">
                    <div class="img">
                        <img src="../image/depositphotos_30156457-stock-photo-vegetation-parking-spot.jpg" alt="">
                    </div>
                    <div class="text">
                        <h3>parking13 baie13(près de la mosquée Salam)</h3>
                        <h3 style="color: red;">libre</h3>
                        <a class="reserv" href="../paiement/option.php"><h2>Reserver</h2></a>
                    </div>
                </div>
                <div class="grid-item">
                    <div class="img">
                        <img src="../image/istockphoto-1335929190-612x612.jpg" alt="">
                    </div>
                    <div class="text">
                        <h3>parking1 baie2(près de novotel)</h3>
                        <h3 style="color: red;">libre</h3>
                        <a class="reserv" href="../paiement/option.php"><h2>Reserver</h2></a>
                    </div>
                </div>
                <div class="grid-item">
                    <div class="img">
                        <img src="../image/depositphotos_30156457-stock-photo-vegetation-parking-spot.jpg" alt="">
                    </div>
                    <div class="text">
                        <h3>parking10 baie21(près de Super U)</h3>
                        <h3 style="color: red;">libre</h3>
                        <a class="reserv" href="../paiement/option.php"><h2>Reserver</h2></a>
                    </div>
                </div>

            </div>
            <div class="gridElement">
                <div class="grid-item">
                    <div class="img">
                        <img src="../image/istockphoto-1335929190-612x612.jpg" alt="">
                    </div>
                    <div class="text">
                        <h3>parking20 baie4(près de la mairie)</h3>
                        <h3 style="color: red;">libre</h3>
                        <a class="reserv" href="../paiement/option.php"><h2>Reserver</h2></a>
                    </div>
                </div>
                <div class="grid-item">
                    <div class="img">
                        <img src="../image/depositphotos_30156457-stock-photo-vegetation-parking-spot.jpg" alt="">
                    </div>
                    <div class="text">
                        <h3>parking9 baie20(près du supermarché kilo)</h3>
                        <h3 style="color: red;">libre</h3>
                        <a class="reserv" href="../localisation/option.php"><h2>Reserver</h2></a>
                    </div>
                </div>
                <div class="grid-item">
                    <div class="img">
                        <img src="../image/istockphoto-1335929190-612x612.jpg" alt="">
                    </div>
                    <div class="text">
                        <h3>parking8 baie5(près de la cathedrale)</h3>
                        <h3 style="color: red;">libre</h3>
                        <a class="reserv" href="../paiement/option.php"><h2>Reserver</h2></a>
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