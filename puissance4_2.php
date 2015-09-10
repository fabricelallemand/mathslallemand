<!DOCTYPE html >
<html lang="fr">
<head>
   <meta charset="utf-8">
  <meta name="generator" content="pandoc" />
  <meta name="author" content="Étape 2 : La partie HTML du projet" />
  <title>Le jeu de puissance 4 : Programmation web en Python</title>
 
 <?php include "header.php" ?>  
 
<!--Titre de la page -->
<div class="container">
<div class="page-header">
<h1 class="title">Le jeu de puissance 4 : Programmation web en Python</h1>
<h2 class="author">Étape 2 : La partie HTML du projet</h2>
<h3 class="date">Seconde - 2ISN</h3>
</div>
<div id="TOC">
<ul>
<li><a href="#la-page-html-de-départ">La page HTML de départ</a></li>
<li><a href="#mise-en-place-des-images">Mise en place des images</a></li>
<li><a href="#premiers-éléments-dinteractivité">Premiers éléments d'interactivité</a></li>
</ul>
</div>
<p>Cette deuxième étape a pour objectif de mettre en place la structure de la page web du jeu Puissance 4.</p>
<h1 id="la-page-html-de-départ">La page HTML de départ</h1>
<p>Ouvrir le fichier <code>index.html</code> dans Notepad++ <strong>et</strong> dans la navigateur web.</p>
<p>Pour l'instant, son contenu est le suivant :</p>
<pre class="brush: html;">
        &lt;html>
            &lt;head>
                &lt;meta charset="utf_8">
                <script src="./src/brython.js"></script>
            &lt;/head>
            &lt;body onload="brython()">
                <center>
                    <h1>Puissance 4</h1>            
                </center>
            &lt;/body>
        &lt;/html>
</pre>
<hr />
<p><strong>Explications :</strong></p>
<ul>
<li>La ligne 4 fait référence à la librairie <code>brython.js</code> : il s'agit d'un ensemble de fonctions écrites dans le langage javascript qui permettent d'insérer du code en Python dans une page HTML.</li>
<li>Ligne 6 : l'instruction <code>onload=&quot;brython()&quot;</code> exécute la fonction <code>brython()</code> du fichier <code>brython.js</code> dès que la page HTML est chargée par le navigateur : le code Python inclus dans la page est donc exécuté automatiquement.</li>
</ul>
<hr />
<h1 id="mise-en-place-des-images">Mise en place des images</h1>
<p>Nous allons inclure les images des pions rouges et des pions jaunes et réserver un emplacement pour l'image du plateau de jeu.</p>
<p>Insérer le code suivant juste sous la ligne commençant par <code>&lt;h1&gt;</code> :</p>
<pre class="brush: html;">
<img class="pion" id="pion_rouge" src="./rouge.png" width="80">
<canvas id="jeu" width="602" height="516"></canvas>
<img class="pion" id="pion_jaune" src="./jaune.png" width="80">

<img id="plateau" src="./plateau.png" width="0">
</pre>
<hr />
<p><strong>Explications :</strong></p>
<ul>
<li>Lignes 1, 3 et 5 : on reconnaît la balise <code>img</code> permettant l'insertion d'une image. Le paramètre <code>width</code> permet de fixer la largeur de l'image affichée par le navigateur. On remarque ligne 5 une étrangeté : la largeur de l'image est fixée à 0. L'image du plateau ne s'affiche donc pas. La ligne 5 permet néanmoins de donner un identifiant à l'image du plateau grâce au paramètre <code>id=&quot;plateau&quot;</code>. Cela va permettre de faire référence à cette image le moment venu.</li>
<li>Pendant une partie de puissance 4, l'image du plateau est modifiée : des pions sont ajoutés dans les colonnes. C'est pour cette raison que l'on ne peut pas insérer l'image du plateau directement avec la balise <code>img</code> dans le code HTML. Cette image sera ultérieurement insérée dans le <code>canvas</code> créé par la ligne 2. Un <code>canvas</code>, dans le langage HTML est un conteneur graphique dans lequel on peut afficher des images, des boutons, ..., et interagir avec eux ou les modifier en utilisant un langage de programmation (en général javascript, mais Python pour nous). La balise <code>canvas</code> est donc bien adaptée pour contenir l'image du plateau et permettre de la modifier au fur et à mesure du jeu.</li>
</ul>
<hr />
<h1 id="premiers-éléments-dinteractivité">Premiers éléments d'interactivité</h1>
<p>Avant de passer à la programmation, nous allons déjà ajouter à notre page une petite amélioration qui rendra son utilisation plus agréable.</p>
<p>Les images des pions rouges et jaunes seront les emplacements où les joueurs devront cliquer pour faire glisser leurs pions dans la grille. Pour plus d'interactivité, nous allons définir des <em>styles</em> CSS particuliers pour ces images afin qu'elles soient toujours grisées, sauf lorsque l'utilisateur les survole avec la souris.</p>
<p>Essayer ci-dessous :</p>
<center>
<img id="demo" src="./images/rouge.png" width="80">
</center>
<style>
    img#demo {opacity: 0.5;}
    img#demo:hover {opacity: 1;}
</style>
<p>Pour cela, ajouter les lignes suivantes dans le fichier <code>index.html</code> :</p>
<pre class="brush:html;">
<style>
    img#pion_rouge {opacity: 0.5;}
    img#pion_rouge:hover {opacity: 1;}
    img#pion_jaune {opacity: 0.5;}
    img#pion_jaune:hover {opacity: 1;}
</style>
</pre>
<hr />
<p><strong>Explications :</strong></p>
<ul>
<li>Les lignes 2 et 4 indiquent que les images des pions rouges et jaunes doivent être à moitié transparentes par défaut.</li>
<li>Les lignes 3 et 5, grâce au mot-clef <code>hover</code>, indiquent que ces images doivent être entièrement opaques quand elles sont survolées par la souris.</li>
</ul>
<hr />
<p>A la fin de cette étape, voici à quoi doit ressembler votre page HTML dans le navigateur :</p>
<center>
<img src="./images/puissance4_etat_1.png" width="300px">
</center>
<nav>
<ul class="pager">
<li>
<a href="puissance4_1.php">Étape précédente</a>
</li>
<li>
<a href="puissance4_3.php">Étape suivante</a>
</li>
</ul>
<p></nav></p>

<!-- fin de la balise div container dans le footer -->


<?php include "footer.php" ?>
