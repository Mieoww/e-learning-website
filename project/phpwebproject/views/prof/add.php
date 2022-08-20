<?php
    $titre = "Prof";
    include ('../header.php');
    require ('../../controler/ctrlProf.php');
    $info = $_POST;
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
        $e = new ctrl_profs;
        $e = ctrl_profs::add($info);
    }
?>
    <style>
              .cta
    {
        background:linear-gradient(rgba(2, 2, 2, 0.5), rgba(0, 0, 0, 0.8)), url("../../assets/img/hero-bg.jpg") top center;
        background-size: cover;
        position: relative;
        padding: 60px 0;
    }
    #myForm {
            font-family: "Poppins", sans-serif;
            font-weight: 4000;
            font-size: 13px;
            letter-spacing: 1px;
            display : inline-block;
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
    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
        <div class="container">
            <div class="text-center">
            <h3>Liste des profs</h3>
            <p> Vous pouvez ajouter un nouvel professeur en remplissant ce formulaire.</p>
        </div>
    
    <!-- End Cta Section -->

    <fieldset>
        <h1 style="text-align : center; color : white;"> Ajouter </h1>
        <div style="text-align: center; ">
            <form method = "POST" id = "myForm">
                Nom <br> <input type="text" name="nom" id="username" size="50"> <br> <br>
                Prénom <br> <input type="text" name="prenom" size="50"> <br> <br>
                Date de naissance <br> <input type="date" name="naissance" size="50"> <br> <br>
                Telephone <br> <input type="text" name="telephone" size="50"> <br> <br>
                Email <br> <input type="email" name="email" size="50"> <br> <br>
                Genre <br> <input type="radio" id="male" name="genre" value="male"> <label for="male">Homme</label>
                <input type="radio" id="female" name="genre" value="female"> <label for="female">Femme</label><br>
                <button type="submit" class="btn btn-primary" type="submit" name ="submit" class="btn-get-started scrollto">Ajouter</button>
            </form>
        </div>
    <fieldset>

    <div align=center>
    <a class="cta-btn" href="/projetinfo253/views/prof/listeProf.php" >Revenir a la liste</a>
    </div>
    </section>
<?php require '../footer.php'; ?>