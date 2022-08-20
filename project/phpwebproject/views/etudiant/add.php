<?php

require("../../controler/ctrlEtudiant.php");
$titre = "Ajouter"; 
$info = $_POST; 


if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit']))
{
  $info = $_POST;
  $pdp = $_FILES; 

  $tname = $_FILES['pdp']['tmp_name'] ;
  $name = $_FILES["pdp"]["name"];
  $destination = "../../assets/images/";

  $a = move_uploaded_file($tname, $destination.$name);


  $e = new ctrl_etudiants;
  $e = ctrl_etudiants::add($info, $destination.$name);
}


require("../header.php");

?>

<style>
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
<section id="cta" class="cta" >
<br>
<br>
       <div class="container">

        <div class="text-center">
          <h3>Ajouter</h3>
          <h3>Inserer vos données </h3>
        </div>
        </div>
<br>
<br>

<div align=center>
<form method = "POST" id="myForm" enctype="multipart/form-data">
  <div class="form-group">
    <label for="nom">Nom : </label>
    <input name="nom" type="text" class="form-control" id="nom" aria-describedby="emailHelp" placeholder="Enter votre nom">
  </div>
  <div class="form-group">
    <label for="prenom">Prénom</label>
    <input name="prenom" type="text" class="form-control" id="prenom" placeholder="Entrer votre Prénom">
  </div>
  <div class="form-group">
    <label for="date">Date</label>
    <input name="birth" type="date" class="form-control" id="date">
  </div>
  <div class="form-group">
    <label for="phone">Phone</label>
    <input name="phone" type="number" class="form-control" id="phone">
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input name="email" type="email" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="fb">Pseudo fb</label>
    <input name="fb" type="text" class="form-control" id="fb">
  </div>
  <div class="form-group">
    <label for="pdp">Photo de profil</label>
    <input name="pdp" type="file" class="form-control" id="pdp">
  </div>
  <div class="form-group">
    <label for="diplome">Diplôme</label>
    <input name="diplome" type="text" class="form-control" id="diplome">
  </div>
  <div class="form-group">
    <label for="genre">Genre</label>
    <input name="genre" type="radio" id="male" value="male"><label>Homme</label>
    <input name="genre" type="radio" id="female" value="female"><label>Femme</label>
  </div>
  <button type="submit" class="cta-btn" name='submit' style ="color:black; ">Ajouter</button>

</form>

</div>
<div align=center>
    <a class="cta-btn" href="/projetinfo253/views/etudiant/listeEtudiant.php" >Revenir a la liste</a>
</div>

</section><!-- End Cta Section -->
<?php
require ("../footer.php");
?>