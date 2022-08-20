<?php
$titre = "Étudiants";
require ('../../controler/ctrlEtudiant.php');
$e = new ctrl_etudiants;
$e = ctrl_etudiants::index();
function setMajuscule($text) {
    return strtoupper($text);
}

require("../header.php");


?>

<section id="cta" class="cta">
<br>
<br>
       <div class="container">

        <div class="text-center">
          <h3>Liste des Étudiants</h3>
          <p> Voici la liste des étudiants, vous pouvez y voir dessus les etudiants et certaines informations leur concernants.</p>
        </div>
        
<br>
<br>

<table class="table" border=1>

    <thead class="thead-light">
        <tr style="color : white; ">
            <th>NUMÉRO</th>
            <th>NOM</th>
            <th>PRENOM</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach($e as $k =>  $m) : ?>
        <tr style="color : white; ">

            <td>
                <a class="cta-btn" href="/projetinfo253/views/etudiant/details.php?id=<?= $m['id']; ?> "><?php echo $k+1; ?></a>
            </td>

            <td style="color : white; "><?php echo setMajuscule($m['nom']); ?></td>

            <td><?php echo setMajuscule($m['prenom']); ?></td>

            <td>
                <a class="cta-btn" href="/projetinfo253/views/etudiant/updateForm.php?id=<?= $m['id']; ?> ">Modifier</a>
            </td>

            <td>
                <a class="cta-btn" href="/projetinfo253/views/etudiant/delete.php?id=<?= $m['id']; ?> " >Supprimer</a>
            </td>

        </tr>
        <?php endforeach ;?>
    </tbody>

</table>
</div>
<div align=center>
    <a class="cta-btn" href="/projetinfo253/views/etudiant/add.php" >Ajouter</a>
</div>


</section><!-- End Cta Section -->

<?php
require ("../footer.php");
?>