<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Push notification</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">

</head>

<body>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-md-6" style="margin-bottom: 60px;">
                <h2>Create User</h2>
                <form action="create.php" method="POST">
                    <div class="mb-3">
                        <label for="fname" class="form-label">First Name</label>
                        <input type="text" class="form-control" name="fname" id="fname" placeholder="Enter First Name.." required>
                    </div>
                    <div class="mb-3">
                        <label for="lname" class="form-label">Last Name</label>
                        <input type="text" class="form-control" name="lname" id="lname" placeholder="Enter Last Name.." required>
                    </div>
                    
                    <button type="submit" class="btn btn-danger">Submit</button>
                </form>

            </div>
        </div>
    </div>

</body>

</html>