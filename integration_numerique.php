<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="generator" content="pandoc">
        <title>Calculs approchés d'intégrales</title>
  <style type="text/css">code{white-space: pre;}</style>
  <style type="text/css">figure { margin-left: auto;  margin-right: auto }</style>
 

  <?php include "header.php" ?>  
 
    
<!--Titre de la page -->

<div class="container">
            <div class = "page-header">
                <h1 class="title">Calculs approchés d'intégrales</h1>
                                                <h3 class="date">Dernière révision : mars 2014</h3>
                            </div>
<!-- Table des matières (optionnel) -->


<!-- Contenu -->
            
<p>Dans bien des cas, le calcul exact d'une intégrale est impossible car on ne sait pas déterminer de primitive de la fonction à intégrer.</p>
<p>Il est alors possible de déterminer des valeurs approchées de l'intégrale en mettant en œuvre des algorithmes de calcul numérique, dont voici trois exemples.</p>
<p>On s'intéresse au calcul de l'intégrale suivante : <span class="math">\[I=\int_0^1 \frac{4}{x^2+1}~dx\]</span></p>
<p>La fonction <span class="math">\(f\)</span> qui à <span class="math">\(x\)</span> associe <span class="math">\(\frac{4}{x^2+1}\)</span> étant continue et positive sur l'intervalle <span class="math">\([0 ; 1]\)</span>, cette intégrale est égale à l'aire colorée sur la figure ci-dessous.</p>
<center>
<figure>
<img src="courbe.png" width="400px"/>
</figure>
</center>
<p>Dans la suite, on admettra que <span class="math">\(I = \pi\)</span> (<a href="demo_integrale_pi.php">voir une démonstration de ce résultat, utilisant des notions hors programme</a>).</p>
<p>Voici trois méthode numériques permettant d'obtenir une valeur approchée de l'intégrale <span class="math">\(I\)</span> :</p>
<ul>
<li><a href="point_milieu.php">La méthode du point milieu</a>.</li>
<li><a href="simpson.php">La méthode de Simpson</a>.</li>
<li><a href="monte_carlo.php">La méthode de Monte-Carlo</a>.</li>
</ul>

<!-- fin de la balise div container dans le footer -->


<?php include "footer.php" ?>
