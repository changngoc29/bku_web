<?php
include "./configDB.php";
include "./query.php";

$courses = getAllCourse();

//get the q parameter from URL
$q = $_GET["q"];

//lookup all links from the xml file if length of q>0
if (strlen($q) > 0) {
    $hint = "";
    foreach ($courses as $course) {
        // echo $course['name'] . ' ' . stripos(strtolower($course['name']), $q);
        if (strpos(strtolower(' ' . $course['name']), strtolower($q)) == true) {
            $hint = $hint . "<a href='http://localhost/bku/pages/courses.php?id={$course['id']}'>{$course['name']}</a>" . '<br/>';
        }
    }
}

// Set output to "no suggestion" if no hint was found
// or to the correct values
if ($hint == "") {
    $response = "no suggestion";
} else {
    $response = $hint;
    $hint = "";
}

//output the response
echo $response;
