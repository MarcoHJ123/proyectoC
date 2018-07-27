(function(window, document, $){
  var app = {};

  //Document Ready
  $(function() {
    app.init();
  });

  app.init = function(){

    app.$form = $('.form-crear-aporte');
    app.$ubicacio_lt = app.$form.find('input[name="ubicacio_lt"]');
    app.$ubicacio_ln = app.$form.find('input[name="ubicacio_ln"]');
    app.$id_anuncio = app.$form.find('input[name="id_anuncio"]');
    app.$descripcion = app.$form.find('textarea[name="descripcion"]');

    app.$box_msg_final = app.$form.find('.box-mensaje-aporte-creado');
    app.$btn_crear_aporte = app.$form.find('#btn-crear-aporte');

    $(document).on('click', '#btn-crear-aporte', app.on_click_crear_aporte );

    app.inicializar_elementos_de_formulario();
  };

  app.on_click_crear_aporte = function(){
    var $btn = $(this);
    var data = app.get_datos_form();
    // var institucion = $.trim( $('[name="institucion"]').val().toUpperCase());
    cc('=== Datos del Aporte ==', data);
      app.crear_anuncio( $btn );
  };

  app.crear_anuncio = function( $btn ){
    var data = app.get_datos_form();

    $btn.find('i').removeClass('fa-check').addClass('fa-spinner fa-spin');
    setTimeout(function(){
      ajax({
        url: APP.url.inicio + '/ajax/crear-aporte',
        type: 'POST',
        dataType: 'json',
        data: data,
        beforeSend: function(){

        },
        done: function( response, textStatus, jqXHR ){
          var $alert = app.$box_msg_final.find('.alert');
          if( response.html != 'ajax-error' && response.success === true ){
            $alert.html('<p>Aporte creado con éxito</p>');
            $alert.removeClass('alert-danger').addClass('alert-info');
            app.reset_todos_los_campos();
          } else {
            $alert.removeClass('alert-info').addClass('alert-danger');
            $alert.html('<p>No se pudo crear su Aporte, inténtalo de nuevo. Error: '+response.error+'</p>');
          }
          app.$box_msg_final.show();
        },
        fail: function( jqXHR, textStatus, errorThrown ){
        },
        always: function( response, textStatus, errorThrown ){
          $btn.find('i').removeClass('fa-spinner fa-spin').addClass('fa-check');
        }
      });
    }, 2000);

  }

  app.reset_todos_los_campos = function(){
    app.$ubicacio_lt.val('') ;
    app.$ubicacio_ln.val('') ;
    app.$descripcion.val('') ;
  };

  app.inicializar_elementos_de_formulario = function(){
    $('input[type="text"][maxlength], input[type="number"][maxlength]').on('input', function(event) {
      var $input = $(this);
      var valor = $.trim($input.val());
      valor = valor.replace(/[^\d]/,'');
      $input.val(valor);
    });
    // Textareas max-length
    $('textarea.max-textarea').maxlength({
      alwaysShow: true
    });
  };

  app.get_datos_form = function(){
    var ubicacio_lt = $.trim( app.$ubicacio_lt.val() );
    var ubicacio_ln = $.trim( app.$ubicacio_ln.val() );
    var descripcion = $.trim( app.$descripcion.val() );
    var id_anuncio = $.trim( app.$id_anuncio.val() );
    return {
      ubicacio_lt: ubicacio_lt,
      ubicacio_ln: ubicacio_ln,
      descripcion: descripcion,
      id_anuncio: id_anuncio,
    };
  };

})(window, document, jQuery);
