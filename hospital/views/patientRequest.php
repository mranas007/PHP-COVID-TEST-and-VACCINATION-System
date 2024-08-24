<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Requests</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/css/custom-style.css">
</head>

<body>
    <div class="d-flex">
        <?php  require_once './partial/sidebar.php'; ?>
        <div class="content my-4">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Patient Name</th>
                        <th>Test Type</th>
                        <th>Status</th>
                        <th>Requested Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require_once '../controllers/hospitalController.php';

                    $patientRequest = new HospitalController();
                    $getData = $patientRequest->getPatientAppointmentApproval();

                    if ($getData) {
                        foreach ($getData as $row) {
                            if (htmlspecialchars($row['status']) === "Approved") {
                                echo '<tr>
                                <td>' . htmlspecialchars($row['id']) . '</td>
                                <td>' . htmlspecialchars($row['p_name']) . '</td>
                                <td>' . htmlspecialchars($row['test_type']) . '</td>
                                <td style="background-color:green; color:white;">' . htmlspecialchars($row['status']) . '</td>
                                <td>' . htmlspecialchars($row['appointment_date']) . '</td>
                                </tr>';
                            }else if(htmlspecialchars($row['status']) === "Rejected"){
                                echo '<tr>
                                <td>' . htmlspecialchars($row['id']) . '</td>
                                <td>' . htmlspecialchars($row['p_name']) . '</td>
                                <td>' . htmlspecialchars($row['test_type']) . '</td>
                                <td>' . htmlspecialchars($row['status']) . '</td>
                                <td style="background-color:red; color:white;">' . htmlspecialchars($row['status']) . '</td>
                                <td>' . htmlspecialchars($row['appointment_date']) . '</td>
                                </tr>';
                            }
                        }
                    } else {
                        echo '<tr><td colspan="7">No data available</td></tr>';
                    }
                    ?>
 
                   <!-- <tr>
                        <td>1</td>
                        <td>Jane Doe</td>
                        <td>COVID Test</td>
                        <td>2024-08-01</td>
                        <td>Pending</td>
                        <td>
                            <button class="btn btn-purple">Approve</button>
                            <button class="btn btn-purple">Reject</button>
                        </td>
                    </tr> -->
                </tbody>
            </table>
        </div>
</body>

</html>