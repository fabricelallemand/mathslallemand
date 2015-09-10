<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="generator" content="pandoc">
  <style type="text/css">code{white-space: pre;}</style>
  <style type="text/css">figure { margin-left: auto;  margin-right: auto }</style>
 

  <?php include "header.php" ?>  
 
  
<!--Titre de la page -->

<div class="container">
            <div class = "page-header">
                <h1 class="title">Méthode de Gauss</h1>
                                                <h3 class="date">Dernière révision : 29 mai 2014</h3>
                            </div>
<!-- Table des matières (optionnel) -->


<!-- Contenu -->

<!--Définition du système -->

<?php $systeme = array(array($_POST['a0'], $_POST['b0'], $_POST['c0'], $_POST['d0']),
 array($_POST['a1'], $_POST['b1'], $_POST['c1'], $_POST['d1']), array($_POST['a2'], $_POST['b2'], $_POST['c2'], $_POST['d2'])); ?>

<!-- Fonction pour affichage du système -->

<?php function affiche_systeme($sys, $i_pivot=-1, $j_pivot=-1)
{
	if ($i_pivot==0 AND $j_pivot==0)
	{
		echo "$\left\{\begin{array}{lcr} \\fbox{".$sys[0][0]."}x + (".$sys[0][1]."y) + (".$sys[0][2]."z) & = & ".$sys[0][3]." \\\ ".$sys[1][0]."x + (".$sys[1][1]."y) + (".$sys[1][2]."z) & = & ".$sys[1][3]." \\\ ".$sys[2][0]."x + (".$sys[2][1]."y) + (".$sys[2][2]."z) & = & ".$sys[2][3]." \\end{array} \\right.$";
		
	}
	elseif ($i_pivot==1 AND $j_pivot==1)
	{
		echo "$\left\{\begin{array}{lcr} ".$sys[0][0]."x + (".$sys[0][1]."y) + (".$sys[0][2]."z) & = & ".$sys[0][3]." \\\ ".$sys[1][0]."x + (\\fbox{".$sys[1][1]."}y) + (".$sys[1][2]."z) & = & ".$sys[1][3]." \\\ ".$sys[2][0]."x + (".$sys[2][1]."y) + (".$sys[2][2]."z) & = & ".$sys[2][3]." \\end{array} \\right.$";
		
	}
	else
	{
		echo "$\left\{\begin{array}{lcr}".$sys[0][0]."x + (".$sys[0][1]."y) + (".$sys[0][2]."z) & = & ".$sys[0][3]." \\\ ".$sys[1][0]."x + (".$sys[1][1]."y) + (".$sys[1][2]."z) & = & ".$sys[1][3]." \\\ ".$sys[2][0]."x + (".$sys[2][1]."y) + (".$sys[2][2]."z) & = & ".$sys[2][3]." \\end{array} \\right.$";
	}
	echo "<br>";
	echo "<br>";
}
?>

<h2> Système de départ</h2>

<?php affiche_systeme($systeme) ?>

<h2>Étape 1</h2>

<p>La première étape consiste à supprimer la première inconnue dans toutes les équation, sauf la première.<p>

<?php
if ($systeme[0][0]==0)
{
	if ($systeme[1][0]==0)
	{
		if ($systeme[2][0]==0)
		{
			echo "<p>Tous les coefficients de la variable $ x $ sont nuls : il s'agit donc d'un système à deux inconnues seulement.</p>";
			echo "<p>Nous passons directement à l'étape 2.</p>";
			$etape1 = false;
		}
		else
		{
			echo "<p>Dans les deux premières équations, le coefficient de $ x $ est nul : on échange $ L_1 $ par $ L_3 $.</p>";
			$systeme = echange_ligne($systeme, 0, 2);
			affiche_systeme($systeme);
			echo "<p>Nous passons directement à l'étape 2.</p>";
			
		}

	}
	else
	{
		echo "<p>Dans la première équation, le coefficient de $ x $ est nul : on ne peut donc pas choisir ce nombre comme pivot.</p>";
		echo "<p>On échange donc les lignes $ L_1 $ et $ L_2 $.</p>";
		$systeme = echange_ligne($systeme, 0, 1);
		affiche_systeme($systeme);
		if ($systeme[2][0]!=0)
		{
			echo "<p>On élimine maintenant la première inconnue dans la troisième équation : on remplace $ L_3 $ par $ L_3 - (".$systeme[2][0]/$systeme[0][0]." \\times L_1) $ </p>";
			$systeme = combine($systeme, 0, 2, $systeme[2][0]/$systeme[0][0]);
			affiche_systeme($systeme,0,0);
			echo "L'étape 1 est terminée.";
		}
	}
}
else
{
echo "<p>On choisit ".$systeme[0][0]." comme pivot.</p>";
echo "<p>Elimination de la première inconnue dans la deuxième équation : on remplace $ L_2 $ par $ L_2 - (".$systeme[1][0]/$systeme[0][0]." \\times L_1) $ </p>";
$systeme = combine($systeme, 0, 1, $systeme[1][0]/$systeme[0][0]);
affiche_systeme($systeme,0,0);
echo "<p>Elimination de la première inconnue dans la troisième équation : on remplace $ L_3 $ par $ L_3 - (".$systeme[2][0]/$systeme[0][0]." \\times L_1) $ </p>";
$systeme = combine($systeme, 0, 2, $systeme[2][0]/$systeme[0][0]);
affiche_systeme($systeme,0,0);
echo "L'étape 1 est terminée.";
}
?>

<?php function echange_ligne($sys, $l1, $l2)
{
	$new_sys = $sys;
	$new_sys[$l1] = $sys[$l2];
	$new_sys[$l2] = $sys[$l1];
	return $new_sys;
}
?>

<!-- Fonction remplaçant l2 par l2-k*l1 -->

<?php
function combine($sys, $l1, $l2, $k)
{
	$new_sys = $sys;
	$new_eq = $new_sys[$l2];
	for ($i = 0; $i < 4; $i++)
	{
		$new_eq[$i] = $new_eq[$i] - $k * $new_sys[$l1][$i];
	}
	$new_sys[$l2] = $new_eq;
	return $new_sys;
}
?>

<!-- Fonction pour trianguler le système -->
<?php
function triangule($sys)
{
	$new_sys = combine($sys, 0, 1, $sys[1][0]/$sys[0][0]);
	$new_sys = combine($new_sys, 0, 2, $new_sys[2][0]/$new_sys[0][0]);
	$new_sys = combine($new_sys, 1, 2, $new_sys[2][1]/$new_sys[1][1]);
	return $new_sys;
}
?>

<!-- Résolution du système -->


<h2>Etape 2</h2>

<p>Le but de cette deuxième étape est d'éliminer l'inconnue $z$ dans la troisième équation.</p>

<?php
if ($systeme[1][1]!=0)
{
	echo "<p>On choisit ".$systeme[1][1]." comme pivot.</p>";
	echo "on remplace $ L_3 $ par $ L_3 - (".$systeme[2][1]/$systeme[1][1]." \\times L_2 $) </p>";
	$systeme = combine($systeme, 1, 2, $systeme[2][1]/$systeme[1][1]);
	affiche_systeme($systeme,1,1);
	echo "<p>Le système obtenu est triangulé.</p>";
}
elseif ($systeme[2][1]!=0)
{
	echo "<p>Le coefficient de $ y $ est nul dans la deuxième équation : on ne peut pas le choisir comme pivot. On échange donc les lignes $ L_2 $ et $ L_3 $.</p>";
	$systeme = echange_ligne($systeme, 1, 2);
	affiche_systeme($systeme);
	echo "<p>Le système obtenu est triangulé.</p>";
}
else
{
	echo "<p>Le coefficient de $ y $ est nul dans les deux dernières équations</p>.";
	echo "<p>Le système obtenu est triangulé.</p>";
}
?>


<a href="get_systeme_gauss.php"><button type="button" class="btn btn-danger">Trianguler un autre système ...</button></a>

<!-- fin de la balise div container dans le footer -->


<?php include "footer.php" ?>
