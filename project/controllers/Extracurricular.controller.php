<?php
include_once("conf.php");
include_once("models/Extracurricular.class.php");
include_once("views/Extracurricular.view.php");

class ExtracurricularController
{
    // Properti kontroller
    private $extracurricular;

    // Konstruktor
    function __construct()
    {
        $this->extracurricular = new Extracurricular(Conf::$db_host, Conf::$db_user, Conf::$db_pass, Conf::$db_name);
    }

    // Method umum
    public function index()
    {
        // Membuka jalur ke database
        $this->extracurricular->open();

        // Meneruskan request dari view
        $this->extracurricular->getExtracurricular();

        // Inisiasi variabel berbentuk array untuk menyimpan kedua data table
        $data = array(
            'extracurricular' => array(),
        );

        // Push 1 per 1 data yang berbentuk objek dan diteruskan ke variabel yg telah dibuat sebelumnya
        while ($row = $this->extracurricular->getResult()) {
            array_push($data['extracurricular'], $row);
        }
        // Menutup jalur
        $this->extracurricular->close();

        // Inisiasi variable untuk memanggil kelas views dan meneruskan datanya
        $view = new ExtracurricularView();
        $view->render($data);
    }

    // form tambah data
    public function create()
    {
        $view = new ExtracurricularView();
        $view->create();
    }

    // form edit
    public function edit($id)
    {
        $this->extracurricular->open();
        $this->extracurricular->find($id);
        $data = $this->extracurricular->getResult();
        $this->extracurricular->close();


        $view = new ExtracurricularView();
        $view->edit($data);
    }


    function add($data)
    {
        $this->extracurricular->open();
        $this->extracurricular->add($data);
        $this->extracurricular->close();

        header("location:index.php?page=extracurricular");
    }

    function update($data)
    {
        $this->extracurricular->open();
        $this->extracurricular->update($data);
        $this->extracurricular->close();

        header("location:index.php?page=extracurricular");
    }

    function delete($id)
    {
        $this->extracurricular->open();
        $this->extracurricular->delete($id);
        $this->extracurricular->close();

        header("location:index.php?page=extracurricular");
    }
}
