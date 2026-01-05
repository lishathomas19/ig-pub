<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://lishathomas19.github.io/ig-pub/demo.ig/1.0.0/StructureDefinition-demo-patient.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://lishathomas19.github.io/ig-pub/demo.ig/1.0.0/StructureDefinition-demo-patient.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://lishathomas19.github.io/ig-pub/demo.ig/1.0.0/StructureDefinition-demo-patient.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://lishathomas19.github.io/ig-pub/demo.ig/1.0.0/StructureDefinition-demo-patient.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://lishathomas19.github.io/ig-pub/demo.ig/1.0.0/StructureDefinition-demo-patient.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://lishathomas19.github.io/ig-pub/demo.ig/1.0.0/StructureDefinition-demo-patient.html');
else 
  Redirect('https://lishathomas19.github.io/ig-pub/demo.ig/1.0.0/StructureDefinition-demo-patient.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
