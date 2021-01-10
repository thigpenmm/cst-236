<?php
for($x=0, $x < count($persons); $x++)
{
    echo "<tr>";
    echo "<td>" . $persons[$x][0] . "<td>" . "<td>" . $persons[$x][1] . "</td>" . "</td>" . $persons[$x][2] . "</td>"; echo "</tr>";
}