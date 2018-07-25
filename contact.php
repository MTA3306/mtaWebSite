<?php
    if(isset($_POST['submit']))
    {
        $name = $_POST['name']; // Get Name value from HTML Form
        $email_id = $_POST['email']; // Get Email Value
        $mobile_no = $_POST['mobile']; // Get Mobile No
        $msg = $_POST['message']; // Get Message Value
         
        $to = "abc@gmail.com"; // You can change here your Email
        $subject = "'$name' has been sent a mail"; // This is your subject
         
        // HTML Message Starts here
        $message ="
        <html>
            <body>
                <table style='width:600px;'>
                    <tbody>
                        <tr>
                            <td style='width:150px'><strong>Name: </strong></td>
                            <td style='width:400px'>$name</td>
                        </tr>
                        <tr>
                            <td style='width:150px'><strong>Email ID: </strong></td>
                            <td style='width:400px'>$email_id</td>
                        </tr>
                        <tr>
                            <td style='width:150px'><strong>Mobile No: </strong></td>
                            <td style='width:400px'>$mobile_no</td>
                        </tr>
                        <tr>
                            <td style='width:150px'><strong>Message: </strong></td>
                            <td style='width:400px'>$msg</td>
                        </tr>
                    </tbody>
                </table>
            </body>
        </html>
        ";
        // HTML Message Ends here
         
        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
 
        // More headers
        $headers .= 'From: Admin <admin@websapex.com>' . "\r\n"; // Give an email id on which you want get a reply. User will get a mail from this email id
        $headers .= 'Cc: info@websapex.com' . "\r\n"; // If you want add cc
        $headers .= 'Bcc: boss@websapex.com' . "\r\n"; // If you want add Bcc
         
        if(mail($to,$subject,$message,$headers)){
            // Message if mail has been sent
            echo "<script>
                    alert('Mail has been sent Successfully.');
                </script>";
        }
 
        else{
            // Message if mail has been not sent
            echo "<script>
                    alert('EMAIL FAILED');
                </script>";
        }
    }
?>


<div style="border:10px solid #002f68"></div>
<div style="border:10px solid #8C001C"></div>
<body style="background-color:#0c0c0c">



<html>
<head>
<title>Media</title>
<div style="color:#FFFFFF">
<font face = "arial"><b><p><center><font size="18">River Valley 3D Modeling</font></b>
<center>
<Table>
<tr>
<td> <a href="https://mta3306.github.io/mtaWebSite/index.html"><IMG border="0" alt="HOME" src="homeButton.png" width="257" height="40">
  <td> <a href="https://mta3306.github.io/mtaWebSite/newspage.html"><IMG border="0" alt="NEWS" src="newDevsButton.png" width="257" height="40">
      <td> <a href="https://mta3306.github.io/mtaWebSite/mediapage.html"><IMG border="0" alt="IMAGES" src="mediaButton.png" width="257" height="40">
        <td> <a href="https://mta3306.github.io/mtaWebSite/downloadspage.html"><IMG border="0" alt="DOWNLOAD" src="downloadsButton.png" width="257" height="40">
            <td> <a href="https://mta3306.github.io/mtaWebSite/contactpage.html"><IMG border="0" alt="CONTACT ME" src="contactButton.png" width="257" height="40">
        </tr>
        </Table>
      </p>
 <hr>         
</head>
<body>
  <font size="16"> Have a question, suggestion, or comment? Send me a message!</font><br>  


<form role="form" action="submit.php" method="post">
<input name="name" required="required" type="text" placeholder="Enter Your Name" />
<input name="email" required="required" type="email" placeholder="Email ID"/>
<input name="mobile" required="required" type="text" placeholder="Enter Mobile No"/>
<textarea name="message" placeholder="Enter Any Message"></textarea>
<input name="submit" type="submit" value="Send a Mail" /></form>


