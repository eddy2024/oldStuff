<?php
<!DOCTYPE html>
<html>
<head>
<style>
.header {
    background-image:url("imagesA1.jpg")...;
    background-color:#6C9225;
    color:green;
    text-align:center;
    padding:5px;
    border-radius:10px;
    min-height:15px;
}

body{

    background-color:none;     
    background-repeat:repeat-x;
    color:none;
    text-align:justify;
    font-family: "Times New Roman";
    font-size: 12px;
    margin:0px;
}

.footer
      {
   text-align:justify;
   background-color:DeepSkyBlue;   
   font-family: verdana;
   font-size: 10px;
   height:200px;
   width:100%;
   color:white; 
   padding:5px; 
}

.news
     {
     float:left;
     height:40%;
     background-color:DeepSkyBlue;
     max-width:39%;
     padding:5px;
     font-family:verdana;
     font-size:11px;
     border-radius:10px; 
}
.scholar
        {
     float:none;
     min-height:80%;
     background-color:black;
     max-width:25%;
     color:white;
     padding:5px;
     position:none;
     position:relative;
     bottom:160px;
     border-radius:10px; 
}

.jobs{
     min-height:60px;
     background-color:gray;
     max-width:500px;
     color:white;
     float:right;
     padding:2px;
     position:relative;
     bottom:230px;
     right:200px;
     border-radius:10px; 
}

.login{
     float:none;
     min-height:none;
     background-color:none;
     max-width:none;
     color:black;
     padding:0px;
     text-align:center;
     font-family:tahoma; 
     font-size: 18px;  
}
.clear{
      clear:both;
}
 h6{
    background-color:brown
    font-size:16px;
    font-family:tahoma;
    padding:2px;
  }
 
 h7{
    background-color:navy
    font-size:20px;
    font-family:tahoma;
    padding:2px;
    text decoration: bold;
}

.goals{
     float:none;
     height:none;
     background-image:none;
     background-repeat: repeat x;
     background-color:none;
     min-height:15px;
     color:none;
     padding:2px;
     font-family:verdana;
     font-size:15px;  
     position:none;
     border-radius:10px;
   }  

.motive{
     float:none;
     min-height:15px;
     background-color:silver;
     max-width:24%;
     color:black;
     padding:1px;    
     text-align:center;
     position:relative;
     left:400px;
}

.conclude{
     color:black;
     padding:0px;
     text-align:justify;
     font-family:tahoma; 
     font-size: 18px; 
     text-decoration:italics;
}
caption {
         caption-side: bottom; 
         font-size:11px;
         font-family:verdana;
}

h3, h4, h5
{   background-color:silver;
    color: none;
    text-align:center;
    font-size:11px; 
    font-family:verdana;
}

.data{
    position:relative;
    font-family: verdana;
    font-size:12px;
    background-color:silver;
    color:black;
    max-width: 24%;
    min-heigth:25px;  
    left:450px;
    bottom:200px; 
    padding:5px;
    margin:0px;
    z-index:0;
    text-align:center;
    border-radius:10px; 
    
}
.data a:hover{
       text-decoration;underline;}

.teen{
      position:relative;
      bottom:320px;
}
.wow{
   color:white;}

a:hover{ 
       font-size: 10px;
 }
.grad{
     

}
</style>
</head>

<body>

<div class="header">
<fieldset>
<h1>GREEN <span class="wow">AIR</span> GRADUATES DATABASE<sup>&reg</sup></h1>
<h style="text-color:black"><i>***************A NATIONAL DATABASE TO ASSIST IN THE CREATION OF JOBS FOR ECONOMIC GROWTH***************</i></h>
<fieldset>
</div>

<div class="goals">
<h2><strong>We are here to assist you achieve your potential and  your dream.</strong></h2>
<p>This is a pilot project to capture data of graduates from our tertiary institution.<br>
We want to build a database for future work that will assist the government and private companies about our human resources capacity.
</p>
</div>

<hr style="background-color:blue;">

<div class="news">
<h3>Latest News About Employment from Ghana and the world</h3>
<h4>Local News</h4>
<ul>
<li><a href="http://www.xfmnewscenter.com" target="_blank">250,000 seek employment</a></li>
<p>A staggering number of 250,000 people including 68,000 fresh graduates from tertiary
institutions seek employment in Ghana every year, out of which only 5,000 people, 
representing two percent of the total number, are employed by the formal sector.</p>
<li><a href="http://www.ghanatoday.com" target="_blank">Graduate Unemployment Figures Doubles</a></li>
<p>The membership of the Ghana Unemployed Graduates Associations has more than doubled over the last two years according to figures obtained by Weekend Finder from the Association.
</p>

</ul>

<h5>Global News</h5>
<ul>
<li>Obama plans to solve employment in the US</li>
<a href="http://www.gatesnotes.com">Gatesnotes</a>
</ul>
</div>
<div class="clear"></div>

<div class="data">
<p>Our data is registered and protected by Data Protection Commission<br> 
under Act of Parliament of Ghana enacted in the year 2012 (Act 843).
<a href="http://www.dataprotection.org.gh" target="_blank">Data Protection</a></p>
</div>

<div class="teen" style="text-align:right"> 

<caption>Inspiring videos of 20 Self-Made Teen Milloinaires</caption><br>
  <button onclick="playPause()">Play/Pause</button> 
  <button onclick="makeBig()">Big</button>
  <button onclick="makeSmall()">Small</button>
  <button onclick="makeNormal()">Normal</button>
  <br> 
  <video id="video1" width="300">
    <source src="Teenage Millionaires.mp4" type="video/mp4">
    <source src="Teenage Millionaires.ogg" type="video/ogg">
    Your browser does not support HTML5 video.
  </video><br>

</div> 

<script> 
var myVideo = document.getElementById("video1"); 

function playPause() { 
    if (myVideo.paused) 
        myVideo.play(); 
    else 
        myVideo.pause(); 
} 

function makeBig() { 
    myVideo.width = 350; 
} 

function makeSmall() { 
    myVideo.width = 220; 
} 

function makeNormal() { 
    myVideo.width = 300; 
} 
</script>

<div class="clear"></div>
</div>
<div class="login">
<p>This is your golden opportunity to become a member now to enjoy the numerous benefits available.<br>
Go ahead 
<html><a href="loginscreen.htm" target="_blank">REGISTER NOW</a></html></p>
</div>
<hr>
<div class="motive">
<h7>Motivational Column</h7>
<img src="ff.jpg" alt="Fire" style="width:250px;height:150px">
</div>
<div class="grad">
<h8>Graduates </h8><br>
<img src="grad.jpg" alt="fire" style="width:250px;height:150px">
</div>
<div class="scholar">
<h7>Scholarships Links</h7>
<p>
<ul> 
<li><a href="http://www.afterschoolafrica.com" target="_blank">Afterschoolafrica</a></li>
</p>
</ul>
</div>

<div class="clear"></div>

<div class="jobs">
<h8>Job Advertising Links</h8>
<ul> 
<li><a href="http://www.businessghana.com">Businessghana</a></li>
<li><a href="http://www.jobsinghana.com">Jobsinghana</a></li>
<li><a href="http://www.jobberman.com.gh">Jobberman</a></li>
</ul>
</div>
</li>


<div class="conclude">
<p>Start now by browsing through the free certificate short courses that will 
solidify your skills and knowledge.</p>

<p>Do well to inform your friends about the benefits of registering on this site.</p>

</div>

<hr>
<div class="footer">
Links:<br>
<a href="http://www.alison.com" target="_blank">Alison</a> |
<a href="http://www.coursera.org" target="_blank">Coursera</a> |
<a href="http://www.edX.com" target="_blank">edX</a> |
<a href="http://www.udemy.com" target="_blank">Udemy</a> |
<a href="http://www.academicearth.com" target="_blank">Academic Earth</a> | 
<a href="http://www.stanfordonline.com" target="_blank"> Stanford Online</a> |
<a href="http://www.harvardextension.com" target="_blank">Harvard Extension</a> |
<a href="http://www.openyalecourses.com" target="_blank">Open Yale Courses</a> |
<a href="http://www.UCBerkeleClassCentral.org" target="_blank">UC Berkeley Class Central</a> |
<a href="http://www.MITOpenCourseWare.com" target="_blank">MIT OpenCourseWare</a> |
<a href="http://www.CarnegieMellonOpenLearningInitiative.com" target="_blank">Carnegie Mellon Open Learning Initiative</a><br>
<a href="http://www.Codecademy.com" target="_blank">Codecademy</a> |
<a href="http://www.Code.org" target="_blank">Code</a> |
<a href="http://www.UniversityofLondonPodcasts.com" target="_blank">University of London Podcasts</a> |
<a href="http://www.UniversityofOxfordPodcasts.com" target="_blank"> University of Oxford Podcasts</a> |
<a href="http://www.TED-Ed.com" target="_blank">TED-Ed</a> |
<a href="http://www.LessonPaths.com" target="_blank">LessonPaths</a> |
<a href="http://www.Memrise.com" target="_blank">Memrise</a><br><br>

About us:<b><br>
<html><a href="Visionary.htm" target="_blank">Visionary</a></html> |
<html><a href="team.htm" target="_blank">Team</a></html> |
<html><a href="partners.htm" target="_blank">Partners</a></html><br><br>

Contact Us:<br>
<html><a href="contact.htm"></a></html>

<br><br><br><br><br>
<style="text-align:center"> Copyright © 2015 | Green Air National Graduate Database System | Telephone: +233 244-646-214; 023-217-1388 | Email: info@graduatedbproject.com
</div>
</body>
</html>

?>