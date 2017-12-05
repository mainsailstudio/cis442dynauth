<?php
// session_start();
?>
<div class="login container">
    <div class="row">
        
        <div class="col-sm-6 col-sm-offset-3">
            <div class="row">
                <div class="col-sm-12 login-head">
                    <h1>Log In to Access Dynauth</h1>
                </div>
                <form action="/loginSubmit" method="post">
                    <div class="col-sm-12">
                        <label>Username</label>
                        <input class="form-control" name="username"/>
                    </div>
                    <div class="col-sm-12">
                        <label>Password</label>
                        <input class="form-control" name="password" type="password"/>
                    </div>
               
                <div class="col-sm-12 forgot">
                   <a href="/forgot">Forgot Password?</a> 
                </div>
                <div class="col-sm-12">
                    <input type="checkbox" name="">Remember Me
                    <div class="col-sm-12">
                        <button class="btn btn-primary" type="submit">Login</button>
                    </div>
                </div> 
                 </form> 
                <div class="col-sm-12 register">
                    New to Dynauth? <a href="/register">Create an account now</a>
                </div>
            </div>
        </div>
    </div>
</div>