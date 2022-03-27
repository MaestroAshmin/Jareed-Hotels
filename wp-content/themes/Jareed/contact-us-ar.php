<?php
/*
 * Template Name: Contact Us Arabic
 * Template Post Type: post, page, product
 */
?>
<?php require 'header-ar-secondary.php';?>
<section id="contact-us">
        <div class="contact-us container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 d-flex justify-content-center align-items-center" data-aos="fade-up">
                    <div class="rooms-underline-before"></div>
                    <div class="title d-flex justify-content-center align-items-center" style="letter-spacing:normal;">تواصل معنا</div>
                    <div class="rooms-underline-after"></div>

                </div>  
            </div>
        </div>
        <div class="contact-form1">
            <p>للاستفسارات أو الملاحظات تواصل مع فريق عمل جريد.تسرّنا الإجابة عليك ومساعدتك في أيّ وقت.</p>
            <?php echo do_shortcode( '[contact-form-7 id="403" title="Contact Us Form Arabic"]' ); ?>
            <!-- <form> -->
            <!-- <div class="form-row">
                <div class="form-group col-md-2 col-lg-2 col-sm-12 col-xs-12">
                    <select id="title" class="form-control">
                        <option selected>اللقب</option>
                        <option>اللقب 1</option>
                        <option>اللقب 2</option>
                    </select>
                </div>
                <div class="form-group col-md-4 col-lg-4 col-sm-12 col-xs-12">
                <input type="text" class="form-control" id="firstName" placeholder="الاسم الأول *">
                </div>
                <div class="form-group col-md-6 col-lg-6 col-sm-12 col-xs-12">
                <input type="text" class="form-control" id="lastName" placeholder="اسم العائلة *">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6 col-lg-6 col-sm-12 col-xs-12">
                <input type="email" class="form-control" id="email" placeholder="البريد الإلكتروني">
                </div>
                <div class="form-group col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <input type="tel" class="form-control" id="phoneNumber" placeholder="رقم الهاتف">
                    <span style="margin-left:20px;">
                        <input class="form-check-input" type="checkbox" id="primarycontact" style="margin-top:7px;border: 1px solid #c7b283 !important;border-radius:0px;">
                        <label class="form-check-label" for="gridCheck" style="font-family:'HelveticaLight';color: #4b555c !important;font-size:12px !important; padding-right:20px;">
                        اجعل هاتفي خيار الاتصال الأساسي
                        </label>
                    </span>
                </div>
            </div>
            
            <div class="form-row">
                <div class="form-group col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <select id="contactReason" class="form-control">
                        <option selected>سبب الاتصال *</option>
                        <option>سبب الاتصال 1</option>
                        <option>سبب الاتصال 2</option>
                    </select>
                </div>
                <div class="form-group col-md-6 col-lg-6 col-sm-12 col-xs-12"> -->
                    <!-- <select id="destination" class="form-control">
                        <option selected>Destination *</option>
                        <option>Title 1</option>
                        <option>Title 2</option>
                    </select> -->
                <!-- </div>
                
            </div>
            <div class="form-row">
                <div class="form-group col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="كيف يمكننا مساعدتك؟"></textarea>
                </div>
            </div>
            <div class="">
                <button type="submit" class="btn form-submit-btn">إرسال</button>
            </div>
            </form> -->
        </div>
    </section>

<?php require 'footer-secondary-ar.php';?>