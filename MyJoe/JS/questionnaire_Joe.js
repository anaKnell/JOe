function showInput(){

	$( "#q1_rep5" ).click(function() {
		$("#q1_rep5Text").toggleClass('displayNone')});

	$("#q3_1_rep4").click(function(){
		$("#q3_1_rep4Text").toggleClass('displayNone')});
	
	$("#q12_rep1").click(function(){
		$("#joeFriends").removeClass('displayNone');
		});
	$("#q12_rep2").click(function(){
		$("#joeFriends").addClass('displayNone');
	});

}

/////////////////////////////////////////////////////////
function Qprofil(){
	$('.qProfil').click(function(){
		$('#q_vendeurCommNon').removeClass('displayNone');
		console.log($('#q_vendeurCommNon').hasClass('displayNone'));
	});
}
/////////////////////////////////////////////////////////
function showSellerInput(){
	$('#q2_rep1').click(function(){
		$('#repeat').toggleClass('displayNone');});
	
	$('#repeat2').click(function(){
		$('#repeat2Input').toggleClass('displayNone')});

	$('#repeat3').click(function(){
		$('#repeat3Input').toggleClass('displayNone')});
	

	$('#repeat4').click(function(){
		$('#repeat4Input_vendeur').toggleClass('displayNone')});
}

/////////////////////////////////////////////////////////////
function showCommercialInput(){
	$('#q2_rep2').click(function(){
		$('#repeat1Input_commercial').toggleClass('displayNone');});

	$('#repeat1_commercial').click(function(){
		$('#repeat2Input_commercial').toggleClass('displayNone');});

	$('#repeat2_commercial').click(function(){
		$('#repeat3Input_commercial').toggleClass('displayNone');});

	$('#repeat3_commercial').click(function(){
		$('#repeat4Input_commercial').toggleClass('displayNone');
	});
}
/////////////////////////////////////////////////////////////
function showHostessInput(){
	$('#q2_rep3').click(function(){
		$('#repeat1Input_hote').toggleClass('displayNone');
		$('#q_hote').toggleClass('displayNone');
	});

	$('#repeat1_hote').click(function(){
		$('#repeat2Input_hote').toggleClass('displayNone');
	});

	$('#repeat2_hote').click(function(){
		$('#repeat3Input_hote').toggleClass('displayNone');
	});

	$('#repeat3_hote').click(function(){
		$('#repeat4Input_hote').toggleClass('displayNone');
	});	
}
/////////////////////////////////////////////////////////

function writeEntreprise(){
	//hote
  	$('#q3TextRepeat4_hote').focusout(function(){
  		var textEntreprise1_hote = $('#q3TextRepeat4_hote').val();
    	$('#q3Repeat4_hote_rep').text(textEntreprise1_hote);});

  	$('#q3TextRepeat3_hote').focusout(function(){
  		var textEntreprise2_hote = $('#q3TextRepeat3_hote').val();
    	$('#q3_2Repeat3_hote').text(textEntreprise2_hote);});

  	$('#q3TextRepeat2_hote').focusout(function(){
  		var textEntreprise3_hote = $('#q3TextRepeat2_hote').val(); 
    	$('#q3_2Repeat2_hote').text(textEntreprise3_hote);});

  	$('#q3TextRepeat1_hote').focusout(function(){
  		var textEntreprise4_hote = $('#q3TextRepeat1_hote').val(); 
    	$('#q3_2Repeat1_hote').text(textEntreprise4_hote);});
  	

  	//Commercial
  	$('#q3TextRepeat4_commercial').focusout(function(){
  		var textEntreprise4_comm = $('#q3TextRepeat4_commercial').val(); 
    	$('#q3Repeat4_comm_rep').text(textEntreprise4_comm);});

  	$('#q3TextRepeat3_commercial').focusout(function(){
  		var textEntreprise3_comm = $('#q3TextRepeat3_commercial').val(); 
    	$('#q3Repeat3_comm_rep').text(textEntreprise3_comm);});

  	$('#q3TextRepeat2_commercial').focusout(function(){
  		var textEntreprise2_comm = $('#q3TextRepeat2_commercial').val(); 
    	$('#q3Repeat2_comm_rep').text(textEntreprise2_comm);});

  	$('#q3TextRepeat1_commercial').focusout(function(){
  		var textEntreprise1_comm = $('#q3TextRepeat1_commercial').val(); 
    	$('#q3Repeat1_comm_rep').text(textEntreprise1_comm);});

  	//vendeur
  		$('#q3Text').focusout(function(){
  			var textEntreprise1_vend = $('#q3Text').val(); 
    		$('#q3_1textRepeat1_rep').text(textEntreprise1_vend);});

  		$('#q3TextRepeat2').focusout(function(){
  			var textEntreprise2_vend = $('#q3TextRepeat2').val(); 
    		$('#q3_1textRepeat2_rep').text(textEntreprise2_vend);});

  		$('#q3TextRepeat3').focusout(function(){
  			var textEntreprise3_vend = $('#q3TextRepeat3').val(); 
    		$('#q3_1textRepeat3_rep').text(textEntreprise3_vend);});

  		$('#q3TextRepeat4').focusout(function(){
  			var textEntreprise4_vend = $('#q3TextRepeat4').val();
  			console.log(textEntreprise4_vend); 
    		$('#q3_1textRepeat4_rep').text(textEntreprise4_vend);});
  }

//All function///////////////////////////////////////////
$(document).ready(function(){
////////////////////////////////////////////////////////
/*$(":radio").prop('checked',false);
$(":checkbox").prop('checked',false);*/
showInput();
showSellerInput();
showCommercialInput();
showHostessInput();
Qprofil();
writeEntreprise();

///////////////////////////////////////////////////////

});



