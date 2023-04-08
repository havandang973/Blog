<?php
require_once(__DIR__.'/../databases/connection.php');
require_once(__DIR__.'/../models/Model.php');

class Info_post extends Model {
    protected $table = "info_post";
    protected $fillable = ['id', 'title', 'time'];

    public function getId() {
        return $this->fillable[0];
    }

    public function getTime() {
        return $this->fillable[2];
    }
    
    public function getTitle() {
        return $this->fillable[1];
    }
}
?>