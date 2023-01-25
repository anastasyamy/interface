<?php
require_once 'gitar.php';
require_once 'piano.php';
require_once 'seruling.php';
require_once 'pianika.php';
//ciptakan object
$m1 = new Gitar();
$m2 = new Piano();
$m3 = new Seruling();
$m4 = new Pianika();  
//suara musik
$m1->petik(); $m2->tekan(); $m3->tiup(); 
$m4->tiup(); $m4->tekan();
