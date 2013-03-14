<script type="text/javascript">
countdownFrom = 10;
slideSpeed = 2000;
slideTimeout = 10000;
$(window).load(function () {
  	getStarted()
});

slidesPause = 0;

function getStarted(){
   	
   	if(countdownFrom > 0) {
   	
		cdown = setInterval(function(){
	
			if(countdownFrom == 0) {
			
				clearInterval(cdown);
			
				$('#rightCorner').click(function(){
					
					if(slidesPause == 0) {
						
						$('#slides').cycle('pause');
						$('#rightCorner').css("background", "url(../images/slideNavRight.gif) bottom no-repeat");
						slidesPause = 1;
						
					} else {
							
						$('#slides').cycle('resume');
						$('#rightCorner').css("background", "url(../images/slideNavRight.gif) top no-repeat");
						slidesPause = 0;
						
					}	
				});
			
				//hide beforeSlideshow
			
				$('#displayIn').animate({opacity:0}, 2000, function(){
				
					$('#displayIn').css("background", "url(images/mainDisplayBG.jpg) no-repeat bottom");
				
					$('#beforeSlideshow').css("display", "none");
					$('#slideshow').css("display", "block");
				
					$('#displayIn').animate({opacity:1}, 3000);
				
					//configfure spacer element in slnavBG
				
					//activate slideshow
					$('#slides').cycle({ 
    					fx:     'scrollHorz',
    					speed:	slideSpeed,
    					timeout: slideTimeout, 
    					delay:  -2000,
    					next:   '#next', 
    					prev:   '#previous',
    					pager:  '#slnav',
    					easing: 'backinout'
   					});
   				
   					$('#slnavSpacer').css("width", 880 - (24*$('div#slides>div.slide').length));
				
					$('.slide').css("background", "none");
				})
			
			} else {
			
				countdownFrom = countdownFrom - 1;
			
				$('#count')[0].innerHTML = countdownFrom;
			
			}
	
		}, 1000);
	
	} else if(countdownFrom == -1) {
	
		$('#rightCorner').click(function(){
					
			if(slidesPause == 0) {
						
				$('#slides').cycle('pause');
				$('#rightCorner').css("background", "url(../images/slideNavRight.gif) bottom no-repeat");
				slidesPause = 1;
						
			} else {
							
				$('#slides').cycle('resume');
				$('#rightCorner').css("background", "url(../images/slideNavRight.gif) top no-repeat");
				slidesPause = 0;
						
			}	
		});
		
		$('#displayIn').css("background", "url(images/mainDisplayBG.jpg) no-repeat bottom");
				
		$('#beforeSlideshow').css("display", "none");
		$('#slideshow').css("display", "block");
		
		//activate slideshow
		$('#slides').cycle({ 
    		fx:     'scrollHorz',
    		speed:	slideSpeed,
    		timeout: slideTimeout, 
    		delay:  -2000,
    		next:   '#next', 
    		prev:   '#previous',
    		pager:  '#slnav',
    		easing: 'backinout'
   		});
   				
   		$('#slnavSpacer').css("width", 880 - (24*$('div#slides>div.slide').length));
				
		$('.slide').css("background", "none");
	
	} else {
		
		$('#countdown').css("visibility", "hidden");
		
	}
}

</script>
<div id="displayIn">

	<div id="beforeSlideshow">
		<div id="countdown">slideshow starting in &nbsp;&nbsp;<span id="count"><script type="text/javascript">document.write(countdownFrom)</script></span></div>
		<h1>Welcome to Genesis Journals..!!</h1>
		<div class="clear"></div>
		<h2>An open online journal for all areas of Pharmaceutical Sciences.</h2>
		<div class="clear"></div>
		<div id="buttons">
			<a href="aboutus.php" class="button_aa" id="leftButton"><span>Find out more about us</span></a>
			<a href="subscribe.php" class="button_aa" id="rightButton"><span>Subscribe to the articles</span></a>
		</div>
	</div>

	<div id="slideshow">
		<div id="slideNav">
			<div id="leftCorner"></div>
			<div id="rightCorner"></div>
			<div id="slnav"><div id="slnavSpacer"></div></div>
		</div>
		<div>
			<div id="previous"></div>
			<div id="next"></div>
		
			<div id="slides"><!-- this is the main container for your slides -->
			
				<div class="slide">
					<div class="caption">
						<h2>Pharmacy</h2>
						<p>
						Pharmacy is the health profession that links the health sciences with the chemical 
						sciences and it is charged with ensuring the safe and effective use of pharmaceutical
						 drugs.
						</p>
					</div>
					<div class="sImCon">
						<img src="slideshow/pharmacy.jpg" alt="Pharmacy" />
					</div>
				</div>
				<div class="slide">
					<div class="caption">
						<h2>Pharmacology</h2>
						<p>
						Pharmacology is the branch of medicine and biology concerned with the study of drug 
						action, where a drug can be broadly defined as any man-made, natural, or endogenous 
						(within the cell) molecule which exerts a biochemical and/or physiological effect on 
						the cell, tissue, organ, or organism. 
						</p>
					</div>
					<div class="sImCon">
						<img src="slideshow/pharmacology.jpg" alt="Pharmacology" />
					</div>
				</div>
				<div class="slide">
					<div class="caption">
						<h2>Pharmacognosy</h2>
						<p>
						Pharmacognosy is the study of medicines derived from natural sources. Pharmacognosy 
						is also defined as "the study of the physical,chemical, biochemical and biological 
						properties of drugs, drug substances or	potential drugs or drug substances of natural
						 origin as well as the search for new drugs from natural sources." It is also defined as the study of crude drugs.
						</p>
					</div>
					<div class="sImCon">
						<img src="slideshow/pharmacognosy.jpg" alt="Pharmacognosy" />
					</div>
				</div>
				<div class="slide">
					<div class="caption">
						<h2>Tissue Culture</h2>
						<p>
						Tissue culture is the growth of tissues or cells separate from the organism. This is 
						typically facilitated via use of a liquid, semi-solid, or solid growth medium, such 
						as broth or agar. Tissue culture commonly refers to the culture of animal cells and 
						tissues, with the more specific term plant tissue culture being used for plants. 
						</p>
					</div>
					<div class="sImCon">
						<img src="slideshow/tissueculture.jpg" alt="Tissue Culture" />
					</div>
				</div>
				<div class="slide">
					<div class="caption">
						<h2>Bio-Technology</h2>
						<p>
						Biotechnology or biotech is the use of living systems and organisms to develop or 
						make useful products, or "any technological application that uses biological systems,
						 living organisms or derivatives thereof, to make or modify products or processes for 
						 specific use" 
						</p>
					</div>
					<div class="sImCon">
						<img src="slideshow/biotechnology.jpg" alt="Bio-Technology" />
					</div>
				</div>
		
			</div><!-- /#slides -->
		
		</div><!-- /#slideshow -->
		
	</div><!-- /#displayIn -->
</div>
	