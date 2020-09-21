<?php
function ComputeDiff($date1,$date2,$format)
{
$datet1 = new DateTime($date1);
$datet2 = new DateTime($date2);
$difference = $datet1->diff($datet2);
return $difference->format($format);
}
//funzione che converte la data nel formato yyyy-mm-dd
function convertToAmericanFormat($data)
{
$data= str_replace('/', '-', $data);
return date('Y-m-d', strtotime($data));
}


$date1=$_GET['date1'];
$date2=$_GET['date2'];

$date1=convertToAmericanFormat($date1);
$date2=convertToAmericanFormat($date2);

$format="%a";


echo ComputeDiff($date1,$date2,$format);
?>
