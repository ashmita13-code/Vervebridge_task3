<?php
include "databse.php";

$patient_id= $_POST["patient_id"];
$doctor_id= $_POST["doctor_id"];
$appointment_date= $_POST["appointment_date"];
$appointment_time= $_POST["appointment_time"];

$sql="INSERT INTO appointments(patient_id,did,appointment_date,appointment_time) VALUES(?, ?, ?, ?)";
$stmt=mysqli_stmt_init($con);
                $prepare_stmt=mysqli_stmt_prepare($stmt,$sql);
                if($prepare_stmt)
                {
                    mysqli_stmt_bind_param($stmt,"iiss",$patient_id,$doctor_id,$appointment_date,$appointment_time);
                    mysqli_stmt_execute($stmt);
                    echo "<div class='alert alert-success'>Appointment booked successfully!</div>";
                }
                else{
                    die("Error!something went wrong.");
                }
                
?>