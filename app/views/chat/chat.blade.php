@extends('layout.master')
@section('title')
:: Dashboard
@stop 
 
@section('contenido')

  <section >
  <div id="chat-page">
            <div class="container-fluid ">
              <div class="row">
                 
                  <div class="chat"></div>
                  <div class="col-lg-7 col-lg-push-1 col-lg-offset-2">

                    <div class="chatbox schema-white">
                      
                      <div class="introduction" >

                          <div class="heading">
                              <h3><a href="dashboard" class="fa fa-arrow-left text-white " style="text-decoration:none;"></a>&nbsp;&nbsp;&nbsp;&nbsp;Markoptic Chat Online</h3>
                          </div>

                          <div class="content">                    
                            <p>Plática con nuestros asesores en vivo y resuelve tus dudas! </p>
                          </div>

                          

                            {{ Form::open(array(
                                    'url' => 'chat',
                                    'target'=>'_Blank',
                                    )) }}
                              <div class="col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8 col-lg-offset-2 col-lg-8">
                                <div class="input-group">
                                  
                                  <input class="form-control" maxlength="30" placeholder="Nombre" name="name" type="text">

                                  <span class="input-group-btn">
                                  @if (isset($status))
                                    @if($status==1){
                                     <button type="submit" class="btn btn-primary montserrat-btn">Empezar Chat</button>
                                    }@else{
                                      <button type="submit" class="btn btn-primary montserrat-btn disabled">Empezar Chat</button>
                                    }@endif
                                  @endif
                                 
                                  </span>
                                  <br>
                                   
                                </div>
                                <span class="display-errors" style="color:#ffffff" >  {{ $errors->first('name') }}</span>                                
                                </div>

                            {{ Form::close() }}
                          
                            
                          <br>
                          <br>
                          <br>
                          <div class="status">
                              <span>El chat se encuentra</span> 
                              @if (isset($status))
                                @if($status==1)
                                  <span class="online">Online</span>
                                @else
                                  <span class="offline">Offline</span>
                                @endif
                              @endif
                          </div>
                          
                      </div>

                      <div class="media">
                        <div class="media-left ">
                          <a href="#">
                            <span class="fa-stack fa-4x">
                            <i class="fa fa-circle  fa-stack-2x text-red" ></i>
                            <i class="fa fa fa-times  fa-stack-1x fa-inverse"></i>
                            </span>
                          </a>
                        </div>
                        <div class="media-body" >
                          <h4 class="media-heading"><strong>Reglas generales del chat:</strong></h4>
                         <p class="text-center">
                           <ol>
                             <li>Ingresar tu nombre real , no pseudónimos ni nicknames.</li>
                             <li>No insultar, agraviar, discriminar ni maltratar.</li>
                             <li>No realizar SPAM (Promoción de páginas webs, Publicación de correo, etc).</li>
                             <li>Cuidar el Lenguaje utilizado, este o no dentro del contexto de un insulto.</li>
                             <li>Evitar escribir todo en mayúsculas. Las oraciones escritas en mayúsculas son consideradas a nivel de reglas de chat como GRITAR.</li>
                             <li>Se breve, describe en un lenguaje claro y sencillo el mensaje que deseas enviar.</li>
                             <li>Señalar cuando el chat haya terminado.</li>
                           </ol>
                         </p>
                        </div>
                      </div>
                      <hr>

                      <div class="media">
                        <div class="media-left">
                          <a href="#">
                            <span class="fa-stack fa-4x">
                            <i class="fa fa-circle  fa-stack-2x text-orange" ></i>
                            <i class="fa fa-clock-o  fa-stack-1x fa-inverse"></i>
                            </span>
                          </a>
                        </div>
                        <div class="media-body" >
                          <h4 class="media-heading" ><strong>Horario de atención.</strong></h4>
                          <p>
                                  <center>
                                  Lunes a Viernes:<br>
                                  De 8:00 A.M A 6:00 P.M. <br><br>
                                  Sábados <br>
                                  De 9:00 A.M A 1:00 P.M. <br>
                                  </center>
                          </p>
                          
                        </div>
                      </div>
                     <br>
                      

                   

                  
                    


                    <p class="pull-right"style="color:transparent;">a</p>

              		
            	</div>

            </div>
        </div>
            
  </div> 
  </div>
  </section>


@stop
 
