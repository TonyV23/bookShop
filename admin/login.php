<?php 
    require "../database/connection.php";
    $message = "";

    if (isset($_POST["login_button"])){
        $form_data = array();

        if (empty($_POST["admin_email"])){
            $message .= "<li>Email address is required</li>";    
        }else{
            if (!filter_var($_POST["admin_email"],FILTER_VALIDATE_EMAIL)){
                $message .= "<li>Email address is not valid</li>";    
            }else{
                $form_data["admin_email"] = $_POST["admin_email"]; 
            }
        }

        if (empty($_POST["admin_password"])){
            $message .= "<li>Password is required</li>";    
        }else{
            $form_data["admin_password"] = $_POST["admin_password"];
        }

        // searching for admin information authentication into database
        if ($message == ""){
            $data = array(
                "admin_email"       => $form_data ["admin_email"]
            );
            $select_admin_email = "SELECT * FROM admin WHERE email = :admin_email";
            $statement = $connect->prepare($select_admin_email);
            $statement->execute($data);
            
            if($statement->rowCount() > 0){
                foreach($statement->fetchAll() as $row){
                    if ($row["password"] == $form_data["admin_password"]){
                        $_SESSION["id"] = $row["id"];
                        header("location:admin/index.php");
                    }else{
                        $message .= "<li>Wrong password</li>";
                    }
                }
            }else{
                $message .= "<li>Wrong email address</li>";
            }
        }

    } 

    include "../partials/header.php";
?>

<div class="d-flex align-items-center justify-content center" style="min-height:700px">
    <div class="col md-6">
    <?php
        echo '<div class="alert alert-danger">
                <ul>'.$message.'</ul>
            </div>'
    ?>    
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