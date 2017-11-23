function generateTokens() {
  var tokenArray = [];
  for(i=0;i<4;i++){
    var token = Math.ceil(Math.random() * 10);
    tokenArray.push(token);
  }
  document.getElementById("thetokens").innerHTML = tokenArray.join(" - ");
}

function ngDynauth(){
  var app = angular.module("ngDynauth", []);
  app.controller('ngController', ['$scope',
  function($scope) {

    $scope.ngDisplayHash = function(a){
      document.write(a);
    }

  }])
}
