/*
 * Original work (c) Copyright 2011 Simone Masiero. Some Rights Reserved.
 * This version has been modified by M@T.
 * This work is licensed under a Creative Commons Attribution-Noncommercial-Share Alike 3.0 License.
 */

$(function() {
	$(document).keydown(
		function(event) { 
			Typer.addText(event);	// Capture the keydown event and call addText, this is executed on page load
		}
	);
});

var Typer = {
	text: null,
	accessCountimer: null,
	index: 0,	// Current cursor position
	speed: 2,	// Speed of the Typer
	file: '',	// File, must be set
	accessCount: 0,	// Times Alt is pressed for Access Granted
	deniedCount: 0,	// Times Caps Lock is pressed for Access Denied
	init: function() {	// Initialize Hacker Typer
		accessCountimer = setInterval(function() {Typer.updLstChr();}, 500);	// Initialize timer for blinking cursor
		$.get(Typer.file, function(data) {	// Get the text file
			Typer.text = data;	// Save the textfile in Typer.text
		});
	},

	content: function() {	// Get console content
		return $('#console').html();
	},

	write: function(str) {	// Append to console content
		$('#console').append(str);
		return false;
	},

	makeAccess: function() {	// Create Access Granted pop-up
		Typer.hidepop();	// Hide all pop-ups
		Typer.accessCount = 0;	// Reset counter
		var ddiv = $('<div id="gran">').html('<h1>ACCESS GRANTED</h1>');	// Create new blank div with id "gran"
		ddiv.addClass('accessGranted');	// Add class to the div
		$(document.body).prepend(ddiv);	// Prepend div to body
		return false;
	},
	makeDenied: function() {	// Create Access Denied pop-up
		Typer.hidepop();	// Hide all pop-ups
		Typer.deniedCount = 0;	// Reset counter
		var ddiv = $('<div id="deni">').html('<h1>ACCESS DENIED</h1>');	// Create new blank div and id "deni"
		ddiv.addClass('accessDenied');	// Add class to the div
		$(document.body).prepend(ddiv);	// Prepend div to body
		return false;
	},

	hidepop: function() {	// Remove all existing pop-ups
		$('#deni').remove();
		$('#gran').remove();
		Typer.accessCount = 0;	// Reset 'access' counter
		Typer.deniedCount = 0;	// Reset 'denied' counter
	},

	addText: function(key) {	// Main function to add the code
		if (key.keyCode == 18) {	// Key 18 = Alt key
			Typer.accessCount++;	// Increase counter 
			if (Typer.accessCount >= 3)	// If it's pressed 3 times
				Typer.makeAccess();	// Make 'Access Granted' pop-up
		}
		else if (key.keyCode == 20) {	// Key 20 = Caps Lock key
			Typer.deniedCount++;	// Increase counter
			if (Typer.deniedCount >= 3)	// If it's pressed 3 times
				Typer.makeDenied();	// Make 'Access Denied' pop-up
		}
		else if (key.keyCode == 27)	// Key 27 = Esc key
			Typer.hidepop();	// Hide all pop-ups
		else if (Typer.text) {	// Otherwise if text is loaded
			var cont = Typer.content();	// Get the console content
			if (cont.substring(cont.length - 1, cont.length) == '|')	// If the last char is the blinking cursor
				$('#console').html($('#console').html().substring(0, cont.length - 1));	// Remove it before adding the text
			if (key.keyCode != 8)	// If key is not Backspace
				Typer.index += Typer.speed;	// Add the speed to the index
			else
				if (Typer.index > 0)	// Else if index is not less than 0 
					Typer.index -= Typer.speed;	// Remove speed for deleting text
			var text = $('<div/>').text(Typer.text.substring(0, Typer.index)).html();	// Parse the text for stripping html enities
			var rtn = new RegExp('\\r\\n|\\r|\\n', 'g');	// Newline regex
			var rts = new RegExp('\\s', 'g');	// Whitespace regex
			var rtt = new RegExp('\\t', 'g');	// Tab regex
			$('#console').html(text.replace(rtn, '<br/>').replace(rtt, '&nbsp;&nbsp;&nbsp;&nbsp;').replace(rts, '&nbsp;'));	// Replace newline chars with <br>, tabs with 4 spaces and blanks with an html blank
			window.scrollBy(0, 50);	// Scroll to make sure bottom is always visible
		}
		if (key.keyCode != 122) {	// Prevent default behavior for all keys except F11 (fullscreen)
			if (key.preventDefault)
				key.preventDefault();
			key.returnValue = false;
		}
	},

	updLstChr: function() {	// Blinking cursor
		var cont = this.content();	// Get console content
		if (cont.substring(cont.length - 1, cont.length) == '|')	// If last char is the cursor
			$('#console').html($('#console').html().substring(0, cont.length - 1));	// Remove it
		else
			this.write('|');	// Else add it
	}
}