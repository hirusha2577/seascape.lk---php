<?php

/**
 * 
 */
class Dining {

    public $dining_id;
    public $dining_title;
    public $dining_description;
    public $dining_main_image="";
    public $update_dining_main_image="";
    public $new_dining_main_image_name;
    public $old_image_name;

    public function __construct($id) {
        if ($id) {

            $query = "SELECT * FROM `dining` where `dining_id` = '$id'";
            $db = new Database();
            $result = mysqli_fetch_array($db->read_query($query));

            $this->dining_id = $result['dining_id'];
            $this->dining_title = $result['dining_title'];
            $this->dining_description = $result['description'];

            $this->dining_main_image = $result['dining_main_image_name'];

// Helper::dd($this->dining_description);
            return $this;
        }
    }

    public function all() {
        $query = "SELECT * FROM `dining` ";

        $DB = new Database();

        $result = $DB->read_query($query);
        $array_res = array();
        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function all_limit($size){
        $query = "SELECT `dining_id`, `dining_title`, SUBSTRING(description,1,$size) as description, `dining_main_image_name` FROM `dining`";
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

        $UPLOAD = new Upload($this->dining_main_image);
        // $HELPER = new Helper();
        $destination_dir = "../../../upload/dining/";
        if ($UPLOAD->uploaded) {
            $UPLOAD->image_resize = true;
            $UPLOAD->file_new_name_ext = 'jpg';
            $UPLOAD->image_ratio_crop = 'C';
            $UPLOAD->file_new_name_body = HELPER::random_Id();
            $UPLOAD->image_x = 800;
            $UPLOAD->image_y = 800;

            $UPLOAD->process($destination_dir);
            if ($UPLOAD->processed) {
                $info = getimagesize($UPLOAD->file_dst_pathname);
                $dining_main_image_name = $UPLOAD->file_dst_name;
            }
        }

        $query = "INSERT INTO `dining`(`dining_title`, `description`, `dining_main_image_name`) VALUES(
        '$this->dining_title',
        '$this->dining_description',
        '$dining_main_image_name'
        );";

//        Helper::dd($query);
        $DB = new Database();
        $result = $DB->read_query($query);

        return $result;
    }






   //
    public function update() {
        if ($this->update_dining_main_image == "") {
            $this->new_dining_main_image_name = $this->old_image_name;


        } else {
            $filename = "../../../upload/dining/" . $this->old_image_name;
// Helper::dd($this->update_dining_main_image);
            unlink($filename);
            $old_img_name = explode(".", $this->old_image_name);
            $UPLOAD = new Upload($this->update_dining_main_image);
            // $HELPER = new Helper();
            $destination_dir = "../../../upload/dining/";
            if ($UPLOAD->uploaded) {
                $UPLOAD->image_resize = true;
                $UPLOAD->file_new_name_ext = 'jpg';
                $UPLOAD->image_ratio_crop = 'C';
                $UPLOAD->file_new_name_body = $old_img_name[0];
                $UPLOAD->image_x = 800;
                $UPLOAD->image_y = 800;
                $UPLOAD->process($destination_dir);
                if ($UPLOAD->processed) {
                    $info = getimagesize($UPLOAD->file_dst_pathname);
                    $this->new_dining_main_image_name = $UPLOAD->file_dst_name;


                  
                }
            }
        }
  $query = "UPDATE `dining` SET 
           `dining_title`='$this->dining_title',
          `description`='$this->dining_description',
          `dining_main_image_name`='$this->new_dining_main_image_name'
          WHERE `dining_id`='$this->dining_id'";
  // Helper::dd($query);

                    $DB = new Database();
                    $result = $DB->read_query($query);

        if ($result) {
            return $result;
        } else {
            return FALSE;
        }
    }





    public function delete() {

        $path = "../../../upload/dining/" . $this->dining_main_image;

        unlink($path);
        $query = "delete from `dining` where `dining_id` = '$this->dining_id'";
 
        $DB = new Database();
        $result1 = $DB->read_query($query);

        if ($result1) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

}

?>