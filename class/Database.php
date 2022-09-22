<?php

class Database {

    private $host = 'localhost';
    private $name = 'dimuthu_seascape_hotel_ahangama';
    private $user = 'dimuthu_vta';
    private $password = 'iLGU0PoXLoZA';
    private $conn;

    public function __construct() {

        $this->conn =  mysqli_connect($this->host, $this->user, $this->password,$this->name) or die("Invalid host  or user details");

        // mysql_select_db($this->name) or die("Unable to select database");
    }

    public function get_connection(){
        return mysqli_connect($this->host, $this->user, $this->password, $this->name);
    }
    public function read_query($query) {

        $result = mysqli_query($this->conn,$query);
        // var_dump(mysqli_fetch_array($result));

        return $result;
    }

}
