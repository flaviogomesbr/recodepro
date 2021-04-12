<?php

require "./Models/Student.php";

$student = new Student;
$student->name = $_POST['name'];
$student->telphone = $_POST['telphone'];

$validate = $student->registerStudent();

if ($validate == true) {
    echo json_encode("Registro inserido");
} else {
    echo json_encode("Não foi possível inserir o registro");
}
