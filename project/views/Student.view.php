<?php

class StudentView
{
    public function render($data)
    {
        $no = 1;
        $dataStudent = null;
        foreach ($data['student'] as $val) {
            list($id, $name, $nim, $phone, $join_date) = $val;
            $dataStudent .= "<tr class='text-center align-middle'>
                <td>" . $no++ . "</td>
                <td>" . $name . "</td>
                <td>" . $nim . "</td>
                <td>" . $phone . "</td>
                <td>" . $join_date . "</td>" . "
                <td>
                  <a href='index.php?id_edit=" . $id .  "' class='btn btn-warning mb-2 mb-md-0 mb-lg-0 mb-xl-0' '>Edit</a>
                  <a href='index.php?id_hapus=" . $id . "' class='btn btn-danger' '>Hapus</a>
                </td> 
                </tr>";
        }

        $tpl = new Template("templates/student/index.html");

        $tpl->replace("JUDUL", "Student");
        $tpl->replace("DATA_TABEL", $dataStudent);
        $tpl->write();
    }

    public function create()
    {
        $tpl = new Template("templates/student/create.html");

        $tpl->write();
    }

    public function edit($data)
    {
        list($id, $name, $nim, $phone, $join_date) = $data;
        $tpl = new Template("templates/student/edit.html");

        $tpl->replace("ID_VALUE", $id);
        $tpl->replace("NAME_VALUE", $name);
        $tpl->replace("NIM_VALUE", $nim);
        $tpl->replace("PHONE_VALUE", $phone);
        $tpl->replace("JOIN_DATE_VALUE", $join_date);

        $tpl->write();
    }
}
