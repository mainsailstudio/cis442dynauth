<!--
Connor's demo code here

To do:
Autofill all 10 inputs using angular
Allow user to change input dynamically
Show those changes dynamically in the hashes
-->
<?php
function getDemo(){
?>
<div ng-app=""><!-- Start angular app -->
<div id="start-demo">
  <div class="container sm-pad-contain">
    <div class="col-sm-4">
      <h3>What's going on:</h3>
    </div>
    <div class="col-sm-8">
      <p>Passwords have long been the de facto standard when it comes to authentication. It makes sense; implementing a password authentication scheme is easy and cheap for the developers, while being familiar for most users. However, the drawbacks of using passwords as the single point of authentication are diverse and well documented. Just Google search “Problems with passwords” and read through the 9,000,000+ results (or at least the first 3).</p>
      <p>Dynauth seeks to solve the problems that are inherent to passwords by providing a robust framework that centers around users dynamically authenticating into applications using both a password manager and the OAuth 2.0 protocol.</p>
      <p><span style="font-weight: 400;">Each user configures a database of words (known as “auths”) that correlate to numbers (known as “tokens”). The list below displays what a basic configuration might look like.</span></p>
    </div>
  </div>
  <div class="container sm-pad-contain">
    <div class="col-sm-4">
      <h3>Your "auths"</h3>
      <h5>Yea we coined that</h5>
    </div>
    <div class="col-sm-8">
      <form id="allAuthForm">
        1)  <input type="text" name="auth1" id="auth1" class="demoAuth" ng-model="auth1" />
        2)  <input type="text" name="auth2" id="auth2" class="demoAuth" ng-model="auth2" />
        3)  <input type="text" name="auth3" id="auth3" class="demoAuth" ng-model="auth3" />
        4)  <input type="text" name="auth4" id="auth4" class="demoAuth" ng-model="auth4" />
        5)  <input type="text" name="auth5" id="auth5" class="demoAuth" ng-model="auth5" />
        6)  <input type="text" name="auth6" id="auth6" class="demoAuth" ng-model="auth6" />
        7)  <input type="text" name="auth7" id="auth7" class="demoAuth" ng-model="auth7" />
        8)  <input type="text" name="auth8" id="auth8" class="demoAuth" ng-model="auth8" />
        9)  <input type="text" name="auth9" id="auth9" class="demoAuth" ng-model="auth9" />
        10) <input type="text" name="auth10" id="auth10" class="demoAuth" ng-model="auth10" />
      </form>
    </div>
  </div>
  <div class="container sm-pad-contain">
    <div class="col-sm-4">
      <h3>The tokens are:<br />
      <div id="thetokens"></div><i class="fa fa-refresh" aria-hidden="true" id="generateTokens"></i></h3>
    </div>
    <div class="col-sm-8">
      <h3>Enter in the correct auths
      <form id="dynauthForm" onsubmit="ngCheckDynauth()">
        <input type="text" name="dynauthInput1" id="dynauthInput1" class="demoAuth" /> -
        <input type="text" name="dynauthInput2" id="dynauthInput2" class="demoAuth" /> -
        <input type="text" name="dynauthInput3" id="dynauthInput3" class="demoAuth" /> -
        <input type="text" name="dynauthInput4" id="dynauthInput4" class="demoAuth" />
        <input type="submit" />
      </form>
      <div id="dynauthMessage"></div>
    </h3>
    </div>
  </div>
  <hr class="blueThick" />
</div><!-- End angular app -->
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
<!-- end of Connor's demo code -->
</div>
<?php
}
?>
