<?php
$ds = disk_total_space("/");
$dsG = round(($ds/pow(1024,3)),1);
echo " Всего места в каталоге /: $dsG GB <br>";

$ds2 = disk_free_space("/");
$dsG2 = round(($ds2/pow(1024,3)),1);
echo " Свободно места в каталоге /: $dsG2 GB <br>";

$proc = exec("grep -c processor /proc/cpuinfo");
echo "Ядер процессора: $proc <br>";
$fh = fopen('/proc/meminfo','r');
  $mem = 0;
  while ($line = fgets($fh)) {
    $pieces = array();
    if (preg_match('/^MemTotal:\s+(\d+)\skB$/', $line, $pieces)) {
      $mem = $pieces[1];
      break;
    }
  }
  fclose($fh);
echo "Всего оперативной памяти: $mem kB ";

