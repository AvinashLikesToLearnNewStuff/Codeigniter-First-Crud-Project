<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud application - create user</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/bootstrap.min.css' ?>" </head>

<body>
    <div class="navbar navbar-dark bg-dark">
        <div class="container">
            <a href="#" class="navbar-brand">crud application</a>

        </div>


    </div>
    <div class="container">
        <h3>create user</h3>
        <div class="row">

            <div class="col-md-12">

                <div class="form-group">
                    <label>name </label>
                    <input type="text" name="name" value="" class="form-control">
                </div>
                <div class="form-group">
                    <label>email </label>
                    <input type="text" name="email" value="" class="form-control">
                </div>
                <div class="form-group">
                    <button class="btn btn-primary">Create</button>
                    <a href="" class="btn-secondary btn">cancel</a>
                </div>
            </div>
        </div>


    </div>

</body>

</html>