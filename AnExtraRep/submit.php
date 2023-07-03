<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "data";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$stmt = $conn->prepare("INSERT INTO users (name, age, weight, email) VALUES (?, ?, ?, ?)");
$stmt->bind_param("siss", $name, $age, $weight, $email);

$name = $_POST['name'];
$age = $_POST['age'];
$weight = $_POST['weight'];
$email = $_POST['email'];

if ($stmt->execute()) {
  $lastId = $stmt->insert_id;
  $stmt->close();

  if (isset($_FILES['healthReport']) && $_FILES['healthReport']['error'] === UPLOAD_ERR_OK) {
    $fileTmpPath = $_FILES['healthReport']['tmp_name'];
    $fileName = $_FILES['healthReport']['name'];
    $fileSize = $_FILES['healthReport']['size'];
    $fileType = $_FILES['healthReport']['type'];

    $pdfContent = file_get_contents($fileTmpPath);

    $stmt = $conn->prepare("INSERT INTO health_reports (user_id, file_name, file_size, file_type, file_content) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("isiss", $lastId, $fileName, $fileSize, $fileType, $pdfContent);

    if ($stmt->execute()) {
      // Redirect to a success page
      header("Location: success.php");
      exit(); // Ensure that the script stops executing after the redirect
    } else {
      echo "Error uploading health report: " . $stmt->error;
    }

    $stmt->close();
  } else {
    echo "Error uploading health report.";
  }
} else {
  echo "Error inserting user details: " . $stmt->error;
}

$conn->close();
