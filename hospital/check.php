<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div class="content my-4">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>address</th>
                    <th>contact_number</th>
                    <th>email</th>
                    <th>password</th>
                    <th>created_at</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require_once './controllers/crudController.php';
                $crudCon = new crudController();
                $getResult = $crudCon->readOne('hospital', 1);
                while ($val = $getResult->fetch_assoc()) {
                    echo '
                    <tr>
                        <td>' . $val['id'] . '</td>
                        <td>' . $val['name'] . '</td>
                        <td>' . $val['address'] . '</td>
                        <td>' . $val['contact_number'] . '</td>
                        <td>' . $val['email'] . '</td>
                        <td>' . $val['password'] . '</td>
                        <td>' . $val['created_at'] . '</td>
                    </tr>';
                }

                $crudCon = new crudController();
                $getResult = $crudCon->deleteOne('hospital', 1);
                if ($getResult === true) {
                    echo `<script>
                            alert("user is deleted succesfully.");
                        </script>`;
                } else {
                    echo `<script>
                        alert("user isn't deleted.");
                    </script>`;
                }
                ?>
            </tbody>
        </table>


    </div>

</body>

</html>