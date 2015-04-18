<!DOCTYPE html>
<html>

<!--Head-->
  @include('includes.head')

  <body>   

    <body>
  <div class="container">

        <div class="jumbotron">
          <h1>HipSupport</h1>
          <p class="lead">
            Get a live chat system running on <strong>HipChat</strong> in just a 
            few minutes. Try the&nbsp;demo&nbsp;below.
          </p>
          <form method="POST" action="http://www.bradestey.com/projects/hipsupport/demo" accept-charset="UTF-8"><input name="_token" type="hidden" value="aSaUPMHZDNImubYV7VHfttXDsSLdEdFHue8NJgGh">            <div class="col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8 col-lg-offset-2 col-lg-8">
              <div class="input-group">
              <input class="form-control" maxlength="30" placeholder="First Name" name="name" type="text">              <span class="input-group-btn">
                <button type="submit" class="btn btn-primary" type="button">Start Chat</button>
              </span>
            </div>
                      </div>
      </form>       
      <div class="clearfix"></div>
        </div>
        <div class="row marketing">
      <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 icon-container">
        <span class="icon icon-comments"></span>
      </div>
      <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
        <h4>Up &amp; Running Quickly</h4>
        <p>Open chats in a new window, an iFrame, or a modal. HipSupport uses HipChat&rsquo;s embeded web client and the HipChat API 
        to generate a new room for each live chat&nbsp;request.</p>
      </div>


      <div class="clearfix"></div>
      <hr />
      <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 icon-container">
        <span class="icon icon-github-alt"></span>
      </div>
      <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
        <h4>Fork on GitHub</h4>
        <p>HipSupport is currently available in a  
        <a href="https://github.com/BradEstey/hipsupport" target="_blank">Laravel 4 Package</a>. Install with 
        <a href="https://packagist.org/packages/estey/hipsupport" target="_blank">Composer</a>.</p>
      </div>

      <div class="clearfix"></div>
      <hr />
      <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 icon-container">
        <span class="icon icon-road"></span>
      </div>
      <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
        <h4>More to Come</h4>
        <p>Upcoming features will include the ability to automatically come online based on user availablity, 
        mass room deletion, and (<em>if HipChat&rsquo;s API allows</em>) mass archive&nbsp;rooms.</p>
      </div>        
        </div>


    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
            <a href="http://www.bradestey.com/projects/hipsupport/demo" class="icon-remove"></a>
        </div>
      </div>
    </div>

    
    <div class="clearfix"></div>
    <div class="footer">
          <p>Made by <a href="http://www.bradestey.com" rel="me">Brad Estey</a>
          &mdash; <a href="http://www.hipchat.com/">HipChat</a> is &copy; <a href="http://atlassian.com/">Atlassian</a>.</p>
        </div>
  </div> 

  </body>
</html>

<script>
$(document).ready(appInit);

  function appInit() 
  {
    

    $('form').submit(function(e) {
      $('body').append('<div class="modal-backdrop fade in"><div class="spinner"><i class="icon-spinner icon-spin icon-large"></i></div></div>');
      $('.spinner').fadeIn();
      if (touch_supported == false)
      {
        e.preventDefault();
        $('.error').fadeOut('slow', function() { $(this).remove(); });
        var url = $(this).attr('action');
        $.post(url, { 'name': $('input[name="name"]').val(), '_token': $('input[name="_token"]').val() }, function(data)
        {
          if (data.error != false)
          {
            $('.modal-backdrop').remove();
            $('.input-group').after('<div class="error">' + data.error + '</div>');
            $('.error').hide().fadeIn('slow');
          }
          else
          {
            $('.modal-content').append('<iframe src="' + data.url + '" frameborder="' + 0 + '"></iframe>');
            $('.spinner').hide();
            $('#modal').modal({
              'show': true,
              'backdrop': false
            });

          }
        }, 'json')        
      }
    });

    $('#modal .icon-remove').on('click', function() {
      $('#modal').modal('hide');
      $('.modal-backdrop').remove();
      return false;
    });

    $('#modal').on('hidden.bs.modal', function () {
      $('.modal-content iframe').remove();
    });
  }
</script>