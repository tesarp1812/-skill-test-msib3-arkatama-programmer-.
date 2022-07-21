<?php
// Create database connection using config file
include_once("config.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM data ");
?>
 
<html>
<head>    
    <title>Homepage</title>
</head>
 
<body>
<a href="tambah.php">Add New User</a><br/><br/>
 
    <table width='80%' border=1>
 
    <tr>
        <th>nama</th> <th>umur</th> <th>kota</th> 
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['nama']."</td>";
        echo "<td>".$user_data['umur']."</td>";
        echo "<td>".$user_data['kota']."</td>";    
        // echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>