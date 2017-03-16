(function() {
  var app = angular.module('resto', []);

  app.controller('TestAngular', function(){
      this.names = test;
  });

  var test = [
    { name: 'Paul', test: 1 },
    { name: 'Andree', test: 2 },
    { name: 'Vergara', test: 3 }
  ];
})();
