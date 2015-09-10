<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="generator" content="pandoc">
        <title>Méthode de Simpson</title>
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
                <h1 class="title">Méthode de Simpson</h1>
                                                <h3 class="date">Dernière révision : mars 2014</h3>
                            </div>
<!-- Table des matières (optionnel) -->

<nav id="TOC">
<ul>
<li><a href="#la-méthode-de-simpson">La méthode de Simpson</a><ul>
<li><a href="#le-principe">Le principe</a></li>
<li><a href="#programmation-dun-algorithme">Programmation d'un algorithme</a></li>
<li><a href="#ordre-de-la-méthode-de-simpson">Ordre de la méthode de Simpson</a></li>
</ul></li>
</ul>
</nav>

<!-- Contenu -->
            
<h1 id="la-méthode-de-simpson"><a href="#la-méthode-de-simpson">La méthode de Simpson</a></h1>
<h2 id="le-principe"><a href="#le-principe">Le principe</a></h2>
<p>On remplace la fonction <span class="math">\(f\)</span> par une parabole d'équation <span class="math">\(y=ax^2+bx+c\)</span> sur l'intervalle <span class="math">\([0 ; 1]\)</span> de telle sorte que la courbe de <span class="math">\(f\)</span> et la parabole coïncident en 0, en 1 et au milieu de l'intervalle <span class="math">\([0 ; 1]\)</span>.</p>
<p>Les coefficients <span class="math">\(a\)</span>, <span class="math">\(b\)</span> et <span class="math">\(c\)</span> doivent donc vérifier le système suivant :</p>
<p><span class="math">\[\left\{\begin{array}{l}
   c = f(0) \\
   a+b+c = f(1)\\
   0,25 a + 0,5 b + c = f(0,5)
 \end{array}\right.\]</span></p>
<div class="alert alert-dismissable alert-info">
<p><strong>Question 1</strong> : Déterminer les valeurs de <span class="math">\(a\)</span>, <span class="math">\(b\)</span> et <span class="math">\(c\)</span>, puis la première approximation de <span class="math">\(I\)</span> obtenue en calculant <span class="math">\(\int_0^1 ax^2+bx+c~dx\)</span>.</p>
</div>
<p>D'une manière générale, pour l'approximation de l'intégrale d'une fonction <span class="math">\(f\)</span> sur un intervalle <span class="math">\([a ; b]\)</span>, cette méthode conduit à la valeur approchée suivante (résultat admis) :</p>
<p><span class="math">\[ I \approx \frac{b-a}{6} \left[ f(a) + 4 f\left(\frac{a+b}{2}\right) + f(b) \right] \]</span></p>
<center>
<figure>
<img src="Simpson.png" width="400px"/>
</figure>
</center>
<p>Pour préciser le résultat, on subdivise l'intervalle en <span class="math">\(n\)</span> intervalles de même amplitude et on approche <span class="math">\(f\)</span> par un arc de parabole sur chacun des intervalles en procédant comme ci-dessus.</p>
<h2 id="programmation-dun-algorithme"><a href="#programmation-dun-algorithme">Programmation d'un algorithme</a></h2>
<p>Voici, écrit en langage Python, un algorithme permettant de calculer une valeur approchée de <span class="math">\(I\)</span> pour un nombre d'intervalles spécifié par la variable <span class="math">\(n\)</span>.</p>
<pre class="brush: python">
def f(x) :
    return 4/(1+x**2)

n = 100
somme = 0
for k in range(n) :
    a = k/n
    b = (k+1)/n
    somme = somme + (b-a)/6 * (f(a)+4*f((a+b)/2) + f(b))
print("La valeur approchée obtenue est : ", somme)
</pre>
<p>Exécuter cet algorithme pas à pas pour bien comprendre son fonctionnement (bouton &quot;Forward&gt;&quot;), puis cliquer sur le bouton &quot;Last&gt;&gt;&quot; pour voir le résultat final.</p>
<center>
<iframe width="1000" height="500" frameborder="0" src="http://pythontutor.com/iframe-embed.html#code=def+f(x)+%3A%0A++++return+4/(1%2Bx**2)%0A%0An+%3D+20%0Asomme+%3D+0%0Afor+k+in+range(n)+%3A%0A++++a+%3D+k/n%0A++++b+%3D+(k%2B1)/n%0A++++somme+%3D+somme+%2B+(b-a)/6+*+(f(a)%2B4*f((a%2Bb)/2)+%2B+f(b))%0Aprint(%22La+valeur+approch%C3%A9e+obtenue+est+%3A+%22,+somme)&cumulative=false&heapPrimitives=false&drawParentPointers=false&textReferences=false&showOnlyOutputs=false&py=3&curInstr=0&codeDivWidth=650&codeDivHeight=400"> </iframe>
</center>
<div class="alert alert-dismissable alert-info">
<p><strong>Question 2</strong> : Ouvrir le logiciel Idle et programmer cet algorithme, puis le faire fonctionner pour différentes valeurs de <span class="math">\(n\)</span>.</p>
<p>Combien d'intervalles sont nécessaires pour obtenir 2 décimales exactes ? 4 décimales exactes ?</p>
<p>Combien d'intervalles sont nécessaires pour obtenir 8 décimales exactes ?</p>
</div>
<h2 id="ordre-de-la-méthode-de-simpson"><a href="#ordre-de-la-méthode-de-simpson">Ordre de la méthode de Simpson</a></h2>
<p>On dit qu'une méthode de calcul numérique approché est d'ordre <span class="math">\(n\)</span> si elle donne la valeur exacte pour tout polynôme de degré <span class="math">\(n\)</span>, mais pas pour les polynômes de degré supérieur.</p>
<p>La méthode de Simpson est de manière évidente exacte pour les fonction polynômes de degré 2. Elle est donc au moins d'ordre 2.</p>
<p>On peut démontrer qu'elle est également exacte pour les polynômes de degré 3 (résultat admis).</p>
<div class="alert alert-dismissable alert-info">
<p><strong>Question 3</strong> : Montrer que la méthode de Simpson n'est pas d'ordre 4. Pour cela, on considère la fonction <span class="math">\(f\)</span> définie sur <span class="math">\([0 ; 1]\)</span> par <span class="math">\(f(x)=x^4\)</span>.</p>
<p>Rechercher une fonction polynôme du second degré du type <span class="math">\(ax^2+bx+c\)</span> qui coïncide avec <span class="math">\(f\)</span> en 0, en 0,5 et en 1.</p>
<p>Comparer <span class="math">\(\int_0^1 ax^2+bx+c~dx\)</span> et <span class="math">\(\int_0^1 f(x)~dx\)</span>.</p>
<p>En déduire l'ordre de la méthode de Simpson.</p>
</div>

<!-- fin de la balise div container dans le footer -->


<?php include "footer.php" ?>
