var main = function() {
  /* Push the body and the nav over by 285px over */
  $('.icon-menu').click(function() {
    $('.menu').animate({left: "0px"}, 200);

    $('body').animate({left: "220px"}, 200);

  });

  /* Then push them back */
  $('.icon-close').click(function() {
    $('.menu').animate({left: "-220px"}, 200);

    $('body').animate({left: "0px"}, 200);
  });
};


var dashboard= function(){

  $('.wrap > div').hover(function(){
    $(this).addClass('highlight2');
  },
    function(){
    $(this).removeClass('highlight2');
  });

};

var menu= function(){
$('.menu ul > li').hover(function(){
    $(this).addClass('highlight');
  },
    function(){
    $(this).removeClass('highlight');
  });

};


$(document).ready(function(){
    $('#username, #password').on('keyup',function(){
        highlight_error($(this));
    }).focus(function(){
        highlight_error($(this));
    }).blur(function(){
        highlight_error($(this));
    });
});

function highlight_error(el) {
    if(el.val().length == 0 || el.val().length != 0) {
        el.parent().addClass('has-success');
    } else {
        el.parent().removeClass('has-success');
    }


};


$(document).ready(main);
$(document).ready(dashboard);
$(document).ready(menu);
$(document).ready()








