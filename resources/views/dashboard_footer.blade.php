<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="{{url('logout')}}">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="/dashboard/vendor/jquery/jquery.min.js"></script>
<script src="/dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="/dashboard/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="/dashboard/js/sb-admin-2.min.js"></script>

<!-- Angular JS -->
<script src="/plugins/angularjs/1_5_0/angular.js"></script>
<script src="/plugins/angularjs/1_5_0/angular-route.js"></script>
<script language="JavaScript">
    var ang = angular.module('app', ['ngRoute']);
    ang.config(function($routeProvider){
        $routeProvider
            .when('/', {
                caption 	: 'Summary',
                controller 	: 'home',
                templateUrl	: '/userdashboard'
            })
            .otherwise({ redirectTo : '/' });
            /*.when('/about', {
                caption 	: 'About Us',
                controller 	: 'about',
                templateUrl	: 'views/about.html'
            })
            .when('/testimonial', {
                caption 	: 'Testimonial',
                controller 	: 'testimonial',
                templateUrl	: 'views/testimonial.html'
            })
            .otherwise({ redirectTo : '/home_user' });*/
    });
    ang.run(['$rootScope', function($rootScope){
        $rootScope.$on('$routeChangeSuccess', function(e, curr, prev){
            $rootScope.caption = curr.$$route.caption;
        })
    }]);

    ang.controller('home', function($scope){});
    ang.controller('about', function($scope){});
    ang.controller('testimonial', function($scope){});
</script>
