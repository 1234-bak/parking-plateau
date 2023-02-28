<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inscription</title>
    <link rel="stylesheet" href="inscription.cs">
    <link rel="stylesheet" href="navAuthen.css"> 
</head>

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


.box{
    position: relative;
    margin-top: 50px;
    left: 50%;
    transform: translateX(-50%);
    width: 320px;
    height: 460px;
    background: #1c1c1c;
    border-radius: 8px;
    overflow: hidden;
    margin-bottom: 50px;

}

.box::before{
    content: '';
    position: absolute;
    top: -50%;
    left: -50%;
    width: 320px;
    height: 420px;
    background: linear-gradient(0deg,transparent,#45f3ff,#45f3ff);
    transform-origin: bottom right;
    animation: animate 6s linear infinite;

}

.box::after{
    content: '';
    position: absolute;
    top: -50%;
    left: -50%;
    width: 320px;
    height: 420px;
    background: linear-gradient(0deg,transparent,#45f3ff,#45f3ff);
    transform-origin: bottom right;
    animation: animate 6s linear infinite;
    animation-delay: -3s;

}

@keyframes animate{
    0%{
        transform: rotate(0deg);
    }
    100%{
        transform: rotate(360deg);
    }
}

.form{
    
    position: absolute;
    inset: 2px;
    border-radius: 8px;
    background: #28292d;
    z-index: 10;
    padding: 50px 40px;
    display: flex;
    flex-direction: column;

}

.form h2{
    color: #45f3ff;
    font-weight: 1000;
    text-align: center;
    letter-spacing: 0.1em;

}

form{
    width: 100%;
    height: 100%;
}

.inputBox{
    position: relative;
    width: 300px;
    margin-top: 35px;

}

.inputBox input{
    position: relative;
    width: 100%;
    padding: 20px 10px 10px;
    background: transparent;
    border: none;
    outline: none;
    color: #000;
    font-weight: 1000;
    font-size: 1em;
    letter-spacing: 0.05em;
    z-index: 10;
}
.inputBox input[type="password"]{
    color: #000;
}
::placeholder{
    color: #fff;
}

.inputBox span{
    position: absolute;
    left: 0;
    padding: 20px 0px 10px;
    font-size: 1em;
    font-weight: 1000;
    color: #fff;
    pointer-events: none;
    letter-spacing: 0.05;
    transition: 0.5s;

}

.inputBox input:valid ~ span, .inputBox input:focus ~ span{
    color: #45f3ff;
    transform: translateX(0px) translateY(-34px);
    font-size: 0.75em;
}

.inputBox i{
    position: absolute;
    left: 0;
    bottom: 0;
    width: 100%;
    height: 2px;
    background: #45f3ff;
    border-radius: 4px;
    transition: 0.5s;
    pointer-events: none;
    z-index: 9;

}

.inputBox input:valid ~ i, .inputBox input:focus ~ i{
    height: 44px;

}

.links{
    display: flex;
    justify-content: space-between;

}

.links a{
    margin: 10px 0;
    font-size: 0.75em;
    color: #8f8f8f;
    text-decoration: none;
    font-weight: 1000;
}

.links a:hover, .links a:nth-child(2){
    color: #45f3ff;

}

input[type="submit"]{
    border: none;
    outline: none;
    background-color: #45f3ff;
    padding: 11px 25px;
    width: 140px;
    margin-top: 10px;
    border-radius: 4px;
    font-weight: 1000;
    cursor: pointer;

}

input[type="submit"]:active{
    opacity: 0.8;
}

.msg {
    position: relative;
    text-align: center;
    color: #fff;
    font-weight: 1000;
    padding: 15px;
    border-radius: 15px;
    background-color: orangered;
    width: 70%;
    left: 50%;
    transform: translateX(-50%);
    margin-top: 50px;

}
</style>
<body>
    <div class="navigation">
        <ul>
            <li class="list active">
                <a href="../page/">
                    <span class="icon">
                        <ion-icon name="home-outline"></ion-icon>

                    </span>
                    <span class="text">Accueil</span>
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
                <a href="../">
                    <span class="icon">
                        <ion-icon name="chatbubble-outline"></ion-icon>
                    </span>
                    <span class="text">Message</span>
                </a>
            </li>  <li class="list">
                <a href="../page/mapAddress.php">
                    <span class="icon">
                        <ion-icon name="navigate-outline"></ion-icon>                        </span>
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
        <?php
            include('script2.php');
        ?>
    <div class="box">
        <div class="form">
            <form action="vehicule.php" method="post">
                <h2>Enregistrer votre vehicule</h2>
                <div class="inputBox">
                    <input name="marque" type="text" required="required" placeholder="">
                    <span>marque</span>
                    <i></i>
                </div>
                <div class="inputBox">
                    <input name="matricule" type="text" required="required" placeholder="">
                    <span>imatricule</span>
                    <i></i>
                </div>
                <div class="inputBox">
                    <input name="couleur" type="text" required="required" placeholder="">
                    <span>couleur</span>
                    <i></i>
                </div>    
                <input name="envoyer" type="submit" value="envoyer">
            </form>
        </div>
    </div>
   

<?php
include("footer2.php");

?>

<script>
        const list =document.querySelectorAll('.list');
        function activeLink(){
            list.forEach((item) =>item.classList.remove('active'));
            this.classList.add('active');
            
        }
        list.forEach((item) =>item.addEventListener('click',activeLink));
    </script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>