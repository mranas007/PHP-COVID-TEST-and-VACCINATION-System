<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/custom-style.css">
</head>

<body>
    <div class="d-flex">
        <div class="sidebar">
            <div class="h4 mb-4 px-3">Hospital Name</div>
            <ul class="list-unstyled">
                <li><a href="./index.php">Dashboard</a></li>
                <li><a href="./views/patientsList.php">Patient Requests</a></li>
                <li><a href="./views/testResults.php">Test Results</a></li>
                <li><a href="./views/vaccination.php">Vaccination Status</a></li>
                <li><a href="./views/profile.php">Profile</a></li>
                <li><a href="./views/logout.php">Logout</a></li>
            </ul>
        </div>
        <div class="content my-4">
            <div class="row">
                <div class="col-md-4 my-4">
                    <div class="panel p-3 border rounded bg-light">
                        <h3>Total Patients</h3>
                        <p><?php
                            require_once '../hospital/controllers/crudController.php';
                            $crudController = new crudController();
                            $patientResult = $crudController->readAll("patient");
                            $patient = $patientResult->fetch_all(MYSQLI_ASSOC);
                            $total_patient = count($patient);
                            echo $total_patient > 0 ? $total_patient : 0;
                            ?></p>
                        <button class="btn btn-purple">View All</button>
                    </div>
                </div>
                <div class="col-md-4 my-4">
                    <div class="panel p-3 border rounded bg-light">
                        <h3>Pending Requests</h3>
                        <p><?php
                            $crudController = new crudController();
                            $pendingResult = $crudController->readAll("Hospital_appointment");
                            $patient = $pendingResult->fetch_all(MYSQLI_ASSOC);
                            $total_patient = count($patient);
                            echo $total_patient['status'] == "Pending" ? $total_patient : 0;
                            ?></p>
                        <button class="btn btn-purple">View All</button>
                    </div>
                </div>
                <div class="col-md-4 my-4">
                    <div class="panel p-3 border rounded bg-light">
                        <h3>Approved Requests</h3>
                        <p>20</p>
                        <button class="btn btn-purple">View All</button>
                    </div>
                </div>
                <div class="col-md-4 my-4">
                    <div class="panel p-3 border rounded bg-light">
                        <h3>Test Results Pending</h3>
                        <p>5</p>
                        <button class="btn btn-purple">View All</button>
                    </div>
                </div>
                <div class="col-md-4 my-4">
                    <div class="panel p-3 border rounded bg-light">
                        <h3>Vaccinations Pending</h3>
                        <p>8</p>
                        <button class="btn btn-purple">View All</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>