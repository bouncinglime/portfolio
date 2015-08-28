<!DOCTYPE html>

<html>
	
	<head>
		<!-- everything in header.php -->
		<?php include('header.php'); ?>
		<!-- page title -->
		<title>Marielle Hsu - betabrand</title>
	</head>
	
	<!-- MAIN BODY -->
	
	<body>
		
	<!-- actual content -->
		
	<div class="narrow">
			
		<!-- logo (in logo.php) and page name -->
		<?php include('logo.php'); ?>
		<h1>betabrand</h1>
				
		<!-- two hexagons that restack when window is small -->
		<div id="gallery">
			<div class="headimg headbox" style="background:url(images/bb/bb-sketch.png) no-repeat">
				<a href="images/bb/WireframeSketches.jpg" data-lightbox="head" data-title="Wireframe ideas.">
					<div class="overlay">
						<span class="info">Wireframe sketches.</span>
					</div>
				</a>
			</div>
		</div>
		<div class="headimg headbox" style="background:url(images/bb/bb-digi.png) no-repeat">
			<a href="http://invis.io/JR18IJ5W5" target="_blank"> <!-- link to prototype -->
				<div class="overlay">
					<span class="info">Clickable prototype.</span>
				</div>
			</a>
		</div>
			
		<!-- forcing everything else below hexagons -->
		<div style="clear: both;"></div>
		
		<!-- Project Title -->
		<label>Website redesign for <a href="http://betabrand.com" target="_blank">betabrand</a></label>
		
		<!-- Description -->
		<br /><expl>Second project for General Assembly's UXDi program.</expl>
		<text>
			<br />Betabrand is an online clothing community based in San Francisco, California. They design, manufacture, and release new products in small batches frequently. Unlike typical e-commerce retailers, Betabrand also offers a highly-curated inventory of fan designed and crowdfunded clothing.  We were lucky enough to be able to talk to the product manager about their current struggles, as well as get detailed information about what they were looking to highlight on their site.
		</text>
		
		<!-- forcing everything else below text -->
		<div style="clear: both;"></div>
		
		<!-- Creating more space between. -->
		<br />
		
		<!-- Summary -->
		<div class="summary">
			<label>Objective</label>
			<br />Through their website, betabrand want to showcase their range of products while maintaining a quirky, fun, and creative brand image.
		</div>
		<div class="summary"><label>Outcome</label>
			<br /><a href="http://invis.io/JR18IJ5W5" target="_blank">Clickable prototype</a> of a redesigned and simplified website, along with an integrated "outfit" feature (requested).
		</div>
		<div class="summary">
			<label>Occupation</label>
			<br />Created Information Architecture, user flow diagrams, sketches, paper prototype, and wireframes based on user research and testing.
		</div>
		<div class="summary">
			<label>Outfit</label>
			<br />Omnigraffle,
			<br />Invision,
			<br />Google Slides.
		</div>
		
		<!-- forcing everything else below summary -->
		<div style="clear: both;"></div>
		
		<label>My Role</label>
		<text>
			<br />For this two-week solo project, we were provided with a problem statement, personas and user flows. It required user research and testing, sketches, a paper prototype, wireframes, and a clickable prototype. I also synthesized user feedback, and from that created new Information Architecture and a site map.
		</text>
		
		<!-- Creating more space between. -->
		<br />
		<br />
		
		<!-- testing homeycombs for all the info, while still being a gallery -->
		<!-- laying out the hexagons -->
<!--		<div class="honeycombs" id="gallery">
			<!-- Personas -->
<!--			<a class="comb" href="images/bb/brief-challenge.jpg" data-lightbox="persona" data-title="From the project brief, laying out our challenge and our personas.">
				<img src="images/bb/bb-persona.png" />
			</a>
			<a href="images/bb/brief-Todd.jpg" data-lightbox="persona" data-title="Persona Todd as defined in the brief."></a>
			<a href="images/bb/UserFlow-Todd.png" data-lightbox="persona" data-title="User flow for persona Todd."></a>
			<a href="images/bb/brief-Anna.jpg" data-lightbox="persona" data-title="Persona Anna as defined in the brief."></a>
			<a href="images/bb/UserFlow-Anna.png" data-lightbox="persona" data-title="User flow for persona Anna."></a>
		<div class="hexlabel">
			<p>Personas</p>
		</div>
		<span>Personas</span>
		<!-- About -->
<!--		<a class="comb" href="about.html">
			<img src="images/about.png" />
			<div class="hexlabel">
			  <p>About</p>
			</div>
			<span>About</span>
		</a>
		</div> <!-- end of homeycombs -->
			
		<!-- ALWAYS BEFORE TEXT when text flows around image -->
			<div id="gallery">
			<a href="images/bb/brief-challenge.jpg" data-lightbox="persona" data-title="From the project brief, laying out our challenge and our personas.">
				<img class="rightimg" src="images/bb/bb-persona.png" />
			</a>
			<a href="images/bb/brief-Todd.jpg" data-lightbox="persona" data-title="Persona Todd as defined in the brief."></a>
			<a href="images/bb/UserFlow-Todd.png" data-lightbox="persona" data-title="User flow for persona Todd."></a>
			<a href="images/bb/brief-Anna.jpg" data-lightbox="persona" data-title="Persona Anna as defined in the brief."></a>
			<a href="images/bb/UserFlow-Anna.png" data-lightbox="persona" data-title="User flow for persona Anna."></a>
		</div>
		<!-- Personas -->
		<label id="persona">Personas</label>
		<text>
			<br />For this project, we were tasked with designing for two of three primary user journeys laid out in the project brief. These two user flows influenced the user research and information architecture.
		</text>
		
		<!-- forcing everything else below previous -->
		<div style="clear: both;"></div>
		<!-- Creating more space between. -->
		<br />
		<br />
		
		<!-- ALWAYS BEFORE TEXT when text flows around image -->
		<div id="gallery">
			<a href="images/bb/WireframeSketches.jpg" data-lightbox="research" data-title="Sketches for potential wireframes.">
				<img class="leftimg" src="images/bb/bb-research.png" />
			</a>
			<a href="images/bb/HomeComparisons.jpg" data-lightbox="research" data-title="Comparison of home pages of other boutique clothing shops."></a>
			<a href="images/bb/cardsort1.jpg" data-lightbox="research" data-title="Card sorting with various friends leading to clarification about how to conduct the sort."></a>
			<a href="images/bb/cardsort2.jpg" data-lightbox="research" data-title="Final round of card sorting with potential users. The final one also included a discussion of betabrand's motivation for this."></a>
		</div>
		<!-- Research -->
		<label id="research">Research</label>
		<text>
			<br />The first step was to figure out where betabrand fell in the marketplace. I quickly discovered that they don't have any direct competition - there are other sites doing crowdsourcing of various types, and there are other local SF clothing retailers, but no one is doing both. This is both fantastic (because they can do whatever they want without needing to worry about losing marketshare to anyone) but also difficult (because there is no standard to unify the experience).
			<br />After hearing from their product manager about some of the internal pain points, the next step was to get user feedback about the current site. I did several cardsorting sessions with friends, as well as had them walk me through the user journeys we were given on the current site.
			<br />All of this user and market research pointed to two very specific ways to improve the site : simplifiying the Information Architecture, and providing more information about their crowdsourcing/funding section without too many clicks.
		</text>
		<!-- forcing everything else below previous -->
		<div style="clear: both;"></div>
		<!-- Creating more space between. -->
		<br />
		<br />
			
		<!-- ALWAYS BEFORE TEXT when text flows around image -->
		<div id="gallery">
			<a href="images/bb/SiteMapSketch.jpg" data-lightbox="infoarch" data-title="Plotting out all the items that need to be accessed on the site, and turning that into a site map.">
				<img class="rightimg" src="images/bb/bb-infoarch.png" />
			</a>
			<a href="images/bb/SiteMap.png" data-lightbox="infoarch" data-title="Finalized site map."></a>
		</div>
		<!-- Information Architeture -->
		<label id="infoarch">Information Architecture</label>
		<text>
			<br />All of the products on the current site are shown on the home page. Every single product, in every single color. The navigation drop-downs are long and confusing. A lot of the product categories seem to have been invented for a single product instead of included within another. The search bar does not return accurate results.
			<br />I first attempted to reorganize the current sections, but quickly realized that I was jumping ahead. I went back to the user journeys, and the feedback I had gotten from testers. This allowed me to sketch a simple flow for each, which was critical to understanding the way users would expect a site to be structured. I was then able to extrapolate it into a full site map that allowed for future expansion and addition of products.
		</text>
		<!-- forcing everything else below previous -->
		<div style="clear: both;"></div>
		<!-- Creating more space between. -->
		<br />
		<br />
		
		<!-- ALWAYS BEFORE TEXT when text flows around image -->			<div id="gallery">
			<a href="images/bb/Home.jpg" data-lightbox="anno" data-title="Annotated wireframes.">
				<img class="leftimg" src="images/bb/bb-wire.png" />
			</a>
			<a href="" data-lightbox="" data-title=""></a>
		</div>
		<!-- Sketching -->
		<label id="sketching">Sketching & Wireframes</label>
		<text>
			<br />Once I knew the underlying architecture of the site, I started sketching pages. At each step of the way, I got feedback which was integrated into the next version for further testing. It quickly became apparently that there are several different styles of online shopping that needed to be integrated. Allowing for everything everywhere leads to the overwhelming UI on the current betabrand site, so I pieced together different aspects of the experiences and tested them together to find something that worked for the greatest number of people.
			<br />Once I had something that worked for most people, I moved on to high-fidelity wireframes. These also went through several rounds of user testing and feedback before becoming a prototype.
		</text>
		<!-- forcing everything else below previous -->
		<div style="clear: both;"></div>
		<!-- Creating more space between. -->
		<br />
		<br />
		
		<!-- ALWAYS BEFORE TEXT when text flows around image -->
		<img class="rightimg" src="images/bb/bb-proto.png" />
		<!-- Prototype -->
		<label id="prototype">Prototype</label>
		<text>
			<br /><a href="http://invis.io/JR18IJ5W5" target="_blank">Clickable version available in Invision</a>. Annotated wireframes are also available <a href="bb-annotated.php" target="_blank">here</a> on a separate page.
		</text>
		
	</div> <!-- Closing narrower project div -->
	
	<!-- Creating more space between. -->
	<br />
	<br />
	<br />
	
	</body>
	
</html>
