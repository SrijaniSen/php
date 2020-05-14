 $(document).ready(function(){
	 $("#firstname").hide();
	 $("#lastname").hide();
	 $("#email").hide();
	 $("#contactnumber").hide();
	 $("#address").hide();
	 $("#password").hide();
	 $("#confirmpassword").hide();
	 $("#image").hide();
	 
	 var fn_err=true;
	 var ln_err=true;
	 var em_err=true;
	 var nu_err=true;
	 var ad_err=true;
	 var pa_err=true;
	 var cp_err=true;
	 $('#num1').keyup(function(){
		 number_check();
	 });
	  function number_check()
	 {
		 var num=$('#num1').val();
		  
		 if(num.length!==10)
		 {
			 $('#contactnumber').show();
			 $('#contactnumber').html("Plz enter your valid number");
			 $('#contactnumber').focus();
			 $('#contactnumber').css('color','red');
			 nu_err=false;
			 return false;
			 
	 }else
	 {
		 
	 $('#contactnumber').hide();
	 }
	 }
	 $('#fn1').keyup(function(){
		 name_check();
	 });
	  function name_check()
	 {
		 var num=$('#fn1').val();
		  
		 if(name.length<2 ||name.length>10 )
		 {
			 $('#firstname').show();
			 $('#firstname').html("First name must be between 2 and 10");
			 $('#firstname').focus();
			 $('#firstname').css('color','red');
			 fn_err=false;
			 return false;
			 
	 }else
	 {
		 
	 $('#firstname').hide();
	 }
	  if(name.length == '' )
		 {
			 $('#firstname').show();
			 $('#firstname').html("Plz fill this field");
			 $('#firstname').focus();
			 $('#firstname').css('color','red');
			 fn_err=false;
			 return false;
			 
	 }else
	 {
		 
	 $('#firstname').hide();
	 }
	 }
	  $('#pass1').keyup(function(){
		password_check();
	 });
	 function password_check()
	 {
		 var pass=$('#pass1').val();
		 regpass= /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;
		  
		 if(pass.length<8 && !pass.match(regpass))
		 {
			 $('#password').show();
			 $('#password').html("*Enter valid Password*");
			 $('#password').focus();
			 $('#password').css('color','red');
			 pa_err=false;
			 return false;
			 
	 }else
	 {
		 
	 $('#password').hide();
	 }
	 }
	 
	 
	 
	 
	   $('#cp1').keyup(function(){
		cp_check();
	 });
	 function cp_check()
	 {
		 var cp=$('#cp1').val();
		 var pass=$('#pass1').val();

		  
		  
		 if( cp!=pass)
		 {
			 $('#confirmpassword').show();
			 $('#confirmpassword').html("*** PASSWORD not matched**");
			 $('#confirmpassword').focus();
			 $('#confirmpassword').css('color','red');
			 cp_err=false;
			 return false;
			 
	 }else
	 {
		 
	 $('#confirmpassword').hide();
	 }
	 }
	 
	 $('#finalcheck').click(function(){
	 fn_err=true;
	  ln_err=true;
	  em_err=true;
	  nu_err=true;
	  
	  pa_err=true;
	  cp_err=true;
	  number_check();
	  cp_check();
	  password_check();
	  if((fn_err==true) && (ln_err==true) && (em_err==true) && ( nu_err==true) &&  (pa_err==true) && (cp_err==true))
	  {
		return true;
		 
	  }
	  else{
		  return false;
	  }
		var image_name = $('#image1').val();  
           if(image_name == '')  
           {  
                alert("Please Select Image");  
                return false;  
           }  
           else  
           {  
                var extension = $('#image1').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid Image File');  
                     $('#image1').val('');  
                     return false;  
                }  
           }
 		   
	 });
	 });
	 
	 