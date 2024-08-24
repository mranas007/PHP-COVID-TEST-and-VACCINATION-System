<?php
$current_page = basename($_SERVER['PHP_SELF']);
$dashboard = "";
$listOfPatient = "";
$patientRequest = "";
$testResult = "";
$vaccination = "";
$profile = "";

if ($current_page == 'index.php') {
    $dashboard = 'active';
} elseif ($current_page == 'patient.php') {
    $listOfPatient = 'active';
} elseif ($current_page == 'patientRequest.php') {
    $patientRequest = 'active';
} elseif ($current_page == 'testResults.php') {
    $testResult = 'active';
} elseif ($current_page == 'vaccination.php') {
    $vaccination = 'active';
} elseif ($current_page == 'profile.php') {
    $profile = 'active';
}

// echo $dashboard .
//     $listOfPatient .
//     $patientRequest .
//     $testResult .
//     $vaccination .
//     $profile;
?>

<div class="sidebar">
    <div class="h4 mb-4 px-3">Hospital Name</div>
    <ul class="list-unstyled">
        <li><a class="<?php echo $dashboard; ?>" href="/PHP-COVID-TEST-and-VACCINATION-System/hospital/index.php">Dashboard</a></li>
        <li><a class="<?php echo $listOfPatient; ?>" href="/PHP-COVID-TEST-and-VACCINATION-System/hospital/views/patient.php">List of Patient</a></li>
        <li><a class="<?php echo $patientRequest; ?>" href="/PHP-COVID-TEST-and-VACCINATION-System/hospital/views/patientRequest.php">Patient Request </a></li>
        <li><a class="<?php echo $testResult; ?>" href="/PHP-COVID-TEST-and-VACCINATION-System/hospital/views/testResults.php">Test Results</a></li>
        <li><a class="<?php echo $vaccination; ?>" href="/PHP-COVID-TEST-and-VACCINATION-System/hospital/views/vaccination.php">Vaccination Status</a></li>
        <li><a class="<?php echo $profile; ?>" href="/PHP-COVID-TEST-and-VACCINATION-System/hospital/views/profile.php">Profile</a></li>
        <li><a href="../logout.php">Logout</a></li>
    </ul>
</div>