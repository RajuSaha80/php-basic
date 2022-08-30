<?php
$person = array('Name' => 'Raju', 'Age' => 42, 'Country' => 'Bangladesh');
echo "<pre>";
//var_dump($person);
print_r($person);
echo "</pre>";
//echo $person['Country'];
foreach ($person as $k => $v) {
    echo "Raju's $k is $v" . "<br>";
}
