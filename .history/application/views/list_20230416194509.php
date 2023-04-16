<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud application - view user</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/bootstrap.min.css' ?>" </head>

<body>
    <div class="navbar navbar-dark bg-dark">
        <div class="container">
            <a href="#" class="navbar-brand">crud application</a>

        </div>


    </div>
    <div class="container">
        <h3>view user</h3>
        <hr style="padding-top: 10px">
        <div class="col-md-12">
            <table class="table table-striped">
                <tr>

                    <th>Id</th>
                    <th>name</th>
                    <th>email</th>
                    <th>edit</th>
                    <th>delete</th>
                </tr>

                <?php if (!empty($users)) {
                    foreach ($users as $user) { ?>
                <tr>
                    <td>
                        <?php echo $user['user_id']; ?>
                    </td>

                    <td>
                        <?php echo $user['name']; ?>
                    </td>
                    <td>
                        <?php echo $user['email']; ?>
                    </td>
                    <td>
                        <a href="<?php echo base_url() . 'index.php/user/edit/' . $user['user_id'] ?>"
                            class="btn btn-primary">edit</a>
                    </td>
                    <td>
                        <a href="<?php echo base_url() . 'index.php/user/delete/' . $user['user_id'] ?>"
                            class="btn btn-danger"> >delete</a>
                    </td>
                </tr>
                <?php }
                } else { ?>
                <tr>
                    <td colspan="5">record not found</td>
                </tr>
                <?php } ?>
            </table>

        </div>
        </form>
    </div>
</body>

</html>