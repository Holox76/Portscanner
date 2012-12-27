<?php
include('fonctions.php');

if(isset($_GET['ip']))
{
// INITIALISATION DES FONCTIONS

$host = gethostbyname($_GET['ip']);

testServeurWeb($host);
echo '<br />';
testServeurSQL($host);
echo '<br />';
testServeurSSH($host);
echo '<br />';
testServeurFTP($host);
echo '<br />';
testServeurSMTP($host);
echo '<br />';
testServeurTS($host);
echo '<br />';
testServeurMinecraft($host);
}

include('includes/header.php');
?>
      <div class="well" align="center">
        <h1>Entrez l'adresse IP</h1>
        <p class="lead">Recherche basique ou specifique, netscanner est le plus pratique !</p>
        <form class="form-search" action="" method="GET">
			<input type="text" name="ip" class="input-medium"> <button type="submit" class="btn btn-primary"><i class="icon-search icon-white"></i> Scanner</button>
		</form>
      </div>

      <hr>
	  <?php include('includes/footer.php'); ?>