<?php
include '../Layout/config.php';
$data = array();
$sql = "SELECT *  FROM `discussion` ORDER BY id desc";
$result = $conn->query($sql);
while($row = $result->fetch()){
        array_push($data, $row);
        array_push($data);
}

echo json_encode($data);
$conn = null;
exit();



