<!DOCTYPE html>
<html>

<!--Head-->
  @include('includes.head')

  <body>   

    <!--Nav-->
    @include('includes.headerStatic')

    <!-- Main body -->
    <div id="page-error " class="schema-gray nospacetop" >

          
        <!-- Modal -->
        @if(Session::has('mensaje'))
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
       <center><div class="alert alert-danger"><span class="fa fa-smile-o"></span><a href="#" class="close" data-dismiss="alert">&times;</a>{{ Session::get('mensaje') }}</div></center>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
        @endif
       

    
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

<script>
window.onload( $('#myModal').modal('show'))
</script>

  </body>
</html>