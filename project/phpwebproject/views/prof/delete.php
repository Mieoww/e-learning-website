<?php
require ('../../controler/ctrlProf.php');

$id = $_GET['id'];
$e = new ctrl_profs;
$e = ctrl_profs::delete($id);

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
    <a class="cta-btn" href="/projetinfo253/views/prof/listeProf.php" >Revenir a la liste</a>
</div>
</section><!-- End Cta Section -->
<?php
require("../footer.php");
?>