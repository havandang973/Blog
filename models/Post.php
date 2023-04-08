<?php
require_once(__DIR__.'/../databases/connection.php');
require_once(__DIR__.'/../models/Model.php');

class Post extends Model {
    protected $table = 'post';
    protected $fillable = ['id', 'title', 'time', 'content_1', 'img', 'content_2'];


    public function getId() {
        return $this->fillable[0];
    }

    public function getTitle() {
        return $this->fillable[1];
    }

    public function getTime() {
        return $this->fillable[2];
    }
    
    public function getContent_1() {
        return $this->fillable[3];
    }

    public function getImg() {
        return $this->fillable[4];
    }
    
    public function getContent_2() {
        return $this->fillable[5];
    }
    
    public function findTitle($id) {
        global $conn;
        $query = "SELECT ".$this->fillable[1]." from $this->table where id = $id";
        
        $result = mysqli_query($conn, $query);
        return $result;
    }
}
?>