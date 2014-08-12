/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var userLoginControllers = angular.module('userLoginControllers', []);

userLoginControllers.controller('UserLoginCTRL', function($scope, $http){
  /* 
   $scope.credential = {
       username:'',
       password:'',
       rememberMe:'',
   };
      */
     $scope.userlogin = function() {
         $scope.logintext = "login function is invoked";
        // $scope.logdata = credential;
      $http({url:'http://localhost:8383/gotrack/site/userlogin',
             method: 'POST',
             data:$.param({'credential': $scope.credential}),
             headers : {'Content-Type':'application/x-www-form-urlencoded'
             }}).success(function(data, status, headers, config) {
                $scope.text = "API call is successfull";
                $scope.status = status;
              $scope.logstatus = data.loginStatus;
                $scope.logdatasent = data.userlogindata;
                
                 })
              .error(function(data, status, headers, config) {
                $scope.text = "API call was not successfull";
                $scope.status = status;
                 });
     };

    });

userLoginControllers.controller('UserLogoutCTRL', function($scope, $routeParams){
    $scope.customerID = $routeParams.id;
    
});

userLoginControllers.controller('UserResetPasswordCTRL', function($scope){
    
});

userLoginControllers.controller('UserSignupCTRL', function($scope){
    
});


