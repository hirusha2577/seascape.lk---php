<?php

/**
 * 
 */
class Event_Image {

    public $id = null;
    public $event_id = null;
    public $event_image_name = null;
    public $old_image_name = null;
    public $new_image_name = null;

    public function __construct($id) {
        if ($id) {

            $query = "SELECT * FROM `event_image` where `event_image_id` = '$id'";
            $db = new Database();
            $result = mysqli_fetch_array($db->read_query($query));
            $this->id = $result['event_image_id'];
            $this->event_id = $result['event_id'];
            $this->event_image_name = $result['event_image_name'];


            return $this;
        }
    }

    public function all($id) {
        $query = "SELECT * FROM `event_image` WHERE `event_id` = $id";

        $DB = new Database();

        $result = $DB->read_query($query);
        $array_res = array();
        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function create($event_id) {

        $UPLOAD = new Upload($this->event_image_name);
        // $HELPER = new Helper();
        $destination_dir = "../../../upload/event/image";
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
        $query = "INSERT INTO `event_image`( `event_id`, `event_image_name`) VALUES(
		'$event_id',
		'$image_name'
		)";


        $DB = new Database();
        $result = $DB->read_query($query);
        return $result;
    }

//    
//
//
//     function upload_image($event_image_name){
//
//
//        $UPLOAD = new Upload($event_image_name);
//        // $HELPER = new Helper();
//        $destination_dir = "../../../upload/event/image/";
//        if ($UPLOAD->uploaded) {
//            $UPLOAD->image_resize = true;
//            $UPLOAD->file_new_name_ext = 'jpg';
//            $UPLOAD->image_ratio_crop = 'C';
//            $UPLOAD->file_new_name_body = HELPER::random_Id();
//            $UPLOAD->image_x = 750;
//            $UPLOAD->image_y = 500;
//            $UPLOAD->process($destination_dir);
//            if ($UPLOAD->processed) {
//                $info = getimagesize($UPLOAD->file_dst_pathname);
//                $image_name = $UPLOAD->file_dst_name;
//            }
//        }
//        return $image_name;
//
//    }
//    public function insert_to_db($image_name){
//        $query = "INSERT INTO `event_image`(`event_id`, `event_image_name`) VALUES(
//        '$this->event_id',
//        '$image_name'
//
//        )";
//        // Helper::dd($query);
//
//        $DB = new Database();
//        $result = $DB->read_query($query);
//        return $result;
//    }
//
    public function delete() {
        $query = "delete from `event_image` where `event_image_id` = '$this->id'";

        $DB = new Database();
        $result1 = $DB->read_query($query);
        $path = "../../../upload/event/image/" . $this->event_image_name;

        unlink($path);
        if ($result1) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

}

?>