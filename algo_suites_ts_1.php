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
<h3 class="date">Calcul d'un terme d'une suite définie par une somme</h3>
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
<h1 id="enoncé">Enoncé</h1>
<p>Soit <span class="math">\((u_n)\)</span> la suite définie pour tout entier naturel <span class="math">\(n\)</span> par</p>
<p><span class="math">\[u_n=\sum_{k=0}^{n}\frac{1}{k+1}\]</span></p>
<p>Ecrire un algorithme permettant de calculer la valeur de <span class="math">\(u_n\)</span> en fonction d'une valeur donnée de l'entier <span class="math">\(n\)</span>.</p>
<h1 id="solution">Solution</h1>
<p>Une suite définie par une somme peut être également définie par une relation de récurrence.</p>
<p>En effet, pour calculer</p>
<p><span class="math">\[u_{n+1} = \sum_{k=0}^{n+1}\frac{1}{k+1}\]</span></p>
<p>on additionne <span class="math">\(\frac{1}{1} + \frac{1}{2} + \frac{1}{3} + \ldots + \frac{1}{n+1} + \frac{1}{n+2}\)</span>, ce qui revient à calculer <span class="math">\(u_n + \frac{1}{n+2}\)</span>.</p>
<p>On a donc la relation :</p>
<p><span class="math">\[u_{n+1} = u_n + \frac{1}{n+2}, \textrm{avec } u_0=1.\]</span></p>
<p>Nous allons exploiter cette relation de récurrence pour construire notre algorithme qui comportera donc une boucle 'for' pour le calcul itératif des termes successifs de la suite.</p>
<p>Nous utiliserons trois variables :</p>
<ul>
<li>'n' désigne le rang du terme à calculer ;</li>
<li>'u' désigne la valeur du terme <span class="math">\(u_n\)</span> ;</li>
<li>'k' servira de compteur dans la boucle.</li>
</ul>
<h2 id="algorithme-en-pseudo-code">Algorithme en pseudo code</h2>
<pre>
    Saisir un entier n
    Affecter la valeur 1 à la variable u
    Pour k variant de 0 à n-1, faire :
        Affecter la valeur u + 1/(k+2) à la variable u
    Afficher la valeur de la variable u
</pre>
<p>Pour le calcul de <span class="math">\(u_3\)</span>, compléter le tableau d'exécution de l'algorithme et entourer la case contenant la valeur affichée.</p>
<center>
<table>
<thead>
<tr class="header">
<th align="center">Etape</th>
<th align="center">Valeur de k</th>
<th align="center">Valeur de u</th>
</tr>
</thead>
<tbody>
<tr class="odd">
<td align="center">0</td>
<td align="center"><span class="math">\(\ldots\)</span></td>
<td align="center"><span class="math">\(\ldots\)</span></td>
</tr>
<tr class="even">
<td align="center">1</td>
<td align="center"><span class="math">\(\ldots\)</span></td>
<td align="center"><span class="math">\(\ldots\)</span></td>
</tr>
<tr class="odd">
<td align="center">2</td>
<td align="center"><span class="math">\(\ldots\)</span></td>
<td align="center"><span class="math">\(\ldots\)</span></td>
</tr>
<tr class="even">
<td align="center">3</td>
<td align="center"><span class="math">\(\ldots\)</span></td>
<td align="center"><span class="math">\(\ldots\)</span></td>
</tr>
<tr class="odd">
<td align="center"><span class="math">\(\ldots\)</span></td>
<td align="center"><span class="math">\(\ldots\)</span></td>
<td align="center"><span class="math">\(\ldots\)</span></td>
</tr>
</tbody>
</table>
</center>
<h2 id="programme-en-python">Programme en python</h2>
<pre class="brush: python;">
    n = int(input("Entrer la valeur de n : "))
    u = 1
    for k in range(n) :
        u = u + 1/(k+2)
    print("Le terme recherché est égal à : ", u)
</pre>
<p>Exécution interactive :</p>
<center>
<iframe width="1000" height="500" frameborder="0" src="http://pythontutor.com/iframe-embed.html#code=n+%3D+int(input(%22Entrer+la+valeur+de+n+%3A+%22%29%29%0Au+%3D+1%0Afor+k+in+range(n%29+%3A%0A++++u+%3D+u+%2B+1/(k%2B2%29%0Aprint(%22Le+terme+recherch%C3%A9+est+%C3%A9gal+%C3%A0+%3A+%22,+u%29&amp;origin=opt-frontend.js&amp;cumulative=false&amp;heapPrimitives=false&amp;textReferences=false&amp;py=3&amp;rawInputLstJSON=%5B%5D&amp;curInstr=0&amp;codeDivWidth=500&amp;codeDivHeight=400">
</iframe>
</center>
<h2 id="programme-en-ti-basic">Programme en Ti-Basic</h2>
<pre class="brush: ti;">
    Prompt N
    1→U
    For(K,0,N-1)
    U+1/(K+2)→U
    End
    Disp U
</pre>

<!-- fin de la balise div container dans le footer -->


<?php include "footer.php" ?>
