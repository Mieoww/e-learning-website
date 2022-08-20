<?php
require ('../../controler/ctrlEtudiant.php');
$titre = "Suppression"; 
$id = $_GET['id'];
$e = new ctrl_etudiants;
$e = ctrl_etudiants::delete($id);

require("../header.php");
?>

<section id="cta" class="cta">
<br>
<br>
       <div class="container">

        <div class="text-center">
          <h3>Suppression réussie</h3>
        </div>
        </div>
<br>

<div align=center>
    <a class="cta-btn" href="/projetinfo253/views/etudiant/listeEtudiant.php" >Revenir a la liste</a>
</div>
</section><!-- End Cta Section -->
<?php
require("../footer.php");
?>