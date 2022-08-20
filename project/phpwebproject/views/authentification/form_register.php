

<title> Register </title>

    <!-- Cette page affiche l'interface d'inscription des visiteurs-->
    <link href="../../assets/images/téléchargement.jfif" rel="icon">
    <link href="../../assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="../../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="../../assets/css/style.css" rel="stylesheet">

    <style>
        #myForm {
            font-family: "Poppins", sans-serif;
            font-weight: 400;
            font-size: 13px;
            letter-spacing: 1px;
            display: inline-block;
            padding: 8px 30px 9px 30px;
            border-radius: 50px;
            transition: 0.5s;
            border: 2px solid #fff;
            color: #fff;
        }

        input[type=text], input[type=password], input[type=email], input[type=number], input[type=date], input[type=file]{
            width: 50%;
            background : transparent;
            box-sizing: border-box;
            border: 2px solid #fff;
            transition: 0.5s;
            border-radius: 50px;
            color: #fff;
        }
    </style>

    <section id="hero">
        <div class="hero-container">
            <form action="verificationregister.php" method = "POST" id = "myForm">
            <h3 color="#fff"> Inscription </h3>
                    Nom <br> <input type="text" name="nom" id="nom" size="50"> <br> <br>
                    Prénom <br> <input type="text" name="prénom" size="50"> <br> <br>
                    Date de naissance <br> <input type="date" name="naissance" size="50"> <br> <br>
                    Telephone <br> <input type="text" name="telephone" size="50"> <br> <br>
                    Email <br> <input type="email" name="email" size="50"> <br> <br>
                    Nom d'utilisateur <br> <input type="text" name="username" id="username" size="50"> <br> <br>
                    Mot de passe <br> <input type="password" name="password" size="50"> <br> <br>
                    Type d'utilisateurs <br> <select name="nom" size="1">
                        <option>Etudiant
                        <option>Prof
                    </select> <br> <br>
                    Genre <br>  <input type="radio" id="male" name="gender" value="male"> <label for="male">Homme</label>
                                <input type="radio" id="female" name="gender" value="female"> <label for="female">Femme</label><br>
                    <input type="submit" name ="submit" class="btn-get-started scrollto" style = "color : black; " value = "S'enregistrer">
                    <?php
                    if(isset($_GET['erreur'])){
                        $err = $_GET['erreur'];
                        if($err==1){
                            echo "<br><p><em>Veuillez compléter tous les champs</em></p>";  
                    }
                    }
                    ?>
            </form> 

        </div>
    </section>