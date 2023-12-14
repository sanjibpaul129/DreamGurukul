<?php include 'header.php' ?>
<style>
    .sticky-btn,.white_content,.black_overlay{
        display: none!important;
    }
    .submit-btn{
        outline: none;
        cursor: pointer;
    }
</style>

<section class="sec2 padding minh100 sec2-bg section-first">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-xs-12 " style="height: 50vh;">
                <h2 class="text-reg text-center">
                   
                    <div class="sec-subdesc text-center" style="display: block;"><span>Thankyou!</span></div>
                </h2>
                <h3>
                    <p class="sec-desc text-center" >Your response has been received.

                    </p>
                        <input type="button" class="enquire-btn-now submit-btn text-center" id="go-home" value="Home" data-event-category="Button" data-event-action="Click" data-event-name="Submit Enquire Form" >
                    <br>
                    
                </h3>

              
            </div>
            <div class="col-3 hidden-xs">&nbsp;</div>
        </div>
        
    </div>
</section>
<iframe src="https://trk.rythmworld.in/pixel?adid=6565eaf5d938ff71b771907d" scrolling="no" frameborder="0" width="1" height="1"></iframe>
    <iframe src="https://adgebra.co.in/Tracker/Conversion?p1=6913&p2=[order_Id]&p3=[product_Id]&p4=[cartvalue]&p5=[flag~custom_values]"width="0" height="0" frameborder="0"></iframe>


<?php include 'footer.php' ?>

<script>
    $("#go-home").click(function(){
        url = window.location.origin;
        window.location.href = url
    })
</script>