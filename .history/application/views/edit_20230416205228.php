<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud application - edit user</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/bootstrap.min.css' ?>" </head>

<body>
    <div class="navbar navbar-dark bg-dark">
        <div class="container">
            <a href="#" class="navbar-brand">crud application</a>

        </div>


    </div>
    <div class="container">
        <h3>edit user</h3>
        <hr style="padding-top: 10px">
        <form method="post" name="editUser"
            action="<?php echo base_url() . 'index.php/user/edit/' . $user['user_id']; ?>">
            <div class="row">
                <div class=" col-md-6">

                    <div class="form-group">
                        <label>name </label>
                        <input type="text" name="name" value="<?php echo set_value('name', $user['name']); ?>"
                            class="form-control">
                        <?php // echo form_error('name') 
                        ?>
                    </div>
                    <div class="form-group ">
                        <label>email</label>
                        <input type="text" name="email" value="<?php echo set_value('email', $user['email']); ?>"
                            class="form-control">
                        <?php // echo form_error('email') 
                        ?>
                    </div>
                    <div class="form-group my-2">
                        <button class=" btn btn-primary">edit</button>
                        <a href="<?php echo base_url() . 'index.php/user/index';    ?>"
                            class="btn-secondary btn">cancel</a>
                    </div>
                </div>
            </div>

        </form>
    </div>





</body>

</html>