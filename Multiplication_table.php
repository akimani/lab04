<?php


for($i=0; $i<101; $i++)
{
    if($i > 0)
        echo "<td>" .$i. "</td>";
    else
        echo "<td>"." "."</td>";
}

echo "<tr>";
for($i = 1; $i<101; $i++)
{
    echo "<td>" .$i. "</td>";
	for($j = 1; $j<101; $j++)
	{
		$k = $i * $j;
        echo "<td>" .$k. "</td>";
	}
	echo "</tr>";
}

?>
