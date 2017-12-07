$('#alta').bootstrapValidator({
//        live: 'disabled',
        message: 'Este valor no es válido',
        feedbackIcons: {
            valid: 'fa fa-check',
            invalid: 'fa fa-remove',
            validating: 'fa fa-refresh'
        },
        fields: {
            nombre: {
                validators: {
                    notEmpty: {
                        message: 'Es necesario el nombre de usuario.'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z ñÑ]+$/,
                        message: 'Sólo esta permitido el uso de Letras, sin acentos!'
                    }
                }
            },
            a_paterno: {
                validators: {
                    notEmpty: {
                        message: 'Es necesario el Apellido Paterno.'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z ñÑ]+$/,
                        message: 'Sólo esta permitido el uso de Letras, sin acentos!'
                    }
                }
            },
            a_materno: {
                validators: {
                    notEmpty: {
                        message: 'Es necesario el Apellido Materno.'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z ñÑ]+$/,
                        message: 'Sólo esta permitido el uso de Letras, sin acentos!'
                    }
                }
            },
            control: {
                validators: {
                    notEmpty: {
                        message: 'Es necesario su número de Nómina o Control!'
                    },
                 stringLength: {
                        min: 5,
                        max: 9,
                        message: 'Mínimo de caracteres permitidos es 5.'
                    },
                    regexp: {
                        regexp: /^[0-9\s\-()+\.]+$/,
                        message: 'Sólo esta permitido el uso de Números!'
                    }
                }
            },
            seccion: {
                validators: {
                    notEmpty: {
                        message: 'Elija la Sección a la que pertenece.'
                    }
                }
            },
            soy: {
                validators: {
                    notEmpty: {
                        message: 'Elija su Perfil dentro del Colegio Motolinía.'
                    }
                }
            },
            area: {
                validators: {
                    notEmpty: {
                        message: 'Elija su Área dentro del Colegio Motolinía.'
                    }
                }
            },
            ano: {
                validators: {
                    notEmpty: {
                        message: 'Elija el Grado dentro del Colegio Motolinía.'
                    }
                }
            },
            especialidad: {
                validators: {
                    notEmpty: {
                        message: 'Elija la Especialidad dentro del Colegio Motolinía.'
                    }
                }
            },
            especialidad_do: {
                validators: {
                    notEmpty: {
                        message: 'Elija la Especialidad dentro del Colegio Motolinía.'
                    }
                }
            },
            c_personal: {
                validators: {
                    notEmpty: {
                        message: 'Es necesario su correo personal.'
                    },
                    emailAddress: {
                        message: 'Su Correo no pertenece a un dominio valido.'
                    },
                    regexp: {
                        regexp: /^[A-Z0-9._%+-]+@(?:[A-Z]{4}|gmail|yahoo|outlook|hotmail)+\.(com|mx|es)+$/i,
                        message: 'Sólo esta permitido el uso de Correos: Gmail, Yahoo, Outlook, Hotmail!'
                    }
                }
            },
            director: {
                validators: {
                    notEmpty: {
                        message: 'Es necesario el nombre completo del Director.'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z ñÑ]+$/,
                        message: 'Sólo esta permitido el uso de Letras, sin acentos!'
                    }
                }
            }
    });