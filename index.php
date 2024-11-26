<?php
echo 'welcome';
echo '</br>';
$assoc=[
    'name'=>'Samuel',
    'age'=>23,
    'school'=>'SQI'
];
print_r($assoc);
print_r($assoc['name']);
print_r($assoc['age']);
print_r($assoc['school']);
echo '</br>';

$obj=new stdClass;
$obj->firstname='Olu';
$obj->lastname='Owolabi';
$obj->school='SQI';

print_r($obj);
print_r($obj->firstname);
echo '</br>';

$arrayone=[23,34,56,67,78,89,90];
print_r(count($arrayone));
echo '</br>';

for($i=0;$i<count($arrayone);$i++){
    echo $arrayone[$i];
    echo '</br>';
}

?>