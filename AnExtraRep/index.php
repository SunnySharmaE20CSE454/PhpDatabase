<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Health Report Submission Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

</head>

<body>
    <div class="container">
        <h2 class="mt-5 mb-4">Health Report Submission Form</h2>
        <form id="healthForm" method="post" action="submit.php" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="age">Age:</label>
                <input type="number" class="form-control" id="age" name="age" required>
            </div>
            <div class="form-group">
                <label for="weight">Weight:</label>
                <input type="number" class="form-control" id="weight" name="weight" required>
            </div>
            <div class="form-group">
                <label for="email">Email ID:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="healthReport">Upload Health Report (PDF):</label>
                <input type="file" class="form-control-file" id="healthReport" name="healthReport" required>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
            </div>
        </form>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>