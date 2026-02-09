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


$directory = "documents";
$filename = $directory . '/report.txt';

if (!is_dir($directory)) {
    if (mkdir($directory)) {
        echo "Folder with name '$directory' is created <br>";
    } else {
        echo "Error created folder";
    };
} else {
    echo "Folder '$directory' is a exists <br>";
};

$content = "Report for" . date('Y-m-d') . "\n";
$content .= "Report data..... \n";

if (file_put_contents($filename, $content) !== false) {
    echo "File '$filename' is created!";
} else {
    echo "Error file created";
};

?>