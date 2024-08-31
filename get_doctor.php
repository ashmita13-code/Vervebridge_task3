<?php
include "databse.php";

$sql="SELECT d.did, u.fname, d.specialisatiion, d.fee FROM doctors d JOIN users u ON d.user_id=u.id";
$result= $con->query($sql);

$doctors=[];
if($result->num_rows>0)
{
    while($row=$result->fetch_assoc()){
        $doctors[]= $row;
    }
}
header("Content-Type: application/json");
echo json_encode($doctors);

$con->close();
?>