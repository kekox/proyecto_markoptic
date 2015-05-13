<!DOCTYPE html>
<html>

<!--Head-->
  @include('includes.head')

  <body>   

    <!--Nav-->
    @include('includes.headerStatic')

    <!-- Main body -->
    <div id="page-error " class="schema-gray nospacetop" >

          
        
        
       

    
    <!--Footer-->
    @include('includes.footerStatic')
    
   
    <!--Scripts-->
    @include('includes.script')

    <script>
    function newLocation() 
    { 
    window.location= history.go(-1);
    } 

    function newHome() 
    { 
    window.location= 'http://www.webapp.com/bienvenida';
    } 
    </script>

  </body>
</html>