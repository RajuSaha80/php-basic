<?php
$ages = array('Person' => 'Age', 'Raju' => 42, 'Berry' => 30, 'Tigger' => 25);
reset($ages);
list($c1, $c2) = each($ages);
echo ("<table><tr><th>$c1</th><th>$c2</th></tr><br>");
while (list($c1, $c2) = each($ages)) {
    echo ("<tr><td>$c1</td><td>$c2</td></tr><br>");
}
echo ("</table>");
