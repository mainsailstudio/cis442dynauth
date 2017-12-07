<div class="container">
    <div class="row">
        
        <div class="col-sm-4 col-sm-offset-4">
            <div class="row">
                <div class="col-sm-12 login-head">
                    <h1>Create an account</h1>
                </div>
                <form action="/register" method="post" id="registerForm">
                    <div class="col-sm-12">
                        <label>Email</label>
                        <input class="form-control" name="email" id="email" />
                    </div>
                    <div class="col-sm-12">
                        <label>Master Password</label>
                        <div id="passwords">
                            <div class="input-group" id="dynauthInputDiv1">
                                <span class="input-group-addon">1. </span>
                                <input type="text" name="dynauthInput1" id="dynauthInput1" class="form-control" >
                            </div>
                            <div class="input-group" id="dynauthInputDiv2">
                                <span class="input-group-addon">2. </span>
                                <input type="text" name="dynauthInput2" id="dynauthInput2" class="form-control">
                            </div>
                            <div class="input-group" id="dynauthInputDiv3">
                                <span class="input-group-addon">3. </span>
                                <input type="text" name="dynauthInput3" id="dynauthInput3" class="form-control">
                            </div>
                            <div class="input-group" id="dynauthInputDiv4">
                                <span class="input-group-addon">4. </span>
                                <input type="text" name="dynauthInput4" id="dynauthInput4" class="form-control" >
                            </div>
                            <div class="input-group" id="dynauthInputDiv5">
                                <span class="input-group-addon">5. </span>
                                <input type="text" name="dynauthInput5" id="dynauthInput5" class="form-control">
                            </div>
                            <div class="input-group" id="dynauthInputDiv6">
                                <span class="input-group-addon">6. </span>
                                <input type="text" name="dynauthInput6" id="dynauthInput6" class="form-control">
                            </div>
                            <div class="input-group" id="dynauthInputDiv7">
                                <span class="input-group-addon">7. </span>
                                <input type="text" name="dynauthInput7" id="dynauthInput7" class="form-control">
                            </div>
                            <div class="input-group" id="dynauthInputDiv8">
                                <span class="input-group-addon">8. </span>
                                <input type="text" name="dynauthInput8" id="dynauthInput8" class="form-control">
                            </div>
                        </div>
                       <!--  <div class="add-pass" id="add-pass">
                            <button type="button">Add additional password</button>
                        </div>
                        <div class="remove-pass" id="remove-pass">
                            <button type="button">Remove additional password</button>
                        </div> -->
                    </div>
                   
                    <div class="col-sm-12">
                        <label>Reminder</label>
                        <input class="form-control" type="text" name="reminder"/>
                    </div>
                    <div id="dynauthMessage" class="alert-danger">
                        <?php if (isset($viewbag['Error'])): ?>
                             Error with Registration, make sure email has not been used.
                        <?php endif ?>
                        
                    </div>
                    
                
                <div>
                    <div class="col-sm-12">
                        <button class="btn btn-primary" type="submit">Register</button>
                    </div>
                </div>

                 </form>
                
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
var msg = "";
function checkEmail(){
    var reg = /(?:[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])/
    var email = $('#email').val();
    if(!reg.test(email)){
            msg += "Invalid Email<br>";
        return false;
    }
    return true;
}
function checkPasswordsAndReminder(){
    var valid = true;
    $("input").filter(function () {
    valid = valid & $.trim($(this).val()).length != 0
        }).length != 0;

    if(!valid){
        msg += "Invalid Password and/or Reminder ";
    }
    return valid;
}
$(document).on('submit', '#registerForm', function(evt){

            msg = "";
        if(checkEmail() & checkPasswordsAndReminder()){

        } else{
            evt.preventDefault();
             $('#dynauthMessage').html(msg);
        }
})

    $("#add-pass").click(function(){
      
        var lenInput = $("input[id^=dynauthInput]").length
        $("#passwords").append(`
<div class="input-group" id="dynauthInputDiv`+(lenInput+1)+`">
                                <span class="input-group-addon">`+(lenInput+1)+`. </span>
                                <input type="text" name="dynauthInput`+(lenInput+1)+`" id="dynauthInput5" class="form-control">
                            </div>
            `)
    })
    $("#remove-pass").click(function(){
        var lenInput = $("input[id^=dynauthInput]").length
        if(lenInput > 4){
            $("#dynauthInputDiv"+lenInput).remove();
            lenInput = lenInput -1;
        }
        if(lenInput <= 4){
            $("#remove-pass button").prop('disabled', true);
        }
    })
</script>