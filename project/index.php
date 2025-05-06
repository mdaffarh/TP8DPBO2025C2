<?php
include_once("views/Template.class.php");
include_once("models/DB.class.php");

if (!empty($_GET['page'])) {
    include_once("controllers/Extracurricular.controller.php");
    $controller = new ExtracurricularController();
} else {
    include_once("controllers/Student.controller.php");
    $controller = new StudentController();
}

if (isset($_POST['add'])) {
    $controller->add($_POST);
} else if (isset($_POST['update'])) {
    $controller->update($_POST);
} else if (!empty($_GET['id_hapus'])) {
    $id = $_GET['id_hapus'];
    $controller->delete($id);
} else if (!empty($_GET['id_edit'])) {
    $id = $_GET['id_edit'];
    $controller->edit($id);
} else if (isset($_GET['create'])) {
    $controller->create();
} else {
    $controller->index();
}
