<?php
// Sesuaikan dengan setting MySQL
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pgwe-acara8";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM jml_pddk";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1px'><tr>
<th>id</th>    
<th>kecamatan</th>
<th>longitide</th>
<th>latitude</th>
<th>luas</th>
<th>jumlah_penduduk</th>
<th>aksi</th>";

    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
        <td>" . $row["id"] . "</td>
        <td>" . $row["kecamatan"] . "</td>
        <td>" . $row["longitide"] . "</td>
        <td>" . $row["latitude"] . "</td>
        <td>" . $row["luas"] . "</td>
        <td align='center'>" . $row["jumlah_penduduk"] . "</td>
        <td>
            <a href='delete.php?id=" . $row["id"] . "' onclick=\"return confirm
            ('Apakah Anda yakin ingin menghapus data ini?');\">Delete</a>
            </td>
            </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>