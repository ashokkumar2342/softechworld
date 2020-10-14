
<?php

 if(isset($_POST) && !empty($_POST)) {
     if(!empty($_FILES['attachment']['name'])) {
       $file_name = stripslashes(strip_tags($_FILES['attachment']['name']));  
       $temp_name = $_FILES['attachment']['tmp_name'];  
       $file_type = $_FILES['attachment']['type'];
    
       $base = basename($file_name);
       $extension = substr($base, strlen($base)-4, strlen($base));
    
       //only these file types will be allowed
       $allowed_extensions = array(".doc", ".docx", ".pdf", ".zip", ".png",'.jpg');
    
       //check that this file type is allowed
       if(in_array($extension,$allowed_extensions)) {
            //mail essentials
            $from = stripslashes(strip_tags($_POST['email']));
            $to = "info@softechworldharyana.com";
            $subject = 'Career mail from '.stripslashes(strip_tags($_POST['name']));
            $mess = stripslashes($_POST['message']);
            $body = "Name :- ".stripslashes(strip_tags($_POST['name']))."<br>Email :- ".$from."<br>Mobile :- ".stripslashes(strip_tags($_POST['phone']))."<br>Message :- ".$mess;
            //things u need
            $file = $temp_name;
            $content = chunk_split(base64_encode(file_get_contents($file)));
    
            $headers = "From: $from\r\n";
            $headers .= "MIME-Version: 1.0\r\n"
            ."Content-Type: multipart/mixed; boundary=\"1a2a3a\"";
     
            $message .= "If you can see this MIME than your client doesn't accept MIME types!\r\n"
            ."--1a2a3a\r\n";
     
            $message .= "Content-Type: text/html; charset=\"iso-8859-1\"\r\n"
            ."Content-Transfer-Encoding: 7bit\r\n\r\n"
            . $body."\r\n"
            ."--1a2a3a\r\n";
            $file = file_get_contents($temp_name);
     
            $message .=  "Content-Type: ".$file_type."; name=\"".$file_name."\"\r\n"
            ."Content-Transfer-Encoding: base64\r\n"
            ."Content-disposition: attachment; file=\"".$file_name."\"\r\n"
            ."\r\n"
            .chunk_split(base64_encode($file))
            ."--1a2a3a--";
     
    
           //sending the mail - message is not here, but in the header in a multi part
    
           if(mail($to,$subject,$message,$headers)) {
               echo "<script>alert('Mail send success')</script>";
               echo "<script>window.location.href='career.php'</script>";
           }else {
               echo "<script>alert('Error in mail sending ! Try again...')</script>"; 
               echo "<script>window.location.href='career.php'</script>";
           }
    
    
       }else {
           echo "<script>alert('file type not allowed')</script>"; 
       }    //echo an html file
    }else {
        echo "<script>alert('no file posted')</script>"; 
    }
}
?>

   <?php include 'header.php'; ?>
 
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb" style="font-size: 30px;">
                             
                            <li class="active">Career </li>
                        </ol>
                    </div>
                </div>
                 
            </div>
        </div>
    </div>
    <div class=" ">
        <!-- content start -->
        <div class="container">
            
            <div class="row">
                <div class="col-md-12">
                    <div class="wrapper-content bg-white pinside40">
                        <div class="contact-form mb60">
                            <div class=" ">
                                
                                <div class="col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                                    <div class="mb60  section-title text-center  ">
                                        <!-- section title start-->
                                        <h1 class="text-primary">Career With Us</h1>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h3>We invite you to be a part of our interesting and challenging Softech World Haryana</h3>
                                        <p>We are always on the look out for passionate and hard working Space selling gurus, Design professionals and Customer & Sales support executives.</p>
                                    <h3>Currently Hiring Sales & Marketing Executive </h3>
                                    <p>0-2 Years of relevant experience in Sales & having knowledge of Accounts.</p>
                                    <div class="row clearfix">
                                        <form class="contact-us" method="post" enctype="multipart/form-data" action="">
                                        <div class=" ">
                                            <!-- Text input-->
                                            <div class="col-md-4 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    <label class="sr-only control-label" for="name">name<span class=" "> </span></label>
                                                    <input id="name" name="name" type="text" placeholder="Name" class="form-control input-md" required>
                                                </div>
                                            </div>
                                            <!-- Text input-->
                                            <div class="col-md-4 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    <label class="sr-only control-label" for="email">Email<span class=" "> </span></label>
                                                    <input id="email" name="email" type="email" placeholder="Email" class="form-control input-md" required>
                                                </div>
                                            </div>
                                            <!-- Text input-->
                                            <div class="col-md-4 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    <label class="sr-only control-label" for="phone">Phone<span class=" "> </span></label>
                                                    <input id="phone" name="phone" type="text" placeholder="Phone" class="form-control input-md" required>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-xs-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="message"> </label>
                                                    <input type="file" name="attachment" class="form-control" placeholder="Upload your resume">
                                                </div>
                                            </div>
                                            <!-- Select Basic -->
                                            <div class="col-md-12 col-xs-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="message"> </label>
                                                    <textarea class="form-control" id="message" rows="7" name="message" placeholder="Message"></textarea>
                                                </div>
                                            </div>
                                            <!-- Button -->
                                            <div class="col-md-12 col-xs-12">
                                                <button type="submit" class="btn btn-default">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="panel panel-info">
                                        <div class="panel-heading">Quick Links</div>
                                        <div class="panel-body">
                                            <ul class="list-unstyled">
                                                <li style="border-bottom: solid 1px #eee; font-size: 15px;padding: 3px;"><a href="account-inventory-software.php">Account & Inventory Software</a></li>
                                                 <li style="border-bottom: solid 1px #eee; font-size: 15px;padding: 3px;"><a href="hotel-management-software.php">Hotel Management Software</a></li>
                                                 <li style="border-bottom: solid 1px #eee; font-size: 15px;padding: 3px;"><a href="school-management-software.php">School Management Software</a></li>
                                                 <li style="border-bottom: solid 1px #eee; font-size: 15px;padding: 3px;"><a href="hospitality-management-software.php">Hospitality Management Software</a></li>
                                                 
                                                </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 clearfix"><hr></div>
                                
                            </div>
                            <!-- /.section title start-->
                        </div>
                        <div class="section-space80">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8">
                    <div class="mb60 text-center section-title">
                        <!-- section title-->
                        <h1>We are here to help you</h1>
                        <p>Our mission is to deliver reliable, latest news and opinions.</p>
                    </div>
                    <!-- /.section title-->
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="bg-white bg-boxshadow pinside40 outline text-center mb30" style="height:360px; background:#1421c3;color:#fff">
                        <div class="mb40"><i class="icon-calendar-3 icon-2x icon-default"></i></div>
                        <h2 class="capital-title" style="color:#fff">Apply For Softwares</h2>
                        <p>Looking to buy a Software then apply for  now.</p>
                        <a href="enquiry.php" class="btn-link" style="color:#fff">Enquiry</a> </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="bg-white bg-boxshadow pinside40 outline text-center mb30" style="height:360px; background:#a50505;color:#fff">
                        <div class="mb40"><i class="icon-phone-call icon-2x icon-default"></i></div>
                        <h2 class="capital-title" style="color:#fff">Call us at </h2>
                        <h1 class="text-big">9050066566</h1>
                                   <h1 class="text-big">01262-657424</h1>

                        <p>lnfo@softechworldharyana.com</p>
                        <a href="contact.php" class="btn-link" style="color:#fff">Contact us</a> </div>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="bg-white bg-boxshadow pinside40 outline text-center mb30" style="height:360px; background:#1421c3;color:#fff">
                        <div class="mb40"> <i class="icon-users icon-2x icon-default"></i></div>
                        <h2 class="capital-title" style="color:#fff">Talk to Advisor</h2>
                                   <h1 class="text-big">9215547424</h1>

                        <p>lnfo@softechworldharyana.com, softechworld_pankaj_2007@yahoo.com</p>
                        <a href="contact.php" class="btn-link" style="color:#fff">contact Us</a> </div>
                </div>
            </div>
        </div>
    </div>
                        <div class="map"  >
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3492.965015126636!2d76.60260921516974!3d28.89938768231348!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d850e418eb625%3A0x51484da11819d955!2sD2M+Hotel+and+Restaurant!5e0!3m2!1sen!2sin!4v1494068789392" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content end -->
   <?php include 'footer.php'; ?>
     