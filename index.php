<?php

$name = "FirstName";

$last_name= "Last Name";

$full_name = "";
if($name)
{
$full_name = $full_name.$name;
}

if($last_name)
{
$full_name = $full_name.$last_name;
}

echo $full_name;
?>
