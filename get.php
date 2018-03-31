<?php




$type = $_GET['type'];
if($type == "json"){
header("Content-type: application/json");
$arr = array(

array('Auto Marka' => 'Opel',      'Model' => 'Corsa',    'Cena' => '12003.61'),
array('Auto Marka' => 'BMW',       'Model' => 'Seria 3',  'Cena' => '56201.91'),
array('Auto Marka' => 'Ford',      'Model' => 'Focus',    'Cena' => '16101.85'),
array('Auto Marka' => 'Fiat',      'Model' => 'Typo',     'Cena' => '12093.16'),
array('Auto Marka' => 'Kia',       'Model' => 'Ceed',     'Cena' => '15401.12'),
array('Auto Marka' => 'VolksWagen','Model' => 'Passat',   'Cena' => '45201.30'),
array('Auto Marka' => 'Citroen',   'Model' => 'C4',       'Cena' => '16251.16'),

);

echo json_encode($arr);
}else {
header("Content-type: text/xml");
$test_array = array (
'Vuk' => 'ime',
'Vasic' => 'prezime',
'177894488885798' => 'jmbg',
);


$arr = array(

array( 'Opel' =>       'AutoMarka', 'Corsa' =>   'Model',    '12003.61' => 'Cena'),
array( 'BMW' =>        'AutoMarka', 'Seria 3' => 'Model',    '56201.91' => 'Cena'),
array( 'Ford' =>       'AutoMarka', 'Focus' =>   'Model',    '16101.85' => 'Cena'),
array( 'Fiat' =>       'AutoMarka', 'Typo' =>    'Model',    '12093.16' => 'Cena'),
array( 'Kia' =>        'AutoMarka', 'Ceed' =>    'Model',    '15401.12' => 'Cena'),
array( 'VolksWagen' => 'AutoMarka', 'Passat' =>  'Model',    '45201.30' => 'Cena'),
array( 'Citroen' =>    'AutoMarka', 'C4' =>      'Model',    '16251.16' => 'Cena'),

);
$xml = new SimpleXMLElement('<root/>');
array_walk_recursive($arr, array ($xml, 'addChild'));
print $xml->asXML();
}




 ?>
