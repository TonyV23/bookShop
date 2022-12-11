<div class="d-flex align-items-center justify-content center" style="min-height:700px">
    <div class="col md-6">
    
        <div class="card">
            <div class="card-header">Admin Login</div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="mb-3">
                        <label class="form-label">Email address</label>
                        <input type="email" class="form-control" name="admin_email" id="admin_email">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" name="admin_password" id="admin_password">
                    </div>
                    <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                        <input type="submit" name="login_button" value="Login" class="btn btn-primary">
                    </div>    
                </form>
            </div>
        </div>
    </div>
</div>

<?php 
    include "../partials/footer.php";
?>