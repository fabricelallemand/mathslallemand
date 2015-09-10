<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="generator" content="pandoc">
        <title>Projet Robot et labyrinthe</title>
  <style type="text/css">code{white-space: pre;}</style>
  <style type="text/css">figure { margin-left: auto;  margin-right: auto }</style>
 

  <?php include "header.php" ?>  
 
    
<!--Titre de la page -->

<div class="container">
            <div class = "page-header">
                <h1 class="title">Projet Robot et labyrinthe</h1>
                                                <h3 class="date">Dernière révision : mars 2014</h3>
                            </div>
<!-- Table des matières (optionnel) -->


<!-- Contenu -->
            
<h1 id="ressources-pour-la-construction-du-robot">Ressources pour la construction du robot</h1>
<p>Le choix s'est porté sur une modélisation du labyrinthe par un chemin en ruban adhésif noir sur un fond blanc.</p>
<p>Le robot devra donc suivre cette ligne noire.</p>
<p>La sortie sera modélisée par un morceau de ruban adhésif rouge.</p>
<p>Un labyrinthe simple sera construit pour servir de test.</p>
<ul>
<li>Sur le <a href="http://www.sitedunxt.fr/">site du NXT</a>, on trouve les <a href="http://www.sitedunxt.fr/download/Building_Instructions_Suiveur_de_ligne.html">instructions de montage du robot suiveur de ligne</a>, disponibles aussi ici en <a href="./montage_robot.pdf">pdf</a>.</li>
</ul>
<h1 id="ressources-pour-la-programmation">Ressources pour la programmation</h1>
<ul>
<li>Prise en main de l'environnement de programmation. On pourra commencer par tester de petits programmes simples (avancer, reculer, tourner, ...). Le guide de mise en route du site <a href="http://www.planete-education.com/recit/IMG/pdf/guide_pratique_brique_NXT.pdf">planète éducation</a> est une excellente introduction. Il est aussi disponible ici en <a href="./guide_pratique_brique_NXT.pdf">pdf</a>.</li>
<li>Le tutoriel présent sur le site <a href="http://www.generationrobots.com/fr/content/61-nxt-g-programmation-lego-mindstorms-nxt">génération robots</a> fourni aussi une approche intéressante.</li>
<li>Le montage utilise le capteur de lumière/couleur pour le suivi de ligne. Sur le même site, un <a href="http://www.sitedunxt.fr/articles/articles-4-19+comprendre-les-capteurs-le-capteur-de-lumie.php">tutoriel</a> permet de comprendre et de tester le fonctionnement de ce capteur, tout en s'initiant aussi à l'environnement de programmation du robot.</li>
<li>Toujours sur le même site, <a href="http://www.sitedunxt.fr/articles/articles-4-9+faire-du-suivi-de-ligne.php">une première approche du suivi de ligne</a>, côté programmation. A tester avec la planche de test fournie avec le robot.</li>
<li>Une version plus élaborée peut-être trouvée sur <a href="http://www.nxtprograms.com/NXT2/line_follower/index.html">ce site</a>.</li>
<li>Des explications détaillées pour le suivi de ligne sur le site <a href="https://euler.ac-versailles.fr/isn/Annexe_Initiation_Robotique.pdf">Euler</a>, disponibles aussi ici en <a href="./Annexe_Initiation_Robotique.pdf">pdf</a>.</li>
</ul>
<h1 id="ressources-plus-spécifiques-sur-les-labyrinthes">Ressources plus spécifiques sur les labyrinthes</h1>
<center>
<img src="http://www.mathslallemand.fr/lib/exe/fetch.php?media=2isn:maze1_start.png" alt="Labyrinthe RURPLE" />
</center>

<ul>
<li>Utilisation de <a href="http://www.mathslallemand.fr/doku.php?id=2isn:rurple:rurple_lab5">la dernière version du programme étudié avec RURPLE</a> en début d'année (à traduire pour le NXT). On pourra construire un labyrinthe correspondant à la figure ci-dessus.</li>
<li>L'<a href="https://interstices.info/jcms/c_46065/l-algorithme-de-pledge">algorithme de Pledge</a> : il s'agit d'un algorithme permettant de sortir de n'importe quel labyrinthe ! Il peut être mis en œuvre avec le robot NXT2.</li>
</ul>

<!-- fin de la balise div container dans le footer -->


<?php include "footer.php" ?>
