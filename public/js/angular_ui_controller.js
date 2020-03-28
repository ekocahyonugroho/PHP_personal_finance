var ang = angular.module('app', ['ngRoute']);
ang.config(function($routeProvider){
    $routeProvider
        .when('/', {
            caption 	: 'Summary',
            templateUrl	: '/userdashboard'
        })
        .when('/setCategory', {
            templateUrl	: '/setCategory'
        })
        .when('/logout', {
            redirectTo: function() {
                window.location = "/logout";
            }
        })
        .otherwise({ redirectTo : '/' });
});
ang.run(['$rootScope', function($rootScope){
    $rootScope.$on('$routeChangeSuccess', function(e, curr, prev){
        $rootScope.caption = curr.$$route.caption;
    })
}]);