<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['uploadedFile'])) {
    $targetDir = "uploads/";
    $targetFile = $targetDir . basename($_FILES["uploadedFile"]["name"]);

    if (move_uploaded_file($_FILES["uploadedFile"]["tmp_name"], $targetFile)) {
        echo "File uploaded successfully!";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>