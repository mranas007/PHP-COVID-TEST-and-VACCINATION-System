<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Details</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/css/custom-style.css">
</head>

<body>
    <div class="d-flex">
        <?php require_once './partial/sidebar.php'; ?>

        <div class="content my-4">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Patient ID</th>
                        <th>Name</th>
                        <th>Reason </th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>John Doe</td>
                        <td>Covid Test</td>
                        <td>
                            <a href="patientdetail.php"><button class="btn btn-purple">View Details</button></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
</body>

</html>