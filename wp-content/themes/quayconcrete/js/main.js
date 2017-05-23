
$(function() {

    $( ".cal-concrete-btn" ).click(function() {

    	var units = $( '#units' ).val(); 
    	var length = convertToMeters( $( '#length' ).val() , units ); 
    	var width =  convertToMeters( $( '#width' ).val(), units ); 
    	var depth =  convertToMeters( $( '#depth' ).val(), units ); 
    	var val; 
    	var output = $( '.result span' ); 

    	if(checkVals()){
    		val = length * width * depth;
    		output.text(val.toFixed(2));
    	} else {
			resetCal();
    	}

	});

	function checkVals(){
		var length = $( '#length' ); 
    	var width = $( '#width' ); 
    	var depth = $( '#depth' ); 	
    	var error_msg = 'Error: Please enter values greater than 0';

    	if(length.val() <= 0){
    		alert(error_msg);
    		return false;
    	}

    	if(width.val() <= 0){
    		alert(error_msg);
    		return false;
    	}

    	if(depth.val() <= 0){
    		alert(error_msg);
    		return false;
    	}

    	return true; 

	}

	function resetCal(){
		var length = $( '#length' ); 
    	var width = $( '#width' ); 
    	var depth = $( '#depth' ); 
    	var output = $( '.result span' ); 

    	length.val(0);
    	width.val(0);
    	depth.val(0);
    	output.text(0);
	}

	function convertToMeters(val, unit){

		switch(unit) {
			case "Meters":
				//Do nothing
				return val; 
		        break;
			case "Yards":
				val *= 0.9144; 
		        break;
		    case "Feet":
		    	val *= 0.3048;
		        break;
		    case "Inches":
		    	val *=	0.0254;
		        break;
		    default:
		    	alert('Error: Units value is not valid');
		        //do nothing
		}

		return val;

	}

	 $( ".reset-btn" ).click(function() {

    	resetCal();

	});
    
	$( ".skip-btn" ).hover(
	  function() {

	  	if( ! $( this ).hasClass("active") ){
	  		var link_text = $( this ).children( "img" ).attr("src");
	    
	   		var replace = link_text.replace("pink.svg", "white.svg");

		    $( this ).children( "img" ).attr("src", replace);
	  	}
	  
	  }, function() {

	  	if( ! $( this ).hasClass("active") ){
	    var link_text = $( this ).children( "img" ).attr("src");
	    
	    var replace = link_text.replace("white.svg", "pink.svg");

	    // alert(replace);

	    $( this ).children( "img" ).attr("src", replace);
		}
	  }
	);

	$( ".skip-btn" ).click(function() {
		if( ! $( this ).hasClass("active") ){
			var link_text = $( ".active.skip-btn").children( "img" ).attr("src");
		    
	   		var replace = link_text.replace("white", "pink");

			$( ".active.skip-btn").children( "img" ).attr("src", replace);

		  	$( ".active.skip-btn").removeClass("active");

		  	$( this ).addClass("active");

		  	//update hidden field

		  	$('#skip-size').val($(this).data('skip-size'));

		  	// alert($('#skip-size').val());

	  	}

	});

	$( ".configure" ).click(function() {
		if( ! $( this ).hasClass("active") ){

			$( ".active.configure" ).removeClass("active");

		  	$( this ).addClass("active");

			$('#private').val($(this).data('private'));

		  	// alert($('#private').val());		  	

	  	}

	});	

	$('.date-picker').datepicker({
	    onSelect: function(dateText, inst) {
	      $("#date").val(dateText);
	    },
	    firstDay: 1,
	    dateFormat: 'dd-mm-yy'
	});


	$( ".delivery" ).click(function() {
		if( ! $( this ).hasClass("active") ){

			$( ".active.delivery" ).removeClass("active");

		  	$( this ).addClass("active");

		  	$('#days').val($(this).data('days'));

		  	// alert($('#days').val());		
	  	}

	});	


	// if(location.pathname != "/"){
	// 	$("a[href*='" + location.pathname + "']").addClass("active");
	// } else { 
	// 	$(".home").addClass("active");
	// }

	$( ".burger-icon" ).click(function() {
		$( "nav ul" ).toggle();
	} );


});
