<?php
require('model/database.php');
require('model/vehicle_db.php');
require('model/type_db.php');
require('model/class_db.php');
require('model/make_db.php');

$action = filter_input(INPUT_POST, 'action') ?? filter_input(INPUT_GET, 'action') ?? 'list_vehicles';
switch ($action) {
default:  
$type_id = filter_input(INPUT_GET, 'type_id', FILTER_VALIDATE_INT);
$class_id = filter_input(INPUT_GET, 'class_id', FILTER_VALIDATE_INT);
$make_name = filter_input(INPUT_GET, 'make');
$sort = filter_input(INPUT_GET, 'sort');
$sort = ($sort == "year") ? "year" : "price";

$class_name = get_class_name($class_id);
$type_name = get_type_name($type_id);

$vehicles = get_all_vehicles($sort);
             
if (!empty($make_name)) {
$vehicles = array_filter($vehicles, function($array) use ($make_name) {
return $array["make"] == $make_name;
});
}
if (!empty($type_id)) {
$vehicles = array_filter($vehicles, function($array) use ($type_name) {
return $array["typeName"] == $type_name;
});
}
if (!empty($class_id)) {
$vehicles = array_filter($vehicles, function($array) use ($class_name) {
return $array["className"] == $class_name;
});
}
$types = get_types();
$classes = get_classes();
$makes = get_makes();
include('view/header.php');
include('vehicle_list.php');
include('view/footer.php');
}
?> 

   