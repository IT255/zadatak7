<?php
function povrsina_kruga_json($r){
   $array_povrsina = array(
     'Povrsina Kruga' => $r*$r * 3.14,
     'Obim Kruga '    => 2*$r * 3.14,
     'Iznos Poluprecnika' => $r
   );

   echo json_encode($array_povrsina);
}

function povrsina_kruga_xml($r){
  $array_povrsina = array(
      $r*$r * 3.14 => 'PovrsinaKruga',
      2*$r * 3.14 => 'ObimKruga' ,
      $r => 'IznosPoluprecnika',
  );
  return $array_povrsina;
}



$type = $_POST['type'];
$r = $_POST['r'];
if($type == "json"){
header("Content-type: application/json");
 povrsina_kruga_json($r);
}else {
header("Content-type: text/xml");
 povrsina_kruga_xml($r);
$xml = new SimpleXMLElement('<root/>');
array_walk_recursive(povrsina_kruga_xml($r), array ($xml, 'addChild'));
print $xml->asXML();
}

 ?>
