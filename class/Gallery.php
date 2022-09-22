<?php

class Gallery {

    public $image_id = null;
    public $image_name = null;
    public $image = null;
    public $title = null;

    public function __construct($id) {
        if ($id) {
            $query = "select * from `gallery` where `image_id` = '$id'";
            $DB = new Database();
            $result = $DB->read_query($query);
            $row = mysqli_fetch_assoc($result);

            $this->image_id = $row['image_id'];
            $this->image_name = $row['image_name'];
            $this->title = $row['title'];
        }
        return $this;
    }

    public function create() {
        $UPLOAD = new Upload($this->image);
        // $HELPER = new Helper();
        $destination_dir = "../../../upload/gallery/$this->title/";
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

                $query = "insert into `gallery`(`image_name`,`title`) values('$this->image_name','$this->title')";
                $DB = new Database();
                $result = $DB->read_query($query);
                return $result;
            }  else {
                return FALSE;
            }
        }
    }
    
    public function all($title){
        $query = "select * from `gallery` where `title` = '$title' order by `image_id` desc";
        
        $DB = new Database();
        
        $result = $DB->read_query($query);
        $array_res = array();
        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }
        return $array_res;
        
    }
    
    public function delete(){
          $query = "delete from `gallery` where `image_id` = '$this->image_id'";
     
        unlink("../../../upload/gallery/$this->title/$this->image_name");
        
      
        $DB = new Database();
        
        $result = $DB->read_query($query);
        return $result;
    }
    
    public function count($title){
        $query = "select count(image_id) as 'count' from `gallery` where `title` like '$title'";
         $DB = new Database();
        
        $result = $DB->read_query($query);
        $row = mysqli_fetch_assoc($result);
        return $row['count'];
    }

}
