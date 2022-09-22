<?php

class Slider {
    public $id;
    public $title;
    public $sub_title;
    public $description;
    public $image;
    public $image_name;
    public $queue;

    public function __construct($id) {
        if($id){
            $query = "select * from `slider` where `id` = '$id'";
            
            $DB = new Database();
            $result = $DB->read_query($query);
            
            $row = mysqli_fetch_assoc($result);
            $this->id = $row['id'];
            $this->title = $row['title'];
            $this->sub_title = $row['sub_title'];
            $this->description = $row['description'];
            $this->image_name = $row['image_name'];
            $this->queue = $row['queue'];
            return $this;
        }
    }

    public function all() {
        $query = "SELECT * FROM `slider` ORDER BY `queue` ASC";

        $DB = new Database();

        $result = $DB->read_query($query);
        $array_res = array();
        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }
        return $array_res;
    }

    public function create() {

        $UPLOAD = new Upload($this->image);
        // $HELPER = new Helper();
        $destination_dir = "../../../upload/slider/";
        if ($UPLOAD->uploaded) {
            $UPLOAD->image_resize = true;
            $UPLOAD->file_new_name_ext = 'jpg';
            $UPLOAD->image_ratio_crop = 'C';
            $UPLOAD->file_new_name_body = HELPER::random_Id();
            $UPLOAD->image_x = 2200;
            $UPLOAD->image_y = 1200;

            $UPLOAD->process($destination_dir);
            if ($UPLOAD->processed) {
                $info = getimagesize($UPLOAD->file_dst_pathname);
                $this->image_name = $UPLOAD->file_dst_name;
            }
        }

        $query = "insert into `slider`(`title`,`sub_title`,`description`,`image_name`) value(
        '$this->title',
        '$this->sub_title',
        '$this->description',
        '$this->image_name'
        );";
        //Helper::dd($query);
        $DB = new Database();
        $result = $DB->read_query($query);

        return $result;
    }

    public function update() {

        if ($this->image != "") {
            unlink("../../../upload/slider/" . $this->image_name);
            $old_img_name = explode(".", $this->image_name);

            $UPLOAD = new Upload($this->image);
            $destination_dir = "../../../upload/slider/";
            if ($UPLOAD->uploaded) {
                $UPLOAD->image_resize = true;
                $UPLOAD->file_new_name_ext = 'jpg';
                $UPLOAD->image_ratio_crop = 'C';
                $UPLOAD->file_new_name_body = $old_img_name[0];
                $UPLOAD->image_x = 2200;
                $UPLOAD->image_y = 1200;

                $UPLOAD->process($destination_dir);

                if ($UPLOAD->processed) {
                    $info = getimagesize($UPLOAD->file_dst_pathname);
                    $image_name = $UPLOAD->file_dst_name;
                    $this->image_name = $image_name;
                }
            }
        }
        $query = "update `slider` set `title` = '$this->title',`sub_title` = '$this->sub_title', `description` = '$this->description', `image_name` = '$this->image_name' where `id` = '$this->id'";
        //Helper::dd($query);
        $DB = new Database();
        $result = $DB->read_query($query);
        return $result;
    }
//
    public function delete() {
        unlink("../../../upload/slider/" . $this->image_name);
        $query = "delete from `slider` where `id` = '$this->id'";

        $DB = new Database();
        $result = $DB->read_query($query);
        return $result;
    }

}
