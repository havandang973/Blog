<?php
require_once(__DIR__.'/../databases/connection.php');

class Model {
    protected $table;
    protected $fillable = [];

    public function all() {
        global $conn;
        $query = "
            select * from $this->table
        ";

        $result = mysqli_query($conn, $query);
        return $result;
    }
    
    public function insert($data) {
        global $conn;
        $query = "
            insert into $this->table (".implode(',', array_slice($this->fillable, 1)).")
            values('".implode("','", $data)."')
        ";

        $result = mysqli_query($conn, $query);
        return $result;
    }

    public function find($id) {
        global $conn;
        $query = "
            select * from $this->table
            where id = $id
        ";

        $result = mysqli_query($conn, $query);
        return $result;
    }

    public function delete($id) {
        global $conn;
        $query = "
            delete from $this->table where id = $id
        ";

        $result = mysqli_query($conn, $query);
        return $result;
    }

    public function update($data, $id) {
        global $conn;

        $newArray = array_combine(array_slice($this->fillable, 1), $data);

        $map = array_map(function($value, $key){
            return "$key = '$value'";
        }, $newArray, array_keys($newArray));

        $flatten = implode(",", $map);

        $query = "
            update $this->table  
            set $flatten
            where id = $id
        ";
        
        $result = mysqli_query($conn, $query);
        return $result;
    }
}
?>