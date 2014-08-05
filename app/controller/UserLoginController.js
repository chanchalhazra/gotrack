/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var userLoginControllers = angular.module('userLoginControllers', []);

userLoginControllers.controller('UserLoginCTRL', function($scope, $http){
   $http.get('http://localhost:8383/gotrack/customers/list').
            success(function(data, status, headers, config){
               $scope.customers = data.customer;
               $scope.text ='I am successfull';
           }).
           error(function(data, status, headers, config){
               
           });
           });

userLoginControllers.controller('UserLogoutCTRL', function($scope, $routeParams){
    $scope.customerID = $routeParams.id;
    
});

userLoginControllers.controller('UserResetPasswordCTRL', function($scope){
    
});

userLoginControllers.controller('UserSignupCTRL', function($scope){
    
});


