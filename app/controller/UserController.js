/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var userControllers = angular.module('userControllers', []);

customerControllers.controller('UserListCTRL', function($scope, $http){
   $http.get('http://localhost:8383/gotrack/customers/list').
            success(function(data, status, headers, config){
               $scope.customers = data.customer;
               $scope.text ='I am successfull';
           }).
           error(function(data, status, headers, config){
               
           });
           });

customerControllers.controller('UserDetailCTRL', function($scope, $routeParams){
    $scope.customerID = $routeParams.id;
    
});

customerControllers.controller('UserCreateCTRL', function($scope){
    
});

customerControllers.controller('UserUpdateCTRL', function($scope){
    
});

customerControllers.controller('UserDeleteCTRL', function($scope){
    
});
