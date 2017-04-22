$('document').ready(function()
{
	// full name validation
	var fullnameregex = /^[a-zA-Z ]{2,30}$/;
	
	$.validator.addMethod("validfullname", function ( value, element )
	{
		return this.optional( element ) || fullnameregex.test( value );
	});
	
	// name validation
	var nameregex = /^[a-zA-Z0-9]+$/;
		 
	$.validator.addMethod("validname", function( value, element ) 
	{
	    return this.optional( element ) || nameregex.test( value );
	}); 
		 
	// valid email pattern
	var emailregex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{3})+$/;
		 
	$.validator.addMethod("validemail", function( value, element ) 
	{
	    return this.optional( element ) || emailregex.test( value );
	});
	
	// valid password 
	var passwordregex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{8,}$/;
	
	$.validator.addMethod("validpassword", function( value, element )
	{
		return this.optional( element ) || passwordregex.test( value );
	});
	
		 
	$("#register-form").validate({				
		rules:
		{
			fullname: {required: true, validfullname: true},
			name: {required: true, validname: true},
			email: {required: true, validemail: true},
			password: {required: true, validpassword: true},
			cpassword: {required: true, equalTo: '#password'},
		},
		messages:
		{
			fullname: {required: "Please enter Full Name", validfullname: "Name should be full name and last name"},
			name: {required: "Please Enter User Name", validname: "Name must contain only alphabets and numbers", minlength: "Your Name is Too Short"},
			email: {required: "Please Enter Email Address", validemail: "Enter Valid Email Address (abc@xyz.com)"},
			password:{required: "Please Enter Password", validpassword: "Password must contain atleast one lowercase, uppercase, digit and have 8 characters"},
			cpassword:{required: "Please Retype your Password", equalTo: "Password Did not Match !"}
		},
		errorPlacement : function(error, element) 
		{
		  $(element).closest('.form-group').find('.help-block').html(error.html());
		},
		highlight : function(element) 
		{
		  $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
		},
		unhighlight: function(element, errorClass, validClass) 
		{
			$(element).closest('.form-group').removeClass('has-error').addClass('has-success');
			$(element).closest('.form-group').find('.help-block').html('');
		}, 
	});	
});