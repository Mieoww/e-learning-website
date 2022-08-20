<?php 
  $titre = "Prof";
  require '../header.php'; 
  require ('../../controler/ctrlProf.php');
  $id = $_GET['id']; 
  $e = new ctrl_profs;
  $e = ctrl_profs::showDetails($id);

?>

<style>
        .cta
    {
        background:linear-gradient(rgba(2, 2, 2, 0.5), rgba(0, 0, 0, 0.8)), url("../../assets/img/hero-bg.jpg") top center;
        background-size: cover;
        position: relative;
        padding: 60px 0;
    }
</style>
    
    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container">

        <div class="text-center">
          <br>
          <br>
          <h3>Liste des profs</h3>
          <p> Voici la liste des profs, vous pouvez y voir dessus vos collègues et certaines informations leur concernants.</p>
        </div>

        <table class="table table-hover">

          <thead>
              <tr style="color : white;">
                  <th>id</th>
                  <th>Nom</th>
                  <th>prenom</th>
                  <th>E-mail</th>
                  <th>Télephone</th>
              </tr>
          </thead>

          <tbody>
              <?php foreach($e as $k =>  $m) : ?>
              <tr style="color : white;">
                  <td><?php echo $k+1; ?></td>
                  <td><?php echo($m['nom']); ?></td>
                  <td><?php echo($m['prenom']); ?></td>
                  <td><?php echo($m['email']); ?></td>
                  <td><?php echo($m['telephone']); ?></td>
              </tr>
              <?php endforeach ;?>
          </tbody>

        </table>
        <a class="cta-btn" href="/projetinfo253/views/prof/listeProf.php">Revenir à la liste</a>
    </section><!-- End Cta Section -->

    <?php require("../footer.php");?>