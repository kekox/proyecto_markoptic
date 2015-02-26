 <nav class="navbar navbar-default navbartop nospace">
    <div class="container-fluid">
	
        <div class="navbar-header">
        	@include('includes.menu')  		
        </div>

        
        <center>
        <p class="text-muted menutop hidden-xs">Sistema de Integración de Proyectos 
         

        <span class="logout pull-right hidden-sm" >Bienvenido: {{Auth::user()->nombre, HTML::link('logout',',  Logout', array('class' => ' logout'))}}  </span>
		
        </p>
        </center>
        
    </div>
</nav>

  
    
