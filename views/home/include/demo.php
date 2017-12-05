<!--
Connor's demo code here

To do:
Autofill all 10 inputs using angular
Allow user to change input dynamically
Show those changes dynamically in the hashes
-->
<div ng-app=""><!-- Start angular app -->
<div class="row" id="demo">
  <div class="col-sm-12">
  <div class="col-md-6">
      <h3>Your "auths"</h3>
      <div class="col-md-6">
        <form id="allAuthForm">
          <input type="text" name="auth1" id="auth1" class="demoAuth" ng-model="auth1" />
          <input type="text" name="auth2" id="auth2" class="demoAuth" ng-model="auth2" />
          <input type="text" name="auth3" id="auth3" class="demoAuth" ng-model="auth3" />
          <input type="text" name="auth4" id="auth4" class="demoAuth" ng-model="auth4" />
          <input type="text" name="auth5" id="auth5" class="demoAuth" ng-model="auth5" />
          <input type="text" name="auth6" id="auth6" class="demoAuth" ng-model="auth6" />
          <input type="text" name="auth7" id="auth7" class="demoAuth" ng-model="auth7" />
          <input type="text" name="auth8" id="auth8" class="demoAuth" ng-model="auth8" />
          <input type="text" name="auth9" id="auth9" class="demoAuth" ng-model="auth9" />
          <input type="text" name="auth10" id="auth10" class="demoAuth" ng-model="auth10" />
        </form>
      </div>
      <div class="col-md-6">
        <form id="allSaltForm">
          <input type="text" name="salt1" id="salt1" class="demoAuth" ng-model="salt1" />
          <input type="text" name="salt2" id="salt2" class="demoAuth" ng-model="salt2" />
          <input type="text" name="salt3" id="salt3" class="demoAuth" ng-model="salt3" />
          <input type="text" name="salt4" id="salt4" class="demoAuth" ng-model="salt4" />
          <input type="text" name="salt5" id="salt5" class="demoAuth" ng-model="salt5" />
          <input type="text" name="salt6" id="salt6" class="demoAuth" ng-model="salt6" />
          <input type="text" name="salt7" id="salt7" class="demoAuth" ng-model="salt7" />
          <input type="text" name="salt8" id="salt8" class="demoAuth" ng-model="salt8" />
          <input type="text" name="salt9" id="salt9" class="demoAuth" ng-model="salt9" />
          <input type="text" name="salt10" id="salt10" class="demoAuth" ng-model="salt10" />
        </form>
      </div>
  </div>
  <div class="col-md-6">
    <div>
    </div>
    <h3>Dynauth</h3>
    <ol>
      <li id="authSalt1">1{{auth1}}{{salt1}}</li>
      <li id="authSalt2">2{{auth2}}{{salt2}}</li>
      <li id="authSalt3">3{{auth3}}{{salt3}}</li>
      <li id="authSalt4">4{{auth4}}{{salt4}}</li>
      <li id="authSalt5">5{{auth5}}{{salt5}}</li>
      <li id="authSalt6">6{{auth6}}{{salt6}}</li>
      <li id="authSalt7">7{{auth7}}{{salt7}}</li>
      <li id="authSalt8">8{{auth8}}{{salt8}}</li>
      <li id="authSalt9">9{{auth9}}{{salt9}}</li>
      <li id="authSalt10">10{{auth10}}{{salt10}}</li>
    </ol>
    <hr />
      The tokens are:
      <div id="thetokens">
      </div>
      <i class="fa fa-refresh" aria-hidden="true" id="generateTokens"></i>
    <form id="dynauthForm">
      <input type="text" name="dynauthInput1" id="dynauthInput1" /> -
      <input type="text" name="dynauthInput2" id="dynauthInput2" /> -
      <input type="text" name="dynauthInput3" id="dynauthInput3" /> -
      <input type="text" name="dynauthInput4" id="dynauthInput4" />
    </form>
  </div>
</div>
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
</script>
<!-- end of Connor's demo code -->
</div>
