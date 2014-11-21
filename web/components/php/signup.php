<!DOCTYPE html>
<!--
Created using JS Bin
http://jsbin.com

Copyright (c) 2014 by anonymous (http://jsbin.com/pevovawiqa/1/edit)

Released under the MIT license: http://jsbin.mit-license.org
-->
<meta name="robots" content="noindex">
<html>
<head>

  <!-- 1. Load platform support before any code that touches the DOM. -->
  <script src="bower_components/webcomponentsjs/webcomponents.min.js"></script>
  <link rel="import" href="./bower_components/paper-input/paper-input.html">
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">
  <link rel="stylesheet" type="text/css" href="./style.css">

</head>
<body unresolved>
 
<core-layout class="content" align="center">
  
    <form class="form-input" id="validate"> 
    <div class="title">Restaurant Signup</div>
    <paper-input class="custom" label="Restaurant name" name="text" floatingLabel error="input is required!"></paper-input>
    <br/>
    <paper-input class="custom" label="Email" name="title" maxlength="255"></paper-input>
    <br/>
    <paper-input class="custom" floatingLabel error="input is required!"label="Confirm email" name="text"></paper-input>
    <br/>
    <paper-input class="custom" floatingLabel error="input is required!" multiline label="Password" name="text"></paper-input>
    <br/>
    <paper-input class="custom" floatingLabel error="input is required!"multiline label="Confirm password" name="text"></paper-input>
    <br/>
    <button type="submit" name="submit" value="Submit" onclick="validateAll()">Next...</button>
    <script>
      function validateAll() {
        var $d = document.getElementById('validate').querySelectorAll('paper-input');
        Array.prototype.forEach.call($d, function(d) {
          d.isInvalid = !d.querySelector('input').validity.valid;
        });
      }
    </script>
  </form>
</core-layout>


  
</body>
</html>