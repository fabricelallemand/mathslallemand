<!DOCTYPE html >
<html lang="fr">
<head>
   <meta charset="utf-8">
  <meta name="generator" content="pandoc" />
  <meta name="author" content="Étape 7 : La fonction print" />
  <title>Le jeu de puissance 4 : Programmation web en Python</title>
 
 <?php include "header.php" ?>  
 
<!--Titre de la page -->
<div class="container">
<div class="page-header">
<h1 class="title">Le jeu de puissance 4 : Programmation web en Python</h1>
<h2 class="author">Étape 7 : La fonction <code>print</code></h2>
<h3 class="date">Seconde - 2ISN</h3>
</div>
<p>Nous connaissons la fonction <code>print()</code> dans le langage Python. Elle permet par exemple d'afficher une chaîne de caractère ou le contenu d'une variable dans la console Python, comme par exemple sur la capture d'écran ci-dessous.</p>
<center>
<img src="./images/puissance4_print.png">
</center>
<p>Cette fonction <code>print()</code> est présente à de nombreuses reprises dans le code du fichier <code>puissance4.py</code>, mais elle ne provoqie aucun affichage dans le navigateur.</p>
<p>Voici par exemple le code de la fonction <code>deplacement_rouge()</code> :</p>
<pre class="brush: python; highlight: 3">
def deplacement_rouge(ev):
    global deplacement_valide
    print("deplacement rouge")
    if pion_mobile ==rouge:
        ev.dataTransfer.effectAllowed = 'move'
        deplacement_valide = True
    else :
        deplacement_valide = False
</pre>
<p>Alors pourquoi l'avoir utilisée ???</p>
<nav>
<ul class="pager">
<li>
<a href="puissance4_6.php">Étape précédente</a>
</li>
</ul>
<p></nav></p>

<!-- fin de la balise div container dans le footer -->


<?php include "footer.php" ?>
