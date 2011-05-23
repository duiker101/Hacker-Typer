/*
*(c) Copyright 2011 Simone Masiero. Some Rights Reserved. 
*This work is licensed under a Creative Commons Attribution-Noncommercial-Share Alike 3.0 License
*/

$(
	function(){
		$( document ).keydown(
			function ( event ) { 
				Typer.addText( event ); 
			}
		);
	}
);

var Typer={
	text: null,
	altTimer:null,
	index:0,
	speed:2,
	file:"",
	altt:0,
	altd:0,
	init: function(){
		altTimer=setInterval(function(){Typer.updLstChr();},500);
		$.get(Typer.file,function(data){
			Typer.text=data;
		});
	},
	
	content:function(){
		return $("#console").html();
	},
	
	write:function(str){
		$("#console").append(str);
		return false;
	},
	
	makeAccess:function(){
		Typer.hidepop();
		Typer.altt=0;
		var ddiv=$("<div id='gran'>").html("");
		ddiv.attr("style","position:absolute;top:200px;background:#333;padding:20px;border:1px solid #999;width:300px;left:50%;margin-left:-150px;text-align:center;");
		ddiv.html("<h1>ACCESS GRANTED</h1>");
		$(document.body).prepend(ddiv);
		return false;
	},
	makeDenied:function(){
		Typer.hidepop();
		Typer.altd=0;
		var ddiv=$("<div id='deni'>").html("");
		ddiv.attr("style","color:#F00;position:absolute;top:200px;background:#511;padding:20px;border:1px solid #F00;width:300px;left:50%;margin-left:-150px;text-align:center;");
		ddiv.html("<h1>ACCESS DENIED</h1>");
		$(document.body).prepend(ddiv);
		return false;
	},
	
	hidepop:function(){
		$("#deni").remove();
		$("#gran").remove();
	},
	
	addText:function(e){
		if(e.keyCode==18){
			Typer.altt++;
			if(Typer.altt>=3){
				Typer.makeAccess();
			}
		}else if(e.keyCode==20){
			Typer.altd++;
			if(Typer.altd>=3){
				Typer.makeDenied();
			}
		}else if(e.keyCode==27){
			Typer.hidepop();
		}else if(Typer.text){
			var cont=Typer.content();
			if(cont.substring(cont.length-1,cont.length)=="|")
				$("#console").html($("#console").html().substring(0,cont.length-1));
			if(e.keyCode!=8){
				Typer.index+=Typer.speed;	
			}else{
				if(Typer.index>0)
					Typer.index-=Typer.speed;	
			}
			var text=$("<div/>").text(Typer.text.substring(0,Typer.index)).html();
			var rtn= new RegExp("\n", "g");
			var rts= new RegExp("\\s", "g");
			var rtt= new RegExp("\\t", "g");
			$("#console").html(text.replace(rtn,"<br/>").replace(rtt,"&nbsp;&nbsp;&nbsp;&nbsp;").replace(rts,"&nbsp;"));
			window.scrollBy(0,50);
		}
		if ( e.preventDefault && e.keyCode != 122 ) { 
			e.preventDefault()
		};  
		if(e.keyCode != 122){
			e.returnValue = false;
		}
	},
	
	updLstChr:function(){
		var cont=this.content();
		if(cont.substring(cont.length-1,cont.length)=="|")
			$("#console").html($("#console").html().substring(0,cont.length-1));
		else
			this.write("|");
	}
}