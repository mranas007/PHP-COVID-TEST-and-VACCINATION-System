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
        <?php require_once 'views/partial/sidebar.php'; ?>

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
                            $crudController = new CrudController();
                            $pendingResult = $crudController->readAll("Hospital_appointment");

                            if ($pendingResult) {
                                $patient = $pendingResult->fetch_all(MYSQLI_ASSOC);
                                $total_pending = 0;
                                foreach ($patient as $row) {
                                    if ($row['status'] == "Pending") {
                                        $total_pending++;
                                    }
                                }
                                echo $total_pending;
                            } else {
                                echo 0;
                            }
                            ?>
                        </p>
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