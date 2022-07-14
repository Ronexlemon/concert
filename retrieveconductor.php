<?php
$servername = "localhost";
$username = "root";
$password = "";

$db = "concert";

$conn = mysqli_connect($servername,$username,$password,$db);

if($conn -> connect_error){
    die("connection failed".$conn->connect_error);
}

$sql = "select * from conductor";


$result=mysqli_query($conn,$sql);


echo "connect successfully";
echo "connection closed";
echo "added successful";
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>table</title>
</head>
<body>
<section>
        <h1>Concerts</h1>
        <!-- TABLE CONSTRUCTION -->
        <table>
            <tr>
                <th>Conductor_id</th>
                <th>Conductor_Name</th>
               
            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS -->
            <?php
                // LOOP TILL END OF DATA
                while($rows=$result->fetch_assoc())
                {
            ?>
            <tr>
                <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
                   
                <td><?php echo $rows['conductor_id'];?></td>
                <td><?php echo $rows['conductor_name'];?></td>
                
            </tr>
            <?php
                }
            ?>
        </table>
    </section>
    
</body>
</html>

