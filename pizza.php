<?php 
$input = fopen("a_example.in", "r");

echo '<h2>Pizza</h2>';
if ($input) {
    while (($line = fgets($input)) !== false) {
    $var=explode(" ",$line);

    $R = $var[0];
    $C = $var[1];
    $L = $var[2];
    $H = $var[3];

    break;
    }


    $pizza =   "";

    $lineNo = 0;
	$startLine = 1;
	while ($line = fgets($input)) {
	    $lineNo++;
	    if ($lineNo >= $startLine) {

	    	$pizza .= preg_replace("/[^a-zA-Z]/", "", $line);
	    }
	    
	}


	$cells = str_split($pizza);

	//var_dump($cells);

    fclose($input);
} 
$count = 0;
$T = 0;
$M = 0;
$slices=0;

function search(&$mat, $n, $x) 
{ 
    $i = 0; 
    $j = $n - 1; // set indexes for 
                // top right element 
    while ($i < $n && $j >= 0) 
    { 
        if ($mat[$i][$j] == $x) 
        { 
            echo "n found at " . $i.  
                        ", " . $j; 
            return 1; 
        } 
        if ($mat[$i][$j] > $x) 
            $j--; 
        else // if $mat[$i][$j] < $x 
            $i++; 
    } 
      
    echo "n Element not found"; 
    return 0; // if ( $i==$n || $j== -1 ) 
} 
  
// Driver Code 
$mat = array(array(10, 20, 30, 40), 
            array(15, 25, 35, 45), 
            array(27, 29, 37, 48), 
            array(32, 33, 39, 50)); 
search($mat, 4, 20); 


echo "<table border =\"1\" style='border-collapse: collapse'>";


	foreach (range(1,$var[0]) as $row) {

		
		 echo "<tr> \n";


 foreach (range(1,$var[1]) as $col) {
     	echo "<td>$cells[$count]</td> \n";
     	$count++;
 }

         echo "</tr> \n";


 
}

echo "</tr>";
echo "</table>";
echo "Total Rows:$var[0] <br/>";
echo "Total Columns:$var[1] <br/>";
echo "Min ingredients:$var[2] <br/>";
echo "Max cell:$var[3] <br/>";
echo "Total Cell: ". count($cells) ."<br/>";
echo "Total Mashroom:$M <br/>";
echo "Total Tomato:$T ";

echo "Total Slice:$slices ";






