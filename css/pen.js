	$('input[name="radios"]').change( function() {
		
		if ($('#firstRadio').is(":checked")){

			$('#firstAccordion').collapse('show');
		
		} else {
			
			$('#firstAccordion').collapse('hide');
		}
        
		if ($('#secondRadio').is(":checked")){

			$('#secondAccordion').collapse('show');
		
		} else {
			
			$('#firstAccordion').collapse('hide');
		}
        
        if ($('#thirdRadio').is(":checked")){

			$('#firstAccordion').collapse('hide');
            $('#secondAccordion').collapse('hide');
		}

  });