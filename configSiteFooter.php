<?php
$sq_setting1 = mysql_fetch_assoc(mysql_query("select footer_holidays,social_media from b2c_Settings where setting_id='1'"));
$social_media = json_decode($sq_setting1['social_media']);
$popular_destf = json_decode($sq_setting1['footer_holidays']);
?>
<footer class="footer weave-border">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 283.5 27.8" preserveAspectRatio="none" class="weave-strip weave-border-top"><path class="elementor-shape-fill" d="M283.5,9.7c0,0-7.3,4.3-14,4.6c-6.8,0.3-12.6,0-20.9-1.5c-11.3-2-33.1-10.1-44.7-5.7    s-12.1,4.6-18,7.4c-6.6,3.2-20,9.6-36.6,9.3C131.6,23.5,99.5,7.2,86.3,8c-1.4,0.1-6.6,0.8-10.5,2c-3.8,1.2-9.4,3.8-17,4.7   c-3.2,0.4-8.3,1.1-14.2,0.9c-1.5-0.1-6.3-0.4-12-1.6c-5.7-1.2-11-3.1-15.8-3.7C6.5,9.2,0,10.8,0,10.8V0h283.5V9.7z M260.8,11.3  c-0.7-1-2-0.4-4.3-0.4c-2.3,0-6.1-1.2-5.8-1.1c0.3,0.1,3.1,1.5,6,1.9C259.7,12.2,261.4,12.3,260.8,11.3z M242.4,8.6 c0,0-2.4-0.2-5.6-0.9c-3.2-0.8-10.3-2.8-15.1-3.5c-8.2-1.1-15.8,0-15.1,0.1c0.8,0.1,9.6-0.6,17.6,1.1c3.3,0.7,9.3,2.2,12.4,2.7  C239.9,8.7,242.4,8.6,242.4,8.6z M185.2,8.5c1.7-0.7-13.3,4.7-18.5,6.1c-2.1,0.6-6.2,1.6-10,2c-3.9,0.4-8.9,0.4-8.8,0.5 fc0,0.2,5.8,0.8,11.2,0c5.4-0.8,5.2-1.1,7.6-1.6C170.5,14.7,183.5,9.2,185.2,8.5z M199.1,6.9c0.2,0-0.8-0.4-4.8,1.1 c-4,1.5-6.7,3.5-6.9,3.7c-0.2,0.1,3.5-1.8,6.6-3C197,7.5,199,6.9,199.1,6.9z M283,6c-0.1,0.1-1.9,1.1-4.8,2.5s-6.9,2.8-6.7,2.7  c0.2,0,3.5-0.6,7.4-2.5C282.8,6.8,283.1,5.9,283,6z M31.3,11.6c0.1-0.2-1.9-0.2-4.5-1.2s-5.4-1.6-7.8-2C15,7.6,7.3,8.5,7.7,8.6  C8,8.7,15.9,8.3,20.2,9.3c2.2,0.5,2.4,0.5,5.7,1.6S31.2,11.9,31.3,11.6z M73,9.2c0.4-0.1,3.5-1.6,8.4-2.6c4.9-1.1,8.9-0.5,8.9-0.8   c0-0.3-1-0.9-6.2-0.3S72.6,9.3,73,9.2z M71.6,6.7C71.8,6.8,75,5.4,77.3,5c2.3-0.3,1.9-0.5,1.9-0.6c0-0.1-1.1-0.2-2.7,0.2    C74.8,5.1,71.4,6.6,71.6,6.7z M93.6,4.4c0.1,0.2,3.5,0.8,5.6,1.8c2.1,1,1.8,0.6,1.9,0.5c0.1-0.1-0.8-0.8-2.4-1.3    C97.1,4.8,93.5,4.2,93.6,4.4z M65.4,11.1c-0.1,0.3,0.3,0.5,1.9-0.2s2.6-1.3,2.2-1.2s-0.9,0.4-2.5,0.8C65.3,10.9,65.5,10.8,65.4,11.1 z M34.5,12.4c-0.2,0,2.1,0.8,3.3,0.9c1.2,0.1,2,0.1,2-0.2c0-0.3-0.1-0.5-1.6-0.4C36.6,12.8,34.7,12.4,34.5,12.4z M152.2,21.1    c-0.1,0.1-2.4-0.3-7.5-0.3c-5,0-13.6-2.4-17.2-3.5c-3.6-1.1,10,3.9,16.5,4.1C150.5,21.6,152.3,21,152.2,21.1z"></path><path class="elementor-shape-fill" d="M269.6,18c-0.1-0.1-4.6,0.3-7.2,0c-7.3-0.7-17-3.2-16.6-2.9c0.4,0.3,13.7,3.1,17,3.3   C267.7,18.8,269.7,18,269.6,18z"></path><path class="elementor-shape-fill" d="M227.4,9.8c-0.2-0.1-4.5-1-9.5-1.2c-5-0.2-12.7,0.6-12.3,0.5c0.3-0.1,5.9-1.8,13.3-1.2    S227.6,9.9,227.4,9.8z"></path><path class="elementor-shape-fill" d="M204.5,13.4c-0.1-0.1,2-1,3.2-1.1c1.2-0.1,2,0,2,0.3c0,0.3-0.1,0.5-1.6,0.4    C206.4,12.9,204.6,13.5,204.5,13.4z"></path><path class="elementor-shape-fill" d="M201,10.6c0-0.1-4.4,1.2-6.3,2.2c-1.9,0.9-6.2,3.1-6.1,3.1c0.1,0.1,4.2-1.6,6.3-2.6   S201,10.7,201,10.6z"></path><path class="elementor-shape-fill" d="M154.5,26.7c-0.1-0.1-4.6,0.3-7.2,0c-7.3-0.7-17-3.2-16.6-2.9c0.4,0.3,13.7,3.1,17,3.3   C152.6,27.5,154.6,26.8,154.5,26.7z"></path><path class="elementor-shape-fill" d="M41.9,19.3c0,0,1.2-0.3,2.9-0.1c1.7,0.2,5.8,0.9,8.2,0.7c4.2-0.4,7.4-2.7,7-2.6   c-0.4,0-4.3,2.2-8.6,1.9c-1.8-0.1-5.1-0.5-6.7-0.4S41.9,19.3,41.9,19.3z"></path><path class="elementor-shape-fill" d="M75.5,12.6c0.2,0.1,2-0.8,4.3-1.1c2.3-0.2,2.1-0.3,2.1-0.5c0-0.1-1.8-0.4-3.4,0    C76.9,11.5,75.3,12.5,75.5,12.6z"></path><path class="elementor-shape-fill" d="M15.6,13.2c0-0.1,4.3,0,6.7,0.5c2.4,0.5,5,1.9,5,2c0,0.1-2.7-0.8-5.1-1.4    C19.9,13.7,15.7,13.3,15.6,13.2z"></path></svg>
    <div class="container">
        <div class="row footer-nav">
            <div class="col-xs-12 col-sm-12 col-md-4 footer-menu footerabt">
                <p>Your like, comments is most recommended to increase our experience.</p>
                <ul class="list-unstyled social-links">
                    <li><a href="<?= $social_media[0]->fb ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
                    <li><a href="<?= $social_media[0]->wa ?>"><i class="fa fa-whatsapp" aria-hidden="true"></i></a> </li>
                    <li><a href="<?= $social_media[0]->tw ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
                    <li><a href="<?= $social_media[0]->li ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>
                    <li><a href="<?= $social_media[0]->yu ?>"><i class="fa fa-youtube" aria-hidden="true"></i></a> </li>
                    <li><a href="<?= $social_media[0]->inst ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a> </li>
                </ul>
                <div>&#169; 2020 Life Holidays</div>
            </div>
            <div class="col-xs-6 col-sm-3 col-md-2 footer-menu">
                <h4 class="cc-margin-top-0"><b>ABOUT US</b></h4>
                <ul class="list-unstyled">
                    <li> <a href="about.php">About us</a> </li>
                    <li> <a href="career.php">Career</a> </li>
                    <li> <a href="blog.php">Travel Blog</a> </li>
                    <li> <a href="testimonials.php">Testimonials</a> </li>
                    <li> <a href="sitemap.php">Sitemap</a> </li>
                    <li> <a href="award.php">Awards</a> </li>
                </ul>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-2 footer-menu">
                <h4 class="cc-margin-top-0"><b>QUICK LINKS</b></h4>
                <ul class="list-unstyled">
                    <li> <a href="terms.php">Terms of Use</a> </li>
                    <li> <a href="tips.php">Travels Tips</a> </li>
                    <li> <a href="refund-policy.php">Refund Policy</a> </li>
                    <li> <a href="cancellations-policy.php">Cancellations </a> </li>
                    <li> <a href="privacy-policy.php">Privacy Policy</a> </li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-5 col-md-4 footer-menu">
                <h4 class="cc-margin-top-0"><b>CONTACT US</b></h4>
                <address>
                    <div class="add-block"><i class="fa fa-map-marker"></i> <?= $adminDetail['app_address'] ?></div>
                    <div class="add-block"><i class="fa fa-phone"></i> <a href="tel:(<?= $contCode['phone_code'] ?>) - <?= $adminDetail['app_contact_no'] ?>">(<?= $contCode['phone_code'] ?>) - <?= $adminDetail['app_contact_no'] ?></a></div>
                    <div class="add-block"><a target="_blank" href="mailto:<?= $adminDetail['app_email_id'] ?>"><i class="fa fa-envelope"></i><?= $adminDetail['app_email_id'] ?></a></div>
                </address>
            </div>
        </div>
    </div>
    <div class="bottom-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <span class="mute-text">Website Intelligence By -</span> <a href="index.php" target="_blank" class="webEntillBy"><?= $adminDetail['app_name'] ?></a>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="modal-popup"></div>
<div class="sentEnquiry">
    <div class="sent-enq-btn primaryback  cc-margin-bottom-15"><i class="fa fa-envelope" aria-hidden="true"></i> Send Enquiry</div>
    <div class="clearfix"></div>
    <div class="panel-body cc-padding-top">
        <div class="row enq-head primaryback cc-margin-bottom-15"><h4 class="margin0">Quick Enquiry</h4></div>
        <form id="holidayp">
                        <input type="hidden" name="sessionval" id="sessionval" value="HjS"/>
            <div class="form-group"><label for="enqname" class="lb1">Name</label><input type="text" id="enqname" class="form-control" onkeyup="chekname();" maxlength="30" placeholder="Enter Name"></div>
            <div class="form-group"><label for="mobile" class="lb1">Mobile No</label><input type="text" id="mobile" class="form-control" onkeyup="chekmob();" maxlength="10" placeholder="Enter Mobile No"></div>
            <div class="form-group"><label for="enqemail" class="lb1">Email</label><input type="text" id="enqemail" class="form-control"  maxlength="50" placeholder="Enter Email"><span id="erremail"></span></div>
            <div class="form-group"><label for="message" class="lb1">Message</label><textarea  id="message" class="form-control" onkeyup="chekmessage();" rows="3" maxlength="150" placeholder="Enter Message"></textarea><span id="errmsg"></span></div>
            <button type="button" id="enqsubmit" class="btn btn-primary sendEnquirybtn">Submit</button><button type="button" id="colla-enquiry" class="btn btn-default">Close</button>
        </form>
    </div>
</div>

<!--End of Tawk.to Script-->
<script>
    function check(){
        var exampleInputAmount = $("#exampleInputAmount").val();
        if(exampleInputAmount == ""){alert("Please Enter City Name"); return false;}
        else{return true;}
    }
    $(".sent-enq-btn").click(function(){ $(this).hide();$(".sentEnquiry .panel-body").slideToggle();});
    $("#colla-enquiry").click(function(){$(".sent-enq-btn").show();$(".sentEnquiry .panel-body").slideToggle();});
    function chekname(){
        var name = $("#enqname").val(); var alphanumeric = /^[0-9a-zA-Z]+$/; var onlyalphabets = /[^\w\s]/gi; var inp=$("#enqname").val(); var last=inp.slice(-1); restrictspecialchars = /[`~!@#$%^&*()_|+\-=?;:'",.<>\{\}\[\]\\\/]/gi; var isSplChar = restrictspecialchars.test(name);
        if(isSplChar){
            var no_spl_char = name.replace(/[`~!@#$%^&*()_|+\-=?;:'",.<>\{\}\[\]\\\/]/gi, '');
            $("#enqname").val(no_spl_char);
        } else if(isNaN(last)==false&&last!=" "){
            var newstr = inp.slice(0, -1);
            $("#enqname").val(newstr);
        } else if(name.length<=2){
            $("#enqname").css("border","1px solid red");
            $("#errmsg").html("Enter min. 3 character").css("color","red");
        } else if(name.length>=3){
            $("#enqname").css("border-color","grey");
            $("#errmsg").html("");
        }
    }
    function chekmob(){
        var mobile = $("#mobile").val();
        if(isNaN(mobile)){ var newstr = mobile.slice(0, -1); $("#mobile").val(newstr); }
        else if (!(mobile.charAt(0) == "9" || mobile.charAt(0) == "8" || mobile.charAt(0) == "7")){
            $("#mobile").css("border", "1px solid red"); $("#errmsg").html("No should start with 7,8 or 9").css("color","red");
        } else if(mobile.length!=10){
            $("#mobile").css("border", "1px solid red"); $("#errmsg").html("Please check the No").css("color","red");
        } else{
            $("#mobile").css("border", "1px solid #BDBDBD"); $("#errmsg").html("");
        }
    }
    $('#enqemail').on('keyup', function(){
        var email = $("#enqemail").val();
        var patt = new RegExp(/^[a-zA-Z0-9._\-]+@[a-zA-Z.\-]+\.[a-zA-Z]{1,4}$/);
        var res = patt.test(email);
        if(res){ $("#erremail").html(" "); } else{$("#erremail").html("Please enter valid email ").css('color', 'red');}
    });
    function chekmessage(){
        var message = $("#message").val();
        if(message==""){
            $("#message").css("border", "1px solid red"); $("#errmsg").html("Please enter message").css("color","red");
        } else if(message.length<=6){
           $("#message").css("border","1px solid red"); $("#errmsg").html("Enter min. 6 character").css("color","red");
        } else if(message.length>=3){
            $("#message").css("border-color","grey"); $("#errmsg").html("");
        }
    }

    $("#enqsubmit").click(function(){
    var name = $("#enqname").val(); var mobile = $("#mobile").val(); var email = $("#enqemail").val(); var patt = new RegExp(/^[a-zA-Z0-9._\-]+@[a-zA-Z.\-]+\.[a-zA-Z]{1,4}$/); var res = patt.test(email); var message = $("#message").val(); var sessionval = $("#sessionval").val();
    if(name==""){$("#enqname").css("border-color","red");}
    else if(mobile==""){$("#mobile").css("border-color","red");}
    else if(!res){$("#erremail").html("Please enter valid email ").css('color', 'red');}
    else if(message==""){$("#message").css("border-color","red");}
    else{
        $.ajax({
           url : "------",
           type : "post",
           data : {name:name, mobile:mobile, email:email, message:message, sessionval:sessionval, action:"sendotp"},
           success : function(res){
                $("#enqsubmit").attr('disabled',false)
                $("#enqsubmit img").remove();
                if(res==0 ){$("#errmsg").html("Message Not Sent").css("color","red");}
                else{$("#errmsg").fadeIn();
                    location.href = "contact-thank-youcc41.html?reqid="+res;
                }
            }
        });
    }
});

</script><script src="js/slider/owl.carousel.min.js"></script>
<script>
    $(document).ready(function($) {$('.fadeOut').owlCarousel({items: 1,nav: false,dots:false,animateOut: 'fadeOut',loop: true,margin: 0,autoplay: true,autoplayTimeout: 3000});});
    $(document).ready(function() {
        var slider= $('.owlthumbslider');
        var amountHeaderImages = slider.find('img').length;
        slider.owlCarousel({ loop: (amountHeaderImages > 3),nav: false,margin: 20,dots:false,autoplay: true,autoplayTimeout: 3000,autoplayHoverPause: true,responsive: {0: {items: 1},600: {items: 2},960: {items: 3},1200: {items: 3}} });
    });
    function load(){$('.testimonial-owl').owlCarousel({items: 1,nav: true,margin: 0,dots:false});};
    load();
</script>