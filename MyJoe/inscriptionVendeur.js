function showNext(event){
	
	$("input[name='q12']").click(function(){
		$('#btnAffiche').show("slow");});

	$("#btnAffiche").click(function(){
		$('#BtnSubmitQuestionnaire').removeClass('displayNone');
		$("#CV").removeClass('displayNone');
		$(this).hide("slow");
		});	
}

$(document).ready(function() {
	$('#btnAffiche').hide();
	showNext();
	
});