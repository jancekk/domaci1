<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'accounts';
$conn = new mysqli($host, $user, $pass, $db);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/ce5233f2e0.js" crossorigin="anonymous"></script>\
    <link rel="stylesheet" href="sort.css">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <title>Sort Users</title>
</head>
<body>
<!-- <nav class="nav">
        <div class="logo">
            <a href="home/index.php">
            <img src="img/logo1.jpg" alt="logo" width="300" height="auto"></a>
        </div>
        <ul class="lista">
            <li><a href="login.php">Log in</a></li>
            <li><a href="../register/register.php">Register</a></li>
        </ul>
    </nav> -->
    <div class="container" style="width:700px;" align="center">
    <h3>Sort Users</h3><br>
    <div class="table-responsive" id="employee_table">
        <input type='hidden' id='sort' value='asc'>
        <table  width='100%' id='empTable' border='1' cellpadding='10'>
            <tr>
            <th><span onclick='sortTable("id")'>ID</span></th>
            <th><span onclick='sortTable("username")'>Username</span></th>
            <th><span onclick='sortTable("mail")'>Mail</span></th>
            </tr>
            <?php
            $query = "SELECT * FROM users ORDER BY id ASC";
            $result = mysqli_query($conn, $query);
            while($row = mysqli_fetch_array($result))
            
            {
                ?>
            <tr>
                <td><?php echo $row["id"];?></td>
                <td><?php echo $row["username"];?></td>
                <td><?php echo $row["mail"];?></td>
            </tr>
            <?php
            }
            ?>
        </table>
    </div>
</div>
<br>
<p>
    <a href="home/index.php">Home</a>
</p>
</body>
</html>
<script>
    // $(document).ready(function(){
    //     $(document).on('click','.column-sort', function(){
    //         var column_name = $(this).attr('id');
    //         var order = $(this).attr('order');
    //         var arrow = '';
    //         if(order == "desc"){
    //             arrow = <i class="fa-solid fa-arrow-up"></i>;
    //         }else{
    //             arrow = <i class="fa-regular fa-arrow-down"></i>;
    //         }
    //         $.ajax({
    //             url:"query.php",
    //             method:"POST",
    //             data:{column_name:column_name, order:order},
    //             success:function(data)
    //             {
    //                 $('#employee_table').html(data);
    //                 $('#'+column_name'').append(arrow);
    //             }
    //         })
    //     });
    // });
function sortTable(column_name){
 
var sort = $("#sort").val();
 $.ajax({
  url:'query.php',
  type:'post',
  data:{column_name:column_name,sort:sort},
  success: function(data){
 
$("#empTable tr:not(:first)").remove();
        $("#empTable").html(data);
//  $("#empTable").append(response);

   if(sort == "asc"){
     $("#sort").val("desc");
   }else{
     $("#sort").val("asc");
   }
 
  }
 });
}
</script>
