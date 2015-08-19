<!DOCTYPE html>

<html>

  <head>
	<!-- everything in header.php -->
	<?php include('header.php'); ?>
    <!-- title -->
    <title>Marielle Hsu - Portfolio</title>
  </head>

  <!-- MAIN BODY -->

  <body>

    <!-- actual content -->

    <!-- logo (in logo.php) and name -->
	<?php include('logo.php'); ?>
    <h1>Marielle Hsu</h1>

    <!-- Summary -->
    <div class="narrow" style="text-align: center;">
      <text>
	<label>Creating efficient, intuitive designs.</label>
      <br />Melding the creative and the analytical to get the full picture of an experience.
	  <br />Building empathy at each step of the process.
<!--	A fusion of analysis and creativity to inspire experiences.
	Analyzing creativity, and creative approaches to analysis.
	Addressing root causes of issues with... -->
      </text>
    </div>

    <br /> <!-- spacing -->
    <br /> <!-- spacing -->

    <!-- laying out the hexagons -->
    <div class="honeycombs">
      <!-- Digital Projects -->
      <a class="comb" href="digiproj.html">
	<img src="images/digiproj.png" />
	<div class="hexlabel">
	  <p>Digital<br />Projects</p>
	</div>
	<span>Digital<br/>Projects</span>
      </a>
      <!-- About -->
      <a class="comb" href="about.html">
	<img src="images/about.png" />
	<div class="hexlabel">
	  <p>About</p>
	</div>
	<span>About</span>
      </a>
      <!-- Connect -->
      <a class="comb" href="connect.html">
	<img src="images/connect/connect.png" />
	<div class="hexlabel">
	  <p>Connect</p>
	</div>
	<span>Connect</span>
      </a>
      <!-- Tangible Projects -->
      <a class="comb" href="tangproj.html">
	<img src="images/tangproj.png" />
	<div class="hexlabel">
	  <p>Tangible Projects</p>
	</div>
	<span>Tangible Projects</span>
      </a>
      <!-- Resume -->
      <a class="comb" href="resume.html">
	<img src="images/resume.png" />
	<div class="hexlabel">
	  <p>Resume</p>
	</div>
	<span>Resume</span>
      </a>
    </div>

  </body>

</html>
