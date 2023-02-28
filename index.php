<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Accueil elitech</title>
    <link rel="stylesheet" href="accueil.css">
    <link rel="stylesheet" href="stylnav.css">

    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>

</head>
<style>
    
 @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap');

*{
    padding: 0;
    margin: 0;
    font-family: 'Roboto', sans-serif;
    scroll-behavior: smooth;

}

body{
    min-height: 100vh;
    border-color: #f9f9f8;
}

.bloc{
    position: relative;
    margin-top: 50px;
    min-height: 100vh;
    width: 100%;
    overflow: hidden;

}

.bloc video{
    position: absolute;
    min-width: 100%;
    min-height: 100%;
    top: 50%;
    left: 50%;
    z-index: -100;
    transform: translate(-50%,-50%);

}

.bloc::before{
    position: absolute;
    content: "";
    height: 100%;
    width: 100%;
    z-index: -99;
    border-color: #000000e0;

}

.welcome{
    color: white;
    text-align: center;
    font-weight: 1000;
    margin-top: 30px;
}

.client{
    color: white;
    text-align: center;
    font-weight: 1000;
    margin-top: 50px;
}

.promo{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    margin-top: 30px;

}

.title{
    color:#45f3ff;

}

.info{
    color: #fff;
    width: 300px;
    font-weight: 1000;

}

.align-promo{
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    justify-content: space-between;
    margin-top: 15px;
    margin-bottom: 50px;
}

.promo2{
    margin-left: 50px;
    
   

}

.title2{
    color: #45f3ff;
    
}

.info2{
    color: #fff;
    width: 300px;
    font-weight: 1000;

}

.promo3{
    margin-right: 50px;


}

.title3{
    color: #45f3ff;
    
}

.info3{
    color: #fff;
    width: 300px;
    font-weight: 1000;

}

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100&family=Roboto:wght@100&display=swap');

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins',sans-serif;
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

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100&family=Roboto:wght@100&display=swap');

*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}


.contain{
    margin-top: 15px;
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
<body>
    <div class="navigation">
        <ul>
            <li class="list active">
                <a href="#">
                    <span class="icon">
                        <ion-icon name="home-outline"></ion-icon>

                    </span>
                    <span class="text">Accueil</span>
                </a>
            </li>
            <li class="list">
                <a href="authentification/connex.php">
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
                <a href="page/mapAddress.php">
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

    <div class="bloc">
        <video autoplay="autoplay" muted="" loop="infinite" src="video/plateau.mp4"></video>
        <h1 class="welcome">Bienvenue sur la plateforme PARK'ivoir</h1>
        <p class="client">Etes vous à la recherche de parking ?</p>
        <div class="promo">
            <h1 class="title">Se garer devient un jeu d'enfant !</h1>
            <h3 class="info">Indiquez simplement votre destination pour visualiser tous les parkings à proximité.
                Sélectionnez ensuite vos dates d'arrivée et de départ et consultez les prix et les disponibilités, qui
                sont mis à jour en temps réel.</h3>
        </div>
        <div class="align-promo">
            <div class="promo2">
                <h1 class="title2">Garez-vous sereinement</h1>
                <p class="info2">Suivez les instructions de votre mail de confirmation, dans lequel figurent toutes les
                    indications pour entrer et sortir des parkings. Dirigez-vous vers votre destination, votre place
                    n'attend que vous !</p>
            </div>
            <div class="promo3">
                <h1 class="title3">Réservez votre place</h1>
                <p class="info3">Réservation à l'avance ou à la dernière minute ? Vous bénéficiez dans tous les cas
                    d'une place garantie à votre arrivée.</p>
            </div>
        </div>
    </div>
    <?php
    include("paiement/footerpaie.php");
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