

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

var swap1 = function(){
  $('#agregar').on(
    {'mouseover' : function() {
      $(this).attr('src','img/addhover.png');
    },
    mouseout : function() {
  $(this).attr('src','img/add.png');
    }
  });
};

var swap2 = function(){
  $('#buscar').on({
    'mouseover' : function() {
      $(this).attr('src','img/buscarhover.png');
    },
    mouseout : function() {
  $(this).attr('src','img/buscar.png');
    }
  });
};

var swap3 = function(){
  $('#eliminar').on({
    'mouseover' : function() {
      $(this).attr('src','img/deletehover.png');
    },
    mouseout : function() {
  $(this).attr('src','img/delete.png');
    }
  });
};

var swap4 = function(){
  $('#ver').on({
    'mouseover' : function() {
      $(this).attr('src','img/verhover.png');
    },
    mouseout : function() {
  $(this).attr('src','img/ver.png');
    }
  });
};

$(document).ready(main);
$(document).ready(dashboard);
$(document).ready(menu);
$(document).ready(swap1);
$(document).ready(swap2);
$(document).ready(swap3);
$(document).ready(swap4);







