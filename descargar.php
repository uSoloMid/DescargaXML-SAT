<?php
header('Content-Type: application/xml');
header('Content-Disposition: attachment; filename="facturas.xml"');

// Simulación de XML generado (cambiar después con la librería real)
$xml = "<?xml version='1.0' encoding='UTF-8'?>\n<facturas>\n  <factura id='12345'>Ejemplo</factura>\n</facturas>";

echo $xml;
exit;
?>