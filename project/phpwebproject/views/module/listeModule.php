<?php
require ('../../controler/ctrlModule.php');

$titre = "Modules"; 

$m = new ctrl_Module;
$m = ctrl_Module::index();

require("../header.php");


?>

<style>
    .services 
    {
        background:linear-gradient(rgba(2, 2, 2, 0.5), rgba(0, 0, 0, 0.8)), url("../../assets/img/blog-3.jpg") top center;
        background-size: cover;
        position: relative;
        padding: 60px 0;
    }
</style>



<section id="services" class="services">
      <div class="container">

        <div class="section-title" style = "color : white; ">
          <br>
          <br>
          <h2>Modules</h2>
          <br>
          <br>
          <h3>Les différentes modules</h3>
          <p><strong>Explorez ici les différents matières enseignées à l'ESTI</strong> </p>
        </div>

        <div class="row">
        <?php foreach($m as $k =>  $m) : ?>
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <h5 class="title"><strong><?php echo $m['code']; ?></strong></h5>
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><strong><?php echo $m['nom']; ?></strong></h4>
              <h5 class="title"><strong><?php echo $m['heure']; ?> Heures</strong></h5>
              <br> <a href="/projetinfo253/views/module/updateForm.php?id=<?= $m['id']; ?> " class="btn btn-secondary">Modifier</a>
              <br><br> <a href="/projetinfo253/views/module/delete.php?id=<?= $m['id']; ?> " class="btn btn-secondary">Supprimer</a>
            </div>

          </div>
          </br>
          <?php endforeach ;?>

        </div>

      </div>
    

    <div align=center>
    <a href="/projetinfo253/views/module/add.php" class="btn btn-secondary">Ajouter</a>
    </div>

    </section><!-- End Services Section -->
<?php
require ("../footer.php");
?>