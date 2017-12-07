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
                <form action="/loginSubmit" id="#loginForm" method="post">
                    <div class="col-sm-12">
                        <label>Username</label>
                        <input class="form-control" name="username"/>
                    </div>
                    <div class="col-sm-12">
                        <label>Password</label>
                        <div>
                         <div id="thetokens"></div><i class="fa fa-refresh" aria-hidden="true" id="generateTokens"></i></h3>
                     </div>
                        <!-- <input class="form-control" name="password" type="password"/> -->
                        <!-- <form id="dynauthForm" onsubmit="ngCheckDynauth()"> -->
                            <input type="text" name="dynauthInput1" id="dynauthInput1" class="form-control demoAuth" /> -
                            <input type="text" name="dynauthInput2" id="dynauthInput2" class="form-control demoAuth" /> -
                            <input type="text" name="dynauthInput3" id="dynauthInput3" class="form-control demoAuth" /> -
                            <input type="text" name="dynauthInput4" id="dynauthInput4" class="form-control demoAuth" />
                            <input type="submit" />
                        <!-- </form> -->
                        <!-- <div id="dynauthMessage"></div> -->
                    </div>
               
                <div class="col-sm-12 forgot">
                   <a href="/forgot">Forgot Password?</a> 
                </div>
                <div class="col-sm-12">
                    <input type="checkbox" name="">Remember Me
                    <div class="col-sm-12">
                        <button class="btn btn-primary" type="button" id="loginButton">Login</button>
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

<script>
// call to function that initializes angular app
ngDynauth("#auth1", "ant");
ngDynauth("#auth2", "bear");
ngDynauth("#auth3", "cat");
ngDynauth("#auth4", "dog");
ngDynauth("#auth5", "eagle");
ngDynauth("#auth6", "fish");
ngDynauth("#auth7", "goat");
ngDynauth("#auth8", "horse");
ngDynauth("#auth9", "iguana");
ngDynauth("#auth10", "jackal");
ngDynauth("#salt1", "8bR2CNYzESx1z79n");
ngDynauth("#salt2", "p8IscvrU61q8nvEi");
ngDynauth("#salt3", "ahdEcQdhpoJpnFU1");
ngDynauth("#salt4", "dQ7OxKZdX0zkb2db");
ngDynauth("#salt5", "jKqpKm4Dk8WlOiAs");
ngDynauth("#salt6", "Jf6Y9rtls8UPFMZo");
ngDynauth("#salt7", "Cspg04MUEvaWECAs");
ngDynauth("#salt8", "pQi8sAsqYq7uClib");
ngDynauth("#salt9", "amCC8aN6Z4HCfdOu");
ngDynauth("#salt10", "hPO23PxmIWrEE2GT");

generateTokens();
document.getElementById("generateTokens").addEventListener("click", generateTokens);

$(document).on('click','#loginButton',function(evt){
    alert("what");
    $('#loginForm').append('<input type="hidden" name="authCheck" value="'+$('#thetokens').text()+'">');
    $('#loginForm')[0].submit();
})

function ngCheckDynauth(){
  var tokens = $("#thetokens").text();
  var tokenArray = tokens.split(" - ");
  var check = false;
  for(i=0;i<4;i++){
    var token = tokenArray[i];
    var j = i+1;
    var compare = $("#dynauthInput" + j).val();
    var compareto = $("#auth" + token).val();
    if(compare == compareto){
      check = true;
    }
    else{
      check = false;
    }
  }
  if(check == true){
    $("#dynauthMessage").html("<h3 id=\"worked\">Worked!</h3>");
  }
  else{
    $("#dynauthMessage").html("<h3 id=\"no-worked\">Didn't work</h3>");
  }
}

</script>