<?php

require_once("website.php");
$elementos = new elementoSites();

// Utilização na fabricação de uma Head
echo $elementos->default_htmlHead('A');

// Utilização na fabricação de CSS
$aTypeArrayCss = ['<link rel="stylesheet" href="style.css">','<link rel="stylesheet" href="teste.css">'];

$elementos->insert_cssHead($aTypeArrayCss);

// colocando Scripts
$aTypeArrayJs = ['<script src="app.js"></script>','<script src="app.js"></script>'];

$elementos->insert_cssHead($aTypeArrayJs);

// Utilização pra implementar o .ico
$elementos->setFavicon('teste.ico');


// Criação de um formulario padronizado
$elementos->createForm('a.html', 'GET');

?>