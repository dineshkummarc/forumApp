<?php 
    require_once "models/user/redirect_unauth.php";
?>
<div class="container">
    <div class="row">
        <div class="col-12">

        <h1 class="text-center">Change password</h1>
        <div class="form-group">
            <label for="old-psw">Current password</label>
            <input type="password" class="form-control" id="old-psw" placeholder="Current password">
        </div>
        <div class="form-group">
            <label for="new-psw-1">New password</label>
            <input type="password" class="form-control" id="new-psw-1" placeholder="New password">
        </div>
        <div class="form-group">
            <label for="new-psw-2">Repeat new password</label>
            <input type="password" class="form-control" id="new-psw-2" placeholder="Repeat new password">
        </div>  

        <button type="submit" class="btn btn-success">Change</button>

        <div class="message"></div>

        </div>
    </div>
</div>
<script src="assets/js/changePassword.js"></script>