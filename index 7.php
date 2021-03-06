<?php include_once '../php/functions.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>MAMP</title>
		<link rel="stylesheet" type="text/css" href="../css/screen.css" />
	</head>
	<body>
		<div id="contentWrap">
			<div id="content">
				<div class="column1">
					<div class="headerLeft">
						<img src="../images/mamp-logo.png" alt="MAMP" />
					</div>
					<div class="headerRight">
						<h1>Bienvenue dans MAMP</h1>
						<h2>Si vous pouvez voir cette page, MAMP est installé sur votre Mac et tout fonctionne !</h2>
					</div>
					<div class="cb"></div>
					<div class="frame">
						<h2>PHP</h2>
						<p>Pour afficher la configuration de PHP, vous pouvez examiner le résultat de <a href="../phpinfo.php">phpinfo</a>.</p>
						<?php if (true == $b_webedition_exists): ?>
							<h2>webEdition</h2>
							<p>webEdition a bien été installé dans MAMP. Pour lancer webEdition, cliquer <a href="/webEdition/">ici</a>. Pour vous connecter à webEdition utilisez <em>admin</em> comme "username" et <em>admin</em> comme "password".</p>
						<?php endif; ?>
						<h2>MySQL</h2>
						<p>La base de données MySQL peut être administrée via <a href="../phpmyadmin.php?lang=fr-iso-8859-1">phpMyAdmin</a>.</p>
						<p>Pour vous connecter au serveur MySQL dans vos propres scripts PHP, utilisez les paramètres suivants:</p>
						<table class="mysql">
							<tr>
								<th>Hôte</th>
								<td>localhost</td>
							</tr>
							<tr>
								<th>Utilisateur</th>
								<td>3306</td>
							</tr>
							<tr>
								<th>User</th>
								<td>root</td>
							</tr>
							<tr>
								<th>Mot de passe</th>
								<td>root</td>
							</tr>
						</table>
						<h3>Exemple:</h3>
						<pre>$link = mysql_connect('localhost', 'root', 'root');</pre>
						<p>ou vous pouvez vous connecter à l'aide d'un socket UNIX:</p>
						<table class="mysql">
							<tr>
								<th>Socket</th>
								<td>/Applications/MAMP/tmp/mysql/mysql.sock</td>
							</tr>
							<tr>
								<th>Utilisateur</th>
								<td>root</td>
							</tr>
							<tr>
								<th>Mot de passe</th>
								<td>root</td>
							</tr>
						</table>
						<h3>Exemple:</h3>
						<pre>
$link = mysql_connect(
  ':/Applications/MAMP/tmp/mysql/mysql.sock',
  'root',
  'root'
);
</pre>
					</div>
					<br />
					<div class="frame">
						<a href="http://www.appsolute.de" target="_blank"><img src="../images/appsolute-logo.png" alt="appsolute GmbH"/></a><br />
						MAMP and MAMP PRO is developed and distributed by <a href="http://www.appsolute.de" target="_blank">appsolute GmbH</a>.<br /><br />
						<img src="../images/4logos.png" alt="Mac, Apache, MySQL, PHP"/>
					</div>
						<p><br/><strong>"Have fun and enjoy",<br/>L'équipe MAMP</strong></p>
				</div>
				<div class="column2">
					<?php
						echo show_content($language, 'ad', 1);
						echo '<h2>Updates</h2>';
						echo show_content($language, 'news', 2);
						echo '<h2>News</h2>';
						echo show_content($language, 'news', 1);
					?>
				</div>
				<div class="cb"></div>
			</div>
		</div>
	</body>
</html>