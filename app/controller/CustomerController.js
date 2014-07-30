/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


var customerControllers = angular.module('customerControllers', []);

customerControllers.controller('CustomerListCTRL', function($scope, $http){
   $http.get('http://localhost:8888/gotrack/customers/list').
            success(function(data, status, headers, config){
               $scope.customers = data.customer;
               $scope.text ='I am successfull';
           }).
           error(function(data, status, headers, config){
               
           });
           });

customerControllers.controller('CustomerDetailCTRL', function($scope){
    
});

customerControllers.controller('CustomerCreateCTRL', function($scope){
    
});

customerControllers.controller('CustomerUpdateCTRL', function($scope){
    
});

customerControllers.controller('CustomerDeleteCTRL', function($scope){
    
});