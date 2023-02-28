<?php
session_start();
include("../config/command.php");



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>information du client</title>
    <link rel="stylesheet" href="infoclient.css">
    <link rel="stylesheet" href="navAuthen.css">

</head>

<body>
    <style>
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

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 600px;
            width: 500px;
            margin-top: 100px;
            position: relative;
            left: 50%;
            transform: translateX(-50%);
            background-color: #f9f8f8;
            border-radius: 10px;
        }

        .container img {
            height: 200px;
            width: 200px;
            border-radius: 50%;
            margin-top: 20px;

        }

        .container .zone .info {
            color: #24232a;
            font-weight: 1000;
            font-size: 1rem;
        }

        .container .zone .information {
            color: #45f3ff;
            font-weight: 1000;

        }

        .container.zone #info {
            color: white;
            font-weight: 1000;
            font-size: 10px;

        }

        .navfoot {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
            width: 500px;
            background-color: #f9f8f8;
            border-radius: 5px;
            height: 50px;
        }

        .bloc {
            display: flex;
            flex-direction: column;
            color: #24232a;
            margin-left: 15px;
            margin-right: 15px;

        }

        .navfoot .bloc a img{
            font-weight: 1000;
            width: 50px;
            padding: 5px;
            border-radius: 5px;
            text-decoration: none;

        }

        .qrcode{
            height: 100px;
            width: 100px;
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
    <div class="container">
        <img src="../image/undraw_Female_avatar_efig.png" alt="photo de go">
        <div class="zone">

            <h1 class="information"> Mes informations</h1>
            <p class="info">Identifiant : <span id="info">
                    <?= $_SESSION['id44'] ?>
                </span> </p>
            <p class="info">Nom : <span id="info"><?= $_SESSION['nom'] ?></span> </p>
            <p class="info">Prenom(s) : <span id="info">
                    <?= $_SESSION['prenom'] ?>
                </span> </p>
            <p class="info">Email : <span id="info"><?= $_SESSION['email'] ?></span> </p>
            <p class="info">Telephone : <span id="info">
                    <?= $_SESSION['tel'] ?>
                </span></p>
            <img src="../phpqrcode/qrcode.php" alt="">

        </div>
    </div>
    <div class="navfoot">
        <div class="bloc">
            <a href="../localisation/histo.php"><img src="../paiement/img/icon_res.png" alt=""></a>
        </div>
        <div class="bloc">
            <a href="../"><img src="../paiement/img/icon_acc.png" alt=""></a>
        </div>
        <div class="bloc">
            <a href="registreV.php"><img src="../paiement/img/icon_hist.png" alt=""></a>
        </div>
    </div>

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
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>
</body>

</html>