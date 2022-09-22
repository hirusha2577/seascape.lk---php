<?php 

/**
 * 
 */
class Payment
{
	private $id;
	private $item;
	private $price;
	private $quentity;

	//ALL BOOKING
	function all()
	{
		$query = "select * from booking where `status` = '1' AND payment_id IS NOT NULL ORDER BY `booking_date` ASC";		
		$DB = new Database();
		$result = $DB->read_query($query);
		$array_res = array();
		while ($row = mysqli_fetch_array($result)) {
			array_push($array_res, $row);
		}
		return $array_res;
	}

	//ONE BOOKING - BY PAYMENTID
	function one($id)
	{
		$query = "SELECT * FROM `booking` WHERE `payment_id` LIKE ".$id.";";
		$DB = new Database();
		$result = $DB->read_query($query);
		$row = mysqli_fetch_array($result);
		
		return $row;
	}

	//ALL ITEMS - BY PAYMENTID
	function all_item($id)
	{
		$query = "SELECT * FROM `payment` WHERE id LIKE ".$id.";";
		$DB = new Database();
		$result = $DB->read_query($query);
		$array_res = array();
		while ($row = mysqli_fetch_array($result)) {
			array_push($array_res, $row);
		}
		return $array_res;
	}

	//TOTAL PRICE
	function total($id,$price,$additional)
	{
		$query = "SELECT SUM(total) FROM `payment` WHERE id LIKE ".$id.";";
		$DB = new Database();
		$result = $DB->read_query($query);
		$row = mysqli_fetch_array($result);

		if(strpos($price,'$')!== false){
		$room = explode("$ ",$price);
		}else if(strpos($price,'LKR')!== false){
		$room = explode("LKR ",$price);
		}
		// Helper::dd($room);
		$total = floatval($row['SUM(total)']) + floatval($room[1]) + floatval($additional);
		return $total;
	}

	function set_data($data)
	{
		$this->id = $data['id'];
		$this->item = $data['item'];
		$this->price = $data['price'];
		$this->quentity = $data['quentity'];
	}

	function create()
	{
		$query = "INSERT INTO `payment`(`id`, `item`, `quentity`, `total`) VALUES(
			'$this->id',
			'$this->item',
			'$this->quentity',
			'$this->price'
			
			);";
	
			// Helper::dd($query);
			$DB = new Database();
			$result = $DB->read_query($query);
	
			return $result;
	}

	function paid($id)
	{
		$query = "UPDATE `booking` SET `paid` = '1' WHERE `payment_id` LIKE '$id';";
	
			// Helper::dd($query);
			$DB = new Database();
			$result = $DB->read_query($query);
	
			return $result;
	}

	function set_discount($discount,$id){
		$query = "UPDATE `booking` SET `discount` = '$discount' WHERE `booking_id` LIKE '$id' AND `paid` =0;";
	
		// Helper::dd($query);
		$DB = new Database();
		$result = $DB->read_query($query);

		return $result;
	}
	function set_additional($additional,$id){
		$query = "UPDATE `booking` SET `additional` = '$additional' WHERE `booking_id` LIKE '$id';";
	
		// Helper::dd($query);
		$DB = new Database();
		$result = $DB->read_query($query);

		return $result;
	}
	
}

 ?>