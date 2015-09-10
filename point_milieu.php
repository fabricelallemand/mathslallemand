<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="generator" content="pandoc">
        <title>La méthode du point milieu</title>
  <style type="text/css">code{white-space: pre;}</style>
  <style type="text/css">figure { margin-left: auto;  margin-right: auto }</style>
 

  <?php include "header.php" ?>  
 
    <style type="text/css">
table.sourceCode, tr.sourceCode, td.lineNumbers, td.sourceCode {
  margin: 0; padding: 0; vertical-align: baseline; border: none; }
table.sourceCode { width: 100%; line-height: 100%; }
td.lineNumbers { text-align: right; padding-right: 4px; padding-left: 4px; color: #aaaaaa; border-right: 1px solid #aaaaaa; }
td.sourceCode { padding-left: 5px; }
code > span.kw { color: #007020; font-weight: bold; }
code > span.dt { color: #902000; }
code > span.dv { color: #40a070; }
code > span.bn { color: #40a070; }
code > span.fl { color: #40a070; }
code > span.ch { color: #4070a0; }
code > span.st { color: #4070a0; }
code > span.co { color: #60a0b0; font-style: italic; }
code > span.ot { color: #007020; }
code > span.al { color: #ff0000; font-weight: bold; }
code > span.fu { color: #06287e; }
code > span.er { color: #ff0000; font-weight: bold; }
  </style>
  
<!--Titre de la page -->

<div class="container">
            <div class = "page-header">
                <h1 class="title">La méthode du point milieu</h1>
                                                <h3 class="date">Dernière révision : mars 2014</h3>
                            </div>
<!-- Table des matières (optionnel) -->

<nav id="TOC">
<ul>
<li><a href="#la-méthode-du-point-milieu">La méthode du point milieu</a><ul>
<li><a href="#le-principe">Le principe</a></li>
<li><a href="#expérimentation-avec-geogebra">Expérimentation avec GeoGebra</a></li>
<li><a href="#programmation-dun-algorithme">Programmation d'un algorithme</a></li>
<li><a href="#ordre-de-la-méthode-du-point-milieu">Ordre de la méthode du point milieu</a></li>
</ul></li>
</ul>
</nav>

<!-- Contenu -->
            
<h1 id="la-méthode-du-point-milieu"><a href="#la-méthode-du-point-milieu">La méthode du point milieu</a></h1>
<h2 id="le-principe"><a href="#le-principe">Le principe</a></h2>
<p>On approxime <span class="math">\(I\)</span> par l'aire du rectangle basé sur l'intervalle <span class="math">\([0 ; 1]\)</span> et de hauteur <span class="math">\(f\left(\frac{1}{2}\right)\)</span>.</p>
<center>
<figure>
<img src="point-milieu.png" width="400px"/>
</figure>
</center>
<div class="alert alert-dismissable alert-info">
<p><strong>Question 1</strong> : Quelle première approximation de <span class="math">\(I\)</span> obtient-on ?</p>
</div>
<p>Pour préciser la valeur approchée obtenue, on subdivise l'intervalle <span class="math">\([0 ; 1]\)</span> en deux intervalles de même amplitude et on répète l'opération sur chacun de ces deux intervalles, comme le suggère la figure ci-dessous.</p>
<center>
<figure>
<img src="point-milieu2.png" width="400px"/>
</figure>
</center>
<div class="alert alert-dismissable alert-info">
<p><strong>Question 2</strong> : Quelle nouvelle valeur approchée obtient-on ?</p>
</div>
<p>Pour préciser encore le résultat, on subdivise l'intervalle en <span class="math">\(n\)</span> intervalles de même amplitude et on calcule la somme des aires des <span class="math">\(n\)</span> rectangles obtenus en prenant à chaque fois comme hauteur l'image par <span class="math">\(f\)</span> du milieu de l'intervalle considéré.</p>
<h2 id="expérimentation-avec-geogebra"><a href="#expérimentation-avec-geogebra">Expérimentation avec GeoGebra</a></h2>
<p>Sur la figure interactive ci-dessus, le curseur <span class="math">\(n\)</span> permet de définir le nombre de rectangles utilisés pour approximer l'intégrale.</p>
<center>
<iframe scrolling="no" src="https://www.geogebratube.org/material/iframe/id/95391/width/711/height/344/border/888888/rc/false/ai/false/sdz/true/smb/false/stb/false/stbh/true/ld/false/sri/true/at/preferhtml5" width="711px" height="344px" style="border:0px;"> </iframe>
</center>
<div class="alert alert-dismissable alert-info">
<p><strong>Question 3</strong> : Faire varier <span class="math">\(n\)</span> et observer les différentes valeurs approchées obtenues.</p>
<p>Combien de rectangles sont nécessaires pour obtenir 2 décimales exactes ? 4 décimales exactes ?</p>
</div>
<h2 id="programmation-dun-algorithme"><a href="#programmation-dun-algorithme">Programmation d'un algorithme</a></h2>
<p>Voici, écrit en langage Python, un algorithme permettant de calculer une valeur approchée de <span class="math">\(I\)</span> pour un nombre de rectangles spécifié par la variable <span class="math">\(n\)</span>.</p>

<pre class="brush: python">
def f(x) :
    return 4/(1+x**2)

n = 40
somme = 0
for k in range(n) :
    a = k/n
    b = (k+1)/n
    somme = somme + f( ( a + b ) / 2 ) * (b-a)
print("La valeur approchée obtenue est : ", somme)
</pre>

Exécuter cet algorithme pas à pas pour bien comprendre son fonctionnement (bouton &quot;Forward&gt;&quot;), puis cliquer sur le bouton &quot;Last&gt;&gt;&quot; pour voir le résultat final.
<center>
<iframe width="1000" height="500" frameborder="0" src="http://pythontutor.com/iframe-embed.html#code=def+f(x)+%3A%0A++++return+4/(1%2Bx**2)%0A%0An+%3D+40%0Asomme+%3D+0%0Afor+k+in+range(n)+%3A%0A++++a+%3D+k/n%0A++++b+%3D+(k%2B1)/n%0A++++somme+%3D+somme+%2B+f(+(+a+%2B+b+)+/+2+)+*+(b-a)%0Aprint(%22La+valeur+approch%C3%A9e+obtenue+est+%3A+%22,+somme)&cumulative=false&heapPrimitives=false&drawParentPointers=false&textReferences=false&showOnlyOutputs=false&py=3&curInstr=0&codeDivWidth=600&codeDivHeight=400"> </iframe>
</center>
<div class="alert alert-dismissable alert-info">
<p><strong>Question 4</strong> : Ouvrir le logiciel Idle et programmer cet algorithme, puis le faire fonctionner pour différentes valeurs de <span class="math">\(n\)</span>.</p>
<p>Combien de rectangles sont nécessaires pour obtenir 8 décimales exactes (pour répondre à cette question, on pourra modifier l'algorithme de départ) ?</p>
</div>
<h2 id="ordre-de-la-méthode-du-point-milieu"><a href="#ordre-de-la-méthode-du-point-milieu">Ordre de la méthode du point milieu</a></h2>
<p>On dit qu'une méthode de calcul numérique approché est d'ordre <span class="math">\(n\)</span> si elle donne la valeur exacte pour tout polynôme de degré <span class="math">\(n\)</span>, mais pas pour les polynômes de degré supérieur.</p>
<p>La méthode des rectangles étudiée dans le cours est d'ordre 0 : elles est exacte pour les fonctions constantes (polynômes de degré 0), mais pas pour les fonctions affines (polynômes de degré 1).</p>
<div class="alert alert-dismissable alert-info">
<p><strong>Question 5</strong> : Montrer que la méthode du point milieu est d'ordre au moins 1. Pour cela, on considère une fonction affine quelconque <span class="math">\(f\)</span> du type <span class="math">\(f(x)=mx+p\)</span>, définie sur l'intervalle <span class="math">\([0 ; 1]\)</span> (pour simplifier). Calculer <span class="math">\(\int_0^1 f(x)~dx\)</span> et comparer le résultat avec la valeur approchée fournie par la méthode du point milieu dans le cas de l'utilisation d'un seul rectangle.</p>
</div>
<div class="alert alert-dismissable alert-info">
<p><strong>Question 6</strong> : Montrer que la méthode du point milieu n'est pas d'ordre 2. Pour cela, on considère la fonction carré définie sur <span class="math">\([0 ; 1]\)</span> par <span class="math">\(f(x)=x^2\)</span>. Calculer <span class="math">\(\int_0^1 f(x)~dx\)</span> et comparer le résultat avec la valeur approchée fournie par la méthode du point milieu dans le cas de l'utilisation d'un seul rectangle.</p>
</div>

<!-- fin de la balise div container dans le footer -->


<?php include "footer.php" ?>
