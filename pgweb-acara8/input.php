<?php 
$id = $_POST['id'];
$kecamatan = $_POST['kecamatan']; 
$longitude = $_POST['longitide']; 
$latitude = $_POST['latitude'];
$luas = $_POST['luas'];
$jumlah_penduduk = $_POST['jumlah_penduduk']; 

// Sesuaikan dengan setting MySQL 
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "pgwe-acara8"; 

// Create connection 
$conn = new mysqli($servername, $username, $password, $dbname); 

// Check connection s
if ($conn->connect_error) { 
die("Connection failed: " . $conn->connect_error); 
} 

$sql = "INSERT INTO jml_pddk (id, kecamatan, longitide, latitude, luas, jumlah_penduduk) 
VALUES ('$id', '$kecamatan', '$longitude', '$latitude', $luas, '$jumlah_penduduk')";

// $id = $_GET['id'];
// // query SQL untuk insert data
// $sql="DELETE from jml_pddk where id='$id'";
// mysqli_query($conn, $sql);
// // mengalihkan ke halaman index.php 9 
// // header("location:index.php");


if ($conn->query($sql) === TRUE) { 
    echo "New record created successfully"; 
} else { 
    echo "Error: " . $sql . "<br>" . $conn->error; 
} 

$conn->close(); 
//header("Location:index.html"); 
//exit; 
?>