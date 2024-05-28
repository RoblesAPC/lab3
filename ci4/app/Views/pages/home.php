<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
	
<style>
.background {
	background-image: url("./images/bg_1.png");
	background-repeat: no-repeat;
	background-position: center top left;
	background-attachment: fixed;
}

ul {
	list-style-type: none;
	position: fixed;
	top: 0;
	width: 100%;
	margin: 0;
	padding: 0;
	overflow: hidden;
	background-color: #333;
	z-index: 1;
	border-bottom: 1px solid #bbb;
}

li {
	float: left;
	border-right: 1px solid #bbb;
}

li: last-child {
	border-right: none;
}

li a {
	display: block;
	color: white;
	text-align: center;
	padding: 14px 16px;
	text-decoration: none;
}

li a:hover {
	background-color: #111;
}

h1 {
	font-family: calibri;
	color: white;
	text-align: left;
}

p {
	font-family: calibri;
	color: white;
	font-size: 18px;
}

#info {
	background: white;
	color: black;
	position: relative;
	text-align: left;
	overflow: auto;
	width: 400px;
	height: 175px;
}

.profilepic {
	display: inline-flex;
}

.center {
	display: flex;
	justify-content: center;
}

.overlayeffect {
  position: relative;
  width: 200px;
}

.profilepicture {
  display: block;
  width: 100%;
  height: auto;
}

.overlay {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 100%;
  background-color: lightgrey;
  opacity: 0.7;
  overflow: hidden;
  width: 0;
  height: 100%;
  transition: .5s ease;
}

.overlayeffect:hover .overlay {
  width: 100%;
  right: 0;
}

.text {
  white-space: nowrap; 
  color: white;
  font-size: 20px;
  position: absolute;
  overflow: hidden;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
}

.button:hover {
	background-color: #111;
}

.auto {
  display: block;
  width: auto;
  height: 50px;
  overflow: hidden;
  transition: all 1s ease;
}

* {
	margin: 0;
	padding: 0;
	box-sizing: border-box;
}
</style>
</head>

<body>

<ul>
	<li><a class="active" href="#home">Home</a?</li>
	<li><a href="#about">About</a></li>
	<li><a href="#portfolio">Portfolio</a></li>
	<li style="float:right; border-left:1px solid #bbb;"><a href="#contact">Contact</a></li>
</ul>

<div class="background">
<div id="scene" class="scene">
<div data-depth="0.2" class="layer layer-1">
<div class="container p-5 w-5 mh-100 bg-dark bg-opacity-75 bg-height-100 text-white" style="height: 100%">

<div class="profilepic">
	<div class="overlayeffect">
		<img src="./images/profile_picture.png" alt="profile pic" width="200" class="profilepicture">
			<div class="overlay">
				<div class="text">Hello!</div>
			</div>
	</div>

	<div style="text-align:bottom | left; padding-left: 10px;">
		<h2>Aljohn Leonel A. Robles</h2>
		<h5>Fullstack Development Student</h5>
		<button type="button" onclick="showNickname()">Nickname</button>
		<button type="button" onclick="showCourse()">Course</button>
		<button type="button" onclick="showScholarship()">Scholarship</button>
		<button type="button" onclick="showHobbies()">Hobbies</button>
		<br>
		<p id="info">Info will be displayed here</p>
	</div>
</div>

<br>

<div class="row">
	<div class="col p-3 bg-dark text-white auto">
	Did you choose this course? Why?
	
	<br><br>
	
	Yes I chose this course.I chose this course since, based on my previous educational experience,my brain andthinkingprocessaligns better with a more logicaland structureddiscipline as opposed tomore creative and free-form processes. I also believe that the lifestyle associated with being in the IT industry betteraligns with the kind of life I can foresee for myself in my future.
	</div>
</div>

<br>

<div class="row">
	<div class="col p-3 bg-dark text-white auto">
	I.T. Experience/Gaming/Others
	
	<br><br>
	
	I have been exposed to computers and gaming since I was 5.When I was in Grade School, I would play around with game design applications such as blender and GameMaker.io with some of my closest friends atthe time. When I was in my early twenties, I dabbled a little bit in Shopify web programming due to starting an online e-commerce business during the COVID-19 pandemic.
	</div>
</div>

<br>

<div class="row">
	<div class="col p-3 bg-dark text-white auto">
	What do you expect to learn from this course?
	
	<br><br>
	
	I expect to learn the basicsof web-based programming in order to have a solid foundation to begin upskilling my programming skills in regards to web-based applications and systems.
	</div>
</div>

<br>

<div class="row">
	<div class="col p-3 bg-dark text-white auto">
	What do you want to learn to help you in your chosen Major?
	
	<br><br>
	
	I want tolearn the processes to be able to design aworking softwareapplication all on my own, from conceptualization,to launching saidapplication and continuing routine debugging and maintenance.
	</div>
</div>

<br>

<div class="row">
	<div class="col p-3 bg-dark text-white auto">
	Goals in life. What do you wish to accomplish in life?
	
	<br><br>
	
	I want to be able to reach financial freedom and create something which I can call my own whether that be a business venture, or a company of my own.
	</div>
</div>

<br>

<div class="row">
	<div class="col p-3 bg-dark text-white auto">
	Do you have a dream that you wish to fulfill? If yes, what is your dream?
	
	<br><br>
	
	My dream is to be able to provide back to my communityandsupport those who require aid more than myself either by providing a service whichpeople need, or creating an experience which people seek.I wish to one daymake as many ofthe different hobbies and interest I haveeasily accessibleto others and share the fun andjoy I garner from all the differenthobbies I have inthe blessed life I live.
	</div>
</div>

<br>

<div class="row">
	<div class="col p-3 bg-dark text-white auto">
	Any other interesting aspects of your life that you would like to share?
	
	<br><br>
	
	I believe that Ihave struggled with my educational life in the past but have finally reached self-actualization within that regard through my decision to pursue Computer Science and the IT field.This is the first time in my life that I have had a GPA above 3.5 and believe that I have finally found a field I can say I’m confident in and would like to pursue and complete as best I can.
	</div>
</div>

<br>

<h2 style="float:left">Gallery</h2>

<br>

<?php

echo "My first PHP script!";

$aF = scandir("C:/xampp/htdocs/lab3");

foreach($aF as $file) {
  if(preg_match('/\.jpg|\.gif|\.png/', $file)) {
    echo "<img src=\"/lab3/{$file}\" alt=\"{$file}\" />\n";
  }
}

?>

</div>
</div>
</div>
</div>

<script>
	function showNickname(){
  document.getElementById("info").innerHTML = "Alj";
}
	function showCourse(){
  document.getElementById("info").innerHTML = "Associate in Computer Technology - Specializing in Full Stack Development";
}
	function showScholarship(){
  document.getElementById("info").innerHTML = "No";
}
	function showHobbies(){
  document.getElementById("info").innerHTML = "Video Games, Football, Hiking, Climbing, Golf, Reading, Scuba Diving, Traveling, Anime, Playing the guitar, Going to the gym, My dog, Programming";
}

if (document.getElementsByClassName("auto")) {
  var autos = document.getElementsByClassName("auto");
  for (var i=0; i<autos.length; i++) {
    autos[i].addEventListener("mouseover", autoOver);
    autos[i].addEventListener("mouseout", autoOut);
  }
}

function autoOver() {
  this.style.height = this.scrollHeight + "px";
}

function autoOut() {
  this.style.height = "50px";
}

var scene = document.getElementById('scene');

var parallaxInstance = new Parallax(scene);

parallaxInstance.friction(0.2, 0.2);
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>

</body>
</html>
