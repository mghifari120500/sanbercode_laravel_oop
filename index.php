<?php
$sheep = new animal();

echo $sheep->get_name; // "shaun"
echo $sheep->get_legs; // 4
echo $sheep->get_cold_blooded; // "no"

// NB: Boleh juga menggunakan method get (get_name(), get_legs(), get_cold_blooded()) 
?>