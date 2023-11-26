<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
table {
  width: 100%;
  border-collapse: collapse;
}

table, td, th {
  border: 1px solid black;
  padding: 5px;
}

th {text-align: left;}
h1{
  text-align: center;
  color: red;
}
</style>
</head>
<body>
<h1>Danh sách bất động sản</h1>
<div class="search-container">
    <form action="/action_page.php">
      <input type="text" placeholder="Tìm kiếm" name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
</div>
<?php

$con = mysqli_connect('localhost','root','','quanlybds_team20');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"quanlybds_team20");
$sql="SELECT * FROM property";
$result = mysqli_query($con,$sql);
if (!$result) {
  die('Error in SQL query: ' . mysqli_error($con));
}

echo "<table>
<tr>
<th>ID</th>
<th>Mã hợp đồng</th>
<th>Họ và tên</th>
<th>Sinh năm</th>
<th>CMND</th>
<th>SĐT</th>
<th>Tên BĐS</th>
<th>Giá</th>
<th>Trạng thái</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['ID'] . "</td>";
  echo "<td>" . $row['Mã hợp đồng'] . "</td>";
  echo "<td>" . $row['Sinh năm'] . "</td>";
  echo "<td>" . $row['CMND'] . "</td>";
  echo "<td>" . $row['SĐT'] . "</td>";
  echo "<td>" . $row['CMND'] . "</td>";
  echo "<td>" . $row['Tên BĐS'] . "</td>";
  echo "<td>" . $row['Giá'] . "</td>";
  echo "<td>" . $row['Trạng thái'] . "</td>";
  echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
<div>
  <button><a href="add.html">Thêm</a></button>
  <button><a href="">Chỉnh sửa</a></button>
</div>
</body>
</html>