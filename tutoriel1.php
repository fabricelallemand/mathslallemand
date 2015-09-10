<!DOCTYPE html >
<html lang="fr">
<head>
   <meta charset="utf-8">
  <meta name="generator" content="pandoc" />
  <title>Le jeu de puissance 4</title>
  <style type="text/css">code{white-space: pre;}</style>
<style type="text/css">figure { margin-left: auto;  margin-right: auto }</style>
 
 <?php include "header.php" ?>  
 
<!--Titre de la page -->
<div class="container">
<div class="page-header">
<h1 class="title">Le jeu de puissance 4</h1>
</div>
<div id="TOC">
<ul>
<li><a href="#présentation-du-jeu">Présentation du jeu</a></li>
<li><a href="#notre-projet-informatique">Notre projet informatique</a></li>
</ul>
</div>
<h1 id="présentation-du-jeu">Présentation du jeu</h1>
<p>Le jeu de puissance 4 est un jeu de plateau bien connu. Deux joueurs s'affrontent autour d'une grille de 6 lignes et 7 colonnes dans laquelle ils font glisser, chacun leur tour, des pions colorés.</p>
<p>Le gagnant est le premier joueur à aligner 4 de ses pions horizontalement, verticalement ou en diagonale.</p>
<figure>
<img src="plateau_jeu.jpg" alt="image" /><figcaption>image</figcaption>
</figure>
<h1 id="notre-projet-informatique">Notre projet informatique</h1>
<p>Le projet consiste à réaliser une page HTML permettant de jouer à Puissance 4.</p>
<p>Dans un premier temps, il s'agit de permettre à deux joueurs humains de s'affronter.</p>
<p>Les caractéristiques attendues pour la page HTML à réaliser sont les suivantes :</p>
<ul>
<li>Le plateau de jeu est représenté sous forme graphique.</li>
<li>Les pions de deux couleurs différentes sont déplacés à la souris par les joueurs ; ils sont placés dans le plateau de jeu par glissé-déposé.</li>
<li>La page HTML indique à qui est le tour.</li>
<li>Un message apparaît en cas de victoire de l'un des deux joueurs.</li>
</ul>
<p>Fonctionnalité complémentaire pouvant être étudiée dans un deuxième temps :</p>
<ul>
<li>Possibilité de jouer contre l'ordinateur, avec plusieurs possibilités : l'ordinateur joue-t-il au hasard ou doit-il appliquer une stratégie gagnante éventuelle ?</li>
</ul>

<!-- fin de la balise div container dans le footer -->


<?php include "footer.php" ?>
