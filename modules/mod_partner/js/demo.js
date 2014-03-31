if ( DYN_WEB.Scroll_Div.isSupported() ) {
	
	DYN_WEB.Event.domReady( function() {
		
		// arguments: id of scroll area div, id of content div
		var wndo = new DYN_WEB.Scroll_Div('wn', 'lyr1');
		// see info online at http://www.dyn-web.com/code/scrollers/continuous/documentation.php
		wndo.makeSmoothAuto( {axis:'h', bRepeat:true, repeatId:'rpt1', speed:100, bPauseResume:true} );
		
		var wndo2 = new DYN_WEB.Scroll_Div('wn2', 'lyr2');
		wndo2.makeSmoothAuto( {axis:'h', bRepeat:true, repeatId:'rpt2', speed:60, bPauseResume:true} );
    
	});
}