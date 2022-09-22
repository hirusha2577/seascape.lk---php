<?php

class Booking {

    private $check_in = null;
    private $check_out = null;
    private $room_type = null;
    private $customer_type = null;
    private $service_type = null;
    private $room_name = null;
    private $f_name = null;
    private $l_name = null;
    private $add_1 = null;
    private $add_2 = null;
    private $nic = null;
    private $state = null;
    private $tel = null;
    private $email = null;
    private $price = null;
    private $db = null;

    public function __construct() {
        $this->db = new Database();
    }

    public function set_booking_details($check_in, $check_out, $room_type, $customer_type, $service_type) {
        $this->check_in = $check_in;
        $this->check_out = $check_out;
        $this->room_type = $room_type;
        $this->customer_type = $customer_type;
        $this->service_type = $service_type;
    }

    public function set_personal_info($data) {
        //Helper::dd($data['check_in']);
        $this->check_in = $data['check_in'];
        $this->check_out = $data['check_out'];
        $this->room_type = $data['room_type'];
        $this->customer_type = $data['customer_type'];
        $this->service_type = $data['service_type'];

        $this->room_name = $data['room_name'];
        $this->f_name = $data['first_name'];
        $this->l_name = $data['last_name'];
        $this->add_1 = $data['address_line_1'];
        $this->add_2 = $data['address_line_2'];
        $this->nic = $data['nic'];
        $this->state = $data['state'];
        $this->tel = $data['phone_number'];
        $this->email = $data['email'];
        $this->price = $data['price'];
    }

    public function create_booking() {
//        header('Content-Type: application/json; charset=UTF8');

        date_default_timezone_set("Asia/Colombo");
        $date = date("Y-m-d");
        $time = date("h:ia");
        $b_token = Helper::random_p_id();
        $query = "insert into `booking`(`room_name`,`type`,`f_name`,`l_name`,`nic`,`address_line_1`,`address_line_2`,`email`,`tel`,`room_price`,`customer_type`,`service_type`,`check_in`,`check_out`,`status`,`request_date`,`request_time`,`b_token`) values ("
                . "'$this->room_name',"
                . "'$this->room_type',"
                . "'$this->f_name',"
                . "'$this->l_name',"
                . "'$this->nic',"
                . "'$this->add_1',"
                . "'$this->add_2',"
                . "'$this->email',"
                . "'$this->tel',"
                . "'$this->price',"
                . "'$this->customer_type',"
                . "'$this->service_type',"
                . "'$this->check_in',"
                . "'$this->check_out',"
                . "'0',"
                . "'$date',"
                . "'$time',"
                . "'$b_token'"
                . ");";

        $result = $this->db->read_query($query);
        if ($result) {
//            $result = ["status"=>1];
//            return json_encode($result);
            return $b_token;
        } else {
//            $result = ["status"=>0];
//            return json_encode($result);
            return "fail";
        }
    }

    public function confirm_request($id) {
        try {
            date_default_timezone_set("Asia/Colombo");
            $date = date("Y-m-d");
            $time = date("h:ia");
            $p_id = Helper::random_p_id();

            $query1 = "update room set `status` = '0' where `room_name` = (select `room_name` from booking where `booking_id` = '$id')";
            $this->db->read_query($query1);

            $query2 = "update booking set `status` = '1',`payment_id` = '$p_id',`booking_date` = '$date', `booking_time` = '$time' where `booking_id` = '$id'";
            $result2 = $this->db->read_query($query2);

            if ($result2) {
                return $this->send_mail($id);
            } else {
                return FALSE;
            }
        } catch (mysqli_sql_exception $e) {
            return FALSE;
        }
    }

    private function send_mail($id) {
        $query = "select * from booking where `booking_id` = '$id'";
        $result = $this->db->read_query($query);

        if ($result) {
            $row = mysqli_fetch_assoc($result);

            $room_name = $row['room_name'];
            $query2 = "select * from room where `room_name` like '$room_name'";
            $result2 = $this->db->read_query($query2);
            $row2 = mysqli_fetch_assoc($result2);

            //--- Company Deatils-------------

            $comany_name = "Seascape ";
            $website_name = "www.seascape.com";
            $comConNumber = "(+94) 91 228 2018";
            $comEmail = "info@seascape.lk";

            $comEmail2 = "info@seascape.lk";
            $from = 'info@seascape.lk';

            //---- Booking Details --

            $visitor_name = $row['f_name'] . " " . $row['l_name'];
            $visitor_email = $row['email'];
            $check_in = $row['check_in'];
            $check_out = $row['check_out'];
            $room_type = $row['type'] . " Room";
            $room_price = $row['room_price'];
            $num_adults = $row2['max_adult'];
            $num_child = $row2['max_child'];
            $subject = 'New Booking Hotel Enquiry - ' . $visitor_name;
            $message = "";




            date_default_timezone_set('Asia/Colombo');



            $todayis = date("l, F j, Y, g:i a");



            $site_link = "https://" . $_SERVER['HTTP_HOST'];



            include("../../../class/template/mail-template.php");



// mandatory headers for email message, change if you need something different in your setting.

            $headers = "From: " . $from . "\r\n";

            $headers .= "Reply-To: " . $visitor_email . "\r\n";

            $headers .= "MIME-Version: 1.0\r\n";

            $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";



            $headers1 = "From: " . $from . "\r\n";

            $headers1 .= "Reply-To: " . $comEmail . "\r\n";

            $headers1 .= "MIME-Version: 1.0\r\n";

            $headers1 .= "Content-Type: text/html; charset=ISO-8859-1\r\n";



// Sending mail

            $response = array();

            if (
                    mail($visitor_email, $subject, $visitor_message, $headers1) &&
                    mail($comEmail, $subject, $company_message, $headers)
            ) {

                $response['status'] = 'correct';

                $response['msg'] = "Your message has been sent successfully";

//"Your message has been sent successfully"

                return $response;
            } else {

                $response['status'] = 'correct';

                $response['msg'] = "Could not be sent your message";

                return $response;
            }
        }
    }

    public function discard_request($id) {
        $query = "delete from booking where `booking_id` = '$id'";
        $result = $this->db->read_query($query);

        if ($result) {
            return TRUE;
        }
    }

    public function arrange_booking($check_in, $check_out) {
        date_default_timezone_set("Asia/Colombo");
        $date = date("Y-m-d");

        if ($check_in > $date) {
            return "<td style='color: #fff; background: green'>Upcomming</td>";
        } elseif ($check_in == $date) {
            return "<td style='color: #fff; background: blue'>Today Check IN</td>";
        } elseif ($check_in <= $date && $date < $check_out) {
            return "<td style='color: #000; background: yellow'>Spend</td>";
        } elseif ($check_out == $date) {
            return "<td style='color: #fff; background: red'>Today Check OUT</td>";
        } elseif ($check_out < $date) {
            return "<td style='color: #fff; background: gray'>Expired</td>";
        }
    }

    public function get_room_details($id) {
        $query = "select * from room where room_id = '$id'";
        $result = $this->db->read_query($query);

        $room = array();
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {
                array_push($room, $row);
            }
            return $room;
        } else {
            return 'No Detail.';
        }
    }

    public function search_unbook_room() {

        if ($this->room_type == "single") {
            $query = "select * from room where (category like '$this->room_type' or category like 'double') and status = '1'";
        } elseif ($this->room_type == "double") {
            $query = "select * from room where (category like '$this->room_type' or category like 'single') and status = '1'";
        } else {
            $query = "select * from room where (category like '$this->room_type') and status = '1'";
        }

        $result = $this->db->read_query($query);

        $room = array();
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {
                array_push($room, $row);
            }
            return $room;
        } else {
            return FALSE;
        }
    }

    public function search_booked_room() {
        if ($this->room_type == "single") {
            $query = "select * from room where (`category` like '$this->room_type' or `category` like 'double') and `status` = '0'";
        } elseif ($this->room_type == "double") {
            $query = "select * from room where (`category` like '$this->room_type' or `category` like 'single') and `status` = '0'";
        } else {
            $query = "select * from room where (`category` like '$this->room_type') and `status` = '0'";
        }



        $result = $this->db->read_query($query);

        $room = array();
        while ($row = mysqli_fetch_assoc($result)) {

            $room_name = $row['room_name'];
            $query2 = "select * from booking where `room_name` like '$room_name' and `status` = '1'";
            $result2 = $this->db->read_query($query2);

            $array = array();
            while ($row2 = mysqli_fetch_assoc($result2)) {

                $c_in = $row2['check_in'];
                $c_out = $row2['check_out'];

                if ($this->check_out < $c_in) {
                    array_push($array, 1);
                } elseif ($this->check_in > $c_out) {
                    array_push($array, 1);
                } else {
                    array_push($array, 0);
                }
            }
            if (!in_array("0", $array)) {
                array_push($room, $row);
            }
        }
        return $room;
    }

    public function get_request_list() {
        $query = "select * from booking where `status` = '0'";
        $result = $this->db->read_query($query);
        return $result;
    }

    public function get_booking_list() {
        $query = "select * from booking where `status` = '1'";
        $result = $this->db->read_query($query);
        return $result;
    }

    public function get_request_count() {
        $query = "select * from booking where `status` = '0'";
        $result = $this->db->read_query($query);
        $count = mysqli_num_rows($result);
        return $count;
    }

    public function delete_booking($id) {
        $query = "delete from `booking` where `booking_id` = '$id'";
        $result = $this->db->read_query($query);
        return $result;
    }
    
     public function get_one_request($b_token) {
        $query = "select * from booking where `b_token` = '$b_token'";
        $result = $this->db->read_query($query);
        $row = mysqli_fetch_assoc($result);
        return $row;
    }

}
