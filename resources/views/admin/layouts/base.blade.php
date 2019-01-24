<!DOCTYPE html>
<html lang="en">
<head>
    @include('global.head')
</head>
<body>
    <body>
        <div id="wrapper">
            
            @include('admin.include.sidebar')
                
            @yield('body')
                
        </div>   
        @include('admin.include.footer')       
    </body>
</html>
            