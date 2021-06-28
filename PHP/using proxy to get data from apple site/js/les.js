// JavaScript Document
$(function() {
	var codeVersie = $.fn.jquery;
	$('#mainNav ul:last li').html('<a href="https://technovacollege.nl"><i class="icon"></i></a>');

	// Open externe links in nieuw venster
	$('a[href^="http://"], a[href^="https://"]').filter('a:not([target])').attr('target','_blank');
	
	// Plaats ankers op homelink
	var thisPath = window.location.pathname;
	var thisAnker = thisPath.substr(thisPath.lastIndexOf('/'));
	thisAnker = thisPath.substr(0, (thisPath.length - thisAnker.length));
	thisAnker = thisAnker.substr(thisAnker.lastIndexOf('/') + 1);
	(thisAnker == 'opdrachten') ? '' : $('#mainNav a#h').attr('href', $('#mainNav a').attr('href') + '#' + thisAnker);
		
	// Link vorige pagina toevoegen
	history.length > 1 ? $('#mainNav ul:first').prepend('<li><a href="javascript:;" id="hisBack"><i class="fa fa-chevron-circle-left"></i> vorige</a></li>') : null ;

	// Opdrachten in preview : links verwijderen en sluit venster toevoegen
	if(thisPath.indexOf('_preview') > 0) {
		$('#mainNav').html('<ul><li><a href="javascript:;" id="closeWindow"><i class="fa fa-times-circle"></i> sluit venster</a></li></ul>');
	}

	$('#mainNav').on('click', '#hisBack', function(){
		history.back();
	});
	$('#mainNav').on('click', '#closeWindow', function(){
		window.close();
	});
});