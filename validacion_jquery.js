$( document ).ready(function() {
    $('#form_send').submit(function() {
    }).validate({
        debug: false,
            rules: {
                "name": {
                    required: true
                },

                "lastname": {
                    required: true
                },

                "telephone": {
                    required: true,
                    number: true
                },
                
                "email": {
                    required: true,
                    email: true
                }
            },
            messages: {
            "name": {
                required: "Campo nombre requerido."
            },
            "lastname": {
                required: "Campo apellido."
            },
            "email": {
                required: "Campo email requerido.",
                email: "Se requiere un email válido."
            },
            "telephone": {
                required: "Campo telefono requerido.",
                number: "Solo números."
            }
        }
        });
});