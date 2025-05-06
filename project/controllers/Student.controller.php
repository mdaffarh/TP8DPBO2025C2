<?php
include_once("conf.php");
include_once("models/Student.class.php");
include_once("views/Student.view.php");

class StudentController
{
    // Properti kontroller
    private $student;

    // Konstruktor
    function __construct()
    {
        $this->student = new Student(Conf::$db_host, Conf::$db_user, Conf::$db_pass, Conf::$db_name);
    }

    // Method umum
    public function index()
    {
        // Membuka jalur ke database
        $this->student->open();

        // Meneruskan request dari view
        $this->student->getStudent();

        // Inisiasi variabel berbentuk array untuk menyimpan kedua data table
        $data = array(
            'student' => array(),
        );

        // Push 1 per 1 data yang berbentuk objek dan diteruskan ke variabel yg telah dibuat sebelumnya
        while ($row = $this->student->getResult()) {
            array_push($data['student'], $row);
        }
        // Menutup jalur
        $this->student->close();

        // Inisiasi variable untuk memanggil kelas views dan meneruskan datanya
        $view = new StudentView();
        $view->render($data);
    }

    // form tambah data
    public function create()
    {
        $view = new StudentView();
        $view->create();
    }

    // form edit
    public function edit($id)
    {
        $this->student->open();
        $this->student->find($id);
        $data = $this->student->getResult();
        $this->student->close();


        $view = new StudentView();
        $view->edit($data);
    }


    function add($data)
    {
        $this->student->open();
        $this->student->add($data);
        $this->student->close();

        header("location:index.php");
    }

    function update($data)
    {
        $this->student->open();
        $this->student->update($data);
        $this->student->close();

        header("location:index.php");
    }

    function delete($id)
    {
        $this->student->open();
        $this->student->delete($id);
        $this->student->close();

        header("location:index.php");
    }
}
