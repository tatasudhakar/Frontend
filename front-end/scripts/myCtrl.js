app.controller("myCtrl", function ($scope, $http) {
    
    $scope.displayData=function(){
        $http.get("backend/get.php").then(function (response) {
        $scope.datas = response.data;
    });
};
    $scope.insertData = function () {};

    $scope.genId =function(){
        $http.get("some.php").then(function(response){
            $scope.generateid = response.data;
        });
        
    }
    

    $scope.deleteData = function (stud) {
        $http.post("backend/remove.php", { "username": stud.user_name }).then(function (data) {
            console.log(data);
            $scope.displayData();
        },
        function (error) {
            console.log(error);
        });
    };
    
    

});


