(function(window, document, $){
  var app = {};

  //Document Ready
  $(function() {
    app.init();
  });

  app.init = function(){

    app.$form = $('.form-crear-usuario');
    app.$nombres_persona = app.$form.find('input[name="nombres_persona"]');
    app.$sexo_persona = app.$form.find('select[name="sexo_persona"]');
    app.$correo_electronico = app.$form.find('input[name="correo_electronico"]');
    app.$id_institucion = app.$form.find('select[name="id_institucion"]');
    app.$apellidos = app.$form.find('input[name="apellidos_persona"]');

    app.$box_msg_final = app.$form.find('.box-mensaje-usuario-creado');
    app.$btn_crear_anuncio = app.$form.find('#btn-crear-anuncio');

    $(document).on('click', '#btn-crear-anuncio', app.on_click_crear_anuncio );

    app.inicializar_elementos_de_formulario();
  };

  app.on_click_crear_anuncio = function(){
    var $btn = $(this);
    var data = app.get_datos_form();
    cc('=== Datos del Usuario ==', data);
      app.crear_anuncio( $btn );
  };

  app.crear_anuncio = function( $btn ){
    var data = app.get_datos_form();

    $btn.find('i').removeClass('fa-check').addClass('fa-spinner fa-spin');
    setTimeout(function(){
      ajax({
        url: APP.url.inicio + '/ajax/crear-usuario',
        type: 'POST',
        dataType: 'json',
        data: data,
        beforeSend: function(){

        },
        done: function( response, textStatus, jqXHR ){
          var $alert = app.$box_msg_final.find('.alert');
          if( response.html != 'ajax-error' && response.success === true ){
            $alert.html('<p>Usuario creada con éxito</p>');
            $alert.removeClass('alert-danger').addClass('alert-info');
            app.reset_todos_los_campos();
          } else {
            $alert.removeClass('alert-info').addClass('alert-danger');
            $alert.html('<p>No se pudo crear su Usuario, inténtalo de nuevo. Error: '+response.error+'</p>');
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

  // app.validar_campos = function(){
    //   var error = false;
    //   var error_msg = '<p>Corrige los siguientes campos: </p>';
    //   var $alert = app.$box_msg_final.find('.alert');

    //   var data = app.get_datos_form();
    //   if( data.fecha.length < 5 || data.fecha_cita.length < 5 ){
    //     error = true;
    //     error_msg += '<li style="font-size: 13px;">Fecha</li>';
    //   }
    //   if( ! data.c_horario || data.c_horario == '' || data.c_horario === 0 || data.hora == '' ){
    //     error = true;
    //     error_msg += '<li style="font-size: 13px;">Horario</li>';
    //   }
    //   if( data.motivo == '0' ){
    //     error = true;
    //     error_msg += '<li style="font-size: 13px;">Motivo</li>';
    //   }
    //   if( error ){
    //     $alert.removeClass('alert-info').addClass('alert-danger');
    //     app.$box_msg_final.show();
    //     $alert.html(error_msg);
    //   } else {
    //     app.$box_msg_final.hide();
    //   }
    //   return ! error;
    // }


  app.reset_todos_los_campos = function(){
    // app.$org_jurid.val('0');
    // app.$motivo.val('0');
    // app.$descripcion.val('');
    // app.reset_campos_depenientes_instancia();
    // app.$box_msg_final.hide();
    app.$nombres_persona.val('') ;
    app.$sexo_persona.val('') ;
    app.$correo_electronico.val('') ;
    app.$id_institucion.val('') ;
    app.$apellidos.val('') ;
  };


  // app.validadar_num_expediente = function( $campo ){
  //   var valor = $.trim( $campo.val() );
  //   var error = false;
  //   if( valor == '0' || valor.length < 1 ){
  //     error = true;
  //     $campo.next('.messages').html('<p class="text-danger error">Ingresa N° Expediente</p>');
  //   } else {
  //     $campo.next('.messages').html('');
  //     var $anio = app.$anio;
  //     if( $anio.val() == '0' ){
  //       error = true;
  //     }
  //   }
  //   return error;
  // };

  // app.validadar_juzgado = function( $campo ){
  //   var valor = $.trim( $campo.val() );
  //   var error = false;
  //   if( valor == '0' || valor == '' ){
  //     error = true;
  //     $campo.next('.messages').html('<p class="text-danger error">Seleccione Juzgado</p>');
  //   } else {
  //     $campo.next('.messages').html('');
  //   }
  //   return error;
  // };


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

    var nombres_persona = $.trim( app.$nombres_persona.val() );
    var sexo_persona = $.trim( app.$sexo_persona.val() );
    if( sexo_persona != '0' ){$selected = app.$sexo_persona.find('option:selected');}
    
    var correo_electronico = $.trim( app.$correo_electronico.val() );
    var id_institucion = $.trim( app.$id_institucion.val() );
    if( id_institucion != '0' ){$selected = app.$id_institucion.find('option:selected');}
    var apellidos = $.trim( app.$apellidos.val() );

    
  

    return {
      nombres_persona: nombres_persona,
      sexo_persona: sexo_persona,
      correo_electronico: correo_electronico,
      id_institucion: id_institucion,
      apellidos: apellidos,
    };
  };

})(window, document, jQuery);
