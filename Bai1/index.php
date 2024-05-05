
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin sinh viên</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<table class="student-table">
  <thead>
    <tr>
      <th>MSSV</th>
      <th>Họ và Tên</th>
      <th>Kỳ</th>
      <th>Đăng Ký</th>
    </tr>
  </thead>
  <tbody>
  <?php
      // Thông tin kết nối MySQL
$servername = "localhost"; 
$username = "root"; 
$password = "109238"; 
$database = ""; 

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $database);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối không thành công: " . $conn->connect_error);
}

// Truy vấn dữ liệu từ bảng sinh viên
$sql = "SELECT * FROM Sinhvien"; 

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Hiển thị dữ liệu
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["Mssv"]. "</td><td>" . $row["HoTen"]. "</td><td>" . $row["Ky"]. "</td><td>" . $row["DangKy"]. "</td></tr>";
    }
} else {
    echo "0 kết quả";
}

// Đóng kết nối
$conn->close();
      ?>
  </tbody>
</table>

</body>
</html>
