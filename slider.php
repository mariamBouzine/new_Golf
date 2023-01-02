<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Verdana, sans-serif;
        }

        .mySlides {
            display: none;
        }

        img {
            vertical-align: middle;
        }

        /* Slideshow container */
        .slideshow-container {
            max-width: 1000px;
            position: relative;
            margin: auto;
        }

        /* Caption text */
        .text {
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
        }

        /* Number text (1/3 etc) */
        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        .box_dot {
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: flex-end;
            justify-content: center;
            top: -27vh;
        }

        /* The dots/bullets/indicators */
        .dot {
            height: 15px;
            width: 15px;
            margin-top: 0.5rem !important;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        .active {
            background-color: #717171;
        }

        /* Fading animation */
        .fade {
            animation-name: fade;
            animation-duration: 1.5s;
        }

        @keyframes fade {
            from {
                opacity: .4
            }

            to {
                opacity: 1
            }
        }

        /* On smaller screens, decrease text size */
        @media only screen and (max-width: 300px) {
            .text {
                font-size: 11px
            }
        }
    </style>
</head>

<body>

    <h2>Automatic Slideshow</h2>
    <p>Change image every 2 seconds:</p>

    <div class="slideshow-container">

        <div class="mySlides fade">
            <img src="https://www.w3schools.com/w3css/img_nature_wide.jpg" style="width:100%">
        </div>

        <div class="mySlides fade">
            <img src="https://www.w3schools.com/w3css/img_snow_wide.jpg" style="width:100%">
        </div>

        <div class="mySlides fade">
            <img src="https://www.w3schools.com/w3css/img_mountains_wide.jpg" style="width:100%">
        </div>

    </div>
    <br>

    <div class="box_dot" style="text-align:center">
        <span class="dot active"></span>
        <span class="dot"></span>
        <span class="dot"></span>
    </div>

    <script>
        let slideIndex = 0;
        showSlides();

        function showSlides() {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            setTimeout(showSlides, 2000); 
        }
    </script>

</body>

</html>