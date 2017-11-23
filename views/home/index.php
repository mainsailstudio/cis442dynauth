<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <?php
            if (is_array($viewbag['ourVar'])) {
                foreach ($viewbag['ourVar'] as $item) {
                    echo $item['fname'];
                }
            }
            ?>
          </div>
            <!--
            Connor's demo code here

            To do:
            Autofill all 10 inputs using angular
            Allow user to change input dynamically
            Show those changes dynamically in the hashes
            -->
          <div ng-app="ngDynauth"><!-- Start angular app -->
            <div class="row" id="demo" ng-controller="ngController">
              <div class="col-md-6">
                  <h3>Your "auths"</h3>
                  These are the 10 (or more!) words that dynamically make up your "dynauth".
                  <form id="allAuthForm">
                    <input type="text" name="auth1" id="auth1" class="demoAuth" ng-model="auth1" value="ant" />
                    <input type="text" name="auth2" id="auth2" class="demoAuth" ng-model="auth2" value="bear" />
                    <input type="text" name="auth3" id="auth3" class="demoAuth" ng-model="auth3" value="cat" />
                    <input type="text" name="auth4" id="auth4" class="demoAuth" ng-model="auth4" value="dog" />
                    <input type="text" name="auth5" id="auth5" class="demoAuth" ng-model="auth5" value="eagle" />
                    <input type="text" name="auth6" id="auth6" class="demoAuth" ng-model="auth6" value="fish" />
                    <input type="text" name="auth7" id="auth7" class="demoAuth" ng-model="auth7" value="goat" />
                    <input type="text" name="auth8" id="auth8" class="demoAuth" ng-model="auth8" value="horse" />
                    <input type="text" name="auth9" id="auth9" class="demoAuth" ng-model="auth9" value="iguana" />
                    <input type="text" name="auth10" id="auth10" class="demoAuth" ng-model="auth10" value="jackal" />
                  </form>
              </div>
              <div class="col-md-6">
                <h3>Dynauth</h3>
                Auth 1: {{auth1}}<br />
                Auth 2: {{auth2}}<br />
                Auth 3: {{auth3}}<br />
                <hr />
                Auth 1 though displayHash: <a ng-click="ngDisplayHash(auth1)" >TEST </a>
                  The tokens are:
                  <div id="thetokens">
                  </div>
                  <i class="fa fa-refresh" aria-hidden="true" id="generateTokens"></i>

                <form id="dynauthForm">
                  <input type="text" name="dynauth" id="dynauthInput" />
                </form>
              </div>
          </div>
        </div><!-- End angular app -->
        <script>
          // call to function that initializes angular app
          ngDynauth();
          generateTokens();
          document.getElementById("generateTokens").addEventListener("click", generateTokens);
        </script>
        <!-- end of Connor's demo code -->
    </div>
</div>
