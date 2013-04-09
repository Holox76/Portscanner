<?php
include('fonctions.php');
include('includes/header.php');
echo '<div class="well" align="center">';
if(isset($_GET['ip']))
{
echo '<h1>Résultat du scan</h1>';
$host = gethostbyname($_GET['ip']);
testServeur($host);
}
else {
echo '<h1>Entrez l\'adresse IP</h1>
<p class="lead">Recherche basique ou specifique, netscanner est le plus pratique !</p>
<form class="form-search" action="" method="GET">
<input type="text" name="ip" class="input-medium"> <button type="submit" class="btn btn-primary"><i class="icon-search icon-white"></i> Scanner</button>
</form>';
}
?>
</div>
<hr>
<?php include('includes/footer.php'); ?>
