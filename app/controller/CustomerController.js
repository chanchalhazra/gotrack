/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


var customerControllers = angular.module('customerControllers', [
    'ng-'
]);

customerControllers.controller('CustomerListCTRL', function($scope, $http){
   $http.get('http://localhost:8383/gotrack/customers/list').
           success(function(data){
               $scope.customers = data;
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