<?php
include_once("php/header.php")
?>

<div class="container">
    <form id="myForm" class="main-form" method="POST" name="login_form" action=php/authenticate.php>
        <div class="row">
            <div class="col-sm-3">
                <div class="container">
                    <div class="row">
                        <label >ID</label>
                        <input class="form-control" placeholder="username1234" type="text" name="Username">
                        <label >Password</label>
                        <input class="form-control" placeholder="*********" type="text" name="Password">
                        <input type="hidden" name="user_type" value="admin">
                        <input class="btn" type="submit" value="Login">
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<?php
include_once("php/footer.php")
?>

