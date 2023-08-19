<?php
    if(isset($_POST['send_mail'])){
        
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message1 = $_POST['message'];
        
        $to = "info@email.com";
        $subject = "Message from Website.";
        
        $message = "<b>".$name."</b>";
        $message .= "<p>Frome : ".$email.", "."$phone"."<br><b>Message: </b>".$message1."</p>";

        $header = "From:info@email.com \r\n";
        $header .= "Cc:info@email.com \r\n";
        $header .= "MIME-Version: 1.0\r\n";
        $header .= "Content-type: text/html\r\n";
        
        $retval = mail ($to,$subject,$message,$header);
        
        if( $retval == true ) {
            ?>
            
            
                <script>
                    alert("Successfully!", "Message sent successfully...", "success");
                </script>
            
            <?php
        }else {
            ?>
            
            
                <script>
                    alert("Error!", "Message was not sent...", "error");
                </script>
            
            <?php
        }
    }
    
        
?>
            <!-- <div class="contact-page__form-box">
                <form method="POST" class="contact-pag-e__form contact-form-validated" novalidate="novalidate">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="contact-form__input-box">
                                <input type="text" placeholder="Your name" name="name">
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="contact-form__input-box">
                                <input type="email" placeholder="Email address" name="email">
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="contact-form__input-box">
                                <input type="text" placeholder="Phone" name="phone">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="contact-form__input-box text-message-box">
                                <textarea name="message" placeholder="Write a message"></textarea>
                            </div>
                            <div class="contact-form__btn-box">
                                <button type="submit" name="button_send_mail" class="thm-btn contact-form__btn">Send a message</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div> -->