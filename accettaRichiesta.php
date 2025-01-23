<?php

include_once "common/connection.php";
include_once "common/funzioni.php";



$ris1=leggiRichieste($cid);

if ($ris1["status"]=='ko')	
	header('loaction: ../index.php?status=ko&op=error&msg='. urlencode($ris1["msg"]));

$richieste=$ris1["contenuto"];

$ris2= scriviRichiesta($cid,$richieste,$_GET["sendUsername"],$_GET["receiveUsername"],$_GET["dateTime"]);




?>