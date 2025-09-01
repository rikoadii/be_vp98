$host = "127.0.0.1";
$user = "root";
$pass = "";
$db   = "test_db";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
echo "Koneksi database berhasil!";
$conn->close();
