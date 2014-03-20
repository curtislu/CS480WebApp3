<?php
/*$search_value = $_REQUEST['search'];
$search = $_POST['search'];
$category = array("0"=>"Customer Name ", "1"=>"Customer Address ","2"=>"Order Product ", "3"=>"Order Summary ", "4"=>"Order Payment");
$search_category = array();
echo "Search Results for " . $search;
echo "<br>";

    foreach($category as $x=>$x_value) {
        echo $x_value;
    } */
   $url = file_get_contents('data.json');
   echo $url;
   $data = json_decode($url);
   var_dump($data);
//   echo  $data['Count'];
   
   foreach($data->Results as $results) {

   foreach($results as $key=>$value)
   {
       echo $key ." : ". $value;
       echo "<br>";
   }
   echo "<br>";
}

/*   foreach($data as $key => $value) {
    echo $key;
    if (gettype($value) == "object") {
        foreach ($value as $key => $value) {
          
        }
    } 
} */
   //echo  $data['Results'][0]['ContractType'];
   
/*   foreach ($data as $key => $val) {
    if(is_array($val)) {
        echo "$key:\n";
    } else {
        echo "$key $val\n";
    } 
} */
?>