

<!DOCTYPE html>

<html>
<head>

<style>

* {box-sizing: border-box;}
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #e9e9e9;

}

.topnav a {
  float:left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
  
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
  
}

.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
  position: fixed;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}








.header {
  
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 20px 50px;
  
}

.header a {
  
  float: 100%;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
}

.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align:left;
    
  }
  
  .header-right {
    float: none;
  }
}







.tablink {
  background-color: #f1f1f1;
  color:black;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 5px;
  font-size: 17px;
  width: 10%;
  border-radius:4px;
 }

.tablink:hover {
  background-color: #ddd;
}

/* Style the tab content (and add height:100% for full page content) */
.tabcontent {
  color: black;
  display: none;
  padding: 10px 10px;
  height: 100%;

}

#Home {background-color:white;}
#Dashboard {background-color:white;}
#Contact {background-color:white;}
#About {background-color:white;}
#Signin {background-color:white; }
#Renovation{background: white;}





* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}



body {
  font-family: 'Montserrat', sans-serif;
}
.container {
  width: 100%;
  height: 50%;
}
nav {
  position: fixed;
  display: flex;
  align-items: flex-start;
  width: 20%;
  height: 75%;
  background-color:#363636;
  border-radius: 4px;
}
main {
  position: fixed;
  right: 0;
  width: 80%;
  height: 100%;
  background-color: #fff;
  overflow: auto;
  padding: 40px;
}


li, ul label.title, ul, a {
  width: 100%;
  color: #FFF;
  font-family: 'Montserrat', 'Open Sans', sans-serif;
  display: block;
  font-weight: bold;
}
ul label {
  height: 40px;
}
ul li{
  height: 35px;
  overflow: hidden;
  transition: all .3s;
}
li {
  display: block;
  background-color: #e9e9e9;
}
label.title {
  font-size: 14px;
  background: linear-gradient(#363636, #2f2f2f);
  padding: 10px 15px;
  cursor: pointer;
  transition: all .25s;
}
a{
  font-size: 12px;
  text-decoration: none;
  color: black;
  display: block;
  padding: 10px 25px;
  transition: all .25s;
}
a:hover {
  background-color: #778899;
  box-shadow: inset 5px 0px 0px 0px #fff;
}
label:hover {
  text-shadow: 0px 0px 10px #fff;
}
input[type="radio"] {
  display: none;
}




#contractor:checked + li, #engineer:checked + li, #labour:checked + li, #landmovers:checked + li,#renovation:checked + li {
  height: 179px;
}





i {
  margin-right: 12px;
}
@media screen and (max-width: 600px){
  nav {
    width: 100%;
    position: relative;
  }
  main {
    width: 100%;
    position: relative;
  }
}










* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align:left;}

/* Slideshow container */
.slideshow-container {
  max-width: 1100px;
  position: relative;
  margin-left:280px;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 10px;
  padding: 5px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 8px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */







.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 3s;
  animation-name: fade;
  animation-duration: 3s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 400px) {
  .text {font-size: 11px}
}











.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 250px;
  margin-left:280px;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}


.button2{
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size:18px; 
}



b {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, b:hover {
  opacity: 0.7;
}






.carda {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 15%;
  height: 10%;
  position: fixed;
}

.carda:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.containera {
  padding: 2px 5px;
  font-size: 7px;
}






.tabs {
  position: relative;   
  min-height: 400px; /* This part sucks */
  clear: both;
  margin: 8px 0px;
  margin-right: 300px;
  border-radius: 4px;
}
.tab {
  float: left;
}
.tab label {
  background: #eee; 
  padding: 5px; 
  border: 1px solid #ccc; 
  margin-left: -1px; 
  position: relative;
  left: 226px; 
  right: 150px;
  border-radius: 4px;
}
.tab [type=radio] {
  display: none;   
}
.content {
  position:absolute;
  top: 24px;
  left: 225px;
  right: 150px;
  background:#e9e9e9;
  right: 0;
  bottom:0;
  padding: 25px;
  border: 1px solid #ccc;
  border-radius: 4px; 
}
[type=radio]:checked ~ label {
  background:#778899;
  border-bottom: 0px #e9e9e9;
  z-index: 2;
}
[type=radio]:checked ~ label ~ .content {
  z-index: 1;
}








.tobs {
  position: relative;   
  min-height: 400px; /* This part sucks */
  clear: both;
  margin: 8px 0px;
  margin-right: 300px;
  border-radius: 4px;
}
.tob {
  float: left;
}
.tob label {
  background: #eee; 
  padding: 5px; 
  border: 1px solid #ccc; 
  margin-left: -1px; 
  position: relative;
  left: 226px; 
  right: 150px;
  border-radius: 4px;
}
.tob [type=radio] {
  display: none;   
}
.contont {
  position:absolute;
  top: 24px;
  left: 225px;
  right: 150px;
  background:#e9e9e9;
  right: 0;
  bottom:200;
  padding: 25px;
  border: 1px solid #ccc;
  border-radius: 4px; 
}
[type=radio]:checked ~ label {
  background:#778899;
  border-bottom: 0px #e9e9e9;
  z-index: 2;
}
[type=radio]:checked ~ label ~ .contont {
  z-index: 1;
}





.zoz{
  position:absolute;
  right:75px;
  bottom:100px;
}


  



*[role="form"] {
    max-width: 530px;
    padding: 15px;
    margin: 0 auto;
    border-radius: 0.3em;
    background-color: #f2f2f2;
}

*[role="form"] h2 { 
    font-family: 'Open Sans' , sans-serif;
    font-size: 40px;
    font-weight: 600;
    color: #000000;
    margin-top: 5%;
    text-align: center;
    text-transform: uppercase;
    letter-spacing: 4px;
}




</style>
</head>
<body>

 

<div class="topnav">

 <div class="header">
  <a href="#default" class="logo">BOB THE BUILDER</a>
  <button class="tablink" onclick="openPage('Home', this, '#5d6d7e')"id="defaultOpen">Home</button>

  <button class="tablink" onclick="openPage('Dashboard', this, '#5d6d7e')" >Dashboard</button>
<button class="tablink" onclick="openPage('Contact', this, '#5d6d7e')">Contact</button>
<button class="tablink" onclick="openPage('About', this, '#5d6d7e')">About</button>
<button class="tablink" onclick="openPage('Sign in',this,'#5d6d7e')">Sign In</button>



  <div class="search-container">
    <form action="/action_page.php">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
</div>
</div>



<div id="Home" class="tabcontent">





<div class="container">
    <nav class="menu">
      <ul>
        <input type="radio" name="menu" id="engineer" checked>
        <li>
          <label for="engineer" class="title"><i class="fa fa-graduation-cap"></i>Engineer</label>
          <a href="#">CIVIL</a>
          <a href="#">ARCHITECT</a>
          
        </li>
        <input type="radio" name="menu" id="contractor">
        <li>
          <label for="contractor" class="title"><i class="fa fa-group"></i>Contractor</label>
          <a href="#">Building</a>
          <a href="#">Plumping</a>
          <a href="#">Flooring</a>
          <a href="#">Electrician</a>
        </li>
        <input type="radio" name="menu" id="labour">
        <li>
          <label for="labour" class="title"><i class="fa fa-male"></i>Labour</label>
          <a href="#">Loading/Unloading</a>
          <a href="#">Building</a>
          <a href="#">House keeping</a>
          <a href="#">Helper</a>
        </li>
        <input type="radio" name="menu" id="landmovers">
        <li>
          <label for="landmovers" class="title"><i class="fa fa-truck"></i>Landmovers</label>
          <a href="#">JCB</a>
          <a href="#">Cranes & Others</a>
          <a href="#">Heavy Truck</a>
          <a href="#">Medium</a>
        </li>
        <input type="radio" name="menu" id="renovation">
        <li>
          <label for="renovation" class="title"><i class="fa fa-home"></i>Renovation</label>
          <a href="#">Room</a>
        </li>
      </ul>
    </nav>
    
    </main>
  </div>



<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="102.png" alt="picture 1" style="width:100%">
  <div class="text">Trust</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="103.png" alt="picture 2" style="width:100%">
  <div class="text">Strength</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="104.png" alt="picture 3" style="width:100%">
  <div class="text">Happiness</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>











<div class="card">
  <img src="105.png" alt="John" style="width:100%">
  <h1>John Doe</h1>
  <p class="title">CEO & Founder, Example</p>
  <p>Harvard University</p>
  <div style="margin: 24px 0;">
    <b href="#"><i class="fa fa-dribbble"></i></b> 
    <b href="#"><i class="fa fa-twitter"></i></b>  
    <b href="#"><i class="fa fa-linkedin"></i></b>  
    <b href="#"><i class="fa fa-facebook"></i></b> 
  </div>
  <p><button class="button2">Contact</button></p>


</div>











  </div>

<div id="Dashboard" class="tabcontent">



<div class="carda">
  <img src="1188.jpg" alt="Avatar" style="width:100%">
  <div class="containera" >
    <p><b>User Name</b></p> 
  </div>


</div>

<div class="tabs">
    
   <div class="tab">
       <input type="radio" id="tab-1" name="tab-group-1" checked>
       <label for="tab-1">Ongoing</label>
       
       <div class="content">
           thenga
       </div> 
   </div>
    
   <div class="tab">
       <input type="radio" id="tab-2" name="tab-group-1">
       <label for="tab-2">Future</label>
       
       <div class="content">
           olakka
       </div> 
   </div>
    
    <div class="tab">
       <input type="radio" id="tab-3" name="tab-group-1">
       <label for="tab-3">Updates</label>
     
       <div class="content">
           unda
       </div> 
   </div>

   <div class="tab">
       <input type="radio" id="tab-4" name="tab-group-1">
       <label for="tab-4">History</label>
     
       <div class="content">
           pazham
       </div> 
   </div>



    
</div>



</div>

</div>


















<div id="Contact" class="tabcontent">
  <h3>Contact</h3>
  <p>Get in touch, or swing by for a cup of coffee.</p>
</div>

<div id="About" class="tabcontent">
  <h3>About</h3>
  <p>Who we are and what we do.</p>
</div>

<div id="Sign in" class="tabcontent">



  <div class="tobs">
    
   <div class="tob">
       <input type="radio" id="tob-5" name="tob-group-1" checked>
       <label for="tob-5">Ongoing</label>
           <div class="content">     
       
           <?php include 'index.php';?>
         </div> 
        
   </div>
 
    
   <div class="tob">
       <input type="radio" id="tob-6" name="tob-group-1" checked>
       <label for="tob-6">CLIENT</label>
      <div class="content">
        <h1>wills</h1>
      </div>
    
    
     </div>
   </div>
      </div>



<script>
function openPage(pageName,elmnt,color) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundColor = "";
  }
  document.getElementById(pageName).style.display = "block";
  elmnt.style.backgroundColor = color;
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();







var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 4000); // Change image every 2 seconds






















}




  











</script>





</body>
</html>