<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
@if(isset(Auth::voterlists()->email))
	<strong>Welcome {{Auth::voterlists()->email}}</strong>
	<a href="{{url('/main/logout')}}">Logout</a>
else
<script> window.location="/main";</script>
@endif
</body>
</html>