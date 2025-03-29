<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $contact = $_POST["contact"];
    $email = $_POST["email"];
    $message = $_POST["message"];

 $to = "manjalitechnologies@gmail.com,info@aricens.com";
                                    $subject = "Aricens contact form ".$_POST['name'];
                                    
                                    $message = "
                                  
                                    <body>
                                   
                                    <table>
                                    <tr>
                                    <th>Name</th>
                                    <th>".$_POST['name']."</th>
                                    </tr>
                                    <tr>
                                    <th>Email</th>
                                    <th>".$_POST['email']."</th>
                                    </tr>
                                    <tr>
                                    <th>Contact Number</th>
                                    <th>".$_POST['contact']."</th>
                                    </tr>
                                     <tr>
                                    <th>Contact Number</th>
                                    <th>".$_POST['message']."</th>
                                    </tr>
                                    </table>
                                    </body>
                                    ";
                                    
                                    // Always set content-type when sending HTML email
                                    $headers = "MIME-Version: 1.0" . "\r\n";
                                    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                                    
                                    // More headers
                                    $headers .= 'From: no-reply@aricens.com' . "\r\n";
                              
                                    
                                    if(mail($to,$subject,$message,$headers)){
                                        echo "Your form is submitted successfully";
                                    }
                                    else{
                                         echo "Invalid request method.";
                                    }

   // echo "Form submitted successfully!"; // Send a response back to the client
} else {
    echo "Invalid request method.";
}
?>