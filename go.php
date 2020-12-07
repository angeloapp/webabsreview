<?php
# get the title and define the links array
$title = $_GET['title'];
$links = array();

# ad network links
$links['1'] = 'http://xxx.mikegeary1.hop.clickbank.net/';
$links['2'] = 'http://xxx.4idiots.hop.clickbank.net/';
$links['3'] = 'http://xxx.burnthefat.hop.clickbank.net/';

# redirection
header('Location: '.$links[$title]);
?>