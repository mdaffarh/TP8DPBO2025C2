<?php

class Extracurricular extends DB
{
    function getExtracurricular()
    {
        $query = "SELECT * FROM extracurricular";
        return $this->execute($query);
    }

    function find($id)
    {
        $query = "SELECT * FROM extracurricular WHERE id = '$id'";
        return $this->execute($query);
    }

    function add($data)
    {
        $name = $data['name'];
        $coach = $data['coach'];
        $location = $data['location'];

        // Lengkapi Query
        $query = "INSERT INTO extracurricular VALUES ('', '$name', '$coach', '$location')";

        // Mengeksekusi query
        return $this->execute($query);
    }

    function delete($id)
    {
        // Lengkapi Query
        $query = "DELETE FROM extracurricular WHERE id = '$id'";
        // Mengeksekusi query
        return $this->execute($query);
    }

    function update($data)
    {
        $id = $data['id'];
        $name = $data['name'];
        $coach = $data['coach'];
        $location = $data['location'];

        $query = "UPDATE extracurricular SET name = '$name', coach = '$coach', location = '$location' WHERE id = '$id'";

        // Mengeksekusi query
        return $this->execute($query);
    }
}
