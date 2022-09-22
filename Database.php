
<?php

class Database {

    private $host = 'localhost';
    private $name = 'suhatdux_hirusha_vta';
    private $user = 'suhatdux_vtabaddegama';
    private $password = 'sJqd3BLr3gmv!';

    public function __construct() {

        mysql_connect($this->host, $this->user, $this->password) or die("Invalid host  or user details");

        mysql_select_db($this->name) or die("Unable to select database");
    }

    public function read_query($query) {

        $result = mysql_query($query) or die(mysql_error());

        return $result;
    }

}
