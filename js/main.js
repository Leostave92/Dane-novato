$("#formContenedor").validate({
    rules:{
        nIdentificacion:{
            number:true,
            minlength:10,
            maxlength:10,
        },

        primerNombre:{
            minlength:3,
        }, 

        primerApellido:{
            minlength:3,
        },

        segundoApellido:{
            minlength:3,
        },
        TD:{
            debug:true,

        },

        email:{
            email:true
        },

        observacion:{

        }
       
    },

   
        messages: {

            nIdentificacion:{
            required: "Por favor introduzca su Numero de Identificacion",
            minlength: "Minimo 10 caracteres",
            maxlength:"Maximo 10 caracteres",
            number:"Numero no valido"
            },
            primerNombre:{
            required: "Por favor introduzca su Nombre",
            minlength: "Minimo 3 caracteres"
            },
            primerApellido:{
                 required: "Por favor introduzca su Apellido",
                minlength: "Minimo 3 caracteres"
            },
            segundoApellido:{
                required: "Por favor introduzca su Apellido",
                minlength: "Minimo 3 caracteres"
            },

            TD:"Por favor seleccione el Tipo de Documento",
           
            email:"Por favor introduzca su Email",
          },
    


    submitHandler: function(form) {
      form.submit();
    }
   });


//    $("#btnEnviar").on("click",function(){

    
// if($("#TI").prop("checken")== true){
//     alert("Hola")
// };

//    });



