<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <title>لیست مقالات</title>
    <style>
        body {
            font-family: Tahoma;
            direction: rtl;
        }
        ul {
            list-style: none;
            padding: 0;
        }
        li {
            margin: 8px 0;
        }
        a {
            text-decoration: none;
            color: #0066cc;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<h2>لیست مقالات</h2>

<ul>
<?php
$folder = "MD_files//"; // نام پوشه فایل‌ها
$files = scandir($folder);

foreach ($files as $file) {
    if ($file != "." && $file != "..") {
        echo "<li><a href='$folder/$file' target='_blank'>$file</a></li>";
    }
}
?>
