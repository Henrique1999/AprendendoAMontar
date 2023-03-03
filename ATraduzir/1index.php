
<?php

// Abre o arquivo valores.csv para leitura
$file = fopen('valores.csv', 'r');

// Ignora a primeira linha do arquivo (cabeçalho)
$header = fgetcsv($file);

// Lê todas as linhas do arquivo e salva em $rows
$rows = array();
while (($row = fgetcsv($file)) !== FALSE) {
  $rows[] = $row;
}

// Fecha o arquivo
fclose($file);

function convertDataToJson($data) {
  $json = array();
  
  foreach ($data as $row) {
    $idPrincipal = $row[14];
    $data1 = $row[1];
    $data2 = $row[2];
    $data3 = $row[3];
    $data4 = $row[0];
    $numero1 = $row[4];
    $numero2 = $row[5];
    $numero3 = $row[6];
    $numero4 = $row[7];
    $numero5 = $row[8];
    $numero6 = $row[9];
    $numero7 = $row[10];
    $numero8 = $row[11];
    $numero9 = $row[12];
    $numero10 = $row[13];
    $texto1 = $row[15];
    $texto2 = $row[16];
    $multiTexto1 = explode(',', $row[17]);
    $multiTexto2 = explode(',', $row[18]);
    
    $json[] = array(
      'IDprincipal' => $idPrincipal,
      'data1' => $data1,
      'data2' => $data2,
      'data3' => $data3,
      'data4' => $data4,
      'numero1' => $numero1,
      'numero2' => $numero2,
      'numero3' => $numero3,
      'numero4' => $numero4,
      'numero5' => $numero5,
      'numero6' => $numero6,
      'numero7' => $numero7,
      'numero8' => $numero8,
      'numero9' => $numero9,
      'numero10' => $numero10,
      'texto1' => $texto1,
      'texto2' => $texto2,
      'multiTexto1' => $multiTexto1,
      'multiTexto2' => $multiTexto2
    );
  }
  
  return json_encode($json);
}
$json_data = convertDataToJson($rows);

$file = fopen('valores.json', 'w');
fwrite($file, $json_data);
fclose($file);
?>
