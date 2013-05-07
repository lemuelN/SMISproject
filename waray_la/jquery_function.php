<!DOCTYPE html>
  <html>
           <head>
        <meta charset="UTF-8">
        <title>JS Slideshow</title>

        <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>

        <style type="text/css">

            .slide {
                height:200px;
                width:320px;
                position:absolute;
                opacity:0;
            }

            img {
                width:100%;
                height:100%;
            }   

            #slideshow {
                position:relative;
            }

            .active {
                opacity:1;
                transition:opacity 1s;
            }

            #nextBtn {
                display:block;
                float:left;
                height:25px;
                width:40px;
                background-color:black;
                margin-top:210px;
            }

        </style>

        <script type="text/javascript">

            window.addEventListener("load",onLoadWindow);

            var active_slide;
            var slides;

            function onLoadWindow(e) {
                var slideShow=document.getElementById("slideshow");
                slides=slideShow.getElementsByTagName("div");
                active_slide=0;

                slides[0].classList.add("active");

                //setInterval(nextSlide,10000);
                $("nextBtn").click(nextSlide);

            }

            function nextSlide () {
                slides[active_slide].classList.remove("active");
                active_slide++;

                active_slide%=3;  

                slides[active_slide].classList.add("active");
            }


        </script>

    </head>

    <body>
        <div id="slideshow">

            <div class="slide">
                <img src="IMG/bridge.jpg" alt="" title="" />
            </div>

            <div class="slide">
                <img src="IMG/leaf.jpg" alt="" title="" />
            </div>

            <div class="slide">
                <img src="IMG/road.jpg" alt="" title="" />
            </div>
</div>
    <div id="nextBtn"></div>

    </body>

</html>
