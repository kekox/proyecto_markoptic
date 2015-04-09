<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sistema Test</title> 
    {{ HTML::style('css/bootstrap.css') }}
    {{ HTML::style('css/formValidation.css')}}
    

    
    

</head>
<body>

<form id="profileForm" class="form-horizontal">
    <div class="form-group">
        <label class="col-xs-3 control-label">Email address</label>
        <div class="col-xs-5">
            <input type="text" class="form-control emailAddress" name="primary_email" />
        </div>
    </div>

    <div class="form-group">
        <div class="col-xs-5 col-xs-offset-3">
            <input type="text" class="form-control emailAddress" name="secondary_email" />
        </div>
    </div>

    <div class="form-group">
        <div class="col-xs-9 col-xs-offset-3">
            <button type="submit" class="btn btn-default">Validate</button>
        </div>
    </div>
</form>

{{ HTML::script('js/bootstrap.js') }}
{{ HTML::script('js/jquery.js') }}
{{ HTML::script('js/formValidation.js')}}
{{ HTML::script('js/framework/bootstrap.min.js')}}

<script>
$(document).ready(function() {
    $('#profileForm').formValidation({
        framework: 'bootstrap',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            email: {
                // All the email address field have emailAddress class
                selector: '.emailAddress',
                validators: {
                    callback: {
                        message: 'You must enter at least one email address',
                        callback: function(value, validator, $field) {
                            var isEmpty = true,
                                // Get the list of fields
                                $fields = validator.getFieldElements('email');
                            for (var i = 0; i < $fields.length; i++) {
                                if ($fields.eq(i).val() !== '') {
                                    isEmpty = false;
                                    break;
                                }
                            }

                            if (!isEmpty) {
                                // Update the status of callback validator for all fields
                                validator.updateStatus('email', validator.STATUS_VALID, 'callback');
                                return true;
                            }

                            return false;
                        }
                    },
                    emailAddress: {
                        message: 'The value is not a valid email address'
                    }
                }
            }
        }
    });
});
</script>
    
</body>
</html>

