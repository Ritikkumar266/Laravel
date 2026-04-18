@extends('layout.masterfile')
<!-- It is used to inherit the masterfile in the dashboard file. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @section('title')
    DASHBOARD PAGE
    @endsection
</head>
<body>
    
        @section('content')
       <marquee> <p>This is LPU Dashboard Page</p></marquee>
        <!-- Here Dynamic content is added that will go in my yield part of master 
         file and will be replaced and whole layout will come by extends directory -->
        @endsection
    
</body>
</html>
    