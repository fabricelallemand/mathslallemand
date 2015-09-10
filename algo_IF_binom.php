<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="generator" content="pandoc">
        <title>Algorithme de calcul de l'intervalle de fluctuation</title>
  <style type="text/css">code{white-space: pre;}</style>
  <style type="text/css">figure { margin-left: auto;  margin-right: auto }</style>
 

  <?php include "header.php" ?>  
 
    <style type="text/css">
th {
   text-align: center;
}
table.sourceCode, tr.sourceCode, td.lineNumbers, td.sourceCode {
  margin: 0; padding: 0; vertical-align: baseline; border: none; }
table.sourceCode { width: 100%; }
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
                <h1 class="title">Algorithme de calcul de l'intervalle de fluctuation</h1>
                                                <h3 class="date">Dernière révision : 21 avril 2014</h3>
                            </div>
<!-- Table des matières (optionnel) -->


<!-- Contenu -->
            
<p>L'algorithme utilisé pour obtenir l'intervalle de fluctuation au seuil de <math display="inline" xmlns="http://www.w3.org/1998/Math/MathML"><mrow><mn>5</mn><mo>%</mo></mrow></math> pour la fréquence associée à une variable aléatoire suivant la loi binomiale <math display="inline" xmlns="http://www.w3.org/1998/Math/MathML"><mrow><mo>ℬ</mo><mo stretchy="false">(</mo><mi>n</mi><mo>,</mo><mi>p</mi><mo stretchy="false">)</mo></mrow></math> peut s'écrire ainsi, en pseudo code :</p>
<pre><code>Entrer n
Entrer p
Affecter à la variable a la valeur 0
Affecter à la variable b la valeur 0
Tant que P(X&lt;a) &lt; 0,025 faire :
    Ajouter 1 à la variable a
Fin tant que
Tant que P(X&lt;b) &lt; 0,975 faire :
    Ajouter 1 à la variable b
Fin tant que
Afficher a et b</code></pre>
<p>On peut améliorer un peu cet algorithme en remarquant que le nombre <math display="inline" xmlns="http://www.w3.org/1998/Math/MathML"><mrow><mi>b</mi></mrow></math> est toujours supérieur ou égal au nombre <math display="inline" xmlns="http://www.w3.org/1998/Math/MathML"><mrow><mi>a</mi></mrow></math> : il n'est donc pas judicieux d'initialiser <math display="inline" xmlns="http://www.w3.org/1998/Math/MathML"><mrow><mi>b</mi></mrow></math> à la valeur 0 car beaucoup de calculs inutiles sont effectués, et ces calculs prennent du temps, notamment sur la calculatrice.</p>
<p>On modifiera donc l'algorithme comme suit :</p>
<pre><code>Entrer n
Entrer p
Affecter à la variable a la valeur 0
Tant que P(X&lt;a) &lt; 0,025 faire :
    Ajouter 1 à la variable a
Fin tant que
Affecter à la variable b la valeur a
Tant que P(X&lt;b) &lt; 0,975 faire :
    Ajouter 1 à la variable b
Fin tant que
Afficher a et b</code></pre>
<p>Il est possible de programmer cet algorithme dans la calculatrice, cependant le temps de calcul est plutôt long. On peut accélérer le programme en réfléchissant un peu plus à notre algorithme.</p>
<p>A chaque fois que l'on demande le calcul de <math display="inline" xmlns="http://www.w3.org/1998/Math/MathML"><mrow><mi>P</mi><mo stretchy="false">(</mo><mi>X</mi><mo>&lt;</mo><mi>k</mi><mo stretchy="false">)</mo></mrow></math>, la calculatrice calcule <math display="inline" xmlns="http://www.w3.org/1998/Math/MathML"><mrow><mi>P</mi><mo stretchy="false">(</mo><mi>X</mi><mo>=</mo><mn>0</mn><mo stretchy="false">)</mo></mrow></math>, <math display="inline" xmlns="http://www.w3.org/1998/Math/MathML"><mrow><mi>P</mi><mo stretchy="false">(</mo><mi>X</mi><mo>=</mo><mn>1</mn><mo stretchy="false">)</mo></mrow></math>, <math display="inline" xmlns="http://www.w3.org/1998/Math/MathML"><mrow><mi>P</mi><mo stretchy="false">(</mo><mi>X</mi><mo>=</mo><mn>2</mn><mo stretchy="false">)</mo></mrow></math>, ..., <math display="inline" xmlns="http://www.w3.org/1998/Math/MathML"><mrow><mi>P</mi><mo stretchy="false">(</mo><mi>X</mi><mo>=</mo><mi>k</mi><mo>−</mo><mn>1</mn><mo stretchy="false">)</mo></mrow></math> et additionne toutes ces probabilités. Elle recalcule donc beaucoup de fois les mêmes probabilités : c'est inutile. Il est préférable de conserver la somme précédente et d'utiliser le fait que : <math display="inline" xmlns="http://www.w3.org/1998/Math/MathML"><mrow><mi>P</mi><mo stretchy="false">(</mo><mi>X</mi><mo>&lt;</mo><mi>k</mi><mo>+</mo><mn>1</mn><mo stretchy="false">)</mo><mo>=</mo><mi>P</mi><mo stretchy="false">(</mo><mi>X</mi><mo>&lt;</mo><mi>k</mi><mo stretchy="false">)</mo><mo>+</mo><mi>P</mi><mo stretchy="false">(</mo><mi>X</mi><mo>=</mo><mi>k</mi><mo stretchy="false">)</mo></mrow></math>.</p>
<p>La troisième version de l'algorithme sera donc (s est la variable contenant <math display="inline" xmlns="http://www.w3.org/1998/Math/MathML"><mrow><mi>P</mi><mo stretchy="false">(</mo><mi>X</mi><mo>&lt;</mo><mi>k</mi><mo stretchy="false">)</mo></mrow></math>) :</p>
<pre><code>Entrer n
Entrer p
Affecter à la variable a la valeur 0
Affecter à la variable s la valeur P(X=0)
Tant que s &lt; 0,025 faire :
    Ajouter 1 à la variable a
    Ajouter P(X=a) à la variable s
Fin tant que
Affecter à la variable b la valeur a
Tant que s &lt; 0,975 faire :
    Ajouter 1 à la variable b
    Ajouter P(X=b) à la variable s
Fin tant que
Afficher a et b</code></pre>
<p>Sur une calculatrice type TI-83, on obtient le programme suivant (sachant que la fonction <code>binomFdp(n, p, k)</code> retourne la valeur <math display="inline" xmlns="http://www.w3.org/1998/Math/MathML"><mrow><mi>P</mi><mo stretchy="false">(</mo><mi>X</mi><mo>=</mo><mi>k</mi><mo stretchy="false">)</mo></mrow></math>) :</p>
<pre><code>Prompt N
Prompt P
0→A
binomFdp(N,P,A)→S
While S&lt;0.025
A+1→A
S+binomFdp(N,P,A)→S
End
A→B
While S&lt;0.975
B+1→B
S+binomFdp(N,P,A)→S
End
Disp &quot;A=&quot;,A
Disp &quot;B=&quot;,B</code></pre>
<p>Pour tester votre programme, voici quelques exemples de résultats :</p>
<table class="table table-striped table-bordered table-hover" >
<thead>
<tr class="header">
<th text-align="center">n</th>
<th align="center">p</th>
<th align="center">a</th>
<th align="center">b</th>
</tr>
</thead>
<tbody>
<tr class="odd">
<td align="center">100</td>
<td align="center">0.3</td>
<td align="center">21</td>
<td align="center">39</td>
</tr>
<tr class="even">
<td align="center">150</td>
<td align="center">0.75</td>
<td align="center">102</td>
<td align="center">123</td>
</tr>
</tbody>
</table>
<p>Voici le programme en python, sachant que la commande <code>binom.pmf(k, n, p)</code> retourne la valeur <math display="inline" xmlns="http://www.w3.org/1998/Math/MathML"><mrow><mi>P</mi><mo stretchy="false">(</mo><mi>X</mi><mo>=</mo><mi>k</mi><mo stretchy="false">)</mo></mrow></math>) :</p>
<pre class="sourceCode python"><code class="sourceCode python"><span class="ch">from</span> scipy.stats <span class="ch">import</span> binom

<span class="kw">def</span> IFBinom(n, p) :
    <span class="co">&quot;&quot;&quot;Calcul des valeurs de a et b pour l&#39;intervalle de fluctuation à 95 %&quot;&quot;&quot;</span>
    a = <span class="dv">0</span>
    s = binom.pmf(a, n, p)
    <span class="kw">while</span> s &lt; <span class="fl">0.025</span> :
        a = a + <span class="dv">1</span>
        s = s + binom.pmf(a, n, p)
    b = a
    <span class="kw">while</span> s &lt; <span class="fl">0.975</span> :
        b = b + <span class="dv">1</span>
        s = s + binom.pmf(b, n, p)
    <span class="kw">print</span>(<span class="st">&quot;L&#39;intervalle de fluctuation est [&quot;</span>,a,<span class="st">&quot;/&quot;</span>,n,<span class="st">&quot; ; &quot;</span>,b,<span class="st">&quot;/&quot;</span>,n,<span class="st">&quot;].&quot;</span>)</code></pre>
<p>et en R, sachant que la commande <code>dbinom(k, n, p)</code> retourne la valeur <math display="inline" xmlns="http://www.w3.org/1998/Math/MathML"><mrow><mi>P</mi><mo stretchy="false">(</mo><mi>X</mi><mo>=</mo><mi>k</mi><mo stretchy="false">)</mo></mrow></math> :</p>
<pre class="sourceCode R"><code class="sourceCode r">IFBinom &lt;- function(n, p) {
  a &lt;- <span class="dv">0</span>;
  s &lt;- <span class="kw">dbinom</span>(a, n, p);
  while (s&lt;<span class="fl">0.025</span>){a &lt;- a<span class="dv">+1</span>; s &lt;- s + <span class="kw">dbinom</span>(a, n, p)}
  b &lt;- a;
  while (s&lt;<span class="fl">0.975</span>){b &lt;- b<span class="dv">+1</span>; s &lt;- s + <span class="kw">dbinom</span>(b, n, p)}
  <span class="kw">cat</span>(<span class="st">&quot;L&#39;intervalle de fluctuation est : [&quot;</span>,a,<span class="st">&quot;/&quot;</span>,n,<span class="st">&quot; ; &quot;</span>,b,<span class="st">&quot;/&quot;</span>,n,<span class="st">&quot;].&quot;</span>)
}</code></pre>

<!-- fin de la balise div container dans le footer -->


<?php include "footer.php" ?>
