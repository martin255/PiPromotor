
<!-- naložimo imena slik v array -->
<?php
$arrayslik=array("");
$i=0;
if ($handle = opendir('C:\xampp\htdocs\RaspberrySite(xamp)\PIPromotor\slike')) 
{	
    while (false !== ($entry = readdir($handle)))
			{
				if ($entry != "." && $entry != "..") 
					{
					// Odstranimo locila ne pozabi, da je to tudi v datoteki izbraneslike.php
					$entry1=strtr($entry, array('.' => '', ',' => '',' '=>''));
					$arrayslik[$i]="$entry1";
					$i+=1;
					
					echo $entry;
					}
			}
    }
    closedir($handle);
?>

<!-- naložimo imena baz v array -->
<?php
$arraybaz=array("");
$i=0;
if ($handle = opendir('C:\xampp\htdocs\RaspberrySite(xamp)\testprograms\baze')) 
{
    while (false !== ($entry = readdir($handle))) {
        if ($entry != "." && $entry != "..") 
			{
					// Odstranimo locila ne pozabi, da je to tudi v datoteki izbraneslike.php
					$entry1=strtr($entry, array('.' => '', ',' => '',' '=>''));
					
					 $i+=1;
					 $arraybaz[$i]="$entry1".", ";
					 
					}
			}
    }
    closedir($handle);
?>

<!-- preverimo, če so baze ustvarjene -->
<?php
echo "$arraybaz[0]";
echo "$arrayslik[0]";
for($j=0; $arrayslik[$j]; $j++)
	echo $arrayslik[$j];
	{
		if (in_array($arrayslik[$j],$arraybaz)) 
			{
				break;
				echo $arrayslik[$j];
			}
		elseif($arrayslik[0]==null)
			{
				$temp=$arrayslik[$j]."php";
				$ourFileHandle = fopen($temp, 'w') or die("can't open file");
				fclose($ourFileHandle);
				echo $arrayslik[2];
			}
		else
			{
				$ourFileHandle = fopen("$arrayslik[$j].php", 'w') or die("can't open file");
				fclose($ourFileHandle);
				echo $arrayslik[3];
			};
		
	};
?>


<?php

// Open the file to get existing content
//$current = file_get_contents($ourFileName);
// Append a new person to the file
//$current = "<";
// Write the contents back to the file
//file_put_contents($ourFileName, $current);


?>

