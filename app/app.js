/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


  var trackingApp = angular.module('GoTrack', [
      'customerControllers',
  ]);
  
  
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