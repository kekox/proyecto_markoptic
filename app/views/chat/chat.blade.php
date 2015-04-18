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
                              <h3>Markoptic Chat Online</h3>
                          </div>

                          <div class="content">                    
                            <p>Sistema de chat en vivo que se ejecuta en HipChat en pocos minutos </p>
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
                                     <button type="submit" class="btn btn-primary">Start Chat</button>
                                    }@else{
                                      <button type="submit" class="btn btn-primary disabled" data-toggle="modal" data-target="#myModal">Start Chat</button>
                                    }@endif
                                  @endif
                                 
                                  </span>
                                  <br>
                                   
                                </div>
                                <span class=" display-errors"  >  {{ $errors->first('name') }}</span>                                
                                </div>

                            {{ Form::close() }}
                          
                            
                          <br>
                          <br>
                          <br>
                          <div class="status">
                              <span>El chat se encuentra</span> 
                              @if (isset($status))
                                @if($status==1){
                                  <span class="online">Online</span>
                                }@else{
                                  <span class="offline">Offline</span>
                                }@endif
                              @endif
                          </div>
                          
                      </div>

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
                          <h4 class="media-heading" >Media heading</h4>
                          <p >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore provident reprehenderit ab numquam facilis dolores recusandae molestiae, harum iure hic nulla iste laborum dolorem itaque nam veritatis voluptates dicta quisquam, sint a fugiat culpa ipsa enim? Totam, fugiat, architecto. Quas blanditiis delectus, repudiandae saepe id nobis. Enim consequatur sunt, possimus.</p>
                          
                        </div>
                      </div>
                      <hr>

                      <div class="media">
                        <div class="media-left">
                          <a href="#">
                            <span class="fa-stack fa-4x">
                            <i class="fa fa-circle  fa-stack-2x text-blue-fb" ></i>
                            <i class="fa fa-facebook  fa-stack-1x fa-inverse"></i>
                            </span>
                          </a>
                        </div>
                        <div class="media-body" >
                          <h4 class="media-heading">Media heading</h4>
                         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore provident reprehenderit ab numquam facilis dolores recusandae molestiae, harum iure hic nulla iste laborum dolorem itaque nam veritatis voluptates dicta quisquam, sint a fugiat culpa ipsa enim? Totam, fugiat, architecto. Quas blanditiis delectus, repudiandae saepe id nobis. Enim consequatur sunt, possimus.</p>
                        </div>
                      </div>
                      <hr>

                   

                    <br>
                   <br>
                    


                    <p class="pull-right"style="color:transparent;">a</p>

              		
            	</div>

            </div>
        </div>
            
  </div> 
  </div>
  </section>


@stop
 
