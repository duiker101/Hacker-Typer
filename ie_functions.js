	function do_ie_replaces9(){
		jQuery('object').each(function(){
			
            jQuery(this).find('embed').attr('wmode','transparent');
            
            if(jQuery(this).find('param[name=wmode]').attr('value') != 'transparent') {
            	
                jQuery(this).prepend('<param name="wmode" value="transparent" />');
            }
            
            temp_var = jQuery(this).parent().html();
            
            if(typeof temp_var === 'undefined'){
            	
            }else{
            	jQuery(this).parent().html(temp_var);
            }
    	});
	}

	function do_ie_replaces(){
		var embeds = document.getElementsByTagName('embed');
	    for (i = 0; i < embeds.length; i++) {
	        embed = embeds[i];
	        var new_embed;
	        // everything but Firefox & Konqueror
	        if (embed.outerHTML) {
	            var html = embed.outerHTML;
	            // replace an existing wmode parameter
	            if (html.match(/wmode\s*=\s*('|")[a-zA-Z]+('|")/i))
	                new_embed = html.replace(/wmode\s*=\s*('|")window('|")/i, "wmode='transparent'");
	            // add a new wmode parameter
	            else
	                new_embed = html.replace(/<embed\s/i, "<embed wmode='transparent' ");
	            // replace the old embed object with the fixed version
	            embed.insertAdjacentHTML('beforeBegin', new_embed);
	            embed.parentNode.removeChild(embed);
	        } else {
	            // cloneNode is buggy in some versions of Safari & Opera, but works fine in FF
	            new_embed = embed.cloneNode(true);
	            if (!new_embed.getAttribute('wmode') || new_embed.getAttribute('wmode').toLowerCase() == 'window')
	                new_embed.setAttribute('wmode', 'transparent');
	            embed.parentNode.replaceChild(new_embed, embed);
	        }
	    }
	    // loop through every object tag on the site
	    var objects = document.getElementsByTagName('object');
	    for (i = 0; i < objects.length; i++) {
	        object = objects[i];
	        var new_object;
	        // object is an IE specific tag so we can use outerHTML here
	        if (object.outerHTML) {
	            var html = object.outerHTML;
	            // replace an existing wmode parameter
	            if (html.match(/<param\s+name\s*=\s*('|")wmode('|")\s+value\s*=\s*('|")[a-zA-Z]+('|")\s*\/?\>/i))
	                new_object = html.replace(/<param\s+name\s*=\s*('|")wmode('|")\s+value\s*=\s*('|")window('|")\s*\/?\>/i, "<param name='wmode' value='transparent' />");
	            // add a new wmode parameter
	            else
	                new_object = html.replace(/<\/object\>/i, "<param name='wmode' value='transparent' />\n</object>");
	            // loop through each of the param tags
	            var children = object.childNodes;
	            for (j = 0; j < children.length; j++) {
	                try {
	                    if (children[j] != null) {
	                        var theName = children[j].getAttribute('name');
	                        if (theName != null && theName.match(/flashvars/i)) {
	                            new_object = new_object.replace(/<param\s+name\s*=\s*('|")flashvars('|")\s+value\s*=\s*('|")[^'"]*('|")\s*\/?\>/i, "<param name='flashvars' value='" + children[j].getAttribute('value') + "' />");
	                        }
	                    }
	                }
	                catch (err) {
	                }
	            }
	            // replace the old embed object with the fixed version
	            object.insertAdjacentHTML('beforeBegin', new_object);
	            object.parentNode.removeChild(object);
	        }
	    }

	}