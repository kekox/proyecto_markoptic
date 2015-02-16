<!DOCTYPE html>
<html lang="es">
<head>
    <!--Se carga el header y los stylos necesarios-->
    @include('includes.head')    
</head>

<body>
    @include('includes.header')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="well body-well">
                    @show
                    @yield('contenido')
                </div>
            </div>
        </div>
    </div>
        

    @include('includes.scripts') 

</body>
</html>
