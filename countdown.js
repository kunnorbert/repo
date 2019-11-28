var countDownDate = new Date("Jun 11, 2018 09:00:00").getTime();

$(document).ready(function(){
	
    $("input[name = 'allamvizsga']").click(function(){
        if (this.value == 'beiratkozas'){
			countDownDate = new Date("Jun 11, 2018 09:00:00").getTime();
			$( "#cim" ).remove();
			$( ".cim-wrapper" ).append("<p id='cim'>Beiratkozás időpontjáig:</p>");
			$( ".countdown" ).append(setInterval());
		}
		else
			if (this.value == 'irasbeli'){
				countDownDate = new Date("Jul 02, 2018 09:00:00").getTime();
				$( "#cim" ).remove();
				$( ".cim-wrapper" ).append("<p id='cim'>Írásbeli időpontjáig:</p>");
				$( ".countdown" ).append(setInterval());
			}
			else
				if (this.value == 'megvedes'){
				countDownDate = new Date("Jul 03, 2018 09:00:00").getTime();
				$( "#cim" ).remove();
				$( ".cim-wrapper" ).append("<p id='cim'>Szakdolgozat megvédéséig:</p>");
				$( ".countdown" ).append(setInterval());	
				}	
	});
	
	$("#avornicului").click(function(){
		$(".professor-description-wrapper").remove();
		$(".title-tema").remove();
		$(".vizsgakrol-img-wrapper").remove();
		$(".vizsgakrol-tartalom-wrapper").remove();
		$('.professor-description').append($('#avornicului-description').html());
	});
	
	$("#cardos").click(function(){
		$(".professor-description-wrapper").remove();
		$(".title-tema").remove();
		$(".vizsgakrol-img-wrapper").remove();
		$(".vizsgakrol-tartalom-wrapper").remove();
		$('.professor-description').append($('#cardos-description').html());
	});
	
	$("#kovacs").click(function(){
		$(".professor-description-wrapper").remove();
		$(".title-tema").remove();
		$(".vizsgakrol-img-wrapper").remove();
		$(".vizsgakrol-tartalom-wrapper").remove();
		$('.professor-description').append($('#kovacs-description').html());
	});
	
	$("#saplacan").click(function(){
		$(".professor-description-wrapper").remove();
		$(".title-tema").remove();
		$(".vizsgakrol-img-wrapper").remove();
		$(".vizsgakrol-tartalom-wrapper").remove();
		$('.professor-description').append($('#saplacan-description').html());
	});
	
	$("#racz").click(function(){
		$(".professor-description-wrapper").remove();
		$(".title-tema").remove();
		$(".vizsgakrol-img-wrapper").remove();
		$(".vizsgakrol-tartalom-wrapper").remove();
		$('.professor-description').append($('#racz-description').html());
	});
	
	$(".login-button").click(function(){
		$( ".login-register-wrapper" ).remove();
		$('#login-container').append($('#login-content').html());
	});
	
	$("input[name = 'submit']").click(function(){
		$( ".login-register-wrapper" ).remove();
	});
	
	$(".register-button").click(function(){
		$( ".login-register-wrapper" ).remove();
		$('#login-container').append($('#register-content').html());
	});

});

var x = setInterval(function() {
    var now = new Date().getTime();
    var distance = countDownDate - now;
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    document.getElementById("count").innerHTML = days + "d " + hours + "h " + minutes + "m " + seconds + "s ";
    
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("count").innerHTML = "A vizsga megesett!";
    }
}, 1000);
