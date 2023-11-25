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
<section class="sec2 padding lazy" data-src="assets/images/sec2bg.webp">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-xs-12 " style="height: 50vh;">
                <h2 class="text-reg text-center">
                   
                    <div class="sec-subdesc text-center" style="display: block;"><span>Thankyou!</span></div>
                </h2>
                <h3>
                    <p class="sec-desc text-center" >Your response has been received.

                    </p>
                        <input type="button" class="enquire-btn-now submit-btn theme-btn text-center" id="go-home" value="Home" data-event-category="Button" data-event-action="Click" data-event-name="Submit Enquire Form" >
                    <br>
                    
                </h3>

              
            </div>
            <div class="col-3 hidden-xs">&nbsp;</div>
        </div>
        
    </div>
</section>
<?php include 'footer.php' ?>

<script>
    $("#go-home").click(function(){
        url = window.location.origin;
        window.location.href = url
    })
</script>