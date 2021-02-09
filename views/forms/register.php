<?php 
    $title = "Register";
    function get_content(){
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<form action="/controllers/auth/register.php" method="POST" class="col-md-6 mx-auto py-5">
        <div class="mb-3">
            <label>Firstname</label>
            <input type="text" name="firstname" class="form-control">
        </div>
        <div class="mb-3">
            <label>Lastname</label>
            <input type="text" name="lastname" class="form-control">
        </div>
        <div class="mb-3">
            <label>Username</label>
            <input type="text" name="username" class="form-control">
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control">
        </div>
        <div class="mb-3">
            <label>Address</label>
            <input type="address" name="address" class="form-control">
        </div>
        <div class="mb-3">
            <label>Password</label>
            <input type="password" name="password" class="form-control">
        </div>
        <div class="mb-3">
            <label>Confirm Password</label>
            <input type="password" name="password2" class="form-control">
        </div>
        <button class="btn btn-primary">Register</button>
</form>

<?php
    }
    require_once '../partials/layout.php';
?>