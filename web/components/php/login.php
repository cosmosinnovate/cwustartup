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
    <script src="../bower_components/webcomponentsjs/webcomponents.min.js"></script>
    <link rel="import" href="../bower_components/paper-input/paper-input.html">
    <link rel="stylesheet" type="text/css" href="/style.css">

</head>
<body unresolved>
<core-layout align="center">

    <form class="form-input" id="">
        <div class="title">Login</div>
        <paper-input class="label-text" reguired label="User name" name="title" maxlength="255"></paper-input>
        <br/>
        <paper-input floatinglabel multiline class="custom" required label="Password" name="text"></paper-input>
        <br/>
        <button type="submit" name="submit" value="Submit" onclick="validateAll()">Submit</button>
    </form>
</core-layout>


<!---
  // <script (function() {

  //     var form = document.getElementById('form_837299');

  //     form.addEventListener('submit', function(event) {
  //       // Prevent normal form submit
  //       event.preventDefault();
  //     });

  //     document.getElementById('saveForm').addEventListener('click', function() {
  //       Array.prototype.forEach.call(form.children, function(child) {
  //         var name = child.getAttribute('name');

  //         if ('value' in child && child.type !== 'submit' && name) {
  //           console.log(name, child.value);
  //           Use jQuery.ajax or a Polymer/core-ajax element to send
  //         the data to the server
  //         }
  //       });
  //     });

  //   })();
  // </script>

  -->


</body>
</html>