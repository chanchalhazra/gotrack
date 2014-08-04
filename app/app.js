/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


  var goTrackApp = angular.module('GoTrack', [
      'ngRoute',
      'customerControllers',
  ]);
  
  

  goTrackApp.config(['$routeProvider',
  function($routeProvider) {
    $routeProvider.
      when('/customers', {
        templateUrl: 'partial/customer/customer-list.html',
        controller: 'CustomerListCTRL'
      }).when('/customers/:customerId', {
        templateUrl: 'partial/customer/customer-detail.html',
        controller: 'CustomerDetailCTRL'
      }).when('/projects', {
        templateUrl: 'partial/project/projects-list.html',
        controller: 'ProjectListCTRL'
      }).when('/projects/:projectId', {
        templateUrl: 'partial/project/project-detail.html',
        controller: 'ProjetDetailCTRL'
      })
              .otherwise({
        redirectTo: '/customers'
      });

  }]);
  