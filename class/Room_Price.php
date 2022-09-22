<?php

class Room_Price {

    public $category;
    public $Foreign_RO;
    public $Foreign_BB;
    public $Foreign_HB;
    public $Foreign_FB;
    public $Local_RO;
    public $Local_BB;
    public $Local_HB;
    public $Local_FB;
    public $Gov_RO;
    public $Gov_BB;
    public $Gov_HB;
    public $Gov_FB;
    public $VTA_RO;
    public $VTA_BB;
    public $VTA_HB;
    public $VTA_FB;

    public function __construct($id) {
        if ($id) {
            $query = "SELECT * FROM `room_price` where `category` = '$id'";
            $db = new Database();
            $result = mysqli_fetch_array($db->read_query($query));

            $this->category = $result['category'];
            $this->Foreign_RO = $result['Foreign_RO'];
            $this->Foreign_BB = $result['Foreign_BB'];
            $this->Foreign_HB = $result['Foreign_HB'];
            $this->Foreign_FB = $result['Foreign_FB'];
            $this->Local_RO = $result['Local_RO'];
            $this->Local_BB = $result['Local_BB'];
            $this->Local_HB = $result['Local_HB'];
            $this->Local_FB = $result['Local_FB'];
            $this->Gov_RO = $result['Gov_RO'];
            $this->Gov_BB = $result['Gov_BB'];
            $this->Gov_HB = $result['Gov_HB'];
            $this->Gov_FB = $result['Gov_FB'];
            $this->VTA_RO = $result['VTA_RO'];
            $this->VTA_BB = $result['VTA_BB'];
            $this->VTA_HB = $result['VTA_HB'];
            $this->VTA_FB = $result['VTA_FB'];
// Helper::dd($this->dining_description);
            return $this;
        }
    }

    public function all() {
        $query = "SELECT * FROM `room_price` ";
        $DB = new Database();
        $result = $DB->read_query($query);
        $array_res = array();
        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }
        return $array_res;
    }

    public function one($type) {
        $query = "SELECT * FROM `room_price` WHERE `category` = '$type'";
        $DB = new Database();
        $result = $DB->read_query($query);
        $array_res = array();
        $row = mysqli_fetch_array($result);

        return $row;
    }

    public function update() {
        $query = "UPDATE `room_price` SET 
	
	`Foreign_RO`='$this->Foreign_RO',
	`Foreign_BB`='$this->Foreign_BB',
	`Foreign_HB`='$this->Foreign_HB',
	`Foreign_FB`='$this->Foreign_FB',
	`Local_RO`='$this->Local_RO',
	`Local_BB`='$this->Local_BB',
	`Local_HB`='$this->Local_HB',
	`Local_FB`='$this->Local_FB',
	`Gov_RO`='$this->Gov_RO',
	`Gov_BB`='$this->Gov_BB',
	`Gov_HB`='$this->Gov_HB',
	`Gov_FB`='$this->Gov_FB',
	`VTA_RO`='$this->VTA_RO',
	`VTA_BB`='$this->VTA_BB',
	`VTA_HB`='$this->VTA_HB',
	`VTA_FB`='$this->VTA_FB' 
	WHERE `category`='$this->category'";

        $DB = new Database();
        $result = $DB->read_query($query);
        if ($result) {
            return $result;
        } else {
            return FALSE;
        }
    }

}

?>