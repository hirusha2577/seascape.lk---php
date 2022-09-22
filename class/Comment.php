<?php

class Comment {

    public $id = null;
    public $author_name = null;
    public $author_image = null;
    public $email = null;
    public $comment = null;
    public $date = null;
    public $time = null;
    public $status = null;
    public $author_image_name = "default/male.png";

    public function __construct($id) {
        if ($id) {
            $query = "select * from comment where `comment-id` = '$id'";
            $DB = new Database();
            $result = $DB->read_query($query);
            $row = mysqli_fetch_assoc($result);

            $this->id = $row['comment-id'];
            $this->author_name = $row['author_name'];
            $this->author_image = $row['author_image'];
            $this->email = $row['email'];
            $this->comment = $row['comment'];
            $this->date = $row['date'];
            $this->time = $row['time'];
            $this->status = $row['status'];
        }
        return $this;
    }

    public function all() {
        $query = "select `comment-id`, `author_name`, `author_image`, `email`, CONCAT(SUBSTRING(`comment`,1,20),' ...') as 'comment', `date`, `time`, `status` from `comment`;";
        $DB = new Database();
        $result = $DB->read_query($query);

        if (mysqli_num_rows($result) > 0) {
            $array = array();
            while ($row = mysqli_fetch_array($result)) {
                array_push($array, $row);
            }
            return $array;
        } else {
            return false;
        }
    }
    public function all_active() {
        $query = "select `comment-id`, `author_name`, `author_image`, `email`, `comment` , `date`, `time`, `status` from `comment` WHERE `status` = 1;";
        $DB = new Database();
        $result = $DB->read_query($query);

        if (mysqli_num_rows($result) > 0) {
            $array = array();
            while ($row = mysqli_fetch_array($result)) {
                array_push($array, $row);
            }
            return $array;
        } else {
            return false;
        }
    }

    public function create() {

        if ($this->author_image['name'] != "") {
            $UPLOAD = new Upload($this->author_image);
            // $HELPER = new Helper();
            $destination_dir = "upload/comment/";
            if ($UPLOAD->uploaded) {
                $UPLOAD->image_resize = true;
                $UPLOAD->file_new_name_ext = 'jpg';
                $UPLOAD->image_ratio_crop = 'C';
                $UPLOAD->file_new_name_body = HELPER::random_Id();
                $UPLOAD->image_x = 220;
                $UPLOAD->image_y = 220;

                $UPLOAD->process($destination_dir);
                if ($UPLOAD->processed) {
                    $info = getimagesize($UPLOAD->file_dst_pathname);
                    $this->author_image_name = $UPLOAD->file_dst_name;
                    $query = "insert into `comment`(`author_name`,`author_image`,`email`,`comment`,`date`,`time`,`status`) values('$this->author_name',"
                            . "'$this->author_image_name',"
                            . "'$this->email',"
                            . "'$this->comment',"
                            . "'$this->date',"
                            . "'$this->time',"
                            . "'$this->status')";
                    $DB = new Database();
                    $result = $DB->read_query($query);
                    return $result;
                } else {
                    return false;
                }
            }
        } else {
            $query = "insert into `comment`(`author_name`,`author_image`,`email`,`comment`,`date`,`time`,`status`) values('$this->author_name',"
                    . "'$this->author_image_name',"
                    . "'$this->email',"
                    . "'$this->comment',"
                    . "'$this->date',"
                    . "'$this->time',"
                    . "'$this->status')";
            $DB = new Database();
            $result = $DB->read_query($query);
            return $result;
        }
    }

    public function update() {

        $query = "update `comment` set "
                . "`author_name` = '$this->author_name',"
                . "`email` = '$this->email',"
                . "`comment` = '$this->comment',"
                . "`status` = '$this->status'"
                . "where `comment-id` = '$this->id'";

        $DB = new Database();
        $result = $DB->read_query($query);
        return $result;
    }

//    public function delete() {
//        unlink("../../../upload/comment/" . $this->author_image);
//        $query = "delete from `comment` where `comment-id` = '$this->id'";
//        $DB = new Database();
//        $result = $DB->read_query($query);
//        return $result;
//    }

}
