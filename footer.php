<footer class="footer-div pos-rel lazy" data-src="assets/images/ftrbg.webp">
    <div class="container">
		<div class="row">
			<img data-src="assets/images/jaingroup.webp" class="lazy jaingroup">
			<div class="ftrbox">
				<div class="col1">
					<div class="ftrtxt">Corporate Office: <br>Jain Tower, 44/2A, Hazra Road <br>Near Dover Road Crossing, Kolkata - 700 019</div>
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
						<p>© <span id="year"></span> - All Rights Reserved | <br class="visible-xs"><span class="bold">Marketed By <a href="https://beyondwalls.com" target="_blank" class="text-brown" data-event-category="Footer" data-event-action="Click" data-event-name="BeyondWalls">BeyondWalls</a></span></p>
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
    <div class="col-6">
        <a data-event-category="Footer" data-event-action="click" data-event-name="Call"><span class="sell_do_virtual_numbers"></span></a>
    </div>
    <div class="col-6 enq">
        <div class="enquire-btn dbro open-form extLink mobile" data-event-category="Footer" data-event-action="click" data-event-name="Enquire Now" style="color:#fff;">Enquire Now</div>
    </div>
</div>

<script src="assets/js/jquery.js"></script>
<script type="text/javascript" src="assets/js/all.js"></script>
<script src="assets/js/jquery.validate.js"></script>
<script>document.getElementById("year").innerHTML = new Date().getFullYear();</script>

<script>
		$(document).ready(function () {

			$.validator.setDefaults({
				submitHandler: function () {

					$("#enquiryForm .submit").attr("disabled", "disabled");
					$('#enquiryForm').hide();
					$('#enquirySuccess').show();

					try { dataLayer.push({ 'event': 'form_submitted' }); } catch (err) { }
					// debugger;
					$.ajax({
						type: "POST",
						url: "formsubmit.php",
						data: $("#enquiryForm").serialize(),
						success: function (respond_message) {
							console.log(respond_message);
							var email = $("#email").val();
							var phone = $("#phone").val();
							trackecommerce_ga4("G-KKJGBYLED8", "", "Jain Group", email.replace(/\*|/g, ''), phone.replace(/\*|/g, ''));
						},
						error: function (respond_message) { }
					});

					// $(".bro-btn").attr({ "href": "mobile_brochure2.pdf", "target": "_blank" });
					// $(".bro-btn").removeClass("open-form");
					// if (flag == 1) {
					// 	$(".bro").css("display", "inline-block");
					// }
				}
			});
			$("#enquiryForm").validate();
		});

	</script>

	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PZRZDBQC"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TS9HG4N"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

	<script>
		setTimeout(function() {
			(function(w, d, s, l, i) {
				w[l] = w[l] || [];
				w[l].push({
					'gtm.start': new Date().getTime(),
					event: 'gtm.js'
				});
				var f = d.getElementsByTagName(s)[0],
					j = d.createElement(s),
					dl = l != 'dataLayer' ? '&l=' + l : '';
				j.async = true;
				j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
				f.parentNode.insertBefore(j, f);
			})(window, document, 'script', 'dataLayer', 'GTM-PZRZDBQC');

			(function(w, d, s, l, i) {
				w[l] = w[l] || [];
				w[l].push({
					'gtm.start': new Date().getTime(),
					event: 'gtm.js'
				});
				var f = d.getElementsByTagName(s)[0],
					j = d.createElement(s),
					dl = l != 'dataLayer' ? '&l=' + l : '';
				j.async = true;
				j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
				f.parentNode.insertBefore(j, f);
			})(window, document, 'script', 'dataLayer', 'GTM-TS9HG4N');
		}, 10000);
	</script>

</body>

</html>