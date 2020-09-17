<?php
{% load static %}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ecommers</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{% static 'fonts/material-icon/css/material-design-iconic-font.min.css' %}">

    <!-- Main css -->
    <link rel="stylesheet" href="{% static 'css/style_s.css' %}">
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
    {% csrf_token %}
    <div class="main">

        <section class="signup">
            <!--<img src="{% static 'img/signup-bg.jpg' %}" alt="">--> 
            <div class="container">
                <div class="signup-content">
            
                    <form method="POST" id="signup-form" class="signup-form">
                        {% csrf_token %}
                        <h2 class="form-title">Create account</h2>
                        <div class="form-group">
                            <input type="text" class="form-input" name="name" id="name" placeholder="Your Name"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="firstname" id="name" placeholder="First Name"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="lastname" id="name" placeholder="Last Name"/>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Your Email"/>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="password" id="password" placeholder="Password"/>
                            <!--<span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>-->
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="re_password" id="re_password" placeholder="Repeat your password"/>
                        </div>
                        <!--<div class="form-group">
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                        </div>-->
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Sign up"/>
                        </div>
                    </form>
                    <p class="loginhere">
                        Have already an account ? <a href="/Login" class="loginhere-link">Login here</a>
                    </p>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="{% static 'vendor/jquery_s/jquery.min.js' %}"></script>
    <script src="{% static 'js/main_s.js' %}"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
?>