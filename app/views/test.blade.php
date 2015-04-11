<!DOCTYPE html>
<html>

<!--Head-->
  @include('includes.head')

  <body>   

    <!--Nav-->
    @include('includes.headerStatic')

    <!-- Main body -->
    <div id="page-error " class="schema-gray nospacetop" >

          <div class="container">
            <div class="row">
              <div class="heading">
                OOPS, Something went wrong.
              </div>
            </div>
          </div>
          

          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <p class="" style="color:transparent;">a</p>
    </div>

    
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