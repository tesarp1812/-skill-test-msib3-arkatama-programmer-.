<html>
<head>
    <title>Add Users</title>
</head>
 
<body>
    <a href="tampil.php">Go to Home</a>
    <br/><br/>
 
    <form action="tambah.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr> 
                <td>umur</td>
                <td><input type="text" name="umur"></td>
            </tr>
             <tr> 
                <td>kota</td>
                <td><input type="text" name="kota"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>
    
    <?php
 
    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $nama = $_POST['nama'];
        $umur = $_POST['umur'];
        $kota = $_POST['kota'];
        
        // include database connection file
        include_once("config.php");
                
        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO `data` (`nama`, `umur`, `kota`) VALUES('$nama','$umur','$kota')");
        
        // Show message when user added
        echo "User added successfully. <a href='tampil.php'>View Users</a>";
    }
    ?>
</body>
</html>