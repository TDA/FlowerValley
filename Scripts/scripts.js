$(document).ready(function(){

$('nav').waypoint('sticky');
$('.productnav').waypoint('sticky',{wrapper: '<div class="prod-wrapper" />'});
$('.productnav ul a').click(function(){
$('.productnav ul li.active').removeClass('active');
$('html,body').animate({scrollTop:$($(this).attr('href')).position().top},800);
$(this).parent().addClass('active');
return false;
});

function attrSupported(attr) {
  return (attr in document.createElement("input"));
}
	
if(!attrSupported('required')){
$('#cus').submit(function(){	
$('input[required]').each(function(){
	if(!$(this).val()){}
	//Atleast One required field is empty
	$(this).next().text("Please fill this field");
	return false;
	});
});
}

var formValidationRules = {
"name":
  {
   "pattern":"[a-zA-Z -\.]{5,25}",
   "message":"Please Enter a name without special characters."
  },
"email":
  {
   "pattern":"^[a-zA-Z.-_]+@[a-zA-Z-_]+(\.[a-zA-Z]{2,4})+$",
   "message":"Please enter valid email.Eg: Name@site.com"
  },
"phone":
  {
   "pattern":"^\d{8,10}$",
   "message":"Please enter valid phone number of 8-10 digits."
  }
}

// Validates input value according to the rules
function validateRegExp(inputValue, formValidationRule,elt) {
  if (inputValue) {   
    var regExpObj = new RegExp(formValidationRule.pattern);
    if (!regExpObj.test(inputValue)) {
     $(elt).next().text((formValidationRule.message));
    }
  }
}

//Pattern attribute fallback
if (!attrSupported("pattern") || ($.browser.safari)) {
  //If pattern attribute is not supported or browser is Safari,then check the field.
  $('#cus').submit(function(){	
	$('#name').validateRegExp($(this).val(), formValidationRules.name,$(this));
   $('#email').validateRegExp($(this).val(), formValidationRules.name,$(this));
   $('#phone').validateRegExp($(this).val(), formValidationRules.name,$(this));
  });
} 



});