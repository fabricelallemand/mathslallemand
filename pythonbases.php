<!DOCTYPE html >
<html lang="fr">
<head>
   <meta charset="utf-8">
  <meta name="generator" content="pandoc" />
  <meta name="author" content="Spécialité ISN - Terminale S" />
  <title>Premiers pas en python</title>
  <script src="//cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML" type="text/javascript"></script>
 
 <?php include "header.php" ?>  
 
<!--Titre de la page -->
<div class="container">
<div class="page-header">
<h1 class="title">Premiers pas en python</h1>
<h2 class="author">Spécialité ISN - Terminale S</h2>
</div>
<div id="TOC">
<ul>
<li><a href="#entrées-et-sorties">Entrées et sorties</a></li>
<li><a href="#affectation-de-variables">Affectation de variables</a></li>
<li><a href="#types-de-variables">Types de variables</a></li>
<li><a href="#instructions-conditionnelles">Instructions conditionnelles</a></li>
<li><a href="#instruction-répétitives">Instruction répétitives</a></li>
</ul>
</div>
<div class="alert alert-info">
<p>L'objectif de ce travail est de connaître en python toutes les structures algorithmiques étudiées depuis la seconde en cours de mathématiques.</p>
</div>
<p>Vous testerez chacune des commandes présentées dans une console python.</p>
<h1 id="entrées-et-sorties">Entrées et sorties</h1>
<pre class="brush: python">
input("Quel est votre prénom ?")
prenom=input("Quel est votre prénom ?")
print("Bonjour ",prenom," ! ")
</pre>
<p>Que se passe-t-il exactement lors de l’exécution du programme précédent ?</p>
<h1 id="affectation-de-variables">Affectation de variables</h1>
<p>Tester et expliquer :</p>
<pre class="brush: python">
n=8
p=2.5
a=n*p
print(a)
p=6
print(a)
</pre>
<pre class="brush: python">
a, b, c=3,2.5,100
print(a)
print(b)
print(c)
</pre>
<h1 id="types-de-variables">Types de variables</h1>
<p>Les principaux types de variables en Python sont :</p>
<ul>
<li>les entiers : type <code>int</code>. Ils supportent les opérations +, -, *, /, ** (puissance), // (division entière), % (reste de la division entière), <code>abs()</code> (valeur absolue).</li>
<li>les booléens sont des variables qui ne peuvent prendre que deux valeurs : <code>False</code> ou <code>True</code>. Ils sont générés par les opérateurs de comparaison &lt;, &gt;, &lt;=, &gt;=, == (test d’égalité), != (test de différence) et les opérateurs logiques <code>not</code>, <code>or</code> et <code>and</code>.</li>
<li>les nombres flottants : type <code>float</code>. Ils supportent les opérations usuelles.</li>
<li>les chaînes de caractères : type <code>string</code>.</li>
<li>les listes : type <code>list</code>.</li>
</ul>
<p>Observer le résultat des commandes suivantes :</p>
<pre class="brush: python">
a=2012
print(type(a))
</pre>
<pre class="brush: python">
a=2012<=2013
print("a est égal à :",a,"et son type est :",type(a))
</pre>
<pre class="brush: python">
a=3.14   #le point est le séparateur décimal
print(type(a))
</pre>
<pre class="brush: python">
a=input("Entrer un nombre entier")
print("a est égal à :",a,"et son type est :",type(a))
</pre>
<p>Expliquer le résultat.</p>
<p>Observer ce qui se passe maintenant :</p>
<pre class="brush: python">
a=int(input("Entrer un nombre entier"))
print("a est égal à :",a,"et son type est :",type(a))
</pre>
<pre class="brush: python">
a=float(input("Entrer un nombre flottant"))
print("a est égal à :",a,"et son type est :",type(a))
</pre>
<pre class="brush: python">
a=["stylo","compas","équerre","calculatrice"]
print("a est égal à :",a,"et son type est :",type(a))
print(a[0])
print(a[2])
print(a[0:2])
</pre>
<h1 id="instructions-conditionnelles">Instructions conditionnelles</h1>
<p>Un exemple : observer, tester et commenter.</p>
<pre class="brush: python">
a = 2
if a > 0 :
     print("a est positif")
elif a < 0 :
     print("a est négatif")
else:
     print("a est nul")
</pre>
<div class="alert alert-success">
<p><strong>Exercice 1</strong></p>
<p>Écrire un programme qui demande le poids, en grammes, d’une lettre prioritaire et qui retourne le prix du timbre adéquat.</p>
<center>
<img src="./images/ytkscz.png" />
</center>
</div>
<div class="alert alert-success">
<p><strong>Exercice 2</strong></p>
<p>Écrire un programme qui résout une équation du second degré dont les coefficients a, b et c sont entrés par l’utilisateur.</p>
</div>
<h1 id="instruction-répétitives">Instruction répétitives</h1>
<p>Un exemple : observer, tester et commenter.</p>
<pre class="brush: python">
a = 0
while (a < 7): # (n’oubliez pas le double point !)
     a = a + 1 # (n’oubliez pas l’indentation !)
     print(a)
</pre>
<p>Un autre exemple :</p>
<p>observer, tester et commenter.</p>
<pre class="brush: python">
for i in range(20):
     print(i)

for i in range(5,20):
     print(i)
for i in range(5,20,2):
     print(i)

for lettre in "ciao":
     print(lettre, end=" ")
</pre>
<div class="alert alert-success">
<p><strong>Exercice 3</strong></p>
<p>Écrire un programme qui affiche les 20 premiers termes de la table de multiplication par 6 (utiliser une instruction <code>while</code>).</p>
</div>
<div class="alert alert-success">
<p><strong>Exercice 4</strong></p>
<p>Écrire un programme qui affiche un tableau de valeurs pour la fonction <span class="math">\(f : x\mapsto x^2-2 x-2\)</span>. L’utilisateur choisit la première valeur de <span class="math">\(x\)</span>, le pas, ainsi que le nombre de valeurs à calculer (utiliser une boucle <code>for</code>).</p>
</div>

<!-- fin de la balise div container dans le footer -->


<?php include "footer.php" ?>
