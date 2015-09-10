% Étape 3 : La partie HTML du projet
%
% Seconde - 2ISN

Cette troisième étape a pour objectif de mettre en place la structure de la page web du jeu Puissance 4.

Ouvrir le fichier `index.html` dans Notepad++ **et** dans la navigateur web.

Pour l'instant, son contenu est le suivant : 

~~~~~~~{.html}
<html>
	<head>
		<meta charset="utf_8">
		<script src="./src/brython.js"></script>
	</head>
	<body onload="brython()">
		<center>
			<h1>Puissance 4</h1>
			
			
		</center>

	</body>
</html>
~~~~~~~

Nous allons inclure les images des pions rouges et des pions jaunes et réserver un emplacement pour l'image du plateau de jeu.

Insérer le code suivant juste sous la ligne commençant par `<h1>` : 

~~~~~~~{.html}
<img class="pion" id="pion_rouge" src="./rouge.png" width="80">
<canvas id="jeu" width="602" height="516"></canvas>
<img class="pion" id="pion_jaune" src="./jaune.png" width="80">
~~~~~~~