<table width="350" border="1">
    <tr>
        <td width="89"><strong>Key</strong></td>
        <td width="88"><strong>Value</strong></td>
    </tr>
   <?php
   $url = file_get_contents('data.json');
   $search = $_REQUEST['search'];
   //echo $url;
   $data = json_decode($url);
   //var_dump($data);
   
   foreach($data->Results as $results) {
       
   foreach($results as $key=>$value)
   {
       if($search == $value) {
       echo "<tr>";
       echo "<td>";
       echo $key;
       //echo $key ." : ". $value;
       echo "</td>";
       echo "<td>";
       echo $value;
       echo "</td>";
       echo "</tr>";
       }
   }
}
   ?>
  </table>