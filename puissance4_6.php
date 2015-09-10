<!DOCTYPE html >
<html lang="fr">
<head>
   <meta charset="utf-8">
  <meta name="generator" content="pandoc" />
  <meta name="author" content="Étape 6 : Qui commence ?" />
  <title>Le jeu de puissance 4 : Programmation web en Python</title>
 
 <?php include "header.php" ?>  
 
<!--Titre de la page -->
<div class="container">
<div class="page-header">
<h1 class="title">Le jeu de puissance 4 : Programmation web en Python</h1>
<h2 class="author">Étape 6 : Qui commence ?</h2>
<h3 class="date">Seconde - 2ISN</h3>
</div>
<p>Pour déterminer le joueur qui commence et éviter les disputes, le mieux est de choisir au hasard.</p>
<p>Pour cela, nous utiliserons la fonction <code>randint(a,b)</code> du module <code>random</code> de Python. Cette fonction retourne un entier pseudo-aléatoire compris au sens large entre a et b.</p>
<p>Pour pouvoir faire appel à cette fonction dans notre programme, nous devons d'abord l'importer en ajoutant la ligne suivante au début du fichier <code>puissance4.py</code>.</p>
<pre class="brush: python">
from random import randint
</pre>
<p>Rechercher ensuite les lignes suivantes, les supprimer et les remplacer par le code donné ci-dessous :</p>
<pre class="brush: python">
rouge.draggable = True
jaune.draggable = True
</pre>
<pre class="brush: python">
### on détermine au hasard qui commence 

n = randint(0,1)
if n == 0:
    pion_mobile = rouge
    rouge.draggable = True
    jaune.draggable = False
    alert("Les Rouges commencent !")
else:
    pion_mobile = jaune
    jaune.draggable = True
    rouge.draggable = False
    alert("Les Jaunes commencent !")
</pre>
<p>A la ligne 3, on choisit un nombre entier au hasard entre 0 et 1 : ce sera donc soit 0, soit 1. Si le nombre choisi est égal à 1, alors les rouges commencent, sinon, ce sont les jaunes.</p>
<p>Plus la peine de discuter, nous pouvons jouer !</p>
<p>Avant de commencer le championnat, l'étape suivante va nous éclairer sur l'utilisation de la commande <code>print</code> présente à plusieurs endroits dans le programme. A quoi sert-elle dans ce contexte ?</p>
<nav>
<ul class="pager">
<li>
<a href="puissance4_5.php">Étape précédente</a>
</li>
<li>
<a href="puissance4_7.php">Étape suivante</a>
</li>
</ul>
<p></nav></p>

<!-- fin de la balise div container dans le footer -->


<?php include "footer.php" ?>
