<?php

// $users = [
//     ["Имя", "Email", "Возраст"],
//     ["Иван", "ivanov@mail.ru", "19"],
//     ["Увейс", "uveis@mail.ru", "20"],
//     ["Малик", "storm06@mail.ru", "17"],
// ];

// $file = fopen("test.csv", "w");

// foreach ($users as $user) {
//     fputcsv($file, $user);
// };

// fclose($file);

// echo "CSV file create";


// $filename = "data.txt";

// if (file_exists($filename)) {
//     echo "File is a created <br>";

//     if (is_writable($filename)) {
//         echo 'File avaible for edit <br>';
//         file_put_contents($filename, "New data\n", FILE_APPEND);
//     } else {
//         echo "Not trust for edit";
//     };
// } else {
//     file_put_contents($filename, "This is a new file");
// };


// $folderName = "New PHP folder";

// if  (!file_exists($folderName)) {
    // if (mkdir($folderName)) {
    //     echo "Folder with name '$folderName' is created";
    // } else {
    //     echo "Error created folder";
    // };
// } else {
//     echo "Folder '$folderName' is a exists";
// };


// $directory = "documents";
// $filename = $directory . '/report.txt';

// if (!is_dir($directory)) {
//     if (mkdir($directory)) {
//         echo "Folder with name '$directory' is created <br>";
//     } else {
//         echo "Error created folder";
//     };
// } else {
//     echo "Folder '$directory' is a exists <br>";
// };

// $content = "Report for" . date('Y-m-d') . "\n";
// $content .= "Report data..... \n";

// if (file_put_contents($filename, $content) !== false) {
//     echo "File '$filename' is created!";
// } else {
//     echo "Error file created";
// };


// $folderName = "test";

// if(!file_exists($folderName)) {
//     // 0777 - in PHP permissions on folder and file, write in 8cc
//     // 4 - read, 2 - record, 1 - make
//     mkdir($folderName, 0777, true);
//     echo ("Folder '$folderName' is create \n");
// } else {
//     echo("Folder '$folderName' is created \n");
// };


// $oldFolderName = "test";
// $newFolderName = "newTest";

// if(file_exists($oldFolderName)) {
//     rename($oldFolderName, $newFolderName);
//     echo("Folder '$oldFolderName' rename to '$newFolderName' \n");
// };


// function copyFolder($source, $dest) {
//     if(!file_exists($dest)) {
//         mkdir($dest, 0777, true);
//     };

//     $items = scandir($source);

//     foreach($items as $item) {
//         if($item != '.' && $item != '..') {
//             $sourcePath = $source . DIRECTORY_SEPARATOR . $item;
//             $destPath = $dest . DIRECTORY_SEPARATOR . $item;

//             if(is_dir($sourcePath)) {
//                 copyFolder($sourcePath, $destPath);
//             } else {
//                 copy($sourcePath, $destPath);
//             };
//         };
//     };

//     echo "Folder copy from '$source' to '$dest'";
// };

// copyFolder('C:\Users\DzaurovUM24\Desktop\localhost\documents', 'C:\Users\DzaurovUM24\Desktop\localhost\newTest');


// $source = "data.txt";
// $newFolder = "documents/data.txt";

// if(file_exists($source)) {
//     if(rename($source, $newFolder)) {
//         echo "File is move";
//     } else {
//         echo "Error with move";
//     };
// } else {
//     echo "This file is not exists";
// };


// $file = "test.csv";

// if(unlink($file)) {
//     echo "FIle '{$file}' is delete";
// } else {
//     echo "Errro delete";
// };


// $files = [
//     'file2.html',
//     'file1.js',
//     'file3.png'
// ];

// $deletedFiles = [];
// $errors = [];
// foreach($files as $file) {
//     if(file_exists($file) && is_file($file)) {
//         if(unlink($file)) {
//             $deletedFiles[] = $file;
//         } else {
//             $errors[] = $file;
//         };
//     } else {
//         $errors = "'$file' is not exists";
//     };
// };

// echo "Delete: " . implode(', ', $deletedFiles) . "<br>";

// if(!empty($errors)) {
//     echo "Errors: " . implode(', ', $errors) . "<br>";
// };

?>