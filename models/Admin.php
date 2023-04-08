<?php
require_once(__DIR__.'/../databases/connection.php');
require_once(__DIR__.'/../models/Model.php');

class Admin extends Model {
    protected $table = "admin";
    protected $fillable = ["id", "username", "password"];

    public function getUser() {
        return $this->fillable[1];
    }

    public function getPassword() {
        return $this->fillable[2];
    }
}
?>