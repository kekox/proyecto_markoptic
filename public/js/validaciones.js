

$(document).ready(function() {
    $('#formulariodescripciones').formValidation({
        framework: 'bootstrap',
        icon: {
            valid: 'fa fa-check fa-2x',
            invalid: 'fa fa-times fa-2x',
            validating: 'fa fa-refresh fa-2x'
        },
        fields: {
            campo1: {
                err:'tooltip',
                // The messages for this field are shown as usual
                validators: {
                    notEmpty: {
                        message: 'The field is required'
                    },
                    stringLength: {
                        min: 2,
                        message: 'The field name must be more than 2 characters'
                    },
                }
            },
             campo2: {
                err:'tooltip',
                // The messages for this field are shown as usual
                validators: {
                    notEmpty: {
                        message: 'The field is required'
                    },
                }
            },
             campo3: {
                err:'tooltip',
                // The messages for this field are shown as usual
                validators: {
                    notEmpty: {
                        message: 'The field is required'
                    },
                }
            },
             campo4: {
                err:'tooltip',
                // The messages for this field are shown as usual
                validators: {
                    notEmpty: {
                        message: 'The field is required'
                    },
                }
            },
             campo5: {
                err:'tooltip',
                // The messages for this field are shown as usual
                validators: {
                    notEmpty: {
                        message: 'The field is required'
                    },
                }
            },
             campo6: {
                err:'tooltip',
                // The messages for this field are shown as usual
                validators: {
                    notEmpty: {
                        message: 'The field is required'
                    },
                }
            },
             campo7: {
                err:'tooltip',
                // The messages for this field are shown as usual
                validators: {
                    notEmpty: {
                        message: 'The field is required'
                    },
                }
            },
           
        }
    });//Llave que cierra el #formularioproyecto 
    

    


});//Termina el document ready

