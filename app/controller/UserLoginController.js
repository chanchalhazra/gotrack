/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var userLoginControllers = angular.module('userLoginControllers', []);

userLoginControllers.controller('UserLoginCTRL', function($scope, $http){
   
   $scope.credential = {
       username:'',
       password:'',
       rememberMe:'',
   };
      
     $scope.userlogin = function(logindata) {
         $scope.logintext = "login function is invoked";
         $scope.logdata = logindata;
      $http.post('http://localhost:8888/gotrack/userlogin', logindata)
              .success(function(data, status, headers, config) {
                $scope.text = "login successfull";
                $scope.status = data;
                 })
              .error(function(data, status, headers, config) {
                $scope.text = "login was not successfull";
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


