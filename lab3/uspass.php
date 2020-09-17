<!DOCTYPE html>
<html>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<body>
<div ng-app="" ng-init="user = 'root'; password = 'mypass';">

    <input ng-model="user" type="text" placeholder="login">
    <input ng-model="password" type="password" placeholder="password">

    <p ng-show="user == user && password == password">Hello, user</p>
    <p ng-hide="user == user && password == password">Bye, user</p>

</div>
</body>
</html>