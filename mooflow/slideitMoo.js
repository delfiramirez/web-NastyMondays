	window.addEvents({
		'domready': function(){
			new SlideItMoo({
						overallContainer: 'SlideItMoo_outer',
						elementScrolled: 'SlideItMoo_inner',
						thumbsContainer: 'SlideItMoo_items',		
						itemsVisible:3,
						duration:300,
						itemsSelector: '.SlideItMoo_element',
						itemWidth: 286,
						showControls:1,
						startIndex:1,
						onChange: function(index){
							
						}
			
			});
		}
	});
