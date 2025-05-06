<?php

class ExtracurricularView
{
    public function render($data)
    {
        $no = 1;
        $dataExtracurricular = null;
        foreach ($data['extracurricular'] as $val) {
            list($id, $name, $coach, $location) = $val;
            $dataExtracurricular .= "<tr class='text-center align-middle'>
                <td>" . $no++ . "</td>
                <td>" . $name . "</td>
                <td>" . $coach . "</td>
                <td>" . $location . "</td>" . "
                <td>
                  <a href='index.php?page=extracurricular&id_edit=" . $id .  "' class='btn btn-warning mb-2 mb-md-0 mb-lg-0 mb-xl-0' '>Edit</a>
                  <a href='index.php?page=extracurricular&id_hapus=" . $id . "' class='btn btn-danger' '>Hapus</a>
                </td> 
                </tr>";
        }

        $tpl = new Template("templates/extracurricular/index.html");

        $tpl->replace("JUDUL", "Extracurricular");
        $tpl->replace("DATA_TABEL", $dataExtracurricular);
        $tpl->write();
    }

    public function create()
    {
        $tpl = new Template("templates/extracurricular/create.html");

        $tpl->write();
    }

    public function edit($data)
    {
        list($id, $name, $coach, $location) = $data;
        $tpl = new Template("templates/extracurricular/edit.html");

        $tpl->replace("ID_VALUE", $id);
        $tpl->replace("NAME_VALUE", $name);
        $tpl->replace("COACH_VALUE", $coach);
        $tpl->replace("LOCATION_VALUE", $location);

        $tpl->write();
    }
}
