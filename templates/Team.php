<?php
{% load static %}
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ecommers</title>
  <link rel="stylesheet" href="{% static 'css/Team.css' %}">
</head>
<body>
  <script>
    document.onkeydown = function(e) {
      if(event.keyCode == 123) {
        return false;
      }
      if(e.ctrlKey && e.keyCode == 'E'.charCodeAt(0)){
        return false;
      }
      if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)){
        return false;
      }
      if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)){
        return false;
      }
      if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)){
        return false;
      }
      if(e.ctrlKey && e.keyCode == 'S'.charCodeAt(0)){
        return false;
      }
      if(e.ctrlKey && e.keyCode == 'H'.charCodeAt(0)){
        return false;
      }
      if(e.ctrlKey && e.keyCode == 'A'.charCodeAt(0)){
        return false;
      }
      if(e.ctrlKey && e.keyCode == 'F'.charCodeAt(0)){
        return false;
      }
      if(e.ctrlKey && e.keyCode == 'E'.charCodeAt(0)){
        return false;
      }
    }
    document.addEventListener('contextmenu', event => event.preventDefault());
  </script>
<div class="wrapper">
  <h1>Our Team</h1>
  <div class="team">
    <div class="team_member">
      <div class="team_img">
        <img src="{% static 'images/demo_face.png' %}" alt="Team_image">
      </div>
      <h3>Bhanu Chander</h3>
      <p class="role">project marketing</p>
      <p>Designs and oversees different initiatives or projects to monitors their progress and completion, and ensures that they meet the expectations of the clients.</p><br>
      <p>Email<br> bhanuchander187@gmail.com</p>
    </div>
    <div class="team_member">
      <div class="team_img">
        <img src="{% static 'images/demo_face.png' %}" alt="Team_image">
      </div>
      <h3>Jyothiswaroop</h3>
      <p class="role">Backend Developer</p>
      <p>This ecommers is developed by using the backend framework Django.</p><br>
      <p>Email<br> swaroopkantipudi5@gmail.com</p>
      </div>
    <div class="team_member">
      <div class="team_img">
        <img src="{% static 'images/demo_face.png' %}" alt="Team_image">
      </div>
      <h3>Sairoop</h3>
      <p class="role">Frontend Developer</p>      
      <p>Whole Frontend is taken from the colorlib and assembled</p><br>
      <p>Email<br> gsairoop00@gmail.com</p>
    </div>
  </div>
</div>	

</body>
</html>
?>