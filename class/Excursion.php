<?php

/**
 * 
 */
class Excursion {

    public $excursion_id;
    public $destination;
    public $description;
    public $length_and_time;
    public $excursion_main_image="";
    public $update_excursion_main_image="";
    public $old_image_name;
    public $new_excursion_main_image_name;

    public function __construct($id) {
        if ($id) {

            $query = "SELECT * FROM `excursion` where `excursion_id` = '$id'";
            $db = new Database();
            $result = mysqli_fetch_array($db->read_query($query));
//            Helper::dd($result);
            $this->excursion_id = $result['excursion_id'];
            $this->destination = $result['destination'];
            $this->description = $result['description'];
            $this->length_and_time = $result['length_and_time'];
            $this->excursion_main_image = $result['excursion_main_image'];
        // helper::dd($result);



            return $this;
        }
    }

    public function all() {
        $query = "SELECT * FROM `excursion` ";

        $DB = new Database();

        $result = $DB->read_query($query);
        $array_res = array();
        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function all_limit($size){
        $query = "SELECT `excursion_id`, CONCAT(SUBSTRING(destination,1,25),' ...') destination, CONCAT(SUBSTRING(description,1,$size),' ...') as description, `length_and_time`, `excursion_main_image` FROM `excursion`";
        $DB = new Database();

        $result = $DB->read_query($query);
        $array_res = array();

       while ($row = mysqli_fetch_array($result)) {
         // Helper::dd($row);
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function create() {

        $UPLOAD = new Upload($this->excursion_main_image);
        // $HELPER = new Helper();
        $destination_dir = "../../../upload/excursion/";
        if ($UPLOAD->uploaded) {
            $UPLOAD->image_resize = true;
            $UPLOAD->file_new_name_ext = 'jpg';
            $UPLOAD->image_ratio_crop = 'C';
            $UPLOAD->file_new_name_body = HELPER::random_Id();
            $UPLOAD->image_x = 750;
            $UPLOAD->image_y = 500;

            $UPLOAD->process($destination_dir);
            if ($UPLOAD->processed) {
                $info = getimagesize($UPLOAD->file_dst_pathname);
                $excursion_main_image_name = $UPLOAD->file_dst_name;
            }
        }

        $query = "INSERT INTO `excursion`(`destination`, `description`, `length_and_time`, `excursion_main_image`) VALUES(
        '$this->destination',
        '$this->description',
        '$this->length_and_time',
        '$excursion_main_image_name'
        );";

        //Helper::dd($query);
        $DB = new Database();
        $result = $DB->read_query($query);

        return $result;
    }

    //
    public function update() {
        if ($this->update_excursion_main_image == "") {
            $this->new_excursion_main_image_name = $this->old_image_name;

        } else {
            $filename = "../../../upload/excursion/" . $this->old_image_name;

            unlink($filename);
            $old_img_name = explode(".", $this->old_image_name);
            $UPLOAD = new Upload($this->update_excursion_main_image);
            // $HELPER = new Helper();
            $destination_dir = "../../../upload/excursion/";
            if ($UPLOAD->uploaded) {
                $UPLOAD->image_resize = true;
                $UPLOAD->file_new_name_ext = 'jpg';
                $UPLOAD->image_ratio_crop = 'C';
                $UPLOAD->file_new_name_body = $old_img_name[0];
                $UPLOAD->image_x = 750;
                $UPLOAD->image_y = 500;
                $UPLOAD->process($destination_dir);
                if ($UPLOAD->processed) {
                    $info = getimagesize($UPLOAD->file_dst_pathname);
                    $this->new_excursion_main_image_name = $UPLOAD->file_dst_name;


                  
                }
            }
        }
  $query = "UPDATE `excursion` SET 
           `destination`='$this->destination',
          `description`='$this->description',
          `length_and_time`='$this->length_and_time',
          `excursion_main_image`='$this->new_excursion_main_image_name'
          WHERE `excursion_id`='$this->excursion_id'";
  // Helper::dd($query);

                    $DB = new Database();
                    $result = $DB->read_query($query);

        if ($result) {
            return $result;
        } else {
            return FALSE;
        }
    }

    public function delete($id) {
        $query = "delete from `excursion` where `excursion_id` = '$id'";

        $DB = new Database();
        $result1 = $DB->read_query($query);
        if ($result1) {
            $path = "../../../upload/excursion/" . $this->excursion_main_image;
            unlink($path);
        }

        if ($result1) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

}
