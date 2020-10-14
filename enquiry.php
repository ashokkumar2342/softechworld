   <?php include 'header.php'; ?>
 
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb" style="font-size: 30px;">
                            <li class="active">Enquiry</li>
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
                    <div class="wrapper-content bg-white ">
                        <div class="about-section pinside40">
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <form  class="contact-us"   method="post" action="sendmail.php">
                                        <div id="output" class="alert"> </div>
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
                                                        <input id="phone" name="mobile" type="text" placeholder="Phone" class="form-control input-md" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <label class="sr-only control-label" for="name">Enquiry For<span class=" "> </span></label>
                                                        <select  placeholder="Enquiry for" name="enquiryfor" class="form-control input-md" required>
                                                            <option value="Hotel Management Software">Hotel Management Software</option>
                                                            <option value="School Management Software">School Management Software</option>
                                                            <option value="Hospitality Management Software">Hospitality Management Software</option>
                                                            <option value="Account Inventory Software">Account Inventory Software</option>
                                                        </select>
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
                        </div>                     
                        
                         
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content end -->
   <?php include 'footer.php'; ?>
     