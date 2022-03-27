<?php
/*
 * Template Name: Contact Us
 * Template Post Type: post, page, product
 */
?>
<?php require 'header.php';?>
<section id="contact-us">
        <div class="contact-us container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 d-flex justify-content-center align-items-center" data-aos="fade-up">
                    <div class="rooms-underline-before"></div>
                    <div class="title d-flex justify-content-center align-items-center">CONTACT US</div>
                    <div class="rooms-underline-after"></div>

                </div>  
            </div>
        </div>
        <div class="contact-form1">
            <p>Questions? Comments? Get in touch and we will be happy to fulfil any curiosity you have.</p>
            <?php echo do_shortcode( '[contact-form-7 id="402" title="Contact Us Form"]' ); ?>
            <!-- <form method="post" enctype="multipart-formdata" action="sendemail.php">
            <div class="form-row">
                <div class="form-group col-md-2 col-lg-2 col-sm-12 col-xs-12">
                    <select id="title" class="form-control">
                        <option selected>Title</option>
                        <option>Title 1</option>
                        <option>Title 2</option>
                    </select>
                </div>
                <div class="form-group col-md-4 col-lg-4 col-sm-12 col-xs-12">
                <input type="text" class="form-control" id="firstName" placeholder="First Name *">
                </div>
                <div class="form-group col-md-6 col-lg-6 col-sm-12 col-xs-12">
                <input type="text" class="form-control" id="lastName" placeholder="Last Name *">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6 col-lg-6 col-sm-12 col-xs-12">
                <input type="email" class="form-control" id="email" placeholder="Email">
                </div>
                <div class="form-group col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <input type="tel" class="form-control" id="phoneNumber" placeholder="Phone number">
                    <span style="margin-left:20px;">
                        <input class="form-check-input" type="checkbox" id="primarycontact" style="margin-top:7px;border: 1px solid #c7b283 !important;border-radius:0px;">
                        <label class="form-check-label" for="gridCheck" style="font-family:'Florentia';color: #4b555c !important;font-size:12px !important;">
                        Make phone number my primary contact option.
                        </label>
                    </span>
                </div>
            </div>
            
            <div class="form-row">
                
                <div class="form-group col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <select id="contactReason" class="form-control">
                        <option selected>Reason For Contact *</option>
                        <option>Title 1</option>
                        <option>Title 2</option>
                    </select>
                </div> -->
                <!-- <div class="form-group col-md-6 col-lg-6 col-sm-12 col-xs-12"> -->
                    <!-- <select id="destination" class="form-control">
                        <option selected>Destination *</option>
                        <option>Title 1</option>
                        <option>Title 2</option>
                    </select> -->
                <!-- </div> -->
            <!-- </div>
            <div class="form-row">
                <div class="form-group col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="How can we help you?"></textarea>
                </div>
            </div>
            <div class="">
                <button type="submit" class="btn form-submit-btn" id="submit" value="submit">SUBMIT</button>
            </div>
            </form> -->
            
        </div>
    </section>

<?php require 'footer-secondary.php';?>