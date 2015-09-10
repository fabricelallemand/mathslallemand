<!DOCTYPE html >
<html lang="fr">
<head>
   <meta charset="utf-8">
  <meta name="generator" content="pandoc" />
  <title>Étape 2 : Mise en place de l'environnement de développement</title>
  <style type="text/css">code{white-space: pre;}</style>
<style type="text/css">figure { margin-left: auto;  margin-right: auto }</style>
 
 <?php include "header.php" ?>  
 
<!--Titre de la page -->
<div class="container">
<div class="page-header">
<h1 class="title">Étape 2 : Mise en place de l'environnement de développement</h1>
<h3 class="date">Seconde - 2ISN</h3>
</div>
<div id="TOC">
<ul>
<li><a href="#quelques-explications">Quelques explications</a></li>
<li><a href="#téléchargement-de-lenvironnement-de-développement">Téléchargement de l'environnement de développement</a></li>
<li><a href="#utilisation-du-zazouminiwebserver">Utilisation du ZazouMiniWebServer</a></li>
<li><a href="#édition-des-document-html-et-python">Édition des document HTML et Python</a></li>
</ul>
</div>
<p>Dans cette deuxième étape, nous allons installer et organiser notre espace de travail : dossiers, fichiers et logiciels nécessaires à la réalisation de notre projet.</p>
<h1 id="quelques-explications">Quelques explications</h1>
<p>Pour développer notre projet, plusieurs logiciels sont nécessaires :</p>
<ul>
<li>Un navigateur internet, de préférence Firefox, doit être disponible pour tester la page HTML du jeu.</li>
<li>L'éditeur de texte Notepad ++ sera utilisé pour écrire le code HTML et le code Python du jeu.</li>
<li>Un serveur web est nécessaire pour faire le lien entre le code Python et la page web : le serveur utilisé sera le logiciel ZazouMiniWebServer.</li>
</ul>
<h1 id="téléchargement-de-lenvironnement-de-développement">Téléchargement de l'environnement de développement</h1>
<p>Afin de mettre tout cela en place, il suffit de télécharger l'archive ZIP en cliquant ci-dessous (le fichier ce trouve aussi sur le serveur du lycée, dans le lecteur <code>classe\votre_classe\nom_prenom\Projet 2ISN\</code>):</p>
<center>
<a href="./Projet.zip"><img src="./zipper.png" alt="Projet.zip" /></a>
</center>
<p>Cette archive doit ensuite être décompressée : un dossier &quot;Projet 2ISN&quot; est créé.</p>
<p>Le dossier décompressé contient trois sous-dossiers et un exécutable :</p>
<center>
<img src="./projetzip1.png" />
</center>
<p>L'exécutable <code>ZMWSPortable.exe</code> est le serveur web portable qui fonctionne sans installation et sans réglage particulier. Voir cette section pour l'utilisation de ZMWSPortable : <a href="#utilisation-du-zazouminiwebserver">utilisation de ZMWSPortable</a></p>
<p>Le dossier <code>Other</code> et <code>Data</code> contiennent des fichiers techniques nécessaires au fonctionnement de ZMWS : nous n'aurons pas besoin d'y toucher.</p>
<p>Le dossier <code>App</code> contient deux sous-dossiers <code>AppInfo</code> et <code>ZMWS</code> : seul ce dernier nous est utile. Il contient beaucoup de sous-dossiers et de fichiers, mais c'est le sous-dossier <code>_web.zmwsc</code> dans lequel nous allons toujours travailler.</p>
<center>
<img src="./projetzip2.png" />
</center>
<p>Ce dossier contient un ficher HTML : c'est ce fichier que nous allons éditer et qui contiendra notre jeu.</p>
<center>
<img src="./projetzip3.png" />
</center>
<p>Dans ce dossier, à côté du fichier HTML, télécharger et enregistrer les trois images suivantes, qui seront utilisées par le jeu :</p>
<p><center><img src="./rouge.png" /><img src="./plateau.png" width="300px"/><img src="./jaune.png" /></center></p>
<div class="alert alert-success">
<p><strong>Conseil</strong> : Pour un accès plus rapide aux fichiers lors des séances suivantes, je vous conseille de :<br> + Créer sur le bureau un raccourci vers l'application ZMWSPortable.<br> + Créer sur le bureau un raccourci vers le dossier <code>_web.zmwsc</code>.</p>
</div>
<h1 id="utilisation-du-zazouminiwebserver">Utilisation du ZazouMiniWebServer</h1>
<p>Pour chaque séance de travail sur le projet, la première chose à faire est de lancer le serveur web ZazouMiniWebServer en double cliquant sur l'icône créé sur le bureau.</p>
<p>Le système affiche éventuellement plusieurs avertissements de sécurité auxquels il faut répondre positivement.</p>
<p>Une fois le serveur lancé, son icône apparaît dans la zone des notifications (en bas à droite).</p>
<p>Faire un clic droit sur cet icône et choisir &quot;Visiter&quot; pour ouvrir dans le navigateur Internet le fichier <code>index.html</code>.</p>
<center>
<img src="./Zazou1.png" />
</center>
<h1 id="édition-des-document-html-et-python">Édition des document HTML et Python</h1>
<p>Pour coder notre jeu, nous utiliserons deux fichiers :</p>
<ul>
<li>le fichier <code>index.html</code> contiendra le code HTML nécessaire à l'affichage de la page dans le navigateur ;</li>
<li>le fichier <code>puissance4.py</code> contiendra le code Python du jeu.</li>
</ul>
<p>Ces deux fichiers seront édités dans le logiciel <em>notepad++</em>.</p>
<p>A chaque modification de l'un des deux fichiers, pour observer l'effet de la modification, on veillera à :</p>
<ol type="1">
<li>Enregistrer les deux fichiers.</li>
<li>Rafraîchir l'affichage de la page web dans le navigateur (touche F5).</li>
</ol>

<!-- fin de la balise div container dans le footer -->


<?php include "footer.php" ?>
