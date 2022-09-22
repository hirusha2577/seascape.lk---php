<?php

class Room {

    public $room_name;
    public $room_description;
    public $room_category;
    public $ac;
    public $hot_water;
    public $rain_shower;
    public $seating_area;
    public $iron;
    public $adults;
    public $childs;
    public $room_size;
    public $room_price;
    public $room_main_image;
    public $image_name;
    //---------------------
    public $room_id;
    public $inside_images;

    public function __construct($id) {
        if ($id) {
            $query = "select * from room where `room_id` = '$id'";

            $DB = new Database();
            $result = $DB->read_query($query);
            $room = mysqli_fetch_assoc($result);
// Helper::dd($room);
            $this->room_id = $room['room_id'];
            $this->room_name = $room['room_name'];
            $this->room_description = $room['description'];
            $this->room_category = $room['category'];
            if ($room['AC'] == 1) {
                $this->ac = 1;
            } else {
                $this->ac = 0;
            }
            if ($room['hot_water'] == 1) {
                $this->hot_water = 1;
            } else {
                $this->hot_water = 0;
            }
            if ($room['rain_shower'] == 1) {
                $this->rain_shower = 1;
            } else {
                $this->rain_shower = 0;
            }
            if ($room['seating_area'] == 1) {
                $this->seating_area = 1;
            } else {
                $this->seating_area = 0;
            }
            if ($room['iron_and_pad'] == 1) {
                $this->iron = 1;
            } else {
                $this->iron = 0;
            }
            $this->adults = $room['max_adult'];
            $this->childs = $room['max_child'];
            $this->room_size = $room['room_size'];
            $this->room_price = $room['price'];
            $this->room_main_image = $room['room_main_image_name'];
        }
    }

    public function create() {
//        Helper::dd($this);
        $UPLOAD = new Upload($this->room_main_image);

        $destination_dir = "../../../upload/room/";
        if ($UPLOAD->uploaded) {
            $UPLOAD->image_resize = true;
            $UPLOAD->file_new_name_ext = 'jpg';
            $UPLOAD->image_ratio_crop = 'C';
            $UPLOAD->file_new_name_body = HELPER::random_Id();
            $UPLOAD->image_x = 750;
            $UPLOAD->image_y = 560;

            $UPLOAD->process($destination_dir);
            if ($UPLOAD->processed) {
                $info = getimagesize($UPLOAD->file_dst_pathname);
                $this->image_name = $UPLOAD->file_dst_name;
            }
        }

        $query = "insert into `room`(`room_name`, `description`, `category`, `AC`, `hot_water`, `rain_shower`, `seating_area`,`iron_and_pad`, `max_adult`, `max_child`, `room_size`, `price`, `room_main_image_name`, `status`)"
                . " values("
                . "'$this->room_name',"
                . "'$this->room_description',"
                . "'$this->room_category',"
                . "'$this->ac',"
                . "'$this->hot_water',"
                . "'$this->rain_shower',"
                . "'$this->seating_area',"
                . "'$this->iron',"
                . "'$this->adults',"
                . "'$this->childs',"
                . "'$this->room_size',"
                . "'$this->room_price',"
                . "'$this->image_name',"
                . "'1');";
        //Helper::dd($query);
        $DB = new Database();
        $result = $DB->read_query($query);
        return $result;
    }

    public function update() {

        if ($this->image_name['name'] == "") {

            $query = "update room set "
                    . "`room_name` = '$this->room_name',"
                    . " `description` = '$this->room_description',"
                    . " `category` = '$this->room_category', "
                    . " `AC` = '$this->ac',"
                    . " `hot_water` = '$this->hot_water',"
                    . " `rain_shower` = '$this->rain_shower', "
                    . " `seating_area` = '$this->seating_area', "
                    . " `iron_and_pad` = '$this->iron',"
                    . " `max_adult` = '$this->adults',"
                    . " `max_child` = '$this->childs',"
                    . " `room_size` = '$this->room_size',"
                    . " `price` = '$this->room_price',"
                    . " `status` = '1' where `room_id` = '$this->room_id'";

            $DB = new Database();
            $result = $DB->read_query($query);

            return $result;
        } else {
            unlink("../../../upload/room/$this->room_main_image");
            $UPLOAD = new Upload($this->image_name);

            $destination_dir = "../../../upload/room/";
            if ($UPLOAD->uploaded) {
                $UPLOAD->image_resize = true;
                $UPLOAD->file_new_name_ext = 'jpg';
                $UPLOAD->image_ratio_crop = 'C';
                $UPLOAD->file_new_name_body = HELPER::random_Id();
                $UPLOAD->image_x = 750;
                $UPLOAD->image_y = 560;

                $UPLOAD->process($destination_dir);
                if ($UPLOAD->processed) {
                    $info = getimagesize($UPLOAD->file_dst_pathname);
                    $this->room_main_image = $UPLOAD->file_dst_name;
                }
            }

            $query = "update room set "
                    . "`room_name` = '$this->room_name',"
                    . " `description` = '$this->room_description',"
                    . " `category` = '$this->room_category', "
                    . " `AC` = '$this->ac',"
                    . " `hot_water` = '$this->hot_water',"
                    . " `rain_shower` = '$this->rain_shower', "
                    . " `seating_area` = '$this->seating_area', "
                    . " `iron_and_pad` = '$this->iron',"
                    . " `max_adult` = '$this->adults',"
                    . " `max_child` = '$this->childs',"
                    . " `room_size` = '$this->room_size',"
                    . " `price` = '$this->room_price',"
                    . " `room_main_image_name` = '$this->room_main_image',"
                    . " `status` = '1' where `room_id` = '$this->room_id'";
            //Helper::dd($query);
            $DB = new Database();
            $result = $DB->read_query($query);

            return $result;
        }
    }

    public function all() {
        $query = "select * from `room`";
        $DB = new Database();

        $result = $DB->read_query($query);
        $array = array();
        while ($row = mysqli_fetch_array($result)) {
            array_push($array, $row);
        }
        //Helper::dd($result);
        return $array;
    }

    public function one($category) {
        $query = "select * from `room` WHERE `category` LIKE '$category'";
        $DB = new Database();

        $result = $DB->read_query($query);
        $array = array();
        $row = mysqli_fetch_array($result);


        //Helper::dd($result);
        return $row;
    }

    public function get_room_price($room_type, $customer_type, $service_type) {

        $query = "select * from `room_price` where `category` like '$room_type'";
        $DB = new Database();

        $result = $DB->read_query($query);
        $price = null;
        while ($array = mysqli_fetch_array($result)) {
            if ($customer_type == "foreign" && $service_type == "room_only") {
                $price = $array['Foreign_RO'];
            } else if ($customer_type == "foreign" && $service_type == "bed_breakfast") {
                $price = $array['Foreign_BB'];
            } else if ($customer_type == "foreign" and $service_type == "half_board") {
                $price = $array['Foreign_HB'];
            } else if ($customer_type == "foreign" and $service_type == "full_board") {
                $price = $array['Foreign_FB'];
            } else if ($customer_type == "local" and $service_type == "room_only") {
                $price = $array['Local_RO'];
            } else if ($customer_type == "local" and $service_type == "bed_breakfast") {
                $price = $array['Local_BB'];
            } else if ($customer_type == "local" and $service_type == "half_board") {
                $price = $array['Local_HB'];
            } else if ($customer_type == "local" and $service_type == "full_board") {
                $price = $array['Local_FB'];
            }
        }
        //Helper::dd($result);
        return $price;
    }

    //Room Imagers------------------------------------------------------------------


    public function set_room_image() {
        //Helper::dd($this->room_id);
        $UPLOAD = new Upload($this->inside_images);

        $destination_dir = "../../../upload/room/";
        if ($UPLOAD->uploaded) {
            $UPLOAD->image_resize = true;
            $UPLOAD->file_new_name_ext = 'jpg';
            $UPLOAD->image_ratio_crop = 'C';
            $UPLOAD->file_new_name_body = HELPER::random_Id();
            $UPLOAD->image_x = 750;
            $UPLOAD->image_y = 560;

            $UPLOAD->process($destination_dir);
            if ($UPLOAD->processed) {
                $info = getimagesize($UPLOAD->file_dst_pathname);
                $this->image_name = $UPLOAD->file_dst_name;
            }
        }
        $query = "insert into `room_image`(`room_id`,`room_image_name`) values('$this->room_id','$this->image_name')";
        $DB = new Database();
        return $DB->read_query($query);
    }

    public function get_inside_imagers($id) {
        $query = "select * from `room_image` where `room_id` = '$id'";
        $DB = new Database();
        $result = $DB->read_query($query);
        $array = array();
        while ($row = mysqli_fetch_array($result)) {
            array_push($array, $row);
        }
        //Helper::dd($result);
        return $array;
    }

    public function get_one_inside_image($id) {
        $query = "select * from `room_image` where `room_image_id` = '$id'";
        $DB = new Database();
        $result = $DB->read_query($query);

        return $result;
    }

    public function update_inside_image($id, $old_name, $file) {
        //Helper::dd($old_name);
        unlink("../../../upload/room/" . $old_name);
        $UPLOAD = new Upload($file);

        $destination_dir = "../../../upload/room/";
        if ($UPLOAD->uploaded) {
            $UPLOAD->image_resize = true;
            $UPLOAD->file_new_name_ext = 'jpg';
            $UPLOAD->image_ratio_crop = 'C';
            $UPLOAD->file_new_name_body = HELPER::random_Id();
            $UPLOAD->image_x = 750;
            $UPLOAD->image_y = 560;

            $UPLOAD->process($destination_dir);
            if ($UPLOAD->processed) {
                $info = getimagesize($UPLOAD->file_dst_pathname);
                $this->image_name = $UPLOAD->file_dst_name;
            }
        }
        $query = "update `room_image` set `room_image_name` = '$this->image_name' where `room_image_id` = '$id'";
        $DB = new Database();
        return $DB->read_query($query);
    }

    public function delete_inside_image($id, $name) {
        unlink("../../../upload/room/" . $name);
        $query = "delete from `room_image` where `room_image_id` = '$id'";
        //Helper::dd($query);
        $DB = new Database();
        return $DB->read_query($query);
    }

    public function delete_room_image($id, $name) {
        //Helper::dd($id);
        $DB = new Database();
        unlink("../../../upload/room/" . $name);
        $query = "delete from `room` where `room_id` = '$id'";
        $result1 = $DB->read_query($query);
        $query2 = "select * from `room_image` where `room_id` = '$id'";
        $result2 = $DB->read_query($query2);

        if (mysqli_num_rows($result2) > 1 && $result1) {
            while ($row = mysqli_fetch_assoc($result2)) {
                $this->delete_inside_image($row['room_image_id'], $row['room_image_name']);
            }
            return true;
        } else if ($result1) {
            return $result1;
        }
    }

    static function get_room_id($id) {
        $query = "select room_id from `room` WHERE `room_name` LIKE '$id'";
        $DB = new Database();

        $result = $DB->read_query($query);
        $row = mysqli_fetch_array($result);
        return $row['room_id'];
    }

}
