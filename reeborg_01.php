<!DOCTYPE html >
<html lang="fr">
<head>
   <meta charset="utf-8">
  <meta name="generator" content="pandoc" />
  <meta name="author" content="Le monde de Reeborg – épisode 1" />
  <title>INITIATION À L’ALGORITHMIQUE ET À PYTHON</title>
 
 <?php include "header.php" ?>  
 
<!--Titre de la page -->
<div class="container">
<div class="page-header">
<h1 class="title">INITIATION À L’ALGORITHMIQUE ET À PYTHON</h1>
<h2 class="author">Le monde de Reeborg – épisode 1</h2>
<h3 class="date">2ISN - Seconde</h3>
</div>
<div id="TOC">
<ul>
<li><a href="#découverte-du-monde-de-reeborg">Découverte du monde de Reeborg</a></li>
<li><a href="#quelques-réglages">Quelques réglages</a></li>
<li><a href="#un-premier-défi">Un premier défi !</a></li>
</ul>
</div>
<h1 id="découverte-du-monde-de-reeborg">Découverte du monde de Reeborg</h1>
<p>Se connecter au monde de Reeborg en cliquant sur l’image ci-dessous.</p>
<center>
<a href="http://reeborg.ca/monde.html"><img src="./images/reeborg_01.png" width="600px" /></a>
</center>
<p>L’écran est constitué de deux parties principales :</p>
<ul>
<li>À gauche, le monde de Reeborg proprement dit. Reeborg est le petit robot situé en bas à gauche du quadrillage, il regarde vers la droite. Les segments marron sont des murs : Reeborg ne peut pas les traverser et il ne doit pas se cogner aux murs, car cela le fait souffrir ...</li>
<li>À droite se trouve la zone de saisie des commandes qui permettront de programmer le déplacement du robot.</li>
</ul>
<div class="alert alert-info">
<p>Entrer la commande <code>avance()</code> dans la zone de saisie, puis cliquer sur le bouton d'exécution situé en haut à gauche.</p>
<p>Que se passe-t-il ?</p>
</div>
<div class="alert alert-danger">
Dans la suite, vous aurez besoin des deux commandes suivantes, qui sont propre à Reeborg :
<ul>
<li>
<code>avance()</code> : permet à Reeborg d'avancer d'une case ;
</li>
<li>
<code>tourne_a_gauche()</code> : fait tourner Reeborg sur sa gauche.
</li>
</ul>
<p>A chaque utilisation de ces commande, n'oubliez pas les parenthèses, sinon elles ne seront pas excéutées !</p>
</div>
<h1 id="quelques-réglages">Quelques réglages</h1>
<p>Avant de continuer, nous allons effectuer un petit réglage afin que Reeborg évolue dans un monde &quot;carré&quot;.</p>
<p>Pour cela, cliquer sur le bouton &quot;Menu additionnel&quot;, puis &quot;Edition du monde&quot; et &quot;Taille du monde&quot;.</p>
<p>Dans la fenêtre qui s'ouvre, régler les deux valeurs x et y à 12, cliquer sur &quot;OK&quot;, puis &quot;Fermer et sauvegarder&quot;.</p>
<p>Reeborg est maintenant dans un carré de côté 12 carreaux, délimité par des murs.</p>
<center>
<img src="./images/reeborg_02.png" />
</center>
<h1 id="un-premier-défi">Un premier défi !</h1>
<div class="alert alert-info">
<p>Votre premier défi consiste à écrire un programme qui ordonne à Reeborg de faire tout le tout de son monde en longeant les murs jusqu'à ce qu'il revienne à son point de départ, dans la même position.</p>
</div>
<p>Mais attention, il ne s'agit pas d'écrire un programme interminable ...</p>
<p>Lisez attentivement ce qui suit pour vous aider.</p>
<p>Reeborg comprend le language informatique Python. Dans ce language comme dans les autres, il existe une structure algorithmique qui permet de faire répéter un certain nombre de fois une ou plusieurs commande. On parle de <strong>boucle</strong>.</p>
<p>En français, voici ce qui permettrait de répéter 10 fois les commandes indiquées :</p>
<pre>
pour k variant de 1 à 10, faire :
    commande1()
    commande2()
commande3()
</pre>
<p>Dans ce code : * les commandes nommées <code>commande1()</code> et <code>commande2()</code> sont répétées 10 fois ; * la lettre <code>k</code> désigne une <strong>variable</strong> qui sert de compteur : elle prend successivement les valeurs entières de 1 à 10 ; * la commande nommée <code>commande3()</code> n'est exécutée qu'une fois, après les 10 répétitions : en effet, seul <strong>le bloc</strong> de commandes matérialisé par l'espacement à droite (on parle d'<strong>indentation</strong>) est répété.</p>
<p>En language Python, le même code s'écrit de la manière suivante :</p>
<pre class="brush: python">
for k in range(10) :
    commande1()
    commande2()
commande3()
</pre>
<div class="alert alert-danger">
<p>Le bloc de commandes à répéter est :</p>
<ul>
<li>introduit par les deux points <code>:</code> à la fin de la ligne <code>for</code> ;</li>
<li>matérialisé par une <strong>indentation</strong> de quatre espaces en début de ligne ;</li>
<li>terminé dès qu'une ligne dans la suite du programme n'est plus indentée.</li>
</ul>
</div>
<p>Voici donc maintenant une exigence plus précise pour ce premier défi :</p>
<div class="alert alert-info">
<p>Votre premier défi consiste à écrire un programme qui ordonne à Reeborg de faire tout le tout de son monde en longeant les murs jusqu'à ce qu'il revienne à son point de départ, dans la même position.</p>
<p>Votre programme ne doit prendre que <strong>quatre lignes</strong> !!!</p>
</div>

<!-- fin de la balise div container dans le footer -->


<?php include "footer.php" ?>
