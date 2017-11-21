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
            <div class="demo">
              <div id="tokens">
                <i class="fa fa-refresh" aria-hidden="true"></i>
              </div>
              <form>
                <input type="text" name="auth1" placeholder="auth1" />
                <input type="text" name="auth2" placeholder="auth2" />
                <input type="text" name="auth3" placeholder="auth3" />
                <input type="text" name="auth4" placeholder="auth4" />
                <input type="text" name="auth5" placeholder="auth5" />
                <input type="text" name="auth6" placeholder="auth6" />
                <input type="text" name="auth7" placeholder="auth7" />
                <input type="text" name="auth8" placeholder="auth8" />
                <input type="text" name="auth9" placeholder="auth9" />
                <input type="text" name="auth10" placeholder="auth10" />
              </form>
              <script>
              var tokenArray = [];
              function myFunction() {
                for(i=0;i>4;i++){
                  var token = Math.floor((Math.random * 10));
                  tokenArray.push(token);
                }
                $("#tokens").prepend("tokenArray");
              }
              </script>
            </div><!-- end of Connor's demo code -->
        </div>
    </div>
</div>
