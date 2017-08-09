<?php


$filePath = "numbers.txt";
$topNumbers = array();

if (file_exists($filePath)) {
  $fileHandle = fopen($filePath, 'r');

  while($number = fgets($fileHandle)) {
    $number = (int)trim($number, "\n");

    echo $number."\n";

    if (!in_array($number, $topNumbers)) {

      if (count($topNumbers) < 5) {

        $topNumbers[] = $number;

      } else {
        $run = true;

        sort($topNumbers);

        foreach($topNumbers as $key => $n) {

          if ($n < $number) {
            if ($run) {
              $topNumbers[$key] = $number;

              $run = false;
            }
          }
        }

      }
    }
  }

  var_dump($topNumbers);
  fclose($fileHandle);
}
