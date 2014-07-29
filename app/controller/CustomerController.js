/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


var customerControllers = angular.module('customerControllers', []);

customerControllers.controller('CustomerListCTRL', function($scope){
     $scope.products = [
    { name: 'Azurite', price: 2.95 },
    { name: 'Bloodstone', price: 5.95 },
    { name: 'Zircon', price: 3.95 },
  ];
    $scope.text="lets do it";
    $scope.sortby = "-price";
  
});

customerControllers.controller('CustomerDetailCTRL', function($scope){
    
});

customerControllers.controller('CustomerCreateCTRL', function($scope){
    
});

customerControllers.controller('CustomerUpdateCTRL', function($scope){
    
});

customerControllers.controller('CustomerDeleteCTRL', function($scope){
    
});