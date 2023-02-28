<?php
session_start();
include("../config/command.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>information Vehicule</title>
</head>
<body>
    <style>

        /* header */

        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100&family=Roboto:wght@100&display=swap');

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins',sans-serif;
            scroll-behavior: smooth;
        }

        :root{
            --clr: #f9f8f8;
        }
        body{
            height: 100vh;
            background-color: #f9f8f8;
        }
        header{
            position: relative;
            bottom: 20px;
            background-color: #24232e;
            width: 80%;
        }
        .navigation{
            top: 40px;
            left: 50%;
            transform: translateX(-50%);
            height: 70px;
            width: 400px;
            background: #24232a;
            position: relative;
            border-radius: 10px;

        }

        .navigation ul{
            display: flex;
            width: 350px;
        }

        .navigation ul li{
            position: relative;
            list-style: none;
            display: flex;
            width: 70px;
            height: 70px;
            z-index: 1;
        }

        .navigation ul li a{
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            width: 100%;
            text-align: center;
            font-weight: 500;
        }

        .navigation ul li a .icon{
            position: relative;
            display: block;
            line-height: 75px;
            font-size: 1.5rem;
            text-align: center;
            transform: 0.5s;
            color: var(--clr);
        }

        .navigation ul li.active a .icon{
            transform: translateY(-32px);
        }

        .navigation ul li a .text{
        position: absolute;
        color: var(--clr);
        font-weight: bolder;
        font-size: 0.75rem;
        letter-spacing: 0.05rem;
        transition: 0.5s;
        opacity: 0;
        transform: translateY(20px);
        }

        .navigation ul li.active a .text{
            opacity: 1;
            transform: translateY(10px);
        }

        .indicator{
            position: absolute;
            top: -50%;
            width: 70px;
            height: 70px;
            background-color: #45f3ff;
            border-radius: 50%;
            border: 6px solid #45f3ff;
            transition: 0.5s;
        }

        .indicator::before{
            content: '';
            position: absolute;
            top: 50%;
            left: -22px;
            width: 20px;
            height: 20px;
            background: transparent;
            border-top-right-radius: 20px;
            box-shadow: 1px -10px 0 #45f3ff;
        }

        .indicator::after{
            content: '';
            position: absolute;
            top: 50%;
            right: -22px;
            width: 20px;
            height: 20px; 
            background: transparent;
            border-top-left-radius: 20px;
            box-shadow: -1px -10px 0 #45f3ff;
        }

        .navigation ul li:nth-child(1).active ~ .indicator{
            transform: translateX(calc(70px * 0));

        }

        .navigation ul li:nth-child(2).active ~ .indicator{
            transform: translateX(calc(70px * 1));

        }

        .navigation ul li:nth-child(3).active ~ .indicator{
            transform: translateX(calc(70px * 2));

        }

        .navigation ul li:nth-child(4).active ~ .indicator{
            transform: translateX(calc(70px * 3));

        }

        .navigation ul li:nth-child(5).active ~ .indicator{
            transform: translateX(calc(70px * 4));

        }

        /* contenu */

        .tablecontainer{
            margin-top: 50px;
            position: relative;
            left: 50%;
            transform: translateX(-50%);
            width: 60%;
            height: 45%;
            margin-bottom: 50px;
        }

        .tablecontainer h1{
            
            text-align: center;

        }

        .tablecontainer table {
            width: 100%;
            height: 80%;
            margin: auto;
            border: 1px solid #000;

        }

        th, td{
            padding: 10px;
            text-transform: capitalize;
            font-size: 2rem;
            font-font-weight: 1000;

        }

        th {
            background-color: #24232a;
            color: #fff;

        }

        td {
            background-color: #ccc;
            color: #fff;

        }

        /* footer */

        .contain{
            margin-top: 50px;
            max-width: 1570px;
            margin: auto;
        }

        .row{
            display: flex;
            flex-wrap: wrap;
        }

        ul {
            list-style: none;
        }

        .footer{
            background-color: #24232a;
        }

        .footer-cool{
            width: 25%;
            padding: 0 15px;
        }

        .footer-cool h4{
            font-size: 18px;
            color: #fff;
            text-transform: capitalize;
            margin-bottom: 35px;
            font-weight: 500;
            position: relative;
        }

        .footer-cool h4::before{
            content: '';
            position: absolute;
            left: 0;
            bottom: -10px;
            background-color: #45f3ff;
            height: 2px;
            box-sizing: border-box;
            width: 50px;
        } 

        .footer-cool ul li:not(:last-child){
            margin-bottom: 10px;
        }

        .footer-cool ul li a{
            font-size: 16px;
            text-transform: capitalize;
            color: #fff;
            text-decoration: none;
            font-weight: 500;
            color: #bbb;
            display: block;
            transition: all 0.3s ease;
        }

        .footer-cool ul li a:hover{
            color: #fff;
            padding-left: 8px;
            transition: all 0.3s ease;
        }

        .footer-cool .social-links a{
            display: inline-block;
            height: 40px;
            width: 40px;
            background-color: rgba(255,255,255,0.2);
            margin: 0 10px 10px 0;
            text-align: center;
            line-height: 40px;
            border-radius: 50%;
            color: #fff;
            transition: all 0.5s ease;
        }

        .footer-cool .social-links a:hover{
            color: #24262b;
            background-color: #fff;
        }

        /* responsive */
        @media(max-width: 767px){
            .footer-cool{
                width: 50%;
                margin-bottom: 30px;
            }
        }

        @media(max-width: 574px){
            .footer-cool{
                width: 100%;
                
            }
        }
        

    </style>


    <div class="navigation">
        <ul>
            <li class="list active">
                <a href="../">
                    <span class="icon">
                        <ion-icon name="home-outline"></ion-icon>

                    </span>
                    <span class="text">Acceuil</span>
                </a>
            </li>
            <li class="list">
                <a href="#">
                    <span class="icon">
                        <ion-icon name="person-outline"></ion-icon>
                    </span>
                    <span class="text">Mon compte</span>
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
                    <span class="text">Paramètres</span>
                </a>
            </li>
            <div class="indicator"></div>
        </ul>
    </div>
    <div class="tablecontainer">
        <h1>informations relatives au vehicule</h1>

        <table>
            <tr>
                <th>marque</th>
                <th>imatricule</th>
                <th>couleur</th>
            </tr>
            <tr>
          
            <td>Hiundai sonata</td>
            <td>5412JC01</td>
            <td>noir</td>
              
            </tr>
            
            
        </table>
    </div>

    <div class="soumettre">
        <a class ="soum" href="infoclient.php"><span class="btn">Soumettre</span></a>

    </div>
    <style>
        .soumettre{
            margin-left: 45%;
            margin-bottom: 50px;
            width: 300px
        }
        .soum{
            width: 100%;
            heiheight: 100%;
            text-decoration: none;
            
           
            text-align: center;
            
            
        }
        .soum .btn{
            background-color: #ccc;
            width: 100%;
            height: 100%;
            border-radius: 1.2rem;
            font-weight: 1000;
            color: #fff;
            padding: 10px;
            
            
        }
    </style>
    <?php
    include("../paiement/footerpaie.php");
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