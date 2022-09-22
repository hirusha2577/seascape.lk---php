<?php

/**
 * 
 */
class Event {

    public $id = null;
    public $event_name = null;
    public $event_description = null;
    public $event_author = null;
    public $event_date = null;
    public $event_main_image = null;
    public $old_image_name = null;
    public $new_event_main_image = null;

    public function __construct($id) {
        if ($id) {

            $query = "SELECT * FROM `event` where `event_id` = '$id'";
            $db = new Database();
            $result = mysqli_fetch_array($db->read_query($query));

            $this->id = $result['event_id'];
            $this->event_name = $result['event_title'];
            $this->event_description = $result['description'];
            $this->event_author = $result['event_author'];
            $this->event_date = $result['event_date'];
            $this->event_main_image = $result['event_main_image'];



            return $this;
        }
    }

//
    public function all() {
        $query = "SELECT `event_id`, `event_title`, `description`, `event_author`, `event_main_image`, `event_date` FROM `event`";

        $DB = new Database();

        $result = $DB->read_query($query);
        $array_res = array();
        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }


    public function all_limit($size){
        $query = "SELECT `event_id`, `event_title`, CONCAT(SUBSTRING(description,1,$size),' ...') as description, `event_author`, `event_main_image`, `event_date` FROM `event`";
        $DB = new Database();

        $result = $DB->read_query($query);
        $array_res = array();

       while ($row = mysqli_fetch_array($result)) {
         // Helper::dd($row);
            array_push($array_res, $row);
        }

        return $array_res;
    }
//
    public function create() {
        $UPLOAD = new Upload($this->event_main_image);
        // $HELPER = new Helper();
        $destination_dir = "../../../upload/event/";
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
                $image_name = $UPLOAD->file_dst_name;
            }
        }
// Helper::dd($this->event_name);
        $query = "INSERT INTO `event`(`event_title`, `description`, `event_author`, `event_main_image`, `event_date`) VALUES(
		'$this->event_name',
		'$this->event_description',
		'$this->event_author',
		'$image_name',
		'$this->event_date'
		)";


        $DB = new Database();
        $result = $DB->read_query($query);
        return $result;
    }

    //
    public function update() {

        if ($this->event_main_image == "") {
            $this->new_event_main_image = $this->old_image_name;
        } else {
            $filename = "../../../upload/event/" . $this->old_image_name;

            unlink($filename);
            $old_img_name = explode(".", $this->old_image_name);
            $UPLOAD = new Upload($this->event_main_image);
            // $HELPER = new Helper();
            $destination_dir = "../../../upload/event/";
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
                    $this->new_event_main_image = $UPLOAD->file_dst_name;
                }
            }
        }

        $query = "UPDATE `event` SET 
           `event_title`='$this->event_name',
          `description`='$this->event_description',
          `event_author`='$this->event_author',
          `event_main_image`='$this->new_event_main_image',
          `event_date`='$this->event_date' 
          WHERE `event_id`=$this->id";

        $DB = new Database();
        $result = $DB->read_query($query);
        if ($result) {
            return $result;
        } else {
            return FALSE;
        }
    }

    //
    public function delete($id) {

        $query = "delete from `event` where `event_id` = '$id'";


        $DB = new Database();
        $result9 = $DB->read_query($query);
        $path = "../../../upload/event/" . $this->event_main_image;
        unlink($path);


        $query = "select * from `event_image` where `event_id` = $id";
        $DB = new Database();
//        $result=null;
        $result = $DB->read_query($query);
        $array_res = array();
        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }



        if ($result9 && count($array_res) > 0) {
            $r = $this->delete_image($DB, $array_res);
            if ($r) {

                return $r;
            } else {
                return FALSE;
            }
        } else if ($result9) {
            return $result9;
        } else {
            return FALSE;
        }
    }

    public function delete_image($DB, $result) {

        foreach ($result as $key => $event) {
            $aa = $event['event_image_id'];
            $bb = $event['event_image_name'];
            $query = "delete from `event_image` where `event_image_id` = '$aa'";


            $result2 = $DB->read_query($query);
            $path = "../../../upload/event/image/" . $bb;
            unlink($path);
        }






        if ($result2) {
            return $result2;
        } else {
            return FALSE;
        }
    }

}

?>