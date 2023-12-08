<?php
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "schoolsite";

 $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
 if ($conn->connect_error) 
 {
    die("Connection failed: " . $conn->connect_error);
}
 $sql = "SELECT *FROM fileul";
 $result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Uploaded files</title>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>

	<div class="container mt-5">
        <h2 style="text-align:center">Study Materials</h2>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Standard</th>
                    <th>Subject</th>
                    <th>Discription</th>
                    <th>Download</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $file_path = "uploads/" . $row['filename'];
                        ?>
                        <tr> 
                            <td><?php echo $row['Standard']; ?></td>
                            <td><?php echo $row['subject']; ?></td>
                            <td><?php echo $row['discription']; ?></td>
                            <td><a href="<?php echo $file_path; ?>" class="btn btn-primary" download>Download</a></td>
                        </tr>
                        <?php
                    }
                } else {
                    ?>
                    <tr>
                        <td colspan="4">No files uploaded yet.</td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>

<?php
?>
