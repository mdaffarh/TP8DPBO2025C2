<?php

class Student extends DB
{
    function getStudent()
    {
        $query = "SELECT * FROM student";
        return $this->execute($query);
    }

    function find($id)
    {
        $query = "SELECT * FROM student WHERE id = '$id'";
        return $this->execute($query);
    }

    function add($data)
    {
        $name = $data['name'];
        $nim = $data['nim'];
        $phone = $data['phone'];
        $join_date = $data['join_date'];

        // Lengkapi Query
        $query = "INSERT INTO student VALUES ('', '$name', '$nim', '$phone', '$join_date')";

        // Mengeksekusi query
        return $this->execute($query);
    }

    function delete($id)
    {
        // Lengkapi Query
        $query = "DELETE FROM student WHERE id = '$id'";
        // Mengeksekusi query
        return $this->execute($query);
    }

    function update($data)
    {
        $id = $data['id'];
        $name = $data['name'];
        $nim = $data['nim'];
        $phone = $data['phone'];
        $join_date = $data['join_date'];

        $query = "UPDATE student SET name = '$name', nim = '$nim', phone = '$phone', join_date = '$join_date' WHERE id = '$id'";

        // Mengeksekusi query
        return $this->execute($query);
    }
}
