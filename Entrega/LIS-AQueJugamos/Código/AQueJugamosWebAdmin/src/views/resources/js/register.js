$('document').ready(function()
{    
   // name validation
    var nameregex = /^[a-zA-Z0-9 ]+$/;
   
   $.validator.addMethod("validname", function( value, element ) {
       return this.optional( element ) || nameregex.test( value );
   }); 
   
   // valid email pattern
   var eregex =   
/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
   
   $.validator.addMethod("validemail", function( value, element ) {
       return this.optional( element ) || eregex.test( value );
   });
   
   /* ---------- FORMULARIO DE REGISTRO DE USUARIOS ADMIN ----------*/

   $("#register-form").validate({
     
    rules:
    {
    name: {
     required: true,
     validname: true,
     minlength: 2
    },
    last_name: {
     required: true,
     validname: true,
     minlength: 2
    },
    ciudad: {
     required: true,
     validname: true,
     minlength: 2
    },
    email: {
     required: true,
     validemail: true
    },
    password: {
     required: true,
     minlength: 8,
     maxlength: 15
    },
    cpassword: {
     required: true,
     equalTo: '#password'
    },
     },
     messages:
    {
      name: {
       required: "Introduce el nombre de usuario",
       validname: "El nombre solo debe puede contener letras, numeros y espacios",
       minlength: "Tu nombre es muy corto"
       },
       ciudad: {
       required: "Introduce el nombre de de la ciudad",
       validname: "El nombre solo debe puede contener letras o espacios",
       minlength: "El nombre de la ciudad es muy corto"
       },
      email: {
       required: "Introduce el email",
       validemail: "Introduce un email correcto"
       },
      password:{
       required: "Introduce una contraseña",
       minlength: "La contraseña debe contener almenos 8 carácteres"
       },
      cpassword:{
       required: "Repite la contraseña",
       equalTo: "La contraseña no concuerda!"
       }
     },
     errorPlacement : function(error, element) {
     $(element).closest('.form-group').find('.help-block').html(error.html());
     },
     highlight : function(element) {
     $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
     },
     unhighlight: function(element, errorClass, validClass) {
     $(element).closest('.form-group').removeClass('has-error').addClass('has-success');
     $(element).closest('.form-group').find('.help-block').html('');
     },
     
     submitHandler: function(form) {
                    form.submit();
     
                }
     }); 

   /* ----------------------- FORMULARIO DE AÑADIR JUEGOS ---------------*/
   $("#anadir-juego-form").validate({
    rules:
    {
    nombreJuego: {
     required: true,
     validname: true,
     minlength: 2
    },
    dificultad: {
     required: true,     
    },
    duracion: {
     required: true,
     number: true
    },
    edad: {
     required: true,
     number: true
    },
    tipo: {
     required: true     
    },
    numeroJugadores: {
      required: true
    },
    categoria: {
     required: true    
    },
     },
     messages:
    {
      nombreJuego: {
       required: "Introduce el nombre del juego",
       validname: "El nombre del juego solo debe puede contener letras, numeros y espacios",
       minlength: "Tu nombre es muy corto"
       },
       dificultad: {
       required: "Debes seleccionar un valor para la dificultad"  
       },
      duracion: {
       required: "Introduce una duración",
       number: "La duración debe ser un número"
       },
      edad:{
       required: "Introduce la edad",
       number: "La edad debe ser un número"
       },
      tipo:{
       required: "Debes seleccionar un valor para el tipo"
       },
      numeroJugadores:{
       required: "Debes introducir un número de jugadores"
       },
      categoria:{
       required: "Debes seleccionar un valor para la categoria"
       }
     },
     errorPlacement : function(error, element) {
     $(element).closest('.form-group').find('.help-block').html(error.html());
     },
     highlight : function(element) {
     $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
     },
     unhighlight: function(element, errorClass, validClass) {
     $(element).closest('.form-group').removeClass('has-error').addClass('has-success');
     $(element).closest('.form-group').find('.help-block').html('');
     },
     
     submitHandler: function(form) {
                    form.submit();     
                }
     }); 

 })