<?php 
  $titre = "Prof";
  require '../header.php'; 
  require ('../../controler/ctrlProf.php');
  $e = new ctrl_profs;
  $e = ctrl_profs::index();
?>

<style>
      .cta
    {
        background:linear-gradient(rgba(2, 2, 2, 0.5), rgba(0, 0, 0, 0.8)), url("../../assets/img/hero-bg.jpg") top center;
        background-size: cover;
        position: relative;
        padding: 60px 0;
    }
  #display {
    color : white;
  }
  #display1 {
    display : inline-block;
  }
</style>
    
<!-- ======= Cta Section ======= -->
<section id="cta" class="cta">
  <div class="prof">

    <div class="text-center">
    <br><br>
      <h3>Liste des profs</h3>
      <p> 
        L'interface reservée aux professeurs vous permettant de chercher les informations sur vos collègues.
      </p>
  </div> 
</section><!-- End Cta Section -->

<!-- ======= Features Section ======= -->
<section id="features" class="features">
<?php foreach ($e as $k => $prof) :?>
      <div class="container">

        <div class="row">
          <div class="col-lg-3 col-md-4 col-6 col-6">
            <div class="icon-box">
              <i class="ri-store-line" style="color: #ffbb2c;"></i>
              <a class="cta-btn" href="details.php?id=<?= $prof['id'];?>"><?php echo $k+1; ?></a>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-6">
            <div class="icon-box">
              <i class="ri-bar-chart-box-line" style="color: #5578ff;"></i>
              <a class="cta-btn" href="details.php?id=<?= $prof['id'];?>"><h3><?php echo ($prof['prenom']). " ". ($prof['nom']); ?></a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="ri-calendar-todo-line" style="color: #e80368;"></i>
              <a href="updateForm.php?id=<?= $prof['id'];?>" class="cta-btn"> Modifier </a>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-6 mt-4 mt-lg-0">
            <div class="icon-box">
              <i class="ri-paint-brush-line" style="color: #e361ff;"></i>
              <a href="delete.php?id=<?= $prof['id'];?>" class="cta-btn" name="delete"> 
                Supprimer
              </a>
              <br> <br>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach ;?>
      <div align=center>
          <div class="col-lg-3 col-md-4 col-6 mt-4" align=center>
            <div class="icon-box" >
              <i class="ri-fingerprint-line" style="color: #29cc61;"></i>
              <h3><a href="add.php" class="cta-btn" name="add"> Nouveau </a> </h3>
            </div>
          </div>
      </div>

    </section><!-- End Features Section -->
<?php require '../footer.php'; ?>