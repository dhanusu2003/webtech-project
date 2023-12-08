<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if a file was uploaded without errors
    if (isset($_FILES["fi"]) && $_FILES["fi"]["error"] == 0) {
        $target_dir = "uploads/"; // Change this to the desired directory for uploaded files
        $target_file = $target_dir . basename($_FILES["fi"]["name"]);
         $file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Check if the file is allowed (you can modify this to allow specific file types)
        $allowed_types = array("jpg", "jpeg", "png", "gif", "pdf","doc","docx");
        if (!in_array($file_type, $allowed_types)) {
            echo "Sorry, only JPG, JPEG, PNG, GIF,word, and PDF files are allowed.";
        } else {
            // Move the uploaded file to the specified directory
            if (move_uploaded_file($_FILES["fi"]["tmp_name"], $target_file)) {
                $filename = $_FILES["fi"]["name"];
                $file = $_FILES['fi']['tmp_name'];
                $subject = $_POST['sj'];
                $discription = $_POST['dis'];
                $standard=$_POST['sd'];

                $db_host = "localhost";
                $db_user = "root";
                $db_pass = "";
                $db_name = "schoolsite";

                $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $sql = "INSERT INTO fileul (file,subject, discription,standard,filename) VALUES ('$file', '$subject', '$discription',$standard,'$filename')";

                if ($conn->query($sql) === TRUE) {
                    echo "The file " . basename($_FILES["fi"]["name"]) . " has been uploaded and the information has been stored in the database.";
                } else {
                    echo "Sorry, there was an error uploading your file and storing information in the database: " . $conn->error;
                }

                $conn->close();
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    } else {
        echo "No file was uploaded.";
    }
}
?>

