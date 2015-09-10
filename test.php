<?php

// FR : A remplir pour tester la version de MySQL et la presence du moteur idoine
// EN : Fill it for MySQL version test and engine check

$mysql_server = 'sql.village-gaulois';
$mysql_user = 'idefix';
$mysql_password = 'abraracourcix';

// FR : Ne pas modifier apres cette ligne
// EN : Don't modify the file after this line

// Version du 26 septembre 2008 : 	Ajout de l'affichage d'un message si la connexion MySQL échoue
//									(n'était pas affiché auparavant si un PostgreSQL était présent)

$version = version_compare(phpversion(),'5.0','>=');
$mb = function_exists('mb_detect_encoding');
$iconv = function_exists('iconv');
$ob = function_exists('ob_start');
$simplexml = function_exists('simplexml_load_string');
$disimplexml = function_exists('dom_import_simplexml');
$pcre_str = base64_decode('w6nDqMOgw6o=');
$pregutf8 = @preg_match('/'.$pcre_str.'/u', $pcre_str);
$spl = function_exists("spl_classes");

$settings_done = !(($mysql_server == 'sql.village-gaulois') || ($mysql_user == 'idefix') || ($mysql_password == 'abraracourcix'));
$mysql = function_exists('mysql_connect');
$mysqlver = false;
$innodb = false;
$mysql_connex = false;
$my = '';
$link = false;
if ($mysql) {
	$link = @mysql_connect($mysql_server, $mysql_user, $mysql_password);
	if ($link) {
		$mysql_connex = true;
		$my = mysql_get_server_info($link);
		$mysqlver = (strpos($my, "4.1") !== false) || (strpos($my, "5.") !== false);
		preg_match('/^[0-9.]*/', $my, $matches);
		$mynum = $matches[0];
		$innodb = test_innodb($link, $mynum);

		if (!$mysqlver) {
			$mysql = false;
		}
	} else {
		$mysql = false;
	}
}

$postgres = function_exists('pg_connect');
// $sqlite = function_exists('sqlite_factory');

$bd = (($mysql && $innodb) || $postgres ); // || $sqlite);

function test_innodb($link, $mysqlver) {
	$result = false;

	if (mysqlver2int($mysqlver) >= 40102) {		
		$res = mysql_query('SHOW STORAGE ENGINES');
		while ($row = mysql_fetch_assoc($res)) {
			if ((strtolower($row['Engine']) == 'innodb') && 
				((strtolower($row['Support']) == 'yes') || (strtolower($row['Support']) == 'default'))) {
				$result = true;
				break;	
			}	
		}
	} else {
	    $res = mysql_query('SHOW VARIABLES LIKE \'have\\_%\';');
		while ($row = mysql_fetch_row($res)) {
			if ((strtolower(substr($row[0],5)) == 'innodb') && (strtolower($row[1]) == 'yes')) {
				$result = true;
				break;	
			}
		}
    }
    return $result;
}    

function mysqlver2int($ver) {
	$tab = explode('.', $ver);
	return  sprintf('%d%02d%02d', $tab[0], $tab[1], intval($tab[2]));
}
?>
<html>
<head>
	<meta http-equiv="Content-Type"
	content="text/html; charset=UTF-8" />
	<meta name="MSSmartTagsPreventParsing" content="TRUE" />
	<title>Labo Dotclear 2</title>
	<style type="text/css">@import url(style.css);</style>
</head>
<body>
	<div id="plain-page">
		<div id="wrapper">
			<h1>Test de l'hébergement / Hosting test</h1>

			<div id="verdict">
				<h2>Verdict</h2>
				<p><strong>
				<?php
					if ($version && $mb && $iconv && $ob && $simplexml && $disimplexml && $pregutf8 && $bd && $spl) {
						echo 'Woohoo \o\ \o/ /o/'."\n\n";
					} else {
						echo "Booh :(\n\n";
					}
				?>
				</strong></p>
			</div>
				
			<h2>Diagnostics / Diagnosis</h2>

			<h3>Tests PHP / PHP tests</h3>
			<table>
				<tr><th>Test</th><th>R&eacute;sultat / Result</th></tr>
				<?php
				echo '<tr><td>PHP 5:</td><td>'.($version ? 'yes' : '<strong>no</strong>').' ('.phpversion().')</td></tr>';
				echo '<tr><td>MBString:</td><td>'.($mb ? 'yes' : '<strong>no</strong>').'</td></tr>';
				echo '<tr><td>Iconv:</td><td>'.($iconv ? 'yes' : '<strong>no</strong>').'</td></tr>';
				echo '<tr><td>OB:</td><td>'.($ob ? 'yes' : '<strong>no</strong>').'</td></tr>';
				echo '<tr><td>SPL:</td><td>'.($spl ? 'yes' : '<strong>no</strong>').'</td></tr>';
				echo '<tr><td>SimpleXML:</td><td>'.($simplexml ? 'yes' : '<strong>no</strong>').'</td></tr>';
				echo '<tr><td>DomImportSimpleXML:</td><td>'.($disimplexml ? 'yes' : '<strong>no</strong>').'</td></tr>';
				echo '<tr><td>preg utf8:</td><td>'.($pregutf8 ? 'yes' : '<strong>no</strong>').'</td></tr>';
				?>
			</table>

			<h3>Tests base de donn&eacute;es / Database tests</h3>
			<table>
				<tr><th>Test</th><th>R&eacute;sultat / Result</th></tr>
				<?php
				echo '<tr><td>Compatible database availability:</td><td>'.($bd ? 'yes' : '<strong>no</strong>').'</td></tr>';
				echo '<tr><td>Mysql:</td><td>'.($mysql ? 'yes' : '<strong>no</strong>').'</td></tr>';
				echo '<tr><td>Mysql 4.1 or sup.:</td><td>'.($mysqlver ? 'yes' : '<strong>no</strong>').($my != '' ? ' ('.$my.')' : '').'</td></tr>';
				echo '<tr><td>Mysql InnoDB support:</td><td>'.($innodb ? 'yes' : '<strong>no</strong>').'</td></tr>';
				echo '<tr><td>Postgres:</td><td>'.($postgres ? 'yes' : '<strong>no</strong>').'</td></tr>';
				// echo '<tr><td>sqlite:</td><td>'.($sqlite ? 'yes' : '<strong>no</strong>').'</td></tr>';
				?>
			</table>

			<?php 
			if (!$version || (!$mysql_connex && !$mysql) || !$settings_done) {
			?>
				<h2>Recommendations / Hints</h2>
				<ul>
				<?php
				if (!$version) {
					echo '<li>Vous utilisez actuellement la version 4 de PHP et Dotclear requiert la version 5. Contactez votre h&eacute;bergeur pour activer la version 5. / You are currently using php4, and dotclear 2 requires php5. Try to contact your web hosting company to find how to activate php5.</li>';
				}
				if (!$settings_done) {
					echo '<li>Pour faire les tests MySQL, vous devez pr&eacute;ciser les param&egrave;tres de connexion &agrave; la base de donn&eacute;e (voir au d&eacute;but du fichier test.php) / You must specify your connexion parameters at the top of this php script in order to perform MySQL tests.</li>';
				} else {
				if ((!$mysql_connex && !$mysql)) {
					echo '<li>Les tests MySQL n\'ont pu &ecirc;tre effectu&eacute;s. Vous devriez v&eacute;rifier les param&egrave;tres de votre connexion (voir au d&eacute;but du fichier test.php). / The MySQL test failed. You must verify your connexion parameters at the top of this php script.</li>';
				}
				}
				?>
				</ul>
			<?php
			}
			?>

		</div>
	</div>
</body>
</html>