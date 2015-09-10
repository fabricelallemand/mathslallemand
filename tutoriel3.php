<!DOCTYPE html >
<html lang="fr">
<head>
   <meta charset="utf-8">
  <meta name="generator" content="pandoc" />
  <title>Étape 3 : La partie HTML du projet</title>
  <style type="text/css">code{white-space: pre;}</style>
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
<style type="text/css">figure { margin-left: auto;  margin-right: auto }</style>
 
 <?php include "header.php" ?>  
 
<!--Titre de la page -->
<div class="container">
<div class="page-header">
<h1 class="title">Étape 3 : La partie HTML du projet</h1>
<h3 class="date">Seconde - 2ISN</h3>
</div>
<p>Cette troisième étape a pour objectif de mettre en place la structure de la page web du jeu Puissance 4.</p>
<p>Ouvrir le fichier <code>index.html</code> dans Notepad++ <strong>et</strong> dans la navigateur web.</p>
<p>Pour l'instant, son contenu est le suivant :</p>
<pre class="sourceCode html"><code class="sourceCode html"><span class="kw">&lt;html&gt;</span>
    <span class="kw">&lt;head&gt;</span>
        <span class="kw">&lt;meta</span><span class="ot"> charset=</span><span class="st">&quot;utf_8&quot;</span><span class="kw">&gt;</span>
        <span class="kw">&lt;script</span><span class="ot"> src=</span><span class="st">&quot;./src/brython.js&quot;</span><span class="kw">&gt;&lt;/script&gt;</span>
    <span class="kw">&lt;/head&gt;</span>
    <span class="kw">&lt;body</span><span class="ot"> onload=</span><span class="st">&quot;brython()&quot;</span><span class="kw">&gt;</span>
        <span class="kw">&lt;center&gt;</span>
            <span class="kw">&lt;h1&gt;</span>Puissance 4<span class="kw">&lt;/h1&gt;</span>
            
            
        <span class="kw">&lt;/center&gt;</span>

    <span class="kw">&lt;/body&gt;</span>
<span class="kw">&lt;/html&gt;</span></code></pre>
<p>Nous allons inclure les images des pions rouges et des pions jaunes et réserver un emplacement pour l'image du plateau de jeu.</p>
<p>Insérer le code suivant juste sous la ligne commençant par <code>&lt;h1&gt;</code> :</p>
<pre class="sourceCode html"><code class="sourceCode html"><span class="kw">&lt;img</span><span class="ot"> class=</span><span class="st">&quot;pion&quot;</span><span class="ot"> id=</span><span class="st">&quot;pion_rouge&quot;</span><span class="ot"> src=</span><span class="st">&quot;./rouge.png&quot;</span><span class="ot"> width=</span><span class="st">&quot;80&quot;</span><span class="kw">&gt;</span>
<span class="kw">&lt;canvas</span><span class="ot"> id=</span><span class="st">&quot;jeu&quot;</span><span class="ot"> width=</span><span class="st">&quot;602&quot;</span><span class="ot"> height=</span><span class="st">&quot;516&quot;</span><span class="kw">&gt;&lt;/canvas&gt;</span>
<span class="kw">&lt;img</span><span class="ot"> class=</span><span class="st">&quot;pion&quot;</span><span class="ot"> id=</span><span class="st">&quot;pion_jaune&quot;</span><span class="ot"> src=</span><span class="st">&quot;./jaune.png&quot;</span><span class="ot"> width=</span><span class="st">&quot;80&quot;</span><span class="kw">&gt;</span></code></pre>

<!-- fin de la balise div container dans le footer -->


<?php include "footer.php" ?>
