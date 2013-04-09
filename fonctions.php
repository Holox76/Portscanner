<?php

<?php

function maintenance($mode)
{
	if($mode > 0)
	{
		header('Location: maintenance.php');
	}
}

maintenance(0);

function isUp($ip)
{
	exec("ping -n 4 ".$ip." 2>&1", $output, $retval);
	if ($retval != 0) 
	{ 
		$ping = 1;
	} 
	else 
	{ 
		$ping = 0;
	}
}

function testServeur($ip)
{
$services = array('Web' => 80, 'SQL' => 3306, 'SSH' => 22, 'FTP' => 21, 'SMTP' => 25, 'TeamSpeak' => 9987, 'Minecraft' => 25565);

foreach ($services as $service => $port) {

   $fp = @fsockopen($ip, $port, $errno, $errstr, 1);
   $out = "GET / HTTP/1.1\r\n";
   $out .= "Host: 127.0.0.1\r\n";
   $out .= "Connection: Close\r\n\r\n";

	if ($fp)
	{
		echo  'Serveur '.$service.' : <i class="icon-ok"></i>';
		fwrite($fp, $out);
		while (!feof($fp)) 
		{
			$line = fgets($fp, 128); 
		}
		fclose($fp);
	}
	else
	{
		echo 'Serveur '.$service.' : <i class="icon-remove"></i>';
	}

echo '<br />';
}
}
?>
