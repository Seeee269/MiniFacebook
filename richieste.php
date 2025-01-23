<!DOCTYPE html>


<head>
    <meta charset="utf-8" />
    <title></title>
</head>
<body>
<?php

    include_once "common/connection.php";
    include_once "common/funzioni.php";




    $ris1=leggiRichieste($cid);

    if ($ris1["status"]=='ko')	
	    header('loaction: ../index.php?status=ko&op=error&msg='. urlencode($ris1["msg"]));



    stampaRichieste($ris1["contenuto"]);

?>

<li><a href="accettaRichiesta.php">Accetta Richiesta</a></li>

</body>
</html>

