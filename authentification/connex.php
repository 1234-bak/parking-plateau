<?php
session_start();

include('../config/cnx.php');
if (isset($_POST['envoyer'])) {
    if (!empty($_POST['id'] and !empty($_POST['pass']))) {
        $identifiant = htmlspecialchars($_POST['id']);
        $pass = htmlspecialchars($_POST['pass']);

        $getUser = $cnx->prepare(" SELECT * FROM user WHERE identifiant= ? AND pass= ?");
        $getUser->execute(array($identifiant, $pass));

        while ($data = $getUser->fetch(PDO::FETCH_ASSOC)) {
            $nom = $data['nom'];
            $prenom = $data['prenom'];
            $email = $data['email'];
            $tel = $data['tel'];
        }

        

        if ($getUser->rowCount() > 0) {
            $_SESSION['id44'] = $identifiant;
            $_SESSION['pass44'] = $pass;
            $_SESSION['nom'] = $nom;
            $_SESSION['prenom'] = $prenom;
            $_SESSION['email'] = $email;
            $_SESSION['tel'] = $tel;

            header('Location: registreV.php');
            


        } else {
            echo '<div class="msg success">Erreur mot de passe ou identifiant incorect!</div><br>';

        }


    }

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>connexion</title>
    <link rel="stylesheet" href="connexion.cs">
    <link rel="stylesheet" href="navAuthen.css">
</head>

<body>
    <style>
     @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100&family=Roboto:wght@100&display=swap');

     @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100&family=Roboto:wght@100&display=swap');

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
    scroll-behavior: smooth;

}

body{
    background-color: #f9f9f8;
}

body{
    background-color: #f9f9f8;
}

.box{
    position: relative;
    margin-top: 50px;
    left: 50%;
    transform: translateX(-50%);
    width: 320px;
    height: 420px;
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
    font-size: 1.5em;
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
    <div class="navigation">
        <ul>
            <li class="list">
                <a href="../">
                    <span class="icon">
                        <ion-icon name="home-outline"></ion-icon>

                    </span>
                    <span class="text">Accueil</span>
                </a>
            </li>
            <li class="list active">
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
                    <span class="text">Param??tres</span>
                </a>
            </li>
            <div class="indicator"></div>
        </ul>
    </div>
    <div class="box">
        <div class="form">
            <form action="" method="post">
                <h2>Connexion</h2>
                <div class="inputBox">
                    <input type="text" name="id" required="required" placeholder="">
                    <span>identifiant</span>
                    <i></i>
                </div>
                <div class="inputBox">
                    <input type="password" name="pass" required="required" placeholder="">
                    <span>mot de passe</span>
                    <i></i>
                </div>
                <div class="links">
                    <a href="#">mot de pass oubli?? ?</a>
                    <a href="inscrip.php">s'inscrire</a>
                </div>
                <input type="submit" name="envoyer" value="Se connecter">
            </form>
        </div>
    </div>

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