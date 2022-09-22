<?php include 'include.php';

$DB = new Database();
$q="show databases;";




// $r=$DB->read_query($q);
// if($r){
//     echo 'Success <br>';
//     echo mysql_fetch_array($r);
// }





// $q="";
$q="SELECT table_name FROM information_schema.tables WHERE table_schema = 'suhatdux_hirusha_vta';";




$set = $DB->read_query($q);
$dbs = array();
while($db = mysql_fetch_row($set))
   $dbs[] = $db[0]." ".$db[1]." ".$db[2];
echo implode('<br/>', $dbs);

?>