/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var projectControllers = angular.module('projectControllers', []);

projectControllers.controller('ProjectListCTRL', function($scope, $http){
   $http.get('http://localhost:8383/gotrack/project/list').
            success(function(data, status, headers, config){
               $scope.customers = data.customer;
               $scope.text ='I am successfull';
           }).
           error(function(data, status, headers, config){
               
           });
           });

projectControllers.controller('CustomerDetailCTRL', function($scope, $routeParams){
    $scope.customerID = $routeParams.id;
    
});

projectControllers.controller('CustomerCreateCTRL', function($scope){
    
});

projectControllers.controller('CustomerUpdateCTRL', function($scope){
    
});

projectControllers.controller('CustomerDeleteCTRL', function($scope){
    
});
