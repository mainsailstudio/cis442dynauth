<div class="container">
    <div class="row">
        
        <div class="col-sm-4 col-sm-offset-4">
            <div class="row">
                <div class="col-sm-12 login-head">
                    <h1>Create an account</h1>
                </div>
                <form action="/loginSubmit" method="post">
                    <div class="col-sm-12">
                        <label>Email</label>
                        <input class="form-control" name="username"/>
                    </div>
                    <div class="col-sm-12">
                        <label>Master Password</label>
                        <div class="input-group">
                            <span class="input-group-addon">1. </span>
                            <input type="text" class="form-control" >
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon">2. </span>
                            <input type="text" class="form-control">
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon">3. </span>
                            <input type="text" class="form-control" >
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon">4. </span>
                            <input type="text" class="form-control" >
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon">5. </span>
                            <input type="text" class="form-control">
                        </div>
                        
                        <div class="add-pass">
                            <button>Add additional password</button>
                        </div>
                    </div>
                   
                    <div class="col-sm-12">
                        <label>Reminder</label>
                        <input class="form-control" name="password" type="password"/>
                    </div>
                </form>
                
                <div>
                    <div class="col-sm-12">
                        <button class="btn btn-primary" type="submit">Register</button>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>