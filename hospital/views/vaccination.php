<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Vaccination Status</title>
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
                        <th>Vaccine Name</th>
                        <th>Dose Number</th>
                        <th>Current Status</th>
                        <th>Update Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Jane Doe</td>
                        <td>Vaccine A</td>
                        <td>1</td>
                        <td>Scheduled</td>
                        <td>
                            <select class="form-control">
                                <option value="scheduled">Scheduled</option>
                                <option value="completed">Completed</option>
                            </select>
                        </td>
                        <td><button class="btn btn-purple">Update</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>