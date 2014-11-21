<?php require_once 'layout/header.php'; ?>

      <div class="container">

        <div class="row" style="text-align:center;margin-top:20px;">    

          <?php

            $EmailTo = "taban@tabancosmos.com";
            $Subject = "Site Contact";
            $Name = Trim(stripslashes($_POST['Name'])); 
            $Email = Trim(stripslashes($_POST['Email'])); 
            $Message = Trim(stripslashes($_POST['Message'])); 

            // Email body text
            $Body = " ";
            $Body .= "Name: "; 
            $Body .= $Name;
            $Body .= "\n";
            $Body .= "Email: ";
            $Body .= $Email;
            $Body .= "\n";
            $Body .= "Message: ";
            $Body .= $Message;
            $Body .= "\n";

            // send email 
            $success = mail($EmailTo, $Subject, $Body, "From: <$Email>");

            if ($_POST['submit']) {
                if ($Name != '' && $Email != '' && $Message != '') {               
                    if ($success) { 
                      echo '<p class="bg-success" style="padding:15px 10px;">Your message has been sent!</p>'; 
                  } else { 
                      echo '<p class="bg-danger" style="padding:15px 10px;">Something went wrong, go back and try again!</p>'; 
                  }
                } else {
                    echo '<p class="bg-danger" style="padding:15px 10px;">You need to fill in all required fields!!</p>';
                }
            }
            ?>
        </div>
      </div>
  </body>
</html>