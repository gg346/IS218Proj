<?php
/**
 * Created by PhpStorm.
 * User: YoungB
 * Date: 4/22/2019
 * Time: 3:26 PM
 */

$currentDir = getcwd();
$uploadDirectory = "/uploads/";
$errors = []; // Store all errors here
$fileExtensions = ['csv','xlsx']; // Get all the file extensions
$fileName = $_FILES['fileToUpload']['name'];
$fileSize = $_FILES['fileToUpload']['size'];
$fileTmpName  = $_FILES['fileToUpload']['tmp_name'];
$fileType = $_FILES['fileToUpload']['type'];
$tmp = explode('.', $fileName);
$fileExtension = end($tmp);
$uploadPath = $currentDir . $uploadDirectory . basename($fileName);
if (isset($_POST['submit'])) {
    if (! in_array($fileExtension,$fileExtensions)) {
        $errors[] = "This file extension is not allowed. Please upload a csv or a xlsx";
    }
    if ($fileSize > 2000000) {
        $errors[] = "This file is more than 2MB. Sorry, it has to be less than or equal to 2MB";
    }
    if (empty($errors)) {
        $didUpload = move_uploaded_file($fileTmpName, $uploadPath);
        if ($didUpload) {
            echo "The file " . basename($fileName) . " has been uploaded";
        } else {
            echo "An error occurred somewhere. Try again or contact the admin";
        }
    } else {
        foreach ($errors as $error) {
            echo $error . "These are the errors" . "\n";
        }
    }
}