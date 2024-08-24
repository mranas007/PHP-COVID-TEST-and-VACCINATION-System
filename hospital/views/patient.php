<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/css/custom-style.css">

</head>

<body>

    <div class="flex ">
        <?php require_once './partial/sidebar.php'; ?>

        <div class="profile-cont d-flex w-full">
            <div class="content my-4  profile-info">
                <h3>Patient Information</h3>
                <p><strong>Patient Name:</strong> John Doe</p>
                <p><strong>Age:</strong> 25</p>
                <p><strong>Gender</strong> Male</p>
                <p><strong>Address:</strong> 1234 Main St.</p>
                <p><strong>Location:</strong> Cityville</p>
                <p><strong>Contact Number:</strong> 123-456-7890</p>
                <p><strong>Email:</strong> johndoe458@gmail.com</p>
            </div>
        </div>
    </div>

</body>

</html>