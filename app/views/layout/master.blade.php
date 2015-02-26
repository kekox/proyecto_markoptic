<!DOCTYPE html>
<html lang="es">
<head>
	<!--Se carga el header y los stylos necesarios-->
	@include('includes.head')
</head>
<body>
	@include('includes.header')

	<div class="container-fluid schema-gray space" >
        <div class="row ">
            
                
                    @show
                    @yield('contenido')
                
           
        </div>
    </div>

	


		@include('includes.script')

		@include('includes.footer')
</body>
</html>