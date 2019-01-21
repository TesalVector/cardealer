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
        <!-- /#wrapper -->
            
        @include('admin.include.footer')       
    </body>
</html>
            