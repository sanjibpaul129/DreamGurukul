<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || []; w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            }); var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
                    'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-K542CGGV');</script>
    <!-- End Google Tag Manager -->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="./index.css" /> -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&display=swap" rel="stylesheet">
    <title>Dream Gurukul</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: Arial, sans-serif;
        }

        header {
            background-image: url("testimonial_images/texture.jpg");
            background-repeat: no-repeat;
            background-size: 130%;
            position: fixed;
            display: flex;
            flex-direction: row;
            width: 100%;
            top: 0;
            padding: 1.5% 1% 1% 2.5%;
            z-index: 1;
        }

        header img {
            height: 60px;
            margin-right: 32%;
            mix-blend-mode: multiply;
        }

        .jain-group-logo {
            width: 200px;
        }

        .dream_gurukul_logo {
            width: 120px;
        }

        .container {
            background-image: url("testimonial_images/texturedark.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            display: flex;
            flex-direction: row;
            margin: 100px 0 59px 0;
            padding: 0;
        }

        .gurus-pic {
            width: 90%;
            margin: 5%;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 15px;
        }

        .left-container {
            backdrop-filter: blur(5px);
            background-color: rgba(255, 255, 255, 0.1);
            height: 100%;
            width: 60%;
            min-width: 300px;
            border-radius: 20px;
            margin: 1.5% 1.7%;
        }

        .left-container h3 {
            color: #f1f1f1;
            font-size: medium;
        }

        .left-container h2 {
            color: #f1f1f1;
            margin: 5% 0;
            padding: 0 6%;
        }

        .left-container img {
            width: 90%;
        }

        b {
            font-weight: 800;
            letter-spacing: 0.5px;
        }

        .guru-description {
            margin: 0 0 6% 0;
        }

        .gallery {
            display: flex;
            flex-direction: column;
            padding-top: 1.5%;
            margin-bottom: 2%;

        }

        .gallery h2 {
            color: white;
            padding: 2% 0 0 1%;

        }

        .video {
            background-color: rgba(255, 255, 255, 0.1);
            display: flex;
            flex-direction: row;
            transition: all 0.3s ease-in-out;
            backdrop-filter: blur(5px);
            width: 95%;
            margin-top: 1%;
            border-radius: 20px;
        }

        .video:hover {
            background-color: rgba(255, 255, 255, 0.3);
            cursor: pointer;
        }

        .video p {
            color: white;
            font-size: 1.3rem;
            font-weight: 600;
            margin: 2% 6% 5% 2%;
        }

        .gallery img {
            width: 20%;
            height: 90%;
            border-radius: 15px;
            margin: 10px;
            cursor: pointer;
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 80%;
            height: 80%;
            margin: 5% 10%;
            border-radius: 20px;
            overflow: auto;
            background-color: rgb(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.9);
        }

        .modal-content {
            margin: auto;
            display: block;
            margin-top: 3.5%;
            border-radius: 12px;
            width: 80%;
            height: 85%;
        }

        .close {
            position: absolute;
            top: 15px;
            right: 35px;
            color: #f1f1f1;
            font-size: 40px;
            font-weight: bold;
            cursor: pointer;
        }



        .form-container {
            display: none;
            position: absolute;
            width: 100%;
            height: 100vh;
            padding: 35% 0;
            background-color: rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(10px);

        }

        .closeForm {
            position: absolute;
            top: 10%;
            right: 35px;
            background: transparent;
            border: none;
            color: #f1f1f1;
            font-size: 40px;
            font-weight: bold;
            cursor: pointer;
        }

        .form-container h1 {
            text-align: center;
            padding: 0 0 5% 0;
            color: #f1f1f1;
        }

        .form {
            margin: 0 0 0 5%;
            color: black;
        }

        input::placeholder {
            font-size: 15px;
            font-weight: 700;
            font-family: 'Open Sans', sans-serif;
        }

        textarea::placeholder {
            font-size: 19px;
            font-weight: 900;
            font-family: 'Open Sans', sans-serif;
        }

        #name,
        #email,
        #mobile {
            width: 90%;
            margin: 2% 0 0 0;
            height: 30px;
            border-radius: 5px;
            border: none;
            padding: 1% 2%;
            font-size: 18px;
            font-weight: bold;
        }

        #comment {
            height: 70px;
            width: 90%;
            margin: 2% 0 0 0;
            border-radius: 5px;
            border: none;
            padding: 3% 2%;
            font-size: 15px;

        }

        .form-submit {
            width: 50%;
            height: 50px;
            margin: 5% 22%;
            padding: 1% 2%;
            font-size: 18px;
            border-radius: 20px;
            color: white;
            border: 2px solid white;
            background-color: rgba(0, 0, 0, 0.3);
            backdrop-filter: blur(5px);
        }

        .enquiry-button {
            background-color: rgb(184,141,51);
            /* background-color: rgba(0, 0, 0, 0.7); */
            backdrop-filter: blur(10px);
            color: white;
            width: 120px;
            padding: 10% 5%;
            font-size: 17px;
            border: 2px solid white;
            border-radius: 10px;
            margin-top: 1%;
            /* color: #b88d33; */
        }


        .fixed-icons {
            background-image: url("testimonial_images/texture.jpg");
            background-repeat: no-repeat;
            background-size: 130%;
            display: flex;
            flex-direction: row;
            position: fixed;
            bottom: 0;
            justify-content: space-around;
            width: 100%;
            height: 55px;
            padding-top: 1%;
            margin-left: 1.5%;

            /* border: 2px solid red; */
        }

        .whatsapp_icon , .call_icon{
            margin-top: 1%;
        }

        .call_icon {
            margin-left: 2%;
           
        }


        /* Rest of your CSS */


        @media (max-width: 768px) {
            header img {
                height: 43px;
                mix-blend-mode: multiply;
            }

            .jain-group-logo {
                width: 130px;
            }

            .dream_gurukul_logo {
                width: 120px;
            }

            .container {
                background-image: url("testimonial_images/texturedarkmobile.jpg");
                background-repeat: no-repeat;
                background-size: cover;
                flex-direction: column;
                margin-top: 52px;
            }

            .left-container {
                width: 100%;
                min-width: 300px;
                border-radius: 0;
                margin: 0;
                padding-top: 1.5%;
                border-bottom: 2px solid white;
            }

            .left-container h3 {
                margin: 2% 6%;
                font-size: 15px;
            }

            .left-container .description {
                margin: 6% 0 0 0;
                padding: 0 6% 6%;
                font-size: 1.1rem;
            }

            .gallery {
                margin: 0 2.5% 7% 2.5%;
            }

            .gallery h2 {
                margin: 2% 0 1% 2%;
                font-size: 24px;
                font-weight: 700;
            }

            .video img {
                width: 55%;
                height: 90%;
                border-radius: 15px;
                left: 0;
            }

            .video {
                width: 100%;
                margin-top: 3%;
                border-radius: 20px;
                text-align: left;
                align-items: center;
            }

            .video p {
                font-size: 18px;
                font-weight: 600;
            }

            .modal {
                justify-content: center;
                align-items: center;
                width: 95%;
                height: 35.5%;
                margin: 2.5%;
            }

            .modal-content {
                margin: auto;
                display: block;
                margin-top: 3.5%;
                border-radius: 12px;
                width: 90%;
                height: 85%;
            }

        }

        @media (max-width: 480px) {
            body {
                font-size: 12px;
                /* even smaller font size for very small screens */
            }
        }
    </style>
</head>

<body>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K542CGGV" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <header>
        <!-- <img class="jain-group-logo" src="jain-group-logo.png" alt=""> -->
        <img class="dream_gurukul_logo" src="testimonial_images/dream_gurukul_logo.png" alt="">
    </header>
    <div class="container">
        <div class="left-container">
            <img class="gurus-pic" src="testimonial_images/gurus.jpeg" alt="gurus">
            <h2>
                Testimonials of all the Gurus
            </h2>
        </div>
        <div class="gallery">
            <h2>Videos</h2>
            <div class="video" onclick="openModal('https://www.youtube.com/embed/8hINM2aXb8Y')">
                <img src="testimonial_images/ajoy.png" alt="Video 1">
                <p>Pt. Ajoy Chakrabarty</p>
            </div>
            <div class="video" onclick="openModal('https://www.youtube.com/embed/CMkGlkAq2h4')">
                <img src="testimonial_images/bhaichung.png" alt="Video 2">
                <p>Bhaichung Bhutia</p>
            </div>
            <div class="video" onclick="openModal('https://www.youtube.com/embed/bw9ugX0cgE4')">
                <img src="testimonial_images/mamata.png" alt="Video 3">
                <p>Mamata Shankar</p>
            </div>
            <div class="video" onclick="openModal('https://www.youtube.com/embed/vrWssxkhxXg')">
                <img src="testimonial_images/subhaprasanna.png" alt="Video 4">
                <p>Subhaprasanna Battacharjee</p>
            </div>
            <div class="video" onclick="openModal('https://www.youtube.com/embed/4bWFJfU5AYg')">
                <img src="testimonial_images/gurus_walking.png" alt="Video 5">
                <p>Walkthrough Video</p>
            </div>
        </div>
        <div class="fixed-icons">
            <div class="whatsapp_icon">
                <a href="https://wa.me/9330290724" id="click_to_whatsapp" target="_blank">
                    <i class="fa fa-whatsapp" aria-hidden="true" style="color: #1d5c44; font-size: 44px;"></i>
                </a>
            </div>
            <div class="enquire">
                <button class="enquiry-button">Enquire now</button>
            </div>
            <div class="call_icon">
                <a href="tel:9513436936" id="click_to_call">
                    <i class="fa fa-phone" aria-hidden="true" style="color: #1d5c44; font-size: 44px;"></i>
                </a>
            </div>
        </div>

        <div class="form-container">
            <h1>Enquiry Form</h1>
            <button class="closeForm">&times;</button>
            <form data-toggle="validator" action="testimonials_enquiry_form_submit.php" id="contactForm" method="post"
                class="form_background">
                <input id="utm_source" name="utm_source" type="hidden" value="">
                <input id="utm_medium" name="utm_medium" type="hidden" value="">
                <input type="text" id="name" placeholder="Name" name="name"><br>
                <input type="email" id="email" placeholder="Email" name="email"><br>
                <input type="tel" id="mobile" placeholder="Mobile" name="mobile"><br>
                <textarea id="comment" placeholder="Comment" name="comment" rows="4" cols="50"></textarea><br>
                <input class="form-submit" type="submit" value="Submit Enquiry">
            </form>
        </div>
    </div>


    <div id="myModal" class="modal">
        <span class="close">&times;</span>
        <iframe class="modal-content" id="video01" title="YouTube video player" allow="autoplay; fullscreen"
            allowfullscreen></iframe>
    </div>
    <script>
        function openModal(videoUrl) {
            var autoplayUrl = videoUrl + '?autoplay=1'; // Adding autoplay parameter
            document.getElementById('video01').src = autoplayUrl;
            document.getElementById('myModal').style.display = "block";
        }
        var modal = document.getElementById('myModal');
        var span = document.getElementsByClassName("close")[0];
        span.onclick = function () {
            modal.style.display = "none";
            document.getElementById('video01').src = "";
        }
        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
                document.getElementById('video01').src = "";
            }
        }
        document.querySelector('.enquiry-button').addEventListener('click', function () {
            document.querySelector('.form-container').style.display = 'block';
            document.querySelector('.enquiry-button').style.display = 'none';
            document.querySelector('.fixed-icons').style.display = 'none';
        });

        document.querySelector('.closeForm').addEventListener('click', function () {
            document.querySelector('.form-container').style.display = 'none';
            document.querySelector('.enquiry-button').style.display = 'block';
            document.querySelector('.fixed-icons').style.display = 'block';
        });


    </script>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            function getParameterByName(name) {
                name = name.replace(/[\[]/, "\[").replace(/[\]]/, "\]");
                var regex = new RegExp("[\?&]" + name + "=([^&#]*)"),
                    results = regex.exec(location.search);
                return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
            }
            var utm_source = getParameterByName('utm_source');
            var utm_medium = getParameterByName('utm_medium');
            document.getElementById("utm_source").value = utm_source.toString();
            document.getElementById("utm_medium").value = utm_medium.toString();
        });
    </script>
</body>

</html>