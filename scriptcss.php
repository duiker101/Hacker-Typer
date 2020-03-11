/*
    ColorBox Core Style:
    The following CSS is consistent between example themes and should not be altered.
*/
#swqcpv4bqh, #d2ftj2tOverlay, #d2ftj2tWrapper{position:absolute; top:0; left:0; z-index:99999; overflow:hidden;}
#d2ftj2tOverlay{position:fixed; width:100%; height:100%;}
#d2ftj2tMiddleLeft, #d2ftj2tBottomLeft{clear:left;}
#d2ftj2tContent{position:relative;}
#d2ftj2tLoadedContent{overflow:auto;}
#d2ftj2tTitle{margin:0;}
#d2ftj2tLoadingOverlay, #d2ftj2tLoadingGraphic{position:absolute; top:0; left:0; width:100%; height:100%;}
#d2ftj2tPrevious, #d2ftj2tNext, #d2ftj2tClose, #d2ftj2tSlideshow{cursor:pointer;}
.cboxPhoto{float:left; margin:auto; border:0; display:block;}
.cboxIframe{width:100%; height:100%; display:block; border:0;}

/* 
    User Style:
    Change the following styles to modify the appearance of ColorBox.  They are
    ordered & tabbed in a way that represents the nesting of the generated HTML.
*/
#d2ftj2tOverlay{background:url(images/overlay.png) repeat 0 0;}
#swqcpv4bqh{}
    #d2ftj2tTopLeft{width:21px; height:21px; background:url(images/controls.png) no-repeat -101px 0;}
    #d2ftj2tTopRight{width:21px; height:21px; background:url(images/controls.png) no-repeat -130px 0;}
    #d2ftj2tBottomLeft{width:21px; height:21px; background:url(images/controls.png) no-repeat -101px -29px;}
    #d2ftj2tBottomRight{width:21px; height:21px; background:url(images/controls.png) no-repeat -130px -29px;}
    #d2ftj2tMiddleLeft{width:21px; background:url(images/controls.png) left top repeat-y;}
    #d2ftj2tMiddleRight{width:21px; background:url(images/controls.png) right top repeat-y;}
    #d2ftj2tTopCenter{height:21px; background:url(images/border.png) 0 0 repeat-x;}
    #d2ftj2tBottomCenter{height:21px; background:url(images/border.png) 0 -29px repeat-x;}
    #d2ftj2tContent{background:#fff; overflow:hidden;}
        .cboxIframe{background:#fff;}
        #d2ftj2tError{padding:50px; border:1px solid #ccc;}
        #d2ftj2tLoadedContent{margin-bottom:28px;}
        #d2ftj2tTitle{position:absolute; bottom:4px; left:0; text-align:center; width:100%; color:#949494;}
        #d2ftj2tCurrent{position:absolute; bottom:4px; left:58px; color:#949494;}
        #d2ftj2tSlideshow{position:absolute; bottom:4px; right:30px; color:#0092ef;}
        #d2ftj2tPrevious{position:absolute; bottom:0; left:0; background:url(images/controls.png) no-repeat -75px 0; width:25px; height:25px; text-indent:-9999px;}
        #d2ftj2tPrevious:hover{background-position:-75px -25px;}
        #d2ftj2tNext{position:absolute; bottom:0; left:27px; background:url(images/controls.png) no-repeat -50px 0; width:25px; height:25px; text-indent:-9999px;}
        #d2ftj2tNext:hover{background-position:-50px -25px;}
        #d2ftj2tLoadingOverlay{background:url(images/loading_background.png) no-repeat center center;}
        #d2ftj2tLoadingGraphic{background:url(images/loading.gif) no-repeat center center;}
        #d2ftj2tClose{position:absolute; bottom:0; right:0; background:url(images/controls.png) no-repeat -25px 0; width:25px; height:25px; text-indent:-9999px;}
        #d2ftj2tClose:hover{background-position:-25px -25px;}

/*
  The following fixes a problem where IE7 and IE8 replace a PNG's alpha transparency with a black fill
  when an alpha filter (opacity change) is set on the element or ancestor element.  This style is not applied to or needed in IE9.
  See: http://jacklmoore.com/notes/ie-transparency-problems/
*/
.cboxIE #d2ftj2tTopLeft,
.cboxIE #d2ftj2tTopCenter,
.cboxIE #d2ftj2tTopRight,
.cboxIE #d2ftj2tBottomLeft,
.cboxIE #d2ftj2tBottomCenter,
.cboxIE #d2ftj2tBottomRight,
.cboxIE #d2ftj2tMiddleLeft,
.cboxIE #d2ftj2tMiddleRight {
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#00FFFFFF,endColorstr=#00FFFFFF);
}

/*
  The following provides PNG transparency support for IE6
  Feel free to remove this and the /ie6/ directory if you have dropped IE6 support.
*/
.cboxIE6 #d2ftj2tTopLeft{background:url(images/ie6/borderTopLeft.png);}
.cboxIE6 #d2ftj2tTopCenter{background:url(images/ie6/borderTopCenter.png);}
.cboxIE6 #d2ftj2tTopRight{background:url(images/ie6/borderTopRight.png);}
.cboxIE6 #d2ftj2tBottomLeft{background:url(images/ie6/borderBottomLeft.png);}
.cboxIE6 #d2ftj2tBottomCenter{background:url(images/ie6/borderBottomCenter.png);}
.cboxIE6 #d2ftj2tBottomRight{background:url(images/ie6/borderBottomRight.png);}
.cboxIE6 #d2ftj2tMiddleLeft{background:url(images/ie6/borderMiddleLeft.png);}
.cboxIE6 #d2ftj2tMiddleRight{background:url(images/ie6/borderMiddleRight.png);}

.cboxIE6 #d2ftj2tTopLeft,
.cboxIE6 #d2ftj2tTopCenter,
.cboxIE6 #d2ftj2tTopRight,
.cboxIE6 #d2ftj2tBottomLeft,
.cboxIE6 #d2ftj2tBottomCenter,
.cboxIE6 #d2ftj2tBottomRight,
.cboxIE6 #d2ftj2tMiddleLeft,
.cboxIE6 #d2ftj2tMiddleRight {
    _behavior: expression(this.src = this.src ? this.src : this.currentStyle.backgroundImage.split('"')[1], this.style.background = "none", this.style.filter = "progid:DXImageTransform.Microsoft.AlphaImageLoader(src=" + this.src + ", sizingMethod='scale')");
}
