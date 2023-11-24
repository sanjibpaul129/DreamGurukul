<footer class="footer-div pos-rel lazy" data-src="assets/images/ftrbg.webp" style="height:100%">
	<div class="container">
		<div class="row">
			<img data-src="assets/images/jaingroup.webp" class="lazy jaingroup">
	</div>
</footer>

<script src="assets/js/jquery.js"></script>
<script type="text/javascript" src="assets/js/all.js"></script>
<script src="assets/js/jquery.validate.js"></script>
<script>
	document.getElementById("year").innerHTML = new Date().getFullYear();
</script>

<script>
	$(document).ready(function() {

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
						console.log(respond_message);
						var email = $("#email").val();
						var phone = $("#phone").val();
						trackecommerce_ga4("G-KKJGBYLED8", "", "Jain Group", email.replace(/\*|/g, ''), phone.replace(/\*|/g, ''));
						$('#enquiryForm').hide();
						if (download_brochure == 1) {
							var link = document.createElement('a');
							link.href = "./assets/images/Jain_Group_Dream_Gurukul_Brochure.pdf";
							link.download = "Jain_Group_Dream_Gurukul_Brochure.pdf";
							link.click();
						} else {
							window.location.href = "thankyou.php";
						}
					},
					error: function(respond_message) {}
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

<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PZRZDBQC" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TS9HG4N" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

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