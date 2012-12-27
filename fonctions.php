<?php

function maintenance($mode)
{
	if($mode > 0)
	{
		header('Location: maintenance.php');
	}
}

maintenance(0);

function testServeurWeb($ip)
{
   $fp = @fsockopen($ip, 80, $errno, $errstr, 1);
   $out = "GET / HTTP/1.1\r\n";
   $out .= "Host: 127.0.0.1\r\n";
   $out .= "Connection: Close\r\n\r\n";
	if ($fp)
	{
		echo  'Serveur web : <i class="icon-ok"></i>';
		fwrite($fp, $out);
		while (!feof($fp)) 
		{
			$line = fgets($fp, 128); 
		}
		fclose($fp);
	}
	else
	{
		echo 'Serveur web : <i class="icon-remove"></i>';
	}
}

function testServeurSQL($ip)
{
   $fp = @fsockopen($ip, 3306, $errno, $errstr, 1);
   $out = "GET / HTTP/1.1\r\n";
   $out .= "Host: 127.0.0.1\r\n";
   $out .= "Connection: Close\r\n\r\n";
	if ($fp)
	{
		echo  'Serveur SQL : <i class="icon-ok"></i>';
		fwrite($fp, $out);
		while (!feof($fp)) 
		{
			$line = fgets($fp, 128); 
		}
		fclose($fp);
	}
	else
	{
		echo 'Serveur SQL : <i class="icon-remove"></i>';
	}
}

function testServeurSSH($ip)
{
   $fp = @fsockopen($ip, 22, $errno, $errstr, 1);
   $out = "GET / HTTP/1.1\r\n";
   $out .= "Host: 127.0.0.1\r\n";
   $out .= "Connection: Close\r\n\r\n";
	if ($fp)
	{
		echo  'Serveur SSH : <i class="icon-ok"></i>';
		fwrite($fp, $out);
		while (!feof($fp)) 
		{
			$line = fgets($fp, 128); 
		}
		fclose($fp);
	}
	else
	{
		echo 'Serveur SSH : <i class="icon-remove"></i>';
	}
}

function testServeurFTP($ip)
{
   $fp = @fsockopen($ip, 21, $errno, $errstr, 1);
   $out = "GET / HTTP/1.1\r\n";
   $out .= "Host: 127.0.0.1\r\n";
   $out .= "Connection: Close\r\n\r\n";
	if ($fp)
	{
		echo  'Serveur FTP : <i class="icon-ok"></i>';
		fwrite($fp, $out);
		while (!feof($fp)) 
		{
			$line = fgets($fp, 128); 
		}
		fclose($fp);
	}
	else
	{
		echo 'Serveur FTP : <i class="icon-remove"></i>';
	}
}

function testServeurSMTP($ip)
{
   $fp = @fsockopen($ip, 25, $errno, $errstr, 1);
   $out = "GET / HTTP/1.1\r\n";
   $out .= "Host: 127.0.0.1\r\n";
   $out .= "Connection: Close\r\n\r\n";
	if ($fp)
	{
		echo  'Serveur SMTP : <i class="icon-ok"></i>';
		fwrite($fp, $out);
		while (!feof($fp)) 
		{
			$line = fgets($fp, 128); 
		}
		fclose($fp);
	}
	else
	{
		echo 'Serveur SMTP : <i class="icon-remove"></i>';
	}
}

function testServeurTS($ip)
{
   $fp = @fsockopen($ip, 9987, $errno, $errstr, 1);
   $out = "GET / HTTP/1.1\r\n";
   $out .= "Host: 127.0.0.1\r\n";
   $out .= "Connection: Close\r\n\r\n";
	if ($fp)
	{
		echo  'Serveur TeamSpeak : <i class="icon-ok"></i>';
		fwrite($fp, $out);
		while (!feof($fp)) 
		{
			$line = fgets($fp, 128); 
		}
		fclose($fp);
	}
	else
	{
		echo 'Serveur TeamSpeak : <i class="icon-remove"></i>';
	}
}

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

function testServeurMinecraft($ip)
{
   $fp = @fsockopen($ip, 25565, $errno, $errstr, 1);
   $out = "GET / HTTP/1.1\r\n";
   $out .= "Host: 127.0.0.1\r\n";
   $out .= "Connection: Close\r\n\r\n";
	if ($fp)
	{
		echo  'Serveur Minecraft : <i class="icon-ok"></i>';
		fwrite($fp, $out);
		while (!feof($fp))
		{
			$line = fgets($fp, 128); 
		}
		fclose($fp);
	}
	else
	{
		echo 'Serveur Minecraft : <i class="icon-remove"></i>';
	}
}
?>