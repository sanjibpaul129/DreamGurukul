<footer class="footer-div pos-rel lazy" data-src="assets/images/ftrbg.webp">
	<div class="container">
		<div class="row">
			<img data-src="assets/images/jaingroup.webp" class="lazy jaingroup">
			<div class="ftrbox">
				<div class="col1">
					<div class="ftrtxt">Corporate Office: <br>Jain Tower, 44/2A, Hazra Road <br>Near Dover Road Crossing, Kolkata - 700019</div>
					<div class="ctabx">
						<a class="phone" href="tel:+913340319999"><span><img data-src="assets/images/call.svg" class="lazy"></span>+91 33 4031 9999</a>
						<a class="phone" href="mailto:www.thejaingroup.com"><span><img data-src="assets/images/mail.svg" class="lazy"></span>www.thejaingroup.com</a>
					</div>
				</div>
				<img data-src="assets/images/ftrbr.svg" class="lazy hidden-xs">
				<div class="col1 col2">
					<div class="ftrtxt">Project Office: <br> Doltala Rd, Ward 16, Madhyamgram, <br>Kolkata, West Bengal - 700132</div>
					<div class="ctabx">
						<a class="phone" href="tel:+919681411411"><span><img data-src="assets/images/call.svg" class="lazy"></span>+91 9681 411 411</a>
						<a class="phone" href="mailto:www.thejaingroup.com"><span><img data-src="assets/images/mail.svg" class="lazy"></span>www.thejaingroup.com</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container marketcont">
		<div class="row">
			<div class="col-12">
				<div class="footer-bottom col-12">
					<div class="rera col-8 col-xs-12">
						<p>© <span id="year"></span> - All Rights Reserved | <br class="visible-xs"><span class="bold">Marketed By <a href="https://beyondwalls.com" target="_blank" class="text-brown" data-event-category="Footer" data-event-action="Click" data-event-name="BeyondWalls">BeyondWalls</a></span> | <br class="visible-xs"><a href="privacy-policy.php" target="_blank" class="text-brown" data-event-category="Footer" data-event-action="Click" data-event-name="Privacy Policy">Privacy Policy</a></p>
					</div>
					<div class="marketed col-4 col-xs-12">
						<!-- <p><span class="bold">Marketed By <a href="https://beyondwalls.com" target="_blank" class="text-brown" data-event-category="Footer" data-event-action="Click" data-event-name="BeyondWalls">BeyondWalls</a></span></p> -->
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<div class="col-12 footer-call-enquire">
<div class="col-6 ">
<a href="" id="click_to_call" data-event-category="Footer" data-event-action="click" data-event-name="Call">Call Us</a>
</div>
	<div class="col-6 enq">
	<div class="" onclick="document.getElementById('light').style.display='block';document.getElementById('fade').style.display='block'" data-event-category="Footer" data-event-action="click" data-event-name="ENQUIRE NOW" style="color:#fff;border-left:1px solid">ENQUIRE NOW</div>
	</div>
	
</div>
<script>
        document.addEventListener('DOMContentLoaded', function () {
            function getParameterByName(name) {
                name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
                var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
                    results = regex.exec(window.location.search);
                return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
            }

            var mobile = getParameterByName('mobile');
            var callLink = document.getElementById('click_to_call');

            // Use the provided mobile number or default to '+919513436882'
            var phoneNumber = mobile || '+919513436882';

            callLink.href = "tel:" + phoneNumber;
            callLink.style.display = "block";
        });
    </script>

<script src="assets/js/jquery.js"></script>
<!-- <script type="text/javascript" src="assets/js/jquery.colorbox-min.js"></script> -->
<script type="text/javascript" src="assets/js/all.js"></script>
<script defer src="assets/js/jquery.validate.js"></script>
<script>
	document.getElementById("year").innerHTML = new Date().getFullYear();
</script>

<script>
	$(document).ready(function() {
		if (sessionStorage.getItem("Form_status") == "submitted"){
			$('#enquiryForm').hide();
			$('.cont-desc').hide();
			$('#enquirySuccess').show();
			$('.floatingbtn').css('display','none');
			$('.fp-wrapper .plans_img').css('pointer-events','unset');
			$('.fp-wrapper .plans_img img').css('filter','unset');
		}

		$.validator.setDefaults({
			submitHandler: function() {

				$(".enquire-btn-now").attr("disabled", "disabled");
				$(".enquire-btn-now").val("Please Wait");

				// $('#enquirySuccess').show();

				try {
					dataLayer.push({
						'event': 'form_submitted'
					});
				} catch (err) {}
				// debugger;
				$.ajax({
					type: "POST",
					url: "formsubmit.php",
					data: $("#enquiryForm").serialize(),
					success: function(respond_message) {
						sessionStorage.setItem("Form_status","submitted");
						console.log(respond_message);
						var email = $("#email").val();
						var phone = $("#phone").val();
						trackecommerce_ga4("G-KKJGBYLED8", "", "Jain Group", email.replace(/\*|/g, ''), phone.replace(/\*|/g, ''));
						$('#enquiryForm').hide();
						$('.cont-desc').hide();
						$('#enquirySuccess').show();
						$('.floatingbtn').css('display','none');
						$('.fp-wrapper .plans_img').css('pointer-events','unset');
						$('.fp-wrapper .plans_img img').css('filter','unset');
						if (respond_message != "") {


							if (download_brochure == 1) {
								var link = document.createElement('a');
								link.href = "./assets/images/Jain_Group_Dream_Gurukul_Brochure.pdf";
								link.download = "Jain_Group_Dream_Gurukul_Brochure.pdf";
								link.click();
							} else {
									window.location.href = "thankyou.php";
									// window.open('thankyou.php', '_blank'); 
							}
						}
					},
					error: function(respond_message) {}
				});
			}
		});
		$("#enquiryForm").validate();
	});
</script>

<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-PZRZDBQC" height="0" width="0"
style="display:none;visibility:hidden"></iframe></noscript>
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-TS9HG4N" height="0" width="0"
style="display:none;visibility:hidden"></iframe></noscript>

    <script>
		  setTimeout(function () {

              (function (w, d, s, l, i) {
                w[l] = w[l] || []; w[l].push({
                  'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
                }); var f = d.getElementsByTagName(s)[0],
                  j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
                    '//www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
              })(window, document, 'script', 'dataLayer', 'GTM-PZRZDBQC');

			  (function (w, d, s, l, i) {
                w[l] = w[l] || []; w[l].push({
                  'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
                }); var f = d.getElementsByTagName(s)[0],
                  j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
                    '//www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
              })(window, document, 'script', 'dataLayer', 'GTM-TS9HG4N');

            }, 5000);
	</script>
</body>

</html>