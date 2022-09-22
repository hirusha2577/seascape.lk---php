<?php

$obj = new Helper();
$obj->random_id();

class Helper {

    public function random_id() {
        $today = time();
        $date = date('D-M-Y');
        $rand = rand(1, 1000000000);

        $new_name = $date . "-" . $today . "-" . $rand;
        return $new_name;
    }
    public function random_p_id() {
        $today = time();
        $date = date('dmy');
        $rand = rand(1, 100000);


        $new_name = $today . "" . $date . "" . $rand;
        return $new_name;
    }

    static function dd($data) {
        var_dump($data);
        exit();
    }

}
