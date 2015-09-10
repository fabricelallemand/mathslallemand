<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="generator" content="pandoc">
        <title>Méthode de Monte-Carlo</title>
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
                <h1 class="title">Méthode de Monte-Carlo</h1>
                                                <h3 class="date">Dernière révision : mars 2014</h3>
                            </div>
<!-- Table des matières (optionnel) -->

<nav id="TOC">
<ul>
<li><a href="#la-méthode-de-monte-carlo">La méthode de Monte-Carlo</a><ul>
<li><a href="#le-principe">Le principe</a></li>
<li><a href="#expérimentation-avec-geogebra">Expérimentation avec GeoGebra</a></li>
<li><a href="#programmation-dun-algorithme">Programmation d'un algorithme</a></li>
<li><a href="#évaluation-de-lefficacité-de-la-méthode-de-monte-carlo">Évaluation de l'efficacité de la méthode de Monte-Carlo</a></li>
</ul></li>
</ul>
</nav>

<!-- Contenu -->
            
<h1 id="la-méthode-de-monte-carlo"><a href="#la-méthode-de-monte-carlo">La méthode de Monte-Carlo</a></h1>
<h2 id="le-principe"><a href="#le-principe">Le principe</a></h2>
<p>Cette méthode repose sur un calcul de probabilités.</p>
<p>Une expérience aléatoire consiste à choisir au hasard un point dans le rectangle ABCD représenté ci-dessous.</p>
<center>
<figure>
<img src="monte_carlo.png" width="400px"/>
</figure>
</center>
<p>On admet que la probabilité que le point choisi se trouve dans la zone colorée est proportionnelle à l'aire de cette zone.</p>
<p>On peut donc calculer cette probabilité : <span class="math">\(p = \frac{\textrm{Aire de la zone}}{\textrm{Aire de ABCD}} = \frac{I}{4}\)</span>.</p>
<p>La méthode de Monte-Carlo consiste à réaliser un échantillon de <span class="math">\(n\)</span> points <span class="math">\(M_i(x_i ; y_i)\)</span> du rectangle ABCD et de calculer la fréquence <span class="math">\(f\)</span> du nombre de points se trouvant dans la zone colorée, c'est-à-dire tels que <span class="math">\(y_i &lt; f(x_i)\)</span>.</p>
<p>D'après la loi des grands nombres, si <span class="math">\(n\)</span> est assez grand, cette fréquence <span class="math">\(f\)</span> sera proche de la probabilité <span class="math">\(p\)</span>. On aura donc : <span class="math">\(I \approx 4f\)</span>.</p>
<h2 id="expérimentation-avec-geogebra"><a href="#expérimentation-avec-geogebra">Expérimentation avec GeoGebra</a></h2>
<p>Dans la figure interactive ci-dessous, le curseur permet de modifier le nombre de points aléatoires. La valeur approchée de <span class="math">\(I\)</span> obtenue est affichée de façon dynamique.</p>
<center>
<iframe scrolling="no" src="https://www.geogebratube.org/material/iframe/id/94940/width/606/height/346/border/888888/rc/false/ai/false/sdz/true/smb/false/stb/false/stbh/true/ld/false/sri/true/at/preferhtml5" width="606px" height="346px" style="border:0px;"> </iframe>
</center>
<div class="alert alert-dismissable alert-info">
<p><strong>Question 1</strong> : Noter quelques valeurs approchées obtenues.</p>
</div>
<h2 id="programmation-dun-algorithme"><a href="#programmation-dun-algorithme">Programmation d'un algorithme</a></h2>
<p>Voici, écrit en langage Python, un algorithme permettant de calculer une valeur approchée de <span class="math">\(I\)</span> pour un nombre de points aléatoires spécifié par la variable <span class="math">\(n\)</span>.</p>
<pre class="brush: python">
from random import uniform

def f(x) :
    return 4/(1+x**2)

n = 30

nbPoints = 0
for k in range(n) :
    x = uniform(0,1)
    y = uniform(0,4)
    if y < f(x) :
        nbPoints = nbPoints + 1
print("La valeur approchée obtenue est : ", 4*nbPoints/n)
</pre>

<p>Dans ce programme, on utilise la fonction &quot;uniform(a, b)&quot; qui retourne un nombre réel aléatoire choisi dans l'intervalle <span class="math">\([a ; b]\)</span>, à l'aide de la loi uniforme. Cette fonction se trouve dans la bibliothèque &quot;random&quot;.</p>
<p>Exécuter cet algorithme pas à pas pour bien comprendre son fonctionnement (bouton &quot;Forward&gt;&quot;), puis cliquer sur le bouton &quot;Last&gt;&gt;&quot; pour voir le résultat final.</p>
<center>
<iframe width="1000" height="500" frameborder="0" src="http://pythontutor.com/iframe-embed.html#code=from+random+import+uniform%0A%0Adef+f(x)+%3A%0A++++return+4/(1%2Bx**2)%0A%0An+%3D+30%0AnbPoints+%3D+0%0Afor+k+in+range(n)+%3A%0A++++x+%3D+uniform(0,1)%0A++++y+%3D+uniform(0,4)%0A++++if+y+%3C+f(x)+%3A%0A++++++++nbPoints+%3D+nbPoints+%2B+1%0Aprint(%22La+valeur+approch%C3%A9e+obtenue+est+%3A+%22,+4*nbPoints/n)&cumulative=false&heapPrimitives=false&drawParentPointers=false&textReferences=false&showOnlyOutputs=false&py=3&curInstr=0&codeDivWidth=650&codeDivHeight=400"> </iframe>
</center>
<div class="alert alert-dismissable alert-info">
<p><strong>Question 2</strong> : Ouvrir le logiciel Idle et programmer cet algorithme, puis le faire fonctionner pour différentes valeurs de <span class="math">\(n\)</span>. Noter les résultats obtenus.</p>
</div>
<h2 id="évaluation-de-lefficacité-de-la-méthode-de-monte-carlo"><a href="#évaluation-de-lefficacité-de-la-méthode-de-monte-carlo">Évaluation de l'efficacité de la méthode de Monte-Carlo</a></h2>
<p>On sait que, dans 95 % des cas, la fréquence observée lors de la réalisation d'un échantillon appartient à l'intervalle de fluctuation étudié en seconde :</p>
<p><span class="math">\[IF = \left[p-\frac{1}{\sqrt{n}} ; p+\frac{1}{\sqrt{n}}\right]\]</span></p>
<div class="alert alert-dismissable alert-info">
<p><strong>Question 3</strong> : En déduire combien de points il faut choisir au minimum pour espérer obtenir avec cette méthode une valeur approchée <span class="math">\(I\approx 4f\)</span> à <span class="math">\(10^{-4}\)</span> près.</p>
</div>

<!-- fin de la balise div container dans le footer -->


<?php include "footer.php" ?>
