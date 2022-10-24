<?php
if($_POST) {
    $First_Name = "";
    $Last_Name = "";
    $Race = "";
    $Address = "";
    $Martial_Status = "";
    $Employement = "";
    $Children = "";
    $Finished= "";
    $ContactFormBody = "<div>";
      
    if(isset($_POST['First_Name'])) {
        $First_Name = filter_var($_POST['First_Name'], FILTER_SANITIZE_STRING);
        $ContactFormBody .= "<div>
                           <label><b>First_Name:</b></label>&nbsp;<span>".$First_Name."</span>
                        </div>";
    }
 
    if(isset($_POST['Last_Name'])) {
        $Last_Name = $Last_name = filter_var($_POST['Last_Name'], FILTER_SANITIZE_STRING)
        $ContactFormBody .= "<div>
                           <label><b>Last_Name:</b></label>&nbsp;<span>".$Last_Name."</span>
                        </div>";
    }
    if(isset($_POST['Email'])) {
        $Email= $Email = filter_var($_POST['Email'], FILTER_SANITIZE_STRING)
        $ContactFormBody .= "<div>
                           <label><b>Email:</b></label>&nbsp;<span>".$Email."</span>
                        </div>";
    }
    if(isset($_POST['Race'])) {
        $Race = filter_var($_POST['Race'], FILTER_SANITIZE_STRING);
        $ContactFormBody .= "<div>
                           <label><b>Race:</b></label>&nbsp;<span>".$Race."</span>
                        </div>";
    }
      
    if(isset($_POST['Address'])) {
        $Address = filter_var($_POST['Address'], FILTER_SANITIZE_STRING);
        $ContactFormBody .= "<div>
                           <label><b>Address</b></label>&nbsp;<span>".$Address."</span>
                        </div>";
    }
    if(isset($_POST['martial status form'])) {
        $Martial_Status = filter_var($_POST['martial status form'], FILTER_SANITIZE_STRING);
        $ContactFormBody .= "<div>
                           <label><b>Address</b></label>&nbsp;<span>".$Martial_Status."</span>
                        </div>";
    } 
    if(isset($_POST['Employement'])) {
        $Employement = htmlspecialchars($_POST['Employement']);
        $ContactFormBody .= "<div>
                           <label><b>Employement:</b></label>
                           <div>".$Employement."</div>
                        </div>";
    }
    if(isset($_POST['Children'])) {
        $Employement = htmlspecialchars($_POST['Children']);
        $ContactFormBody .= "<div>
                           <label><b>Children:</b></label>
                           <div>".$Children."</div>
                        </div>";
    }
      
    
    $formcontent="From: $First_Name /r $Last_Name \n Message: $First_Name /r $Last_Name /r
    $Race /r $Address /r $Martial_Status /r $Employemet /r $Children/r";
    $recipient = "bgebreey@cord.edu";
    $subject = "Contact Form";
    $mailheader = "From: $email \r\n";
    mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
    echo "Thank You!";
    
} 
/* I used the following websites, https://code.tutsplus.com/tutorials/create-a-contact-form-in-php--cms-32314 
and https://1stwebdesigner.com/php-contact-form-html/ as sources  */
?>