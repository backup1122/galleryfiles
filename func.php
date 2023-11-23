<?php
header('Access-Control-Allow-Origin: *');
if (isset($_FILES['croppedImage'])) {
  move_uploaded_file(
    $_FILES['croppedImage']['tmp_name'], 
    $_SERVER['DOCUMENT_ROOT'] . $_POST['src']
); 
echo $_POST['src'];
}
  if (isset($_POST['ld'])) {

  $line = '';

  $f = fopen('../corner/del/del.txt', 'r');

  $cursor = -1;

  fseek($f, $cursor, SEEK_END);
  $char = fgetc($f);

  /**
   * Trim trailing newline chars of the file
   */
  while ($char === "\n" || $char === "\r") {
    fseek($f, $cursor--, SEEK_END);
    $char = fgetc($f);
  }

  /**
   * Read until the start of file or first newline char
   */
  while ($char !== false && $char !== "\n" && $char !== "\r") {
    /**
     * Prepend the new char
     */
    $line = $char . $line;
    fseek($f, $cursor--, SEEK_END);
    $char = fgetc($f);
  }

  fclose($f);

  $main = $line;
  $lines = file('../corner/del/del.txt');
  $last = sizeof($lines) - 1;
  unset($lines[$last]);

  // write the new data to the file 
  $fp = fopen('../corner/del/del.txt', 'w');
  fwrite($fp, implode('', $lines));
  fclose($fp);
  $main = $line;
  rename('../corner/del' . $main, $main);
  echo "done";
}
if (isset($_POST['allrev'])) {
$list=json_decode($_POST['allrev']);
$revlist=array_reverse($list);
$allcount=count($list);
$dc = 0;
  $adc = 0;
for($i=0;$i<count($revlist);$i++){
  
  
  if (file_exists($list[$i])) {
    
    rename($list[$i],$revlist[$i]."rev");
    //$dc++;
  } else {
    //$adc++;
  }
}

for($i=0;$i<count($revlist);$i++){
  
  
  if (file_exists($revlist[$i]."rev")) {
    
    rename($revlist[$i]."rev",$revlist[$i]);
    $dc++;
  } else {
    $adc++;
  }
}
echo "Out of " . $allcount . " Reversed " . $dc . " files and " . $adc . " files not found";
}
  if (isset($_POST['alddir'])) {
  $all = json_decode($_POST['alddir']);
  $num = count($all);
  $dc = 0;
  $adc = 0;
  foreach ($all as $dd) {
    //echo $dd;

    $str = $dd;
    while ($str[strlen($str) - 1] != '\\') {
      $str = substr($str, 0, -1);
    }
    $str = substr($str, 0, -1);
    $str = substr($str, 1);
    //echo $str;

    if (!file_exists('../corner/del' . $str)) {

      // Create a new file or direcotry
      mkdir('../corner/del' . $str, 0777, true);
      //echo "done";
    }
    if (file_exists($dd)) {
      //unlink($dd);
      $main = $dd;
      //$mainl= "del/".$dd;
      rename($main, '../corner/del' . $main);
      file_put_contents("../corner/del/del.txt", $main . "\n", FILE_APPEND | LOCK_EX);
      $dc++;
    } else {
      $adc++;
    }
  }
  echo "Out of " . $num . " Deleted " . $dc . " files and " . $adc . " files not found";
}
if (isset($_POST['ddir'])) {
  $str = $_POST['ddir'];
  while ($str[strlen($str) - 1] != '\\') {
    $str = substr($str, 0, -1);
  }
  $str = substr($str, 0, -1);
  $str = substr($str, 1);
  //echo $str;

  if (!file_exists('../corner/del' . $str)) {

    // Create a new file or direcotry
    mkdir('../corner/del' . $str, 0777, true);
    //echo "done";
  }
  if (file_exists($_POST['ddir'])) {
    //unlink($_POST['ddir']);
    $main = $_POST['ddir'];
    //$mainl= "del/".$_POST['ddir'];
    rename($main, '../corner/del' . $main);
    file_put_contents("../corner/del/del.txt", $main . "\n", FILE_APPEND | LOCK_EX);
    echo "Deleted";
  } else {
    echo "Already deleted";
  }
}

if (isset($_POST['rdir'])) {
  if (rotate($_POST['rdir']) == 1) {
    echo "Rotated";
  }
}
if (isset($_POST['allrdir'])) {
  //echo "Rotated";
  //return;
  $all = json_decode($_POST['allrdir']);
  $num = count($all);
  $dc = 0;
  $adc = 0;
  //echo $all[0]->dir;
  //return;
  foreach ($all as $dd) {
    if (rotate($dd->dir,$dd->angle) == 1) {
      $dc++;
    } else {
      $adc++;
    }
  }
  echo "Out of " . $num . " Rotated " . $dc . " files and " . $adc . " files not found";
}

function rotate($dir, $degrees = 90)
{

  $fileName = $dir;
  $degrees = -$degrees;
  $info   = getimagesize($fileName);
  $mime   = $info['mime'];
  //echo $mime;
  if (str_contains($mime, 'png')) {
    $source = imagecreatefrompng($fileName);

    $rotate = imagerotate($source, $degrees, 0);

    imagepng($rotate, $fileName);

    return 1;
  }
  if (str_contains($mime, 'jpeg')) {
    $source = imagecreatefromjpeg($fileName);

    $rotate = imagerotate($source, $degrees, 0);

    imagejpeg($rotate, $fileName);

    return 1;
  }
  if (str_contains($mime, 'webp')) {
    $source = imagecreatefromwebp($fileName);

    $rotate = imagerotate($source, $degrees, 0);

    imagewebp($rotate, $fileName);

    return 1;
  }
  if (str_contains($mime, 'gif')) {
    $source = imagecreatefromgif($fileName);

    $rotate = imagerotate($source, $degrees, 0);

    imagegif($rotate, $fileName);

    return 1;
  }

  if (str_contains($mime, 'bmp')) {
    $source = imagecreatefrombmp($fileName);

    $rotate = imagerotate($source, $degrees, 0);

    imagebmp($rotate, $fileName);

    return 1;
  }
}

if (isset($_POST['refresh'])) {
  $cd = 1;
}
if (isset($_POST['edit'])) {
  echo shell_exec('start mspaint.exe "D:\ProgramCache\CodeBlocks\MinGW\bin\ac.exe\pics' . $_POST['edit'] . '"&& exit');
}
if (isset($_POST['open'])) {
  echo exec('start explorer.exe /select,D:\ProgramCache\CodeBlocks\MinGW\bin\ac.exe\pics' . $_POST['open']);
}
if (isset($cd)) {
  $path = './';
  $array = array();
  $arrayf = array();
  $arrayd = array();


  $objects = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($path), RecursiveIteratorIterator::SELF_FIRST);
  foreach ($objects as $name => $object) {
    if (str_contains(strtolower($name), '.jpg') || str_contains(strtolower($name), '.gif') || str_contains(strtolower($name), '.tiff') || str_contains(strtolower($name), '.jpeg') || str_contains(strtolower($name), '.jfif') || str_contains(strtolower($name), '.png')) {
      if (str_contains($name, '\\for\\')) {
        $arrayf[] = $name;
      } else {
        $arrayd[] = $name;
      }
      $array[] = $name;
      //echo "$name\n";$i=$i+1;
    }
  }
  $fp = fopen('dir.js', 'w');
  //fwrite($fp, 'DATA='.json_encode($array).';'.PHP_EOL .'DATAd='.json_encode($arrayd)).';'.PHP_EOL .'DATAf='.json_encode($arrayf)).';';
  fwrite($fp, 'DATA=' . json_encode($array) . ';' . PHP_EOL . 'DATAf=' . json_encode($arrayf) . ';' . PHP_EOL . 'DATAd=' . json_encode($arrayd) . ';');

  fclose($fp);
  unset($cd);
}
if (isset($_POST['dat'])) {

  $fp = fopen('dir.js', 'w');
  //fwrite($fp, 'DATA='.json_encode($array).';'.PHP_EOL .'DATAd='.json_encode($arrayd)).';'.PHP_EOL .'DATAf='.json_encode($arrayf)).';';
  fwrite($fp, $_POST['dat']);

  fclose($fp);
  echo "done";
}
