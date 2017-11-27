function generateTokens() {
  var tokenArray = [];
  for(i=0;i<4;i++){
    var token = Math.ceil(Math.random() * 10);
    tokenArray.push(token);
  }
  document.getElementById("thetokens").innerHTML = tokenArray.join(" - ");
}

function ngDynauth(object, value){
  $(document).ready(function () {
    $('' + object).val(value);
    $('' + object).trigger("change");
  /*
    var auth1 = $('#auth1');
    var auth2 = $('#auth2');
    var auth3 = $('#auth3');
    var auth4 = $('#auth4');
    var auth5 = $('#auth5');
    var auth6 = $('#auth6');
    var auth7 = $('#auth7');
    var auth8 = $('#auth8');
    var auth9 = $('#auth9');
    var auth10 = $('#auth10');

    auth1.val("ant");
    auth2.val("bear");
    auth3.val("cat");
    auth4.val("dog");
    auth5.val("eagle");
    auth6.val("fish");
    auth7.val("goat");
    auth8.val("horse");
    auth9.val("iguana");
    auth10.val("jackal");

    auth1.trigger('change');
    auth2.trigger('change');
    auth3.trigger('change');
    auth4.trigger('change');
    auth5.trigger('change');
    auth6.trigger('change');
    auth7.trigger('change');
    auth8.trigger('change');
    auth9.trigger('change');
    auth10.trigger('change');
    */
  });
}
