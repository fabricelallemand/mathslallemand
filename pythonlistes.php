<!DOCTYPE html >
<html lang="fr">
<head>
   <meta charset="utf-8">
  <meta name="generator" content="pandoc" />
  <meta name="author" content="Spécialité ISN - Terminale S" />
  <title>Python : listes et tableaux</title>
 
 <?php include "header.php" ?>  
 
<!--Titre de la page -->
<div class="container">
<div class="page-header">
<h1 class="title">Python : listes et tableaux</h1>
<h2 class="author">Spécialité ISN - Terminale S</h2>
<h3 class="date">Approfondissement sur la gestion des listes</h3>
</div>
<div id="TOC">
<ul>
<li><a href="#listes-simples">Listes simples</a><ul>
<li><a href="#créer-une-liste">Créer une liste</a></li>
<li><a href="#accès-aux-éléments-dune-liste">Accès aux éléments d'une liste</a></li>
<li><a href="#modification-dune-liste">Modification d'une liste</a></li>
<li><a href="#parcours-dune-liste">Parcours d'une liste</a></li>
<li><a href="#tester-si-un-élément-est-présent-dans-une-liste">Tester si un élément est présent dans une liste</a></li>
<li><a href="#autres-opérations-sur-les-listes">Autres opérations sur les listes</a></li>
</ul></li>
<li><a href="#tableaux-listes-à-deux-dimensions">Tableaux : listes à deux dimensions</a><ul>
<li><a href="#accès-aux-éléments-du-tableau">Accès aux éléments du tableau</a></li>
<li><a href="#ajout-dune-ligne-on-ajoute-une-liste-à-la-fin-de-la-liste-de-listes">Ajout d'une ligne : on ajoute une liste à la fin de la liste de listes</a></li>
<li><a href="#parcours-de-tous-les-éléments-dun-tableau">Parcours de tous les éléments d'un tableau</a></li>
</ul></li>
</ul>
</div>
<h1 id="listes-simples">Listes simples</h1>
<h2 id="créer-une-liste">Créer une liste</h2>
<ul>
<li>Par simple affectation de valeurs :</li>
</ul>
<pre class="brush:python;">ma_liste = [2014, 'Python', 3.14]</pre>
<ul>
<li>Par simple affectation d'une liste vide, qui sera remplie plus tard :</li>
</ul>
<pre class="brush:python;">ma_liste = []</pre>
<ul>
<li>Par une définition sous forme de boucle (liste en compréhension) :</li>
</ul>
<pre class="brush:python;">
ma_liste = [2*k for k in range(10)]
ma_liste = [0 for k in range(10)]
</pre>
<ul>
<li>Par la répétition d'un élément de base :</li>
</ul>
<pre class="brush:python;">ma_liste = [0]*10</pre>
<h2 id="accès-aux-éléments-dune-liste">Accès aux éléments d'une liste</h2>
<p>L'accès aux éléments d'une liste a déjà été présenté dans un cours précédent. Les éléments sont numérotés à partir de 0.</p>
<ul>
<li>Afficher le 2ème élément :</li>
</ul>
<pre class="brush:python;">
>>> ma_liste = [2014, 'Python', 3.14]
>>> ma_liste[1]
'Python'
</pre>
<h2 id="modification-dune-liste">Modification d'une liste</h2>
<ul>
<li>Modifier un élément préexistant :</li>
</ul>
<pre class="brush:python;">
>>> ma_liste = [2014, 'Python', 3.14]
>>> ma_liste[1] = 'Anaconda'
>>> ma_liste
[2014, 'Anaconda', 3.14]
</pre>
<ul>
<li>Ajout d'un élément en fin de liste :</li>
</ul>
<pre class="brush:python;">
ma_liste.append('Vacances')
ou
ma_liste = ma_liste + ['Vacances']
</pre>
<h2 id="parcours-dune-liste">Parcours d'une liste</h2>
<p>Par exemple pour afficher tous ses éléments un à un, deux versions équivalentes :</p>
<div class="row">
<div class="col-lg-6">
<pre class="brush:python;">
for k in range(len(ma_liste)) :
    print(ma_liste[k])
</pre>
</div>
<div class="col-lg-6">
<pre class="brush:python;">
for element in ma_liste :
    print(element)
</pre>
</div>
</div>
<h2 id="tester-si-un-élément-est-présent-dans-une-liste">Tester si un élément est présent dans une liste</h2>
<ul>
<li>Pour tester si le nombre 2014 est dans la liste :</li>
</ul>
<pre class="brush:python;">
if 2014 in ma_liste :
    print(True)</pre>
<h2 id="autres-opérations-sur-les-listes">Autres opérations sur les listes</h2>
<p>Voir <a href="./pdf/memo_python_listes.pdf">la fiche distribuée en début d'année</a>.</p>
<hr />
<div class="alert alert-success">
<p><strong>Exercice 1</strong></p>
<p>Écrivez un programme qui recherche le plus grand élément présent dans une liste donnée. Par exemple, si on l’appliquait à la liste</p>
<pre class="brush:python;">
[32, 5, 12, 8, 3, 75, 2, 15]
</pre>
<p>ce programme devrait afficher :</p>
<pre class="brush:python;">
le plus grand élément de cette liste a la valeur 75.
</pre>
</div>
<hr />
<div class="alert alert-success">
<p><strong>Exercice 2</strong></p>
<p>Soient les listes suivantes :</p>
<pre class="brush:python;">
t1 = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31]
t2 = ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre']</pre>
<p>Écrivez un petit programme qui insère dans la seconde liste tous les éléments de la première, de telle sorte que chaque nom de mois soit suivi du nombre de jours correspondant :</p>
<pre class="brush:python;">['Janvier', 31, 'Février', 28, 'Mars', 31, etc.]</pre>
</div>
<hr />
<h1 id="tableaux-listes-à-deux-dimensions">Tableaux : listes à deux dimensions</h1>
<p>Un tableau comme le tableau ci-dessous sera représenté en python par une liste de listes :</p>
<div class="row">
<div class="col-lg-6">
<center>
<img src="./images/selection_15_23_01_13.png" />
</center>
</div>
<div class="col-lg-6">
<pre class="brush:python;">mon_tableau = [[1, 2, 3], [4, 5, 6], [7, 8, 9]]</pre>
</div>
</div>
<h2 id="accès-aux-éléments-du-tableau">Accès aux éléments du tableau</h2>
<ul>
<li>Accès à un élément :</li>
</ul>
<pre class="brush:python;">
>>> mon_tableau[1][2]
6
</pre>
<ul>
<li>Accès à une ligne :</li>
</ul>
<pre class="brush:python;">
>>> mon_tableau[0]
[1, 2, 3]
</pre>
<h2 id="ajout-dune-ligne-on-ajoute-une-liste-à-la-fin-de-la-liste-de-listes">Ajout d'une ligne : on ajoute une liste à la fin de la liste de listes</h2>
<ul>
<li>Ajout d'une ligne :</li>
</ul>
<pre class="brush:python;">
mon_tableau.append([10, 11, 12])
</pre>
<h2 id="parcours-de-tous-les-éléments-dun-tableau">Parcours de tous les éléments d'un tableau</h2>
<ul>
<li>Afficher tous les éléments d'un tableau</li>
</ul>
<pre class="brush:python;">
for i in range(len(mon_tableau)) :
    for j in range(len(mon_tableau[i])) :
        print(mon_tableau[i][j])
</pre>
<hr />
<div class="alert alert-success">
<p><strong>Exercice 3</strong></p>
<p>Écrire un programme qui ajoute 1 à tous les éléments d'un tableau de nombres.</p>
</div>
<hr />
<div class="alert alert-success">
<p><strong>Exercice 4</strong></p>
<p>Écrire un programme qui demande une valeur entière n, puis qui crée un tableau de n lignes et n colonnes dont tous les éléments valent 0.</p>
</div>

<!-- fin de la balise div container dans le footer -->


<?php include "footer.php" ?>
