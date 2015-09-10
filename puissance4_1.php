<!DOCTYPE html >
<html lang="fr">
<head>
   <meta charset="utf-8">
  <meta name="generator" content="pandoc" />
  <meta name="author" content="Étape 1 : Mise en place de l'environnement de développement" />
  <title>Le jeu de puissance 4 : Programmation web en Python</title>
 
 <?php include "header.php" ?>  
 
<!--Titre de la page -->
<div class="container">
<div class="page-header">
<h1 class="title">Le jeu de puissance 4 : Programmation web en Python</h1>
<h2 class="author">Étape 1 : Mise en place de l'environnement de développement</h2>
<h3 class="date">Seconde - 2ISN</h3>
</div>
<div id="TOC">
<ul>
<li><a href="#quelques-explications">Quelques explications</a></li>
<li><a href="#téléchargement-de-lenvironnement-de-développement">Téléchargement de l'environnement de développement</a></li>
<li><a href="#édition-des-document-html-et-python">Édition des document HTML et Python</a></li>
</ul>
</div>
<p>Dans cette première étape, nous allons installer et organiser notre espace de travail : dossiers, fichiers et logiciels nécessaires à la réalisation de notre projet.</p>
<h1 id="quelques-explications">Quelques explications</h1>
<p>Pour développer notre projet, plusieurs logiciels sont nécessaires :</p>
<ul>
<li>Un navigateur internet, de préférence Firefox, doit être disponible pour tester la page HTML du jeu.</li>
<li>L'éditeur de texte Notepad ++ sera utilisé pour écrire le code HTML et le code Python du jeu.</li>
<li>Une bibliothèque de scripts, nommée Brython sera utilisée : c'est elle qui interprètera les algorithmes que nous allons prohrammer en Python afin qu'ils interagissent avec la page HTML.</li>
</ul>
<h1 id="téléchargement-de-lenvironnement-de-développement">Téléchargement de l'environnement de développement</h1>
<p>Afin de mettre en place les fichiers nécessaires à notre travail, il suffit de télécharger l'archive ZIP en cliquant sur l'image ci-dessous.</p>
<center>
<a href="./autres/projet.zip"><img src="./images/zipper.png" alt="Projet.zip" /></a>
</center>
<p>Cette archive doit ensuite être décompressée : un dossier &quot;projet&quot; est créé.</p>
<p>Ce dossier contient trois sous-dossiers : ce sont les fichiers de la bibliothèque Brython, le &quot;moteur&quot; de notre future page web. Nous n'avons pas besoin d'y accéder.</p>
<center>
<img src="./images/projetzip1.png" />
</center>
<p>Il contient également un ficher HTML : c'est ce fichier que nous allons éditer et qui contiendra notre jeu.</p>
<p>Les trois images fournies sont celles qui seront utilisées par le jeu :</p>
<center>
<img src="./images/rouge.png" /> <img src="./images/plateau.png" width="200px"> <img src="./images/jaune.png" />
</center>
<h1 id="édition-des-document-html-et-python">Édition des document HTML et Python</h1>
<p>Pour coder notre jeu, nous utiliserons deux fichiers :</p>
<ul>
<li>le fichier <code>index.html</code> contiendra le code HTML nécessaire à l'affichage de la page dans le navigateur ;</li>
<li>le fichier <code>puissance4.py</code> contiendra le code Python du jeu.</li>
</ul>
<p>Ces deux fichiers seront édités dans le logiciel <em>notepad++</em>.</p>
<p>Si ce logiciel n'est pas installé, il est disponible en version portable en cliquant sur l'image ci-dessous :</p>
<center>
<a href="./autres/notepad.zip"><img src="./images/notepad.png" /></a>
</center>
<div class="alert alert-danger">
<p>A chaque modification de l'un des deux fichiers, pour observer l'effet de la modification, on veillera à :</p>
<ol style="list-style-type: decimal">
<li>Enregistrer les deux fichiers.</li>
<li>Rafraîchir l'affichage de la page web dans le navigateur (touche F5).</li>
</ol>
</div>
<nav>
<ul class="pager">
<li>
<a href="puissance4_0.php">Étape précédente</a>
</li>
<li>
<a href="puissance4_2.php">Étape suivante</a>
</li>
</ul>
<p></nav></p>

<!-- fin de la balise div container dans le footer -->


<?php include "footer.php" ?>
