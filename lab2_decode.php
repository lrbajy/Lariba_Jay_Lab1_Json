
<?php
$json = '{
    "name": "Justine Mike Dela Isla",
    "location": "Muntinlupa City, Philippines",
    "email": "delaislajustinemike_bsit@plmun.edu.ph",
    "role": "Interface Developer"
}';

$obj = json_decode($json);
$arr = json_decode($json, true);

echo "Object Name: " . $obj->name . "<br>";
echo "Object Location: " . $obj->location . "<br>";
echo "Array Name: " . $arr['name'] . "<br>";
echo "Array Email: " . $arr['email'];
?>
