<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "data";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$email = $_GET['email'];

$stmt = $conn->prepare("SELECT file_name, file_size, file_type, file_content FROM health_reports INNER JOIN users ON users.id = health_reports.user_id WHERE users.email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();
  $fileName = $row['file_name'];
  $fileSize = $row['file_size'];
  $fileType = $row['file_type'];
  $fileContent = $row['file_content'];

  header("Content-length: " . $fileSize);
  header("Content-type: " . $fileType);
  header("Content-Disposition: attachment; filename=" . $fileName);

  echo $fileContent;
} else {
  echo "No health report found for the given email ID.";
}

$stmt->close();
$conn->close();
