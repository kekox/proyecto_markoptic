

$(document).ready(function() {/*Terminan el document ready */
    /*Inician las validaciones para el formulario proyecto */
    $('#formularioproyecto').formValidation({
        framework: 'bootstrap',
        icon: {
            valid: 'fa fa-check fa-2x',
            invalid: 'fa fa-times fa-2x',
            validating: 'fa fa-refresh fa-2x'
        },
        fields: {
            campo0: {
                err:'tooltip',
                // The messages for this field are shown as usual
                validators: {
                    html:true,
                    notEmpty: {
                        message: 'El campo es obligatorio'
                    },
                    stringLength: {
                        min: 2,
                        message: 'El campo debe contener al menos 2 caracteres.'
                    },
                    regexp: {
                        regexp: /^[\sa-z0-9 A-Z ñ.-_,()*ÑáéíóúÁÉÍÓÚ-]+$/i,
                        message: 'El formato del campo es inválido. Solo se permiten:<br>*letras<br>*números<br>*espacio(s) en blanco<br>*parentesis,guión normal,guion bajo<br>*paréntesis y asteriscos'
                    }
                }
            },
            campo1: {
                err:'tooltip',
                // The messages for this field are shown as usual
                validators: {
                    notEmpty: {
                        message: 'El campo es obligatorio'
                    },
                    digits: {
                        message: 'El campo solo debe contener dígitos'
                    },
                }
            },
             campo2: {
                err:'tooltip',
                // The messages for this field are shown as usual
                validators: {
                    html:true,
                    regexp: {
                        regexp: /^[\sa-z0-9 A-Z ñ.-_,()*ÑáéíóúÁÉÍÓÚ-]+$/i,
                        message: 'El formato del campo es inválido. Solo se permiten:<br>*letras<br>*números<br>*espacio(s) en blanco<br>*parentesis,guión normal,guion bajo<br>*paréntesis y asteriscos'
                    }
                }
            },
             campo3: {
                err:'tooltip',
                // The messages for this field are shown as usual
                validators: {
                    html:true,
                    regexp: {
                        regexp: /^[\sa-z0-9 A-Z ñ.-_,()*ÑáéíóúÁÉÍÓÚ-]+$/i,
                        message: 'El formato del campo es inválido. Solo se permiten:<br>*letras<br>*números<br>*espacio(s) en blanco<br>*parentesis,guión normal,guion bajo<br>*paréntesis y asteriscos'
                    }
                }
            },
             campo4: {
                err:'tooltip',
                // The messages for this field are shown as usual
                validators: {
                    html:true,
                    notEmpty: {
                        message: 'El campo es obligatorio'
                    },
                    stringLength: {
                        min: 2,
                        message: 'El campo debe contener al menos 2 caracteres.'
                    },
                    regexp: {
                        regexp: /^[\sa-z0-9 A-Z ñ.-_,()*ÑáéíóúÁÉÍÓÚ-]+$/i,
                        message: 'El formato del campo es inválido. Solo se permiten:<br>*letras<br>*números<br>*espacio(s) en blanco<br>*parentesis,guión normal,guion bajo<br>*paréntesis y asteriscos'
                    }
                }
            },
             campo5: {
                err:'tooltip',
                // The messages for this field are shown as usual
                validators: {
                    html:true,
                    regexp: {
                        regexp: /^[\sa-z0-9 A-Z ñ.-_,()*ÑáéíóúÁÉÍÓÚ-]+$/i,
                        message: 'El formato del campo es inválido. Solo se permiten:<br>*letras<br>*números<br>*espacio(s) en blanco<br>*parentesis,guión normal,guion bajo<br>*paréntesis y asteriscos'
                    }
                }
            },
             campo6: {
                err:'tooltip',
                // The messages for this field are shown as usual
                validators: {
                    html:true,
                    regexp: {
                        regexp: /^[\sa-z0-9 A-Z ñ.-_,()*ÑáéíóúÁÉÍÓÚ-]+$/i,
                        message: 'El formato del campo es inválido. Solo se permiten:<br>*letras<br>*números<br>*espacio(s) en blanco<br>*parentesis,guión normal,guion bajo<br>*paréntesis y asteriscos'
                    }
                }
            },
             campo7: {
                err:'tooltip',
                // The messages for this field are shown as usual
                validators: {
                    html:true,
                    regexp: {
                        regexp: /^[\sa-z0-9 A-Z ñ.-_,()*ÑáéíóúÁÉÍÓÚ-]+$/i,
                        message: 'El formato del campo es inválido. Solo se permiten:<br>*letras<br>*números<br>*espacio(s) en blanco<br>*parentesis,guión normal,guion bajo<br>*paréntesis y asteriscos'
                    }
                }
            },
            campo8: {
                err:'tooltip',
                // The messages for this field are shown as usual
                validators: {
                    html:true,
                    notEmpty: {
                        message: 'El campo es obligatorio'
                    },
                    stringLength: {
                        min: 2,
                        message: 'El campo debe contener al menos 2 caracteres.'
                    },
                    regexp: {
                        regexp: /^[\sa-z0-9 A-Z ñ.-_,()*ÑáéíóúÁÉÍÓÚ-]+$/i,
                        message: 'El formato del campo es inválido. Solo se permiten:<br>*letras<br>*números<br>*espacio(s) en blanco<br>*parentesis,guión normal,guion bajo<br>*paréntesis y asteriscos'
                    }
                }
            },
            campo9: {
                err:'tooltip',
                // The messages for this field are shown as usual
                validators: {
                    html:true,
                    notEmpty: {
                        message: 'El campo es obligatorio'
                    },
                    stringLength: {
                        min: 2,
                        message: 'El campo debe contener al menos 2 caracteres.'
                    },
                    regexp: {
                        regexp: /^[\sa-z0-9 A-Z ñ.-_,()*ÑáéíóúÁÉÍÓÚ-]+$/i,
                        message: 'El formato del campo es inválido. Solo se permiten:<br>*letras<br>*números<br>*espacio(s) en blanco<br>*parentesis,guión normal,guion bajo<br>*paréntesis y asteriscos'
                    }
                }
            },
            campo10: {
                err:'tooltip',
                // The messages for this field are shown as usual
                validators: {
                    html:true,
                    regexp: {
                        regexp: /^[\sa-z0-9 A-Z ñ.-_,()*ÑáéíóúÁÉÍÓÚ-]+$/i,
                        message: 'El formato del campo es inválido. Solo se permiten:<br>*letras<br>*números<br>*espacio(s) en blanco<br>*parentesis,guión normal,guion bajo<br>*paréntesis y asteriscos'
                    }
                }
            },
            campo11: {
                err:'tooltip',
                // The messages for this field are shown as usual
                validators: {
                    html:true,
                    regexp: {
                        regexp: /^[\sa-z0-9 A-Z ñ.-_,()*ÑáéíóúÁÉÍÓÚ-]+$/i,
                        message: 'El formato del campo es inválido. Solo se permiten:<br>*letras<br>*números<br>*espacio(s) en blanco<br>*parentesis,guión normal,guion bajo<br>*paréntesis y asteriscos'
                    }
                }
            },
            campo12: {
                err:'tooltip',
                // The messages for this field are shown as usual
                validators: {
                    html:true,
                    regexp: {
                        regexp: /^[\sa-z0-9 A-Z ñ.-_,()*ÑáéíóúÁÉÍÓÚ-]+$/i,
                        message: 'El formato del campo es inválido. Solo se permiten:<br>*letras<br>*números<br>*espacio(s) en blanco<br>*parentesis,guión normal,guion bajo<br>*paréntesis y asteriscos'
                    }
                }
            },
           
        }
    });
    /*Terminan las validaciones para el formulario proyecto */

    /*Incian las validaciones para el formulario descripciones */
    $('#formulariodescripciones').formValidation({
        framework: 'bootstrap',
        icon: {
            valid: 'fa fa-check fa-2x',
            invalid: 'fa fa-times fa-2x',
            validating: 'fa fa-refresh fa-2x'
        },
        fields: {
             campo0: {
                err:'tooltip',
                // The messages for this field are shown as usual
                validators: {
                    notEmpty: {
                        message: 'El campo es obligatorio'
                    },
                    digits: {
                        message: 'El campo solo debe contener dígitos'
                    },
                }
            },
            campo1: {
                err:'tooltip',
                // The messages for this field are shown as usual
                validators: {
                    html:true,
                    notEmpty: {
                        message: 'El campo es obligatorio'
                    },
                    stringLength: {
                        min: 2,
                        message: 'El campo debe contener al menos 2 caracteres.'
                    },
                    regexp: {
                        regexp: /^[\sa-z0-9 A-Z ñ.-_,()*ÑáéíóúÁÉÍÓÚ-]+$/i,
                        message: 'El formato del campo es inválido. Solo se permiten:<br>*letras<br>*números<br>*espacio(s) en blanco<br>*parentesis,guión normal,guion bajo<br>*paréntesis y asteriscos'
                    }
                }
            },
             campo2: {
                err:'tooltip',
                // The messages for this field are shown as usual
                validators: {
                    html:true,
                    notEmpty: {
                        message: 'El campo es obligatorio'
                    },
                    stringLength: {
                        min: 2,
                        message: 'El campo debe contener al menos 2 caracteres.'
                    },
                    regexp: {
                        regexp: /^[\sa-z0-9 A-Z ñ.-_,()*ÑáéíóúÁÉÍÓÚ-]+$/i,
                        message: 'El formato del campo es inválido. Solo se permiten:<br>*letras<br>*números<br>*espacio(s) en blanco<br>*parentesis,guión normal,guion bajo<br>*paréntesis y asteriscos'
                    }
                }
            },
             campo3: {
                err:'tooltip',
                // The messages for this field are shown as usual
                validators: {
                    html:true,
                    notEmpty: {
                        message: 'El campo es obligatorio'
                    },
                    stringLength: {
                        min: 2,
                        message: 'El campo debe contener al menos 2 caracteres.'
                    },
                    regexp: {
                        regexp: /^[\sa-z0-9 A-Z ñ.-_,()*ÑáéíóúÁÉÍÓÚ-]+$/i,
                        message: 'El formato del campo es inválido. Solo se permiten:<br>*letras<br>*números<br>*espacio(s) en blanco<br>*parentesis,guión normal,guion bajo<br>*paréntesis y asteriscos'
                    }
                }
            },
             campo4: {
                err:'tooltip',
                // The messages for this field are shown as usual
                validators: {
                    html:true,
                    notEmpty: {
                        message: 'El campo es obligatorio'
                    },
                    stringLength: {
                        min: 2,
                        message: 'El campo debe contener al menos 2 caracteres.'
                    },
                    regexp: {
                        regexp: /^[\sa-z0-9 A-Z ñ.-_,()*ÑáéíóúÁÉÍÓÚ-]+$/i,
                        message: 'El formato del campo es inválido. Solo se permiten:<br>*letras<br>*números<br>*espacio(s) en blanco<br>*parentesis,guión normal,guion bajo<br>*paréntesis y asteriscos'
                    }
                }
            },
             campo5: {
                err:'tooltip',
                // The messages for this field are shown as usual
                validators: {
                    html:true,
                    notEmpty: {
                        message: 'El campo es obligatorio'
                    },
                    stringLength: {
                        min: 2,
                        message: 'El campo debe contener al menos 2 caracteres.'
                    },
                    regexp: {
                        regexp: /^[\sa-z0-9 A-Z ñ.-_,()*ÑáéíóúÁÉÍÓÚ-]+$/i,
                        message: 'El formato del campo es inválido. Solo se permiten:<br>*letras<br>*números<br>*espacio(s) en blanco<br>*parentesis,guión normal,guion bajo<br>*paréntesis y asteriscos'
                    }
                }
            },
             campo6: {
                err:'tooltip',
                // The messages for this field are shown as usual
                validators: {
                    html:true,
                    notEmpty: {
                        message: 'El campo es obligatorio'
                    },
                    stringLength: {
                        min: 2,
                        message: 'El campo debe contener al menos 2 caracteres.'
                    },
                    regexp: {
                        regexp: /^[\sa-z0-9 A-Z ñ.-_,()*ÑáéíóúÁÉÍÓÚ-]+$/i,
                        message: 'El formato del campo es inválido. Solo se permiten:<br>*letras<br>*números<br>*espacio(s) en blanco<br>*parentesis,guión normal,guion bajo<br>*paréntesis y asteriscos'
                    }
                }
            },
             
           
        }
    });
    /*Terminan las validaciones para el formulario descripciones */

    /*Incian las validaciones para el formulario análisis técnico */
    $('#formulariotecnico').formValidation({
        framework: 'bootstrap',
        icon: {
            valid: 'fa fa-check fa-2x',
            invalid: 'fa fa-times fa-2x',
            validating: 'fa fa-refresh fa-2x'
        },
        fields: {
             campo0: {
                err:'tooltip',
                // The messages for this field are shown as usual
                validators: {
                    notEmpty: {
                        message: 'El campo es obligatorio'
                    },
                    digits: {
                        message: 'El campo solo debe contener dígitos'
                    },
                }
            },
            campo1: {
                err:'tooltip',
                // The messages for this field are shown as usual
                validators: {
                    html:true,
                    notEmpty: {
                        message: 'El campo es obligatorio'
                    },
                    stringLength: {
                        min: 2,
                        message: 'El campo debe contener al menos 2 caracteres.'
                    },
                    regexp: {
                        regexp: /^[\sa-z0-9 A-Z ñ.-_,()*ÑáéíóúÁÉÍÓÚ-]+$/i,
                        message: 'El formato del campo es inválido. Solo se permiten:<br>*letras<br>*números<br>*espacio(s) en blanco<br>*parentesis,guión normal,guion bajo<br>*paréntesis y asteriscos'
                    }
                }
            },
             campo2: {
                err:'tooltip',
                // The messages for this field are shown as usual
                validators: {
                    html:true,
                    notEmpty: {
                        message: 'El campo es obligatorio'
                    },
                    stringLength: {
                        min: 2,
                        message: 'El campo debe contener al menos 2 caracteres.'
                    },
                    regexp: {
                        regexp: /^[\sa-z0-9 A-Z ñ.-_,()*ÑáéíóúÁÉÍÓÚ-]+$/i,
                        message: 'El formato del campo es inválido. Solo se permiten:<br>*letras<br>*números<br>*espacio(s) en blanco<br>*parentesis,guión normal,guion bajo<br>*paréntesis y asteriscos'
                    }
                }
            },
             campo3: {
                err:'tooltip',
                // The messages for this field are shown as usual
                validators: {
                    html:true,
                    notEmpty: {
                        message: 'El campo es obligatorio'
                    },
                    stringLength: {
                        min: 2,
                        message: 'El campo debe contener al menos 2 caracteres.'
                    },
                    regexp: {
                        regexp: /^[\sa-z0-9 A-Z ñ.-_,()*ÑáéíóúÁÉÍÓÚ-]+$/i,
                        message: 'El formato del campo es inválido. Solo se permiten:<br>*letras<br>*números<br>*espacio(s) en blanco<br>*parentesis,guión normal,guion bajo<br>*paréntesis y asteriscos'
                    }
                }
            },
             campo4: {
                err:'tooltip',
                // The messages for this field are shown as usual
                validators: {
                    html:true,
                    notEmpty: {
                        message: 'El campo es obligatorio'
                    },
                    stringLength: {
                        min: 2,
                        message: 'El campo debe contener al menos 2 caracteres.'
                    },
                    regexp: {
                        regexp: /^[\sa-z0-9 A-Z ñ.-_,()*ÑáéíóúÁÉÍÓÚ-]+$/i,
                        message: 'El formato del campo es inválido. Solo se permiten:<br>*letras<br>*números<br>*espacio(s) en blanco<br>*parentesis,guión normal,guion bajo<br>*paréntesis y asteriscos'
                    }
                }
            },
             campo5: {
                err:'tooltip',
                // The messages for this field are shown as usual
                validators: {
                    html:true,
                    notEmpty: {
                        message: 'El campo es obligatorio'
                    },
                    stringLength: {
                        min: 2,
                        message: 'El campo debe contener al menos 2 caracteres.'
                    },
                    regexp: {
                        regexp: /^[\sa-z0-9 A-Z ñ.-_,()*ÑáéíóúÁÉÍÓÚ-]+$/i,
                        message: 'El formato del campo es inválido. Solo se permiten:<br>*letras<br>*números<br>*espacio(s) en blanco<br>*parentesis,guión normal,guion bajo<br>*paréntesis y asteriscos'
                    }
                }
            },
             campo6: {
                err:'tooltip',
                // The messages for this field are shown as usual
                validators: {
                    html:true,
                    notEmpty: {
                        message: 'El campo es obligatorio'
                    },
                    stringLength: {
                        min: 2,
                        message: 'El campo debe contener al menos 2 caracteres.'
                    },
                    regexp: {
                        regexp: /^[\sa-z0-9 A-Z ñ.-_,()*ÑáéíóúÁÉÍÓÚ-]+$/i,
                        message: 'El formato del campo es inválido. Solo se permiten:<br>*letras<br>*números<br>*espacio(s) en blanco<br>*parentesis,guión normal,guion bajo<br>*paréntesis y asteriscos'
                    }
                }
            },
            campo7: {
                err:'tooltip',
                // The messages for this field are shown as usual
                validators: {
                    html:true,
                    notEmpty: {
                        message: 'El campo es obligatorio'
                    },
                    stringLength: {
                        min: 2,
                        message: 'El campo debe contener al menos 2 caracteres.'
                    },
                    regexp: {
                        regexp: /^[\sa-z0-9 A-Z ñ.-_,()*ÑáéíóúÁÉÍÓÚ-]+$/i,
                        message: 'El formato del campo es inválido. Solo se permiten:<br>*letras<br>*números<br>*espacio(s) en blanco<br>*parentesis,guión normal,guion bajo<br>*paréntesis y asteriscos'
                    }
                }
            },
             
           
        }
    });
    /*Terminan las validaciones para el formulario análisis técnico */

    /*Incian las validaciones para el formulario análisis comercial */
    $('#formulariocomercial').formValidation({
        framework: 'bootstrap',
        icon: {
            valid: 'fa fa-check fa-2x',
            invalid: 'fa fa-times fa-2x',
            validating: 'fa fa-refresh fa-2x'
        },
        fields: {
             campo0: {
                err:'tooltip',
                // The messages for this field are shown as usual
                validators: {
                    notEmpty: {
                        message: 'El campo es obligatorio'
                    },
                    digits: {
                        message: 'El campo solo debe contener dígitos'
                    },
                }
            },
            campo1: {
                err:'tooltip',
                // The messages for this field are shown as usual
                validators: {
                    html:true,
                    notEmpty: {
                        message: 'El campo es obligatorio'
                    },
                    stringLength: {
                        min: 2,
                        message: 'El campo debe contener al menos 2 caracteres.'
                    },
                    regexp: {
                        regexp: /^[\sa-z0-9 A-Z ñ.-_,()*ÑáéíóúÁÉÍÓÚ-]+$/i,
                        message: 'El formato del campo es inválido. Solo se permiten:<br>*letras<br>*números<br>*espacio(s) en blanco<br>*parentesis,guión normal,guion bajo<br>*paréntesis y asteriscos'
                    }
                }
            },
             campo2: {
                err:'tooltip',
                // The messages for this field are shown as usual
                validators: {
                    html:true,
                    notEmpty: {
                        message: 'El campo es obligatorio'
                    },
                    stringLength: {
                        min: 2,
                        message: 'El campo debe contener al menos 2 caracteres.'
                    },
                    regexp: {
                        regexp: /^[\sa-z0-9 A-Z ñ.-_,()*ÑáéíóúÁÉÍÓÚ-]+$/i,
                        message: 'El formato del campo es inválido. Solo se permiten:<br>*letras<br>*números<br>*espacio(s) en blanco<br>*parentesis,guión normal,guion bajo<br>*paréntesis y asteriscos'
                    }
                }
            },
             campo3: {
                err:'tooltip',
                // The messages for this field are shown as usual
                validators: {
                    html:true,
                    notEmpty: {
                        message: 'El campo es obligatorio'
                    },
                    stringLength: {
                        min: 2,
                        message: 'El campo debe contener al menos 2 caracteres.'
                    },
                    regexp: {
                        regexp: /^[\sa-z0-9 A-Z ñ.-_,()*ÑáéíóúÁÉÍÓÚ-]+$/i,
                        message: 'El formato del campo es inválido. Solo se permiten:<br>*letras<br>*números<br>*espacio(s) en blanco<br>*parentesis,guión normal,guion bajo<br>*paréntesis y asteriscos'
                    }
                }
            },
             campo4: {
                err:'tooltip',
                // The messages for this field are shown as usual
                validators: {
                    html:true,
                    notEmpty: {
                        message: 'El campo es obligatorio'
                    },
                    stringLength: {
                        min: 2,
                        message: 'El campo debe contener al menos 2 caracteres.'
                    },
                    regexp: {
                        regexp: /^[\sa-z0-9 A-Z ñ.-_,()*ÑáéíóúÁÉÍÓÚ-]+$/i,
                        message: 'El formato del campo es inválido. Solo se permiten:<br>*letras<br>*números<br>*espacio(s) en blanco<br>*parentesis,guión normal,guion bajo<br>*paréntesis y asteriscos'
                    }
                }
            },
                          
            
           
        }
    });
    /*Terminan las validaciones para el formulario análisis comercial */

    /*Incian las validaciones para el formulario de generales */
    $('#formulariogeneral').formValidation({
        framework: 'bootstrap',
        icon: {
            valid: 'fa fa-check fa-2x',
            invalid: 'fa fa-times fa-2x',
            validating: 'fa fa-refresh fa-2x'
        },
        fields: {
             campo0: {
                err:'tooltip',
                // The messages for this field are shown as usual
                validators: {
                    notEmpty: {
                        message: 'El campo es obligatorio'
                    },
                    digits: {
                        message: 'El campo solo debe contener dígitos'
                    },
                }
            },
            campo1: {
                err:'tooltip',
                // The messages for this field are shown as usual
                validators: {
                    html:true,
                    stringLength: {
                        min: 2,
                        message: 'El campo debe contener al menos 2 caracteres.'
                    },
                    regexp: {
                        regexp: /^[\sa-z0-9 A-Z ñ.-_,()*ÑáéíóúÁÉÍÓÚ-]+$/i,
                        message: 'El formato del campo es inválido. Solo se permiten:<br>*letras<br>*números<br>*espacio(s) en blanco<br>*parentesis,guión normal,guion bajo<br>*paréntesis y asteriscos'
                    }
                }
            },
             campo2: {
                err:'tooltip',
                // The messages for this field are shown as usual
                validators: {
                    html:true,
                    stringLength: {
                        min: 2,
                        message: 'El campo debe contener al menos 2 caracteres.'
                    },
                    regexp: {
                        regexp: /^[\sa-z0-9 A-Z ñ.-_,()*ÑáéíóúÁÉÍÓÚ-]+$/i,
                        message: 'El formato del campo es inválido. Solo se permiten:<br>*letras<br>*números<br>*espacio(s) en blanco<br>*parentesis,guión normal,guion bajo<br>*paréntesis y asteriscos'
                    }
                }
            },
             campo3: {
                err:'tooltip',
                // The messages for this field are shown as usual
                validators: {
                    html:true,
                    stringLength: {
                        min: 2,
                        message: 'El campo debe contener al menos 2 caracteres.'
                    },
                    regexp: {
                        regexp: /^[\sa-z0-9 A-Z ñ.-_,()*ÑáéíóúÁÉÍÓÚ-]+$/i,
                        message: 'El formato del campo es inválido. Solo se permiten:<br>*letras<br>*números<br>*espacio(s) en blanco<br>*parentesis,guión normal,guion bajo<br>*paréntesis y asteriscos'
                    }
                }
            },
             campo4: {
                err:'tooltip',
                // The messages for this field are shown as usual
                validators: {
                    html:true,
                    notEmpty: {
                        message: 'El campo es obligatorio'
                    },
                    stringLength: {
                        min: 2,
                        message: 'El campo debe contener al menos 2 caracteres.'
                    },
                    regexp: {
                        regexp: /^[\sa-z0-9 A-Z ñ.-_,()*ÑáéíóúÁÉÍÓÚ-]+$/i,
                        message: 'El formato del campo es inválido. Solo se permiten:<br>*letras<br>*números<br>*espacio(s) en blanco<br>*parentesis,guión normal,guion bajo<br>*paréntesis y asteriscos'
                    }
                }
            },
             campo5: {
                err:'tooltip',
                // The messages for this field are shown as usual
                validators: {
                    html:true,
                    notEmpty: {
                        message: 'El campo es obligatorio'
                    },
                    stringLength: {
                        min: 2,
                        message: 'El campo debe contener al menos 2 caracteres.'
                    },
                    regexp: {
                        regexp: /^[\sa-z0-9 A-Z ñ.-_,()*ÑáéíóúÁÉÍÓÚ-]+$/i,
                        message: 'El formato del campo es inválido. Solo se permiten:<br>*letras<br>*números<br>*espacio(s) en blanco<br>*parentesis,guión normal,guion bajo<br>*paréntesis y asteriscos'
                    }
                }
            },
             campo6: {
                err:'tooltip',
                // The messages for this field are shown as usual
                validators: {
                    html:true,
                    notEmpty: {
                        message: 'El campo es obligatorio'
                    },
                    stringLength: {
                        min: 2,
                        message: 'El campo debe contener al menos 2 caracteres.'
                    },
                    regexp: {
                        regexp: /^[\sa-z0-9 A-Z ñ.-_,()*ÑáéíóúÁÉÍÓÚ-]+$/i,
                        message: 'El formato del campo es inválido. Solo se permiten:<br>*letras<br>*números<br>*espacio(s) en blanco<br>*parentesis,guión normal,guion bajo<br>*paréntesis y asteriscos'
                    }
                }
            },
             campo7: {
                err:'tooltip',
                // The messages for this field are shown as usual
                validators: {
                    html:true,
                    notEmpty: {
                        message: 'El campo es obligatorio'
                    },
                    stringLength: {
                        min: 2,
                        message: 'El campo debe contener al menos 2 caracteres.'
                    },
                    regexp: {
                        regexp: /^[\sa-z0-9 A-Z ñ.-_,()*ÑáéíóúÁÉÍÓÚ-]+$/i,
                        message: 'El formato del campo es inválido. Solo se permiten:<br>*letras<br>*números<br>*espacio(s) en blanco<br>*parentesis,guión normal,guion bajo<br>*paréntesis y asteriscos'
                    }
                }
            },
             campo8: {
                err:'tooltip',
                // The messages for this field are shown as usual
                validators: {
                    html:true,
                    notEmpty: {
                        message: 'El campo es obligatorio'
                    },
                    stringLength: {
                        min: 2,
                        message: 'El campo debe contener al menos 2 caracteres.'
                    },
                    regexp: {
                        regexp: /^[\sa-z0-9 A-Z ñ.-_,()*ÑáéíóúÁÉÍÓÚ-]+$/i,
                        message: 'El formato del campo es inválido. Solo se permiten:<br>*letras<br>*números<br>*espacio(s) en blanco<br>*parentesis,guión normal,guion bajo<br>*paréntesis y asteriscos'
                    }
                }
            },
             campo9: {
                err:'tooltip',
                // The messages for this field are shown as usual
                validators: {
                    html:true,
                    notEmpty: {
                        message: 'El campo es obligatorio'
                    },
                    stringLength: {
                        min: 2,
                        message: 'El campo debe contener al menos 2 caracteres.'
                    },
                    regexp: {
                        regexp: /^[\sa-z0-9 A-Z ñ.-_,()*ÑáéíóúÁÉÍÓÚ-]+$/i,
                        message: 'El formato del campo es inválido. Solo se permiten:<br>*letras<br>*números<br>*espacio(s) en blanco<br>*parentesis,guión normal,guion bajo<br>*paréntesis y asteriscos'
                    }
                }
            },
                          
            
           
        }
    });
    /*Terminan las validaciones para el formulario de generales */

    /*Incian las validaciones para el formulario de mercados */
    $('#formulariomercado').formValidation({
        framework: 'bootstrap',
        icon: {
            valid: 'fa fa-check fa-2x',
            invalid: 'fa fa-times fa-2x',
            validating: 'fa fa-refresh fa-2x'
        },
        fields: {
             campo0: {
                err:'tooltip',
                // The messages for this field are shown as usual
                validators: {
                    notEmpty: {
                        message: 'El campo es obligatorio'
                    },
                    digits: {
                        message: 'El campo solo debe contener dígitos'
                    },
                }
            },
            campo1: {
                err:'tooltip',
                // The messages for this field are shown as usual
                validators: {
                    html:true,
                    notEmpty: {
                        message: 'El campo es obligatorio'
                    },
                    stringLength: {
                        min: 2,
                        message: 'El campo debe contener al menos 2 caracteres.'
                    },
                    regexp: {
                        regexp: /^[\sa-z0-9 A-Z ñ.-_,()*ÑáéíóúÁÉÍÓÚ-]+$/i,
                        message: 'El formato del campo es inválido. Solo se permiten:<br>*letras<br>*números<br>*espacio(s) en blanco<br>*parentesis,guión normal,guion bajo<br>*paréntesis y asteriscos'
                    }
                }
            },
             campo2: {
                err:'tooltip',
                // The messages for this field are shown as usual
                validators: {
                     html:true,
                    notEmpty: {
                        message: 'El campo es obligatorio'
                    },
                    stringLength: {
                        min: 2,
                        message: 'El campo debe contener al menos 2 caracteres.'
                    },
                    regexp: {
                        regexp: /^[\sa-z0-9 A-Z ñ.-_,()*ÑáéíóúÁÉÍÓÚ-]+$/i,
                        message: 'El formato del campo es inválido. Solo se permiten:<br>*letras<br>*números<br>*espacio(s) en blanco<br>*parentesis,guión normal,guion bajo<br>*paréntesis y asteriscos'
                    }
                }
            },
             campo3: {
                err:'tooltip',
                // The messages for this field are shown as usual
                validators: {
                     html:true,
                    notEmpty: {
                        message: 'El campo es obligatorio'
                    },
                    stringLength: {
                        min: 1,
                        message: 'El campo debe contener al menos 2 caracteres.'
                    },
                    regexp: {
                        regexp: /^[\sa-z0-9 A-Z ñ.-_,()*ÑáéíóúÁÉÍÓÚ-]+$/i,
                        message: 'El formato del campo es inválido. Solo se permiten:<br>*letras<br>*números<br>*espacio(s) en blanco<br>*parentesis,guión normal,guion bajo<br>*paréntesis y asteriscos'
                    }
                }
            },
             campo4: {
                err:'tooltip',
                // The messages for this field are shown as usual
                validators: {
                     html:true,
                    notEmpty: {
                        message: 'El campo es obligatorio'
                    },
                    stringLength: {
                        min: 2,
                        message: 'El campo debe contener al menos 2 caracteres.'
                    },
                    regexp: {
                        regexp: /^[\sa-z0-9 A-Z ñ.-_,()*ÑáéíóúÁÉÍÓÚ-]+$/i,
                        message: 'El formato del campo es inválido. Solo se permiten:<br>*letras<br>*números<br>*espacio(s) en blanco<br>*parentesis,guión normal,guion bajo<br>*paréntesis y asteriscos'
                    }
                }
            },
             campo5: {
                err:'tooltip',
                // The messages for this field are shown as usual
                validators: {
                     html:true,
                    notEmpty: {
                        message: 'El campo es obligatorio'
                    },
                    stringLength: {
                        min: 2,
                        message: 'El campo debe contener al menos 2 caracteres.'
                    },
                    regexp: {
                        regexp: /^[\sa-z0-9 A-Z ñ.-_,()*ÑáéíóúÁÉÍÓÚ-]+$/i,
                        message: 'El formato del campo es inválido. Solo se permiten:<br>*letras<br>*números<br>*espacio(s) en blanco<br>*parentesis,guión normal,guion bajo<br>*paréntesis y asteriscos'
                    }
                }
            },
             campo6: {
                err:'tooltip',
                // The messages for this field are shown as usual
                validators: {
                     html:true,
                    notEmpty: {
                        message: 'El campo es obligatorio'
                    },
                    stringLength: {
                        min: 2,
                        message: 'El campo debe contener al menos 2 caracteres.'
                    },
                    regexp: {
                        regexp: /^[\sa-z0-9 A-Z ñ.-_,()*ÑáéíóúÁÉÍÓÚ-]+$/i,
                        message: 'El formato del campo es inválido. Solo se permiten:<br>*letras<br>*números<br>*espacio(s) en blanco<br>*parentesis,guión normal,guion bajo<br>*paréntesis y asteriscos'
                    }
                }
            },
             campo7: {
                err:'tooltip',
                // The messages for this field are shown as usual
                validators: {
                     html:true,
                    notEmpty: {
                        message: 'El campo es obligatorio'
                    },
                    stringLength: {
                        min: 2,
                        message: 'El campo debe contener al menos 2 caracteres.'
                    },
                    regexp: {
                        regexp: /^[\sa-z0-9 A-Z ñ.-_,()*ÑáéíóúÁÉÍÓÚ-]+$/i,
                        message: 'El formato del campo es inválido. Solo se permiten:<br>*letras<br>*números<br>*espacio(s) en blanco<br>*parentesis,guión normal,guion bajo<br>*paréntesis y asteriscos'
                    }
                }
            },
             campo8: {
                err:'tooltip',
                // The messages for this field are shown as usual
                validators: {
                     html:true,
                    notEmpty: {
                        message: 'El campo es obligatorio'
                    },
                    stringLength: {
                        min: 2,
                        message: 'El campo debe contener al menos 2 caracteres.'
                    },
                    regexp: {
                        regexp: /^[\sa-z0-9 A-Z ñ.-_,()*ÑáéíóúÁÉÍÓÚ-]+$/i,
                        message: 'El formato del campo es inválido. Solo se permiten:<br>*letras<br>*números<br>*espacio(s) en blanco<br>*parentesis,guión normal,guion bajo<br>*paréntesis y asteriscos'
                    }
                }
            },
             campo9: {
                err:'tooltip',
                // The messages for this field are shown as usual
                validators: {
                     html:true,
                    notEmpty: {
                        message: 'El campo es obligatorio'
                    },
                    stringLength: {
                        min: 2,
                        message: 'El campo debe contener al menos 2 caracteres.'
                    },
                    regexp: {
                        regexp: /^[\sa-z0-9 A-Z ñ.-_,()*ÑáéíóúÁÉÍÓÚ-]+$/i,
                        message: 'El formato del campo es inválido. Solo se permiten:<br>*letras<br>*números<br>*espacio(s) en blanco<br>*parentesis,guión normal,guion bajo<br>*paréntesis y asteriscos'
                    }
                }
            },
            campo10: {
                err:'tooltip',
                // The messages for this field are shown as usual
                validators: {
                     html:true,
                    notEmpty: {
                        message: 'El campo es obligatorio'
                    },
                    stringLength: {
                        min: 2,
                        message: 'El campo debe contener al menos 2 caracteres.'
                    },
                    regexp: {
                        regexp: /^[\sa-z0-9 A-Z ñ.-_,()*ÑáéíóúÁÉÍÓÚ-]+$/i,
                        message: 'El formato del campo es inválido. Solo se permiten:<br>*letras<br>*números<br>*espacio(s) en blanco<br>*parentesis,guión normal,guion bajo<br>*paréntesis y asteriscos'
                    }
                }
            },
                          
            
           
        }
    });
    /*Terminan las validaciones para el formulario de mercados */

    /*Incian las validaciones para el formulario vinculaciones */
    $('#formulariovinculacion').formValidation({
        framework: 'bootstrap',
        icon: {
            valid: 'fa fa-check fa-2x',
            invalid: 'fa fa-times fa-2x',
            validating: 'fa fa-refresh fa-2x'
        },
        fields: {
             campo0: {
                err:'tooltip',
                // The messages for this field are shown as usual
                validators: {
                    notEmpty: {
                        message: 'El campo es obligatorio'
                    },
                    digits: {
                        message: 'El campo solo debe contener dígitos'
                    },
                }
            },
            campo1: {
                err:'tooltip',
                // The messages for this field are shown as usual
                validators: {
                    regexp: {
                        regexp: /^[\sa-z0-9 A-Z ñ.-_,()*ÑáéíóúÁÉÍÓÚ-]+$/i,
                        message: 'El formato del campo es inválido. Solo se permiten:<br>*letras<br>*números<br>*espacio(s) en blanco<br>*parentesis,guión normal,guion bajo<br>*paréntesis y asteriscos'
                    }
                }
            },
             campo2: {
                err:'tooltip',
                // The messages for this field are shown as usual
                validators: {
                    regexp: {
                        regexp: /^[\sa-z0-9 A-Z ñ.-_,()*ÑáéíóúÁÉÍÓÚ-]+$/i,
                        message: 'El formato del campo es inválido. Solo se permiten:<br>*letras<br>*números<br>*espacio(s) en blanco<br>*parentesis,guión normal,guion bajo<br>*paréntesis y asteriscos'
                    }
                }
            },
             campo3: {
                err:'tooltip',
                // The messages for this field are shown as usual
                validators: {
                    regexp: {
                        regexp: /^[\sa-z0-9 A-Z ñ.-_,()*ÑáéíóúÁÉÍÓÚ-]+$/i,
                        message: 'El formato del campo es inválido. Solo se permiten:<br>*letras<br>*números<br>*espacio(s) en blanco<br>*parentesis,guión normal,guion bajo<br>*paréntesis y asteriscos'
                    }
                }
            },
             campo4: {
                err:'tooltip',
                // The messages for this field are shown as usual
                validators: {
                    regexp: {
                        regexp: /^[\sa-z0-9 A-Z ñ.-_,()*ÑáéíóúÁÉÍÓÚ-]+$/i,
                        message: 'El formato del campo es inválido. Solo se permiten:<br>*letras<br>*números<br>*espacio(s) en blanco<br>*parentesis,guión normal,guion bajo<br>*paréntesis y asteriscos'
                    }
                }
            },
                          
            
           
        }
    });
    /*Terminan las validaciones para el formulario vinculaciones*/

    /*Incian las validaciones para el formulario de instituciones */
    $('#formularioinstitucion').formValidation({
        framework: 'bootstrap',
        icon: {
            valid: 'fa fa-check fa-2x',
            invalid: 'fa fa-times fa-2x',
            validating: 'fa fa-refresh fa-2x'
        },
        fields: {
             campo0: {
                err:'tooltip',
                // The messages for this field are shown as usual
                validators: {
                    notEmpty: {
                        message: 'El campo es obligatorio'
                    },
                    digits: {
                        message: 'El campo solo debe contener dígitos'
                    },
                }
            },
            campo1: {
                err:'tooltip',
                // The messages for this field are shown as usual
                validators: {
                    html:true,
                    notEmpty: {
                        message: 'El campo es obligatorio'
                    },
                    stringLength: {
                        min: 2,
                        message: 'El campo debe contener al menos 2 caracteres.'
                    },
                    regexp: {
                        regexp: /^[\sa-z0-9 A-Z ñ.-_,()*ÑáéíóúÁÉÍÓÚ-]+$/i,
                        message: 'El formato del campo es inválido. Solo se permiten:<br>*letras<br>*números<br>*espacio(s) en blanco<br>*parentesis,guión normal,guion bajo<br>*paréntesis y asteriscos'
                    }
                }
            },
             campo2: {
                err:'tooltip',
                // The messages for this field are shown as usual
                validators: {
                    regexp: {
                        regexp: /^[\sa-z0-9 A-Z ñ.-_,()*ÑáéíóúÁÉÍÓÚ-]+$/i,
                        message: 'El formato del campo es inválido. Solo se permiten:<br>*letras<br>*números<br>*espacio(s) en blanco<br>*parentesis,guión normal,guion bajo<br>*paréntesis y asteriscos'
                    }
                }
            },
             campo3: {
                err:'tooltip',
                // The messages for this field are shown as usual
                validators: {
                    regexp: {
                        regexp: /^[\sa-z0-9 A-Z ñ.-_,()*ÑáéíóúÁÉÍÓÚ-]+$/i,
                        message: 'El formato del campo es inválido. Solo se permiten:<br>*letras<br>*números<br>*espacio(s) en blanco<br>*parentesis,guión normal,guion bajo<br>*paréntesis y asteriscos'
                    }
                }
            },
             campo4: {
                err:'tooltip',
                // The messages for this field are shown as usual
                validators: {
                    regexp: {
                        regexp: /^[\sa-z0-9 A-Z ñ.-_,()*ÑáéíóúÁÉÍÓÚ-]+$/i,
                        message: 'El formato del campo es inválido. Solo se permiten:<br>*letras<br>*números<br>*espacio(s) en blanco<br>*parentesis,guión normal,guion bajo<br>*paréntesis y asteriscos'
                    }
                }
            },
             campo5: {
                err:'tooltip',
                // The messages for this field are shown as usual
                validators: {
                    regexp: {
                        regexp: /^[\sa-z0-9 A-Z ñ.-_,()*ÑáéíóúÁÉÍÓÚ-]+$/i,
                        message: 'El formato del campo es inválido. Solo se permiten:<br>*letras<br>*números<br>*espacio(s) en blanco<br>*parentesis,guión normal,guion bajo<br>*paréntesis y asteriscos'
                    }
                }
            },
             campo6: {
                err:'tooltip',
                // The messages for this field are shown as usual
                validators: {
                    regexp: {
                        regexp: /^[\sa-z0-9 A-Z ñ.-_,()*ÑáéíóúÁÉÍÓÚ-]+$/i,
                        message: 'El formato del campo es inválido. Solo se permiten:<br>*letras<br>*números<br>*espacio(s) en blanco<br>*parentesis,guión normal,guion bajo<br>*paréntesis y asteriscos'
                    }
                }
            },
             campo7: {
                err:'tooltip',
                // The messages for this field are shown as usual
                validators: {
                    regexp: {
                        regexp: /^[\sa-z0-9 A-Z ñ.-_,()*ÑáéíóúÁÉÍÓÚ-]+$/i,
                        message: 'El formato del campo es inválido. Solo se permiten:<br>*letras<br>*números<br>*espacio(s) en blanco<br>*parentesis,guión normal,guion bajo<br>*paréntesis y asteriscos'
                    }
                }
            },
            campo8: {
                err:'tooltip',
                // The messages for this field are shown as usual
                validators: {
                    html:true,
                    notEmpty: {
                        message: 'El campo es obligatorio'
                    },
                    stringLength: {
                        min: 2,
                        message: 'El campo debe contener al menos 2 caracteres.'
                    },
                    regexp: {
                        regexp: /^[\sa-z0-9 A-Z ñ.-_,()*ÑáéíóúÁÉÍÓÚ-]+$/i,
                        message: 'El formato del campo es inválido. Solo se permiten:<br>*letras<br>*números<br>*espacio(s) en blanco<br>*parentesis,guión normal,guion bajo<br>*paréntesis y asteriscos'
                    }
                }
            },
            campo9: {
                err:'tooltip',
                // The messages for this field are shown as usual
                validators: {
                    html:true,
                    notEmpty: {
                        message: 'El campo es obligatorio'
                    },
                    stringLength: {
                        min: 2,
                        message: 'El campo debe contener al menos 2 caracteres.'
                    },
                    regexp: {
                        regexp: /^[\sa-z0-9 A-Z ñ.-_,()*ÑáéíóúÁÉÍÓÚ-]+$/i,
                        message: 'El formato del campo es inválido. Solo se permiten:<br>*letras<br>*números<br>*espacio(s) en blanco<br>*parentesis,guión normal,guion bajo<br>*paréntesis y asteriscos'
                    }
                }
            },
            campo10: {
                err:'tooltip',
                // The messages for this field are shown as usual
                validators: {
                    html:true,
                    notEmpty: {
                        message: 'El campo es obligatorio'
                    },
                    stringLength: {
                        min: 2,
                        message: 'El campo debe contener al menos 2 caracteres.'
                    },
                    regexp: {
                        regexp: /^[\sa-z0-9 A-Z ñ.-_,()*ÑáéíóúÁÉÍÓÚ-]+$/i,
                        message: 'El formato del campo es inválido. Solo se permiten:<br>*letras<br>*números<br>*espacio(s) en blanco<br>*parentesis,guión normal,guion bajo<br>*paréntesis y asteriscos'
                    }
                }
            },
            campo11: {
                err:'tooltip',
                // The messages for this field are shown as usual
                validators: {
                    html:true,
                    notEmpty: {
                        message: 'El campo es obligatorio'
                    },
                    stringLength: {
                        min: 2,
                        message: 'El campo debe contener al menos 2 caracteres.'
                    },
                    regexp: {
                        regexp: /^[\sa-z0-9 A-Z ñ.-_,()*ÑáéíóúÁÉÍÓÚ-]+$/i,
                        message: 'El formato del campo es inválido. Solo se permiten:<br>*letras<br>*números<br>*espacio(s) en blanco<br>*parentesis,guión normal,guion bajo<br>*paréntesis y asteriscos'
                    }
                }
            },
            campo12: {
                err:'tooltip',
                // The messages for this field are shown as usual
                validators: {
                    html:true,
                    notEmpty: {
                        message: 'El campo es obligatorio'
                    },
                    stringLength: {
                        min: 2,
                        message: 'El campo debe contener al menos 2 caracteres.'
                    },
                    regexp: {
                        regexp: /^[\sa-z0-9 A-Z ñ.-_,()*ÑáéíóúÁÉÍÓÚ-]+$/i,
                        message: 'El formato del campo es inválido. Solo se permiten:<br>*letras<br>*números<br>*espacio(s) en blanco<br>*parentesis,guión normal,guion bajo<br>*paréntesis y asteriscos'
                    }
                }
            },
            campo13: {
                err:'tooltip',
                // The messages for this field are shown as usual
                validators: {
                    html:true,
                    notEmpty: {
                        message: 'El campo es obligatorio'
                    },
                    stringLength: {
                        min: 2,
                        message: 'El campo debe contener al menos 2 caracteres.'
                    },
                    regexp: {
                        regexp: /^[\sa-z0-9 A-Z ñ.-_,()*ÑáéíóúÁÉÍÓÚ-]+$/i,
                        message: 'El formato del campo es inválido. Solo se permiten:<br>*letras<br>*números<br>*espacio(s) en blanco<br>*parentesis,guión normal,guion bajo<br>*paréntesis y asteriscos'
                    }
                }
            },
            campo14: {
                err:'tooltip',
                // The messages for this field are shown as usual
                validators: {
                    html:true,
                    notEmpty: {
                        message: 'El campo es obligatorio'
                    },
                    stringLength: {
                        min: 2,
                        message: 'El campo debe contener al menos 2 caracteres.'
                    },
                    regexp: {
                        regexp: /^[\sa-z0-9 A-Z ñ.-_,()*ÑáéíóúÁÉÍÓÚ-]+$/i,
                        message: 'El formato del campo es inválido. Solo se permiten:<br>*letras<br>*números<br>*espacio(s) en blanco<br>*parentesis,guión normal,guion bajo<br>*paréntesis y asteriscos'
                    }
                }
            },
            campo15: {
                err:'tooltip',
                // The messages for this field are shown as usual
                validators: {
                    html:true,
                    notEmpty: {
                        message: 'El campo es obligatorio'
                    },
                    stringLength: {
                        min: 2,
                        message: 'El campo debe contener al menos 2 caracteres.'
                    },
                    regexp: {
                        regexp: /^[\sa-z0-9 A-Z ñ.-_,()*ÑáéíóúÁÉÍÓÚ-]+$/i,
                        message: 'El formato del campo es inválido. Solo se permiten:<br>*letras<br>*números<br>*espacio(s) en blanco<br>*parentesis,guión normal,guion bajo<br>*paréntesis y asteriscos'
                    }
                }
            },
            campo16: {
                err:'tooltip',
                // The messages for this field are shown as usual
                validators: {
                    html:true,
                    notEmpty: {
                        message: 'El campo es obligatorio'
                    },
                    stringLength: {
                        min: 2,
                        message: 'El campo debe contener al menos 2 caracteres.'
                    },
                    regexp: {
                        regexp: /^[\sa-z0-9 A-Z ñ.-_,()*ÑáéíóúÁÉÍÓÚ-]+$/i,
                        message: 'El formato del campo es inválido. Solo se permiten:<br>*letras<br>*números<br>*espacio(s) en blanco<br>*parentesis,guión normal,guion bajo<br>*paréntesis y asteriscos'
                    }
                }
            },
                          
            
           
        }
    });
    /*Terminan las validaciones para el formulario de instituciones*/

    /*Incian las validaciones para el formulario de trabajo detallado */
    $('#formulariodetallado').formValidation({
        framework: 'bootstrap',
        icon: {
            valid: 'fa fa-check fa-2x',
            invalid: 'fa fa-times fa-2x',
            validating: 'fa fa-refresh fa-2x'
        },
        fields: {
             campo0: {
                err:'tooltip',
                // The messages for this field are shown as usual
                validators: {
                    notEmpty: {
                        message: 'El campo es obligatorio'
                    },
                    digits: {
                        message: 'El campo solo debe contener dígitos'
                    },
                }
            },
            campo1: {
                err:'tooltip',
                // The messages for this field are shown as usual
                validators: {
                     html:true,
                    notEmpty: {
                        message: 'El campo es obligatorio'
                    },
                    stringLength: {
                        min: 2,
                        message: 'El campo debe contener al menos 2 caracteres.'
                    },
                    regexp: {
                        regexp: /^[\sa-z0-9 A-Z ñ.-_,()*ÑáéíóúÁÉÍÓÚ-]+$/i,
                        message: 'El formato del campo es inválido. Solo se permiten:<br>*letras<br>*números<br>*espacio(s) en blanco<br>*parentesis,guión normal,guion bajo<br>*paréntesis y asteriscos'
                    }
                }
            },
             campo2: {
                err:'tooltip',
                // The messages for this field are shown as usual
                validators: {
                     html:true,
                    notEmpty: {
                        message: 'El campo es obligatorio'
                    },
                    stringLength: {
                        min: 2,
                        message: 'El campo debe contener al menos 2 caracteres.'
                    },
                    regexp: {
                        regexp: /^[\sa-z0-9 A-Z ñ.-_,()*ÑáéíóúÁÉÍÓÚ-]+$/i,
                        message: 'El formato del campo es inválido. Solo se permiten:<br>*letras<br>*números<br>*espacio(s) en blanco<br>*parentesis,guión normal,guion bajo<br>*paréntesis y asteriscos'
                    }
                }
            },
             campo3: {
                err:'tooltip',
                // The messages for this field are shown as usual
                validators: {
                     html:true,
                    notEmpty: {
                        message: 'El campo es obligatorio'
                    },
                    stringLength: {
                        min: 2,
                        message: 'El campo debe contener al menos 2 caracteres.'
                    },
                    regexp: {
                        regexp: /^[\sa-z0-9 A-Z ñ.-_,()*ÑáéíóúÁÉÍÓÚ-]+$/i,
                        message: 'El formato del campo es inválido. Solo se permiten:<br>*letras<br>*números<br>*espacio(s) en blanco<br>*parentesis,guión normal,guion bajo<br>*paréntesis y asteriscos'
                    }
                }
            },
             campo4: {
                err:'tooltip',
                // The messages for this field are shown as usual
                validators: {
                    regexp: {
                        regexp: /^[\sa-z0-9 A-Z ñ.-_,()*ÑáéíóúÁÉÍÓÚ-]+$/i,
                        message: 'El formato del campo es inválido. Solo se permiten:<br>*letras<br>*números<br>*espacio(s) en blanco<br>*parentesis,guión normal,guion bajo<br>*paréntesis y asteriscos'
                    }
                }
            },
            campo5: {
                err:'tooltip',
                // The messages for this field are shown as usual
                validators: {
                     html:true,
                    notEmpty: {
                        message: 'El campo es obligatorio'
                    },
                    stringLength: {
                        min: 2,
                        message: 'El campo debe contener al menos 2 caracteres.'
                    },
                    regexp: {
                        regexp: /^[\sa-z0-9 A-Z ñ.-_,()*ÑáéíóúÁÉÍÓÚ-]+$/i,
                        message: 'El formato del campo es inválido. Solo se permiten:<br>*letras<br>*números<br>*espacio(s) en blanco<br>*parentesis,guión normal,guion bajo<br>*paréntesis y asteriscos'
                    }
                }
            },
                          
            
           
        }
    });
    /*Terminan las validaciones para el formulario de trabajo detallado*/

    /*Incian las validaciones para el formulario de asesoria */
    $('#formularioasesoria').formValidation({
        framework: 'bootstrap',
        icon: {
            valid: 'fa fa-check fa-2x',
            invalid: 'fa fa-times fa-2x',
            validating: 'fa fa-refresh fa-2x'
        },
        fields: {
             campo0: {
                err:'tooltip',
                // The messages for this field are shown as usual
                validators: {
                    notEmpty: {
                        message: 'El campo es obligatorio'
                    },
                    digits: {
                        message: 'El campo solo debe contener dígitos'
                    },
                }
            },
            campo1: {
                err:'tooltip',
                // The messages for this field are shown as usual
                validators: {
                    regexp: {
                        regexp: /^[\sa-z0-9 A-Z ñ.-_,()*ÑáéíóúÁÉÍÓÚ-]+$/i,
                        message: 'El formato del campo es inválido. Solo se permiten:<br>*letras<br>*números<br>*espacio(s) en blanco<br>*parentesis,guión normal,guion bajo<br>*paréntesis y asteriscos'
                    }
                }
            },
             campo2: {
                err:'tooltip',
                // The messages for this field are shown as usual
                validators: {
                    regexp: {
                        regexp: /^[\sa-z0-9 A-Z ñ.-_,()*ÑáéíóúÁÉÍÓÚ-]+$/i,
                        message: 'El formato del campo es inválido. Solo se permiten:<br>*letras<br>*números<br>*espacio(s) en blanco<br>*parentesis,guión normal,guion bajo<br>*paréntesis y asteriscos'
                    }
                }
            },
             campo3: {
                err:'tooltip',
                // The messages for this field are shown as usual
                validators: {
                     regexp: {
                        regexp: /^[\sa-z0-9 A-Z ñ.-_,()*ÑáéíóúÁÉÍÓÚ-]+$/i,
                        message: 'El formato del campo es inválido. Solo se permiten:<br>*letras<br>*números<br>*espacio(s) en blanco<br>*parentesis,guión normal,guion bajo<br>*paréntesis y asteriscos'
                    }
                }
            },
             campo4: {
                err:'tooltip',
                // The messages for this field are shown as usual
                validators: {
                    regexp: {
                        regexp: /^[\sa-z0-9 A-Z ñ.-_,()*ÑáéíóúÁÉÍÓÚ-]+$/i,
                        message: 'El formato del campo es inválido. Solo se permiten:<br>*letras<br>*números<br>*espacio(s) en blanco<br>*parentesis,guión normal,guion bajo<br>*paréntesis y asteriscos'
                    }
                }
            },
            campo5: {
                err:'tooltip',
                // The messages for this field are shown as usual
                validators: {
                    html:true,
                    notEmpty: {
                        message: 'El campo es obligatorio'
                    },
                    stringLength: {
                        min: 2,
                        message: 'El campo debe contener al menos 2 caracteres.'
                    },
                    regexp: {
                        regexp: /^[\sa-z0-9 A-Z ñ.-_,()*ÑáéíóúÁÉÍÓÚ-]+$/i,
                        message: 'El formato del campo es inválido. Solo se permiten:<br>*letras<br>*números<br>*espacio(s) en blanco<br>*parentesis,guión normal,guion bajo<br>*paréntesis y asteriscos'
                    }
                }
            },
                          
            
           
        }
    });
    /*Terminan las validaciones para el formulario de asesoria*/
    
    /*Incian las validaciones para el formulario de contacto */
    $('#formulariocontacto').formValidation({
        framework: 'bootstrap',
        icon: {
            valid: 'fa fa-check fa-2x',
            invalid: 'fa fa-times fa-2x',
            validating: 'fa fa-refresh fa-2x'
        },
        fields: {
             name: {
                err:'tooltip',
                // The messages for this field are shown as usual
                validators: {
                    notEmpty: {
                        message: 'El campo es obligatorio'
                    },
                    regexp: {
                        regexp:   /^[\sa-zA-ZñÑáéíóúÁÉÍÓÚ-]+$/i,
                        message: 'El formato del campo es inválido.No se permiten números'
                    },
                    stringLength: {
                        min: 3,
                        message: 'El campo debe contener al menos 3 caracteres.'
                    },
                }
            },
            correo: {
                err:'tooltip',
                // The messages for this field are shown as usual
                validators: {
                    notEmpty:{
                        message: 'El campo es obligatorio'
                    },
                    emailAddress:{
                        message: 'Ingrese un correo electrónico válido. ej: example@hotmail.com'
                    },
                    
                }
            },
             subject: {
                err:'tooltip',
                // The messages for this field are shown as usual
                validators: {
                    notEmpty: {
                        message: 'El campo es obligatorio'
                    },
                    regexp: {
                        regexp:   /^[\sa-zA-Z0-9ñÑáéíóúÁÉÍÓÚ-]+$/i,
                        message: 'El formato del campo es inválido. Solo números,letras y guión medio.'
                    },
                }
            },
             msg: {
                err:'tooltip',
                // The messages for this field are shown as usual
                validators: {
                    notEmpty: {
                        message: 'El campo es obligatorio'
                    },
                    stringLength: {
                        min: 10,
                        message: 'El campo debe contener al menos 2 caracteres.'
                    },
                }
            },
            
                          
            
           
        }
    });
    /*Terminan las validaciones para el formulario de contacto*/


});/*Termina el document ready*/

