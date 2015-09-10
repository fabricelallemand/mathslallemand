<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
        <title>Maths, Info, etc...</title>
  <!--<style type="text/css">code{white-space: pre;}</style>-->

<!--Insertion du moteur Wordpress-->
    <?php
define('WP_USE_THEMES', false); // aucun besoin d'utiliser le thème actif donc on le désactive
include './wp/wp-load.php'; // on include le "moteur" wordpress
?>
  
  <?php include "header.php" ?>  
  
  <br>
  
  <br>

    <div class="container">
      <div class = "page-header">

        <h1 class="title">Maths, Info, etc.</h1>
          
          <div class="row">
            <div class="col-lg-6">
        <p class="lead">Ressources personnelles, liens et documents divers ...</p>
          <p><ul>
            <li> Mathématiques au lycée</li>
            <li> Spécialité ISN : Informatique et Sciences du Numériques</li>
            <li> 2ISN : ISN en seconde</li>
            <li> ...</li>
           </ul></p>
           </div>
           
           <div class="col-lg-6">
             <p class="lead"> Blog ...</p>
               <ul id="last-articles">
<?php
$posts = get_posts('numberposts=5&order=DESC'); // sélection des 5 derniers articles en order descendant
foreach ($posts as $post) : start_wp(); // création de la boucle
?>
<li><a href="<? the_permalink();?>" target="_top" title="<? the_title();?>"><? the_title();?></a> <? the_date(); ?></li>
<? endforeach; ?>
</ul>
          </div>
              </div>
</div>

      <!-- Example row of columns -->
      <div class="row">
        <div class="col-lg-4">
          <h2>Mathématiques</h2>
	  <center><p><a href="mathematiques.php"><img src="./images/sierpinski-triangle.png" height="100" alt="" /></a></p></center>
          <p><a class="btn btn-primary" href="mathematiques.php" role="button">Sommaire &raquo;</a></p>
        </div>
        <div class="col-lg-4">
          <h2>Informatique</h2>
	  <center><p><a href="informatique.php"><img src="./images/network.png" height="100" alt="" /></a></p></center>
          <p><a class="btn btn-primary" href="informatique.php" role="button">Sommaire &raquo;</a></p>
       </div>
        <div class="col-lg-4">
          <h2>Autres ...</h2>
	  <center><p><a href="autres.php"><img src="./images/folder.png" height="100" alt="" /></a></p></center>
          <p><a class="btn btn-primary" href="autres.php" role="button">Sommaire &raquo;</a></p>
        </div>
      </div>
    <div>
    </div>
<?php include "footer.php" ?>
