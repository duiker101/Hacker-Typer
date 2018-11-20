/*
*(c) Copyright 2011 Simone Masiero. Some Rights Reserved.
*This work is licensed under a Creative Commons Attribution-Noncommercial-Share Alike 3.0 License
*/

$(
	function(){
		$( document ).keydown(
			function ( event ) {
				Typer.addText( event ); //Capture the keydown event and call the addText, this is executed on page load
			}
		);
	}
);

var Typer={
	text: null,
	accessCountimer:null,
	index:0, // current cursor position
	speed:2, // speed of the Typer
	file:"", //file, must be set
	accessCount:0, //times alt is pressed for Access Granted
	deniedCount:0, //times caps is pressed for Access Denied
	init: function(){// initialize Hacker Typer
		this.accessCountimer=setInterval(function(){Typer.updLstChr();},500); // initialize timer for blinking cursor
		$.get(Typer.file,function(data){// get the text file
			Typer.text=data;// save the textfile in Typer.text
		});
	},

	content:function(){
		return $("#console").html();// get console content
	},

	write:function(str){// append to console content
		$("#console").append(str);
		return false;
	},

	makeAccess:function(){//create Access Granted popUp
		Typer.hidepop(); // hide all popups
		Typer.accessCount=0; //reset count
		var ddiv=$("<div id='gran'>").html(""); // create new blank div and id "gran"
		ddiv.addClass("accessGranted"); // add class to the div
		ddiv.html("<h1>ACCESS GRANTED</h1>"); // set content of div
		$(document.body).prepend(ddiv); // prepend div to body
		return false;
	},
	makeDenied:function(){//create Access Denied popUp
		Typer.hidepop(); // hide all popups
		Typer.deniedCount=0; //reset count
		var ddiv=$("<div id='deni'>").html(""); // create new blank div and id "deni"
		ddiv.addClass("accessDenied");// add class to the div
		ddiv.html("<h1>ACCESS DENIED</h1>");// set content of div
		$(document.body).prepend(ddiv);// prepend div to body
		return false;
	},

	hidepop:function(){// remove all existing popups
		$("#deni").remove();
		$("#gran").remove();
        Typer.accessCount=0; //reset access granted count
        Typer.deniedCount=0; //reset access denied count
	},

	addText:function(key){//Main function to add the code
	  var console=$("#console")
		if(key.key==='Alt'){// key 18 = alt key
			Typer.accessCount++; //increase counter
			if(Typer.accessCount>=3){// if it's pressed 3 times
				Typer.makeAccess(); // make access popup
			}
		}else if(key.key==='CapsLock'){// key 20 = caps lock
			Typer.deniedCount++; // increase counter
			if(Typer.deniedCount>=3){ // if it's pressed 3 times
				Typer.makeDenied(); // make denied popup
			}
		}else if(key.key==='Esc' || key.key==='Escape'){ // key 27 = esc key
			Typer.hidepop(); // hide all popups
		}else if(Typer.text){ // otherwise if text is loaded
			var cont=Typer.content(); // get the console content
			if(cont.substring(cont.length-1,cont.length)==="|") // if the last char is the blinking cursor
				console.html(console.html().substring(0,cont.length-1)); // remove it before adding the text
			if(key.key!=='Backspace'){ // if key is not backspace
				Typer.index+=Typer.speed;	// add to the index the speed
			}else{
				if(Typer.index>0) // else if index is not less than 0
					Typer.index-=Typer.speed;//	remove speed for deleting text
			}
			var text=$("<div/>").text(Typer.text.substring(0,Typer.index)).html();// parse the text for stripping html entities
			var rtn= new RegExp("\n", "g"); // newline regex
			var rts= new RegExp("\\s", "g"); // whitespace regex
			var rtt= new RegExp("\\t", "g"); // tab regex
      console.html(text.replace(rtn,"<br/>").replace(rtt,"&nbsp;&nbsp;&nbsp;&nbsp;").replace(rts,"&nbsp;"));// replace newline chars with br, tabs with 4 space and blanks with an html blank
			window.scrollBy(0,50); // scroll to make sure bottom is always visible
		}
		if ( key.preventDefault && key.key !== 'F11' ) { // prevent F11(fullscreen) from being blocked
			key.preventDefault()
		}
		if(key.key !== 'F11'){ // otherwise prevent keys default behavior
			key.returnValue = false;
		}
	},

	updLstChr:function(){ // blinking cursor
	  var console=$("#console")
		var cont=this.content(); // get console
		if(cont.substring(cont.length-1,cont.length)==="|") // if last char is the cursor
			console.html(console.html().substring(0,cont.length-1)); // remove it
		else
			this.write("|"); // else write it
	}
}
