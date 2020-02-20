<?php 

function add_prefix($prefix, $types = array()){
for ($i=0; $i < count($types) ; $i++) { 
echo  $prefix.$types[$i].'<br>';
}
}

add_prefix("re", $array = array("make", "design"));