<html>
<head>
<style type="text/css">
.but {
 border-radius: 20px;
 width: 90px;
 height: 40px;
 font-weight: bolder;
 font-size: 16px;
}
</style>
<body>
<form id="formd" method="get" action="<?php $_PHP_SELF ?>">
<label>Type a letter:</label>
<input type="text" name="dia" maxlength="1" placeholder = " " />
<button type="submit" class="but" form="formd" value="submit">Submit</button>
</form>
</body>
</html>
<?php

  $val = $_GET["dia"];
  $str = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";

  $indexOfChar = strpos($str, $val);

  if ($indexOfChar !== false && ($indexOfChar<25) && ($indexOfChar>=0)) {
	$indexOfChar += 1;
   
	drawDiamond($indexOfChar, $str);
  }
  else {
    echo "Only EVEN numbers between 2 and 24 are allowed";
  }
  function drawDiamond($a, $str) {
   
     $count= 0;  
     echo "<pre>";

	$colsLength = $rowsLength = (($a*2)-1);
	$whitespaceCount = $a-1;
	$middleSpace = 0;

	for ($row=1; $row<=$a; $row++) {
		for ($space=1; $space<=$a-$row; $space++) {
			print(" ");
		}
		for ($col=1; $col<=(2*$row)-1; $col++) {
			$letterIndex = $row-1;
			if ($col === 1) {
				print("$str[$letterIndex]");
			} else if ($col == ($row + $letterIndex)) {
				print("$str[$letterIndex]");
			} else {
				print(" ");
			}			
		}
		print("\n");
	}
	for ($row=$a-1; $row>=1; $row--) {
		for ($space=1; $space<=$a-$row; $space++) {
			print(" ");
		}
		for ($col=1; $col<=(2*$row)-1; $col++) {
			$letterIndex = $row-1;
			if ($col === 1) {
				print("$str[$letterIndex]");
			} else if ($col == ($row + $letterIndex)) {
				print("$str[$letterIndex]");
			} else {
				print(" ");
			}
		}
		print("\n");
	}
     echo "</pre>";
   }
?>
