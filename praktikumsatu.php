<?php

echo "<br>";
echo "<center>";
echo "Nomor 1";
echo "<br>";
echo "<br>";
	$angka=5;
	for($a=1; $a<=$angka; $a++){
	for($i=1; $i<=$a; $i++){
		echo " &nbsp";
	}
	for($x=$angka; $x>=$a; $x-=1){
		echo "*";
	}
	echo"<br>";
	}
	echo "</center";
	echo "<br>";
	echo "<br>";




echo "<br>";
echo "<center>";
echo "Nomor 2";
echo "<br>";
echo "<br>";
$x = 10;
while ($x > 1) {
	$y = $x;
	while ($y >= 1) {
		echo " * ";
		$y = $y - 1;
	}
	echo "<br>";
	$x = $x - 2;
	}
	echo "</center";
	echo "<br>";
	echo "<br>";


echo "<br>";
echo "<center>";
echo "Nomor 3";
echo "<br>";
echo "<br>";
$i = 10;
for ($i = 5; $i >= 1; $i--) {
  for ($j = 1; $j <= 1 - $i; $j++) {
    echo " ";
  }
  for ($k = 1; $k < $i; $k++) {
    echo "$k";
  }
  for ($l = $i; $l >= 1; $l--) {
    echo "$l";
  }
  echo "<br>";
}
echo "</center>";

?>