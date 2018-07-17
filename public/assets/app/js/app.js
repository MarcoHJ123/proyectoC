//Variables generales
//APP.en_produccion se inicializa al final del archivo app/Views/templates/master/master.twig
APP.debug = APP.en_produccion === false || APP.en_produccion === 'false' ? true : false;
APP.functions = {};

(function(window, document, $){
  var app = {

  };
  //Document Ready
  $(function() {
    app.init();
  });

  app.init = function(){
    console.log(APP.debug);

    if( APP.debug ){
      $('.creacion-ticket').append('<div class="card-footer">Sección de Pruebas<div class="debug-partes"></div></div>');
    }
  };

})(window, document, jQuery);
//Plugins
(function($) {
  $.fn.onEnter = function(func) {
    this.bind('keypress', function(e) {
        if (e.keyCode == 13) func.apply(this, [e]);
    });
    return this;
   };
})(jQuery);

function c(msg){
  if( APP.debug ){
    console.log(msg);
  }
}

function cc(msg, msg2){
  if( APP.debug ){
    console.log(msg+': ');
    console.log(msg2);
  }
}

function ajax( options ){
  var defaults = {
    type: 'POST',
    dataType: 'json',
    data: {
    },
    beforeSend: function(){},
    done: function( response, textStatus, jqXHR ){},
    fail: function( jqXHR, textStatus, errorThrown ){},
    always: function( response, textStatus, errorThrown ){},
  };
  options = $.extend(true, {}, defaults, options );
  c('============================== AJAX =========================================');
  $.ajax({
    url: options.url,
    type: options.type,
    dataType: options.dataType,
    data: options.data,
    beforeSend: function( jqXHR, settings ){
      c("=== BeforeSend ===");
      if( $.isFunction( options.beforeSend  ) ){
        options.beforeSend.call( this, jqXHR, settings );
      }
    }
  })
  .done(function( response, textStatus, jqXHR ) {
    c("=== Success === (textStatus) ==> " + textStatus);
    cc('response', response);
    if( $.isFunction( options.done  ) ){
      options.done.call( this, response, textStatus, jqXHR );
    }
  })
  .fail(function( jqXHR, textStatus, errorThrown ) {
    c("=== Fail === (textStatus) ==> " + textStatus);
    cc('Response Text', jqXHR.responseText);
    cc('jqXHR', jqXHR);
    cc('errorThrown', errorThrown);
    if( $.isFunction( options.fail ) ){
      options.fail.call( this, jqXHR, textStatus, errorThrown );
    }
  })
  .always(function( response, textStatus, errorThrown ) {
    c("=== Always =========== (textStatus) ==> " + textStatus );
    if( textStatus != 'success' ){
      cc('errorThrown', errorThrown);
    }
    if( $.isFunction( options.always ) ){
      options.always.call( this, response, textStatus, errorThrown );
    }
  });
};


