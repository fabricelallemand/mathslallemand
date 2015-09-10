<!DOCTYPE html >
<html lang="fr">
<head>
   <meta charset="utf-8">
  <meta name="generator" content="pandoc" />
  <title>Suites et algorithmes</title>
  <script src="//cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML" type="text/javascript"></script>
 
 <?php include "header.php" ?>  
 
<!--Titre de la page -->
<div class="container">
<div class="page-header">
<h1 class="title">Suites et algorithmes</h1>
<h3 class="date">Calcul de seuil dans le cas d'une suite convergente.</h3>
</div>
<div id="TOC">
<ul>
<li><a href="#enoncé">Enoncé</a></li>
<li><a href="#solution">Solution</a><ul>
<li><a href="#algorithme-en-pseudo-code">Algorithme en pseudo code</a></li>
<li><a href="#programme-en-python">Programme en python</a></li>
<li><a href="#programme-en-ti-basic">Programme en Ti-Basic</a></li>
</ul></li>
</ul>
</div>
<p>Le cas de la détermination d'un seuil pour une suite croissante de limite infinie a été traité en cours.</p>
<p>On s'intéresse ici à une suite croissante et convergente.</p>
<h1 id="enoncé">Enoncé</h1>
<p>Soit <span class="math">\((u_n)\)</span> la suite définie pour tout entier naturel <span class="math">\(n\)</span> par <span class="math">\(u_0=1\)</span> et</p>
<p><span class="math">\[u_{n+1} = 0,5 u_n + 1\]</span></p>
<p>On admet ici que cette suite est croissante et converge vers 2.</p>
<p>Ecrire un algorithme permettant de déterminer à partir de quel rang on a <span class="math">\(2-u_n &lt; 10^{-5}\)</span>.</p>
<h1 id="solution">Solution</h1>
<p>D'après les définitions du cours, tout intervalle ouvert contenant 2 contient tous les termes de la suite à partir d'un certain rang.</p>
<p>En particulier, en posant <span class="math">\(\varepsilon = 10^{-5}\)</span>, l'intervalle ouvert <span class="math">\(]2-\varepsilon ; 2+\varepsilon[\)</span> contient tous les termes de la suite à partir d'un certain rang : c'est ce rang (seuil) que nous devons déterminer.</p>
<p>Nous utiliserons deux variables :</p>
<ul>
<li>'n' désigne le rang du terme à calculer ;</li>
<li>'u' désigne la valeur du terme <span class="math">\(u_n\)</span> ;</li>
</ul>
<h2 id="algorithme-en-pseudo-code">Algorithme en pseudo code</h2>
<pre>
    Affecter la valeur 0 à la variable n
    Affecter la valeur 1 à la variable u
    Tant que 2 - u > 10^(-5)
        Affecter la valeur n+1 à la variable n
        Affecter la valeur 0,5 u + 1 à la variable u
    Afficher la valeur de la variable n
</pre>
<p>Il est certain que ce programme se termine, c'est-à-dire que la boucle <code>Tant que</code> se termine car on sait que la suite converge vers 2 et donc <span class="math">\(u_n\)</span> finit forcément par &quot;entrer&quot; dans l'intervalle <span class="math">\(]2-\varepsilon ; 2+\varepsilon[\)</span>.</p>
<h2 id="programme-en-python">Programme en python</h2>
<pre class="brush: python;">
    n = 0
    u = 1
    while 2 - u > 10**(-5) :
        n = n + 1
        u = 0.5 * u + 1
    print("Le seuil est le rang : ", n)
</pre>
<p>Exécution interactive :</p>
<center>
<iframe width="1000" height="400" frameborder="0" src="http://pythontutor.com/iframe-embed.html#code=n+%3D+0%0Au+%3D+1%0Awhile+2+-+u+%3E+10**(-5%29+%3A%0A++++n+%3D+n+%2B+1%0A++++u+%3D+0.5+*+u+%2B+1%0Aprint(%22Le+seuil+est+le+rang+%3A+%22,+n%29&amp;origin=opt-frontend.js&amp;cumulative=false&amp;heapPrimitives=false&amp;textReferences=false&amp;py=3&amp;rawInputLstJSON=%5B%5D&amp;curInstr=0&amp;codeDivWidth=500&amp;codeDivHeight=400">
</iframe>
</center>
<h2 id="programme-en-ti-basic">Programme en Ti-Basic</h2>
<pre class="brush: ti;">
    0→N
    1→U
    While 2-U>10^(-5)
    N+1→N
    0.5*U+1→U
    End
    Disp N
</pre>

<!-- fin de la balise div container dans le footer -->


<?php include "footer.php" ?>
