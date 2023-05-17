<?php
include "sort.php";
// $connect = mysqli_connect("localhost", "root", "", "accounts");
// $output = '';
// $order = $_POST["order"];
$column_name = $_POST["column_name"];
$sort = $_POST["sort"];
// if($order == "desc"){
//     $order = 'asc';
// }else{
//     $order = 'desc';
// }
$query = "SELECT * FROM users ORDER BY ".$column_name." ".$sort." ";
$result = mysqli_query($conn, $query);
// $output .= '
// <table class="table table-bordered">
//     <tr>
//         <th><a class="column-sort" id="id" order="'.$order.'" href="#">ID</a></th>
//         <th><a class="column-sort" id="username" order="'.$order.'" href="#">Username</a></th>
//         <th><a class="column-sort" id="mail" order="'.$order.'" href="#">Mail</a></th>
//     </tr>
// ';
// while($row = mysqli_fetch_array($result))
// {
//     $output .= '
//     <tr>
//         <td>'.$row["id"].'</td>
//         <td>'.$row["username"].'</td>
//         <td>'.$row["mail"].'</td>
//     </tr>
//     ';
// }
// $output .= '<table>';
// echo $output;
$html = '';
while($row = mysqli_fetch_array($result)){
  $id = $row['id'];
  $username = $row['username'];
  $mail = $row['mail'];

  $html .= "<tr>
    <td>".$id."</td>
    <td>".$username."</td>
    <td>".$mail."</td>
  </tr>";
}
echo $html;
?>