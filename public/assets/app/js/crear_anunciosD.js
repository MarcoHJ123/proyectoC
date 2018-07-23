(function(window, document, $){
  var app = {};

  //Document Ready
  $(function() {
    app.init();
  });

  app.init = function(){
    app.$form = $('.form-crear-anuncio');
    app.$nombres_persona = app.$form.find('input[name="nombres_persona"]');
    app.$apellidos_persona = app.$form.find('input[name="apellidos_persona"]');
    app.$tipo_documento = app.$form.find('select[name="tipo_documento"]');
    app.$numero_documento = app.$form.find('input[name="numero_documento"]');

    app.$sexo_persona = app.$form.find('select[name="sexo_persona"]');
    app.$color_piel = app.$form.find('select[name="color_piel"]');
    app.$estatura_persona = app.$form.find('input[name="estatura_persona"]');
    app.$parentesco = app.$form.find('select[name="parentesco"]');

    app.$ultima_ubicacion = app.$form.find('input[name="ultima_ubicacion"]');
    app.$descripcion = app.$form.find('textarea[name="descripcion"]');

    app.$ubicacio_lt = app.$form.find('input[name="ubicacio_lt"]');
    app.$ubicacio_ln = app.$form.find('input[name="ubicacio_ln"]');

    app.$box_msg_final = app.$form.find('.box-mensaje-anuncio-creado');
    app.$btn_crear_anuncio = app.$form.find('#btn-crear-anuncio');

    $(document).on('click', '#btn-crear-anuncio', app.on_click_crear_anuncio );

    app.inicializar_elementos_de_formulario();
  };

  app.on_click_crear_anuncio = function(){
    var $btn = $(this);
    var data = app.get_datos_form();
    cc('=== Datos del anuncio ==', data);
      app.crear_anuncio( $btn );
  };

  app.crear_anuncio = function( $btn ){
    var data = app.get_datos_form();

    $btn.find('i').removeClass('fa-check').addClass('fa-spinner fa-spin');
    setTimeout(function(){
      ajax({
        url: APP.url.inicio + '/ajax/crear-anuncioD',
        type: 'POST',
        dataType: 'json',
        data: data,
        beforeSend: function(){

        },
        done: function( response, textStatus, jqXHR ){
          var $alert = app.$box_msg_final.find('.alert');
          if( response.html != 'ajax-error' && response.success === true ){
            $alert.html('<p>Anuncio creada con éxito</p>');
            $alert.removeClass('alert-danger').addClass('alert-info');
            app.reset_todos_los_campos();
          } else {
            $alert.removeClass('alert-info').addClass('alert-danger');
            $alert.html('<p>No se pudo crear su anuncio, inténtalo de nuevo. Error: '+response.error+'</p>');
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
    app.$nombres_persona.val('');
    app.$apellidos_persona.val('');
    app.$tipo_documento.val('');
    app.$numero_documento.val('');
    app.$sexo_persona.val('');
    app.$color_piel.val('');
    app.$estatura_persona.val('');
    app.$parentesco.val('');
    app.$descripcion.val('');
    app.$ubicacio_lt.val('');
    app.$ubicacio_ln.val('');

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
    var apellidos_persona = $.trim( app.$apellidos_persona.val() );
    var tipo_documento = $.trim( app.$tipo_documento.val() );
    if( tipo_documento != '0' ){$selected = app.$tipo_documento.find('option:selected');}
    var numero_documento = $.trim( app.$numero_documento.val() );

    var sexo_persona = $.trim( app.$sexo_persona.val() );
    if( sexo_persona != '0' ){$selected = app.$sexo_persona.find('option:selected');}
    var color_piel = $.trim( app.$color_piel.val() );
    if( color_piel != '0' ){$selected = app.$color_piel.find('option:selected');}
    var estatura_persona = $.trim( app.$estatura_persona.val() );
    var parentesco = $.trim( app.$parentesco.val() );
    if( parentesco != '0' ){$selected = app.$parentesco.find('option:selected');}

    var descripcion = $.trim( app.$descripcion.val() );
    var ubicacio_lt = $.trim( app.$ubicacio_lt.val() );
    var ubicacio_ln = $.trim( app.$ubicacio_ln.val() );

    return {
      nombres_persona: nombres_persona,
      apellidos_persona: apellidos_persona,
      tipo_documento: tipo_documento,
      numero_documento: numero_documento,
      sexo_persona: sexo_persona,
      color_piel: color_piel,
      estatura_persona: estatura_persona,
      parentesco: parentesco,
      descripcion: descripcion,
      ubicacio_lt: ubicacio_lt,
      ubicacio_ln: ubicacio_ln,
    };
  };

})(window, document, jQuery);
