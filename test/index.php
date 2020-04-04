<?php

require __DIR__ . '/../src/PDOCIException.php';
require __DIR__ . '/../src/PDOCIStatement.php';
require __DIR__ . '/../src/PDOCI.php';

try {
  $pdoci = new PDOCI("10.10.0.3:1521/XE", "SYS", "123456", [
    'session_mode' => PDOCI::SM_SYSDBA
  ]);

  $sth = $pdoci->prepare("SELECT * FROM SISPMM.USUARIO");
  if($sth->exec()) {
  var_dump($sth->fetchAll());
  } else {
    echo "nenhum dado nessa tabela";
  }
} catch (PDOCIException $e) {
  echo $e->getMessage();
}

var_dump($pdoci);