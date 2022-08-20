<?php
require ('../../controler/ctrlEtudiant.php');
$titre = "Détails"; 
$id = $_GET['id']; 
$e = new ctrl_etudiants;
$e = ctrl_etudiants::showDetails($id);

require("../header.php");

?>
<style>
    #pdp 
    {
        width: 150px;
        border-radius : 3px; 
    }

</style>
<section id="cta" class="cta">
<br>
<br>
       <div class="container">

        <div class="text-center">
          <h3>Détails</h3>
            </br>
          <h3><?= $e['0']['nom']." ".$e['0']['prenom']; ?></h3>

        </div>
        
<br>
<br>
<table class="table" border=1>

    <thead class="thead-light">
        <tr style = "color : white; ">
            <th>id</th>
            <th>Nom</th>
            <th>prenom</th>
            <th>Date de naissance</th>
            <th>Télephone</th>
            <th>E-mail</th>
            <th>Facebook</th>
            <th>diplome</th>
            <th>Genre</th>
            <th>Photo de profil</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach($e as $k =>  $m) : ?>
        <tr style = "color : white; ">
            <td><?php echo ($m['id']); ?></td>
            <td><?php echo($m['nom']); ?></td>
            <td><?php echo($m['prenom']); ?></td>
            <td><?php echo($m['birthdate']); ?></td>
            <td><?php echo($m['telephone']); ?></td>
            <td><?php echo($m['email']); ?></td>
            <td><?php echo($m['fb']); ?></td>
            <td><?php echo($m['diplome']); ?></td>
            <td><?php echo($m['genre']); ?></td>
            <td> <img src="<?php echo($m['pdp']); ?>" alt="Photo" id="pdp"></td>

        </tr>
        
        <?php endforeach ;?>
    </tbody>

</table>
</div>
        </br>
<div class="text-center">
    <a class="cta-btn" href="/projetinfo253/views/etudiant/listeEtudiant.php">Revenir a la liste</a>

</div>

</section><!-- End Cta Section -->

<?php
require("../footer.php");
?>