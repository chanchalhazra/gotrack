/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


  var trackingApp = angular.module('GoTrack', []);
  
  trackingApp.controller('CustomerList', function($scope, $http){
   $http.get('http://localhost:8383/gotrack/customers/list').success(function(data){
               $scope.customers = data;
               $scope.text = "I am successful";
           });
           });
/*
  goTrackApp.config(['$routeProvider',
  function($routeProvider) {
    $routeProvider.
      when('/customers', {
        templateUrl: 'partials/customers-list.html',
        controller: 'CustomerListCtrl'
      }).when('/phones/:phoneId', {
        templateUrl: 'partials/phone-detail.html',
        controller: 'CustomerDetailCtrl'
      }).
      otherwise({
        redirectTo: '/customers'
      });

  }]);
  */