<?php
if(!isset($argv[1]))
{
	die("Veillez renseigner votre login epitech.\n");
}

echo "Installation de blih...\n";
sleep(2);

$blih = @file_get_contents("files/blih.py");
$blih_sh = @file_get_contents("files/blih");
$ezb = @file_get_contents("files/ezb");

if(!$blih)
{
	die("Le fichier blih.py est introuvable. Veuillez re-telecharger le depo :\ngit clone https://github.com/Rikette/blih.git\n");
}

if(file_exists("/bin/blih.py"))
{
	die("Blih est deja installe.\n");
}

if(file_put_contents('/bin/blih.py', $blih) !== false)
{
	echo "/bin/blih.py => ok.\n";
}
else
{
	die("Erreur de l'ecriture du fichier blih.py\n");
}

if(file_put_contents('/bin/blih', $blih_sh) !== false)
{
	echo "/bin/blih => ok.\n";
}
else
{
	die("Erreur de l'ecriture du fichier bash blih\n");
}

if(file_put_contents('/bin/ezb', $ezb) !== false)
{
	echo "/bin/ezb => ok.\n";
}
else
{
	die("Erreur de l'ecriture du fichier ezb\n");
}

if(file_put_contents('/bin/blih.config', $argv[1]) !== false)
{
	echo "/bin/blih.config => ok.\n";
}
else
{
	die("Erreur de l'ecriture du fichier blih.config\n");
}

shell_exec("chmod 755 /bin/blih.py");
shell_exec("chmod 755 /bin/blih");
shell_exec("chmod 755 /bin/ezb");
shell_exec("chmod 755 /bin/blih.config");

echo "Installation terminee.\n";
shell_exec("blih");
