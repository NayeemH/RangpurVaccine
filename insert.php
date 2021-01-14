<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "rngvac";


$conn = mysqli_connect($server, $username, $password, $dbname);

if (isset($_POST['submit'])) {

    // Get all values from the FORM

    if (!empty($_POST['city_corporation']) && !empty($_POST['ward_no']) && !empty($_POST['par_add']) && !empty($_POST['local_add']) && !empty($_POST['dob']) && !empty($_POST['gender']) && !empty($_POST['client_name']) && !empty($_POST['profession']) && !empty($_POST['mobile_no']) && !empty($_POST['nid']) && !empty($_POST['birth_certificate']) && !empty($_POST['emer_contact_no']) && !empty($_POST['health_history'])) {

        // Assign values into variables

        $city_corporation = $_POST['city_corporation'];
        $ward_no = $_POST['ward_no'];
        $par_add = $_POST['par_add'];
        $local_add = $_POST['local_add'];
        $dob = $_POST['dob'];
        $gender = $_POST['gender'];
        $client_name = $_POST['client_name'];
        $profession = $_POST['profession'];
        $mobile_no = $_POST['mobile_no'];
        $nid = $_POST['nid'];
        $birth_certificate = $_POST['birth_certificate'];
        $emer_contact_no = $_POST['emer_contact_no'];
        $health_history = $_POST['health_history'];
        $covidTestBeforeYes = $_POST['covidTestBeforeYes'];
        $covid_test_date = $_POST['covid_test_date'];
        $immunityYes = $_POST['immunityYes'];
        $immunity_times = $_POST['immunity_times'];

        // query

        $query = "INSERT INTO info(city_corporation,ward,parmanent_add,local_add,dob,gender,client_name,profession,mobile_num,nid,birth_certificate,emergency_contact,covid_test_before,covid_date,immunity_compromised,compromised_times,health_history) VALUES ('$city_corporation', '$ward_no', '$par_add', '$local_add', '$dob', '$gender', '$client_name', '$profession', '$mobile_no', '$nid', '$birth_certificate', '$emer_contact_no', '$covidTestBeforeYes', $covid_test_date', '$immunityYes', $immunity_times', '$health_history')";


        $run = mysqli_query($conn, $query) or die('Error: ' . mysqli_error($conn));

        if ($run) {
            echo "Form submitted Successfully";
        } else {
            echo "Error";
        }
    } else {
        echo "all fields required";
    }
}