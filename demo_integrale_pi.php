<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="generator" content="pandoc">
        <title>Calcul de l'intégrale \(\int_0^1 \frac{4}{x^2+1}~dx\)</title>
  <style type="text/css">code{white-space: pre;}</style>
  <style type="text/css">figure { margin-left: auto;  margin-right: auto }</style>
 

  <?php include "header.php" ?>  
 
    
<!--Titre de la page -->

<div class="container">
            <div class = "page-header">
                <h1 class="title">Calcul de l'intégrale <span class="math">\(\int_0^1 \frac{4}{x^2+1}~dx\)</span></h1>
                                                <h3 class="date">Dernière révision : mars 2014</h3>
                            </div>
<!-- Table des matières (optionnel) -->


<!-- Contenu -->
            
<p>Le calcul de cette intégrale est basé sur l'utilisation du théorème de changement de variable.</p>
<p>Ce théorème est hors programme.</p>

<div class="alert alert-dismissable alert-danger">
<p><strong>Théorème de changement de variable</strong></p>
<p>Soit <span class="math">\(f\)</span> une fonction continue et <span class="math">\(\varphi\)</span> une fonction continue dont la dérivée est continue sur un intervalle <span class="math">\([a ; b]\)</span> et dont toutes les images sont contenues dans l'ensemble de définition de <span class="math">\(f\)</span>. On a alors : <span class="math">\[\int_{\varphi(a)}^{\varphi(b)}f(x)~dx = \int_a^b f(\varphi(t)) \varphi&#39;(t)~dt\]</span></p>
</div>

<p>Posons ici <span class="math">\(\varphi(t) = \tan(t)\)</span> pour <span class="math">\(t\in\left[0 ; \frac{\pi}{4}\right]\)</span>. On a <span class="math">\(\tan(0) = 0\)</span> et <span class="math">\(\tan\left(\frac{\pi}{4}\right) = 1\)</span>. Par ailleurs, la dérivée de la fonction tangente est donnée par : <span class="math">\(\varphi&#39;(t) = \tan^2(t)+1\)</span>.</p>
<p>La formule de changement de variable donne donc : <span class="math">\[I=\int_0^1 \frac{4}{x^2+1}~dx = \int_0^{\frac{\pi}{4}}\frac{4}{\tan^2(t)+1}\times(\tan^2(t)+1)~dt\]</span> d'où on tire <span class="math">\[I=\int_0^{\frac{\pi}{4}}4~dt=[4t]_0^{\frac{\pi}{4}}=\pi.\]</span></p>

<!-- fin de la balise div container dans le footer -->


<?php include "footer.php" ?>
