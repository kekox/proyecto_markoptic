<div class="menu">
      
          <!-- Menu icon -->
          <div class="icon-close">
           
            <a><img src="img/close.png">Cerrar</a>
          </div>

          <!-- Menu -->
          <ul class="menu-body">
   
            <li>
            {{ HTML::link('dashboard', ' Dashboard',array('class' => 'glyphicon glyphicon-th')); }}
            </li>
            

            <li>
            {{ HTML::link('proyectos', ' Proyecto',array('class' => 'glyphicon glyphicon-briefcase')); }}
            </li>


            <li>
            {{ HTML::link('cms', ' CMS',array('class' => 'glyphicon glyphicon-cog')); }}
            </li>


            <li>
            {{ HTML::link('chat', ' Chat',array('class' => 'glyphicon glyphicon-comment')); }}
            </li>


            <li>
            {{ HTML::link('logout', ' Logout',array('class' => 'glyphicon glyphicon-ban-circle')); }}
            </li>

            </ul>
</div>

             <div class="icon-menu "><a>
            <span class="glyphicon glyphicon-menu-hamburger " style="margin-left:-25px;"></span>
            Menu
            </a></div>
          
           