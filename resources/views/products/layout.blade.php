<!DOCTYPE html>
<html>
<head>
    <title>Laravel CRUD Application</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <style type="text/css">
    	body{
    		background: #f5fbf5;
    		padding: 50px;
    	}
    </style>
</head>
<body>

<div class="container">
    @yield('content')
</div>
   
<script type="text/javascript">

    $(document).ready(function () {
     
    window.setTimeout(function() {
        $(".alert").fadeTo(0, 0).slideUp(0, function(){
            $(this).remove(); 
        });
    }, 2000);
     
    });
    </script>
</body>
</html>