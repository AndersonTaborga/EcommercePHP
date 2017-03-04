
<?php include_once("header.php");?>
<link rel="stylesheet" href="lib/plyr/dist/plyr.css">

    <section>

        <div id="call-to-action">

            <div class="container">

                <div class="row text-center">
                    <h2>Videos</h2>
                    <hr>
                </div>

                <div class="row">
                    <div class="player">
                        <video src="mp4/highlights.mp4" controls poster="img/highlights.jpg"></video>
                    </div>
                    <input type="range" min="0" id="volume" max="1" step="0.01" value="1">
                    <button type="button" id="btn-play-pause" class="btn btn-success">PLAY</button>

                </div>

                <div id="news" class="container">
                    <div class="row text-video">
                        <h2>latest news</h2>
                        <hr>
                    </div>
                    <div class="row thumbnails owl-carousel owl-theme">
                        <div class="col-md-3 item" data-video="highlights">
                            <img src="img/highlights" alt="Noticia">
                            <h3>Highlights</h3>

                        </div>
                        <div class="col-md-3 item" data-video="Orlando_City_Foundation_2015">
                            <img src="img/Orlando_City_Foundation_2015" alt="Noticia">
                            <h3>Orlando City Foundation 2015</h3>

                        </div>
                        <div class="col-md-3 item" data-video="highlights">
                            <img src="img/highlights" alt="Noticia">
                            <h3>Highlights</h3>

                        </div>
                        <div class="col-md-3 item" data-video="Orlando_City_Foundation_2015">
                            <img src="img/Orlando_City_Foundation_2015" alt="Noticia">
                            <h3>Orlando City Foundation 2015</h3>

                        </div>
                        <div class="col-md-3 item" data-video="highlights">
                            <img src="img/highlights" alt="Noticia">
                            <h3>Highlights</h3>

                        </div>
                        <div class="col-md-3 item" data-video="Orlando_City_Foundation_2015">
                            <img src="img/Orlando_City_Foundation_2015" alt="Noticia">
                            <h3>Orlando City Foundation 2015</h3>

                        </div>
                        <div class="col-md-3 item" data-video="highlights">
                            <img src="img/highlights" alt="Noticia">
                            <h3>Highlights</h3>

                        </div>
                        <div class="col-md-3 item" data-video="Orlando_City_Foundation_2015">
                            <img src="img/Orlando_City_Foundation_2015" alt="Noticia">
                            <h3>Orlando City Foundation 2015</h3>

                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>



<?php include_once("footer.php");?>
    <script src="lib/plyr/dist/plyr.js"></script>


    <script>
        (function() {
            // This is the bare minimum JavaScript. You can opt to pass no arguments to setup.
            // e.g. just plyr.setup(); and leave it at that if you have no need for events
            var instances = plyr.setup({
                // Output to console
                debug: true
            });

            // Get an element
            function get(selector) {
                return document.querySelector(selector);
            }

            // Custom event handler (just for demo)
            function on(element, type, callback) {
                if (!(element instanceof HTMLElement)) {
                    element = get(element);
                }
                element.addEventListener(type, callback, false);
            }

            // Loop through each instance
            instances.forEach(function(instance) {
                // Play
                on('.js-play', 'click', function() {
                    instance.play();
                });

                // Pause
                on('.js-pause', 'click', function() {
                    instance.pause();
                });

                // Stop
                on('.js-stop', 'click', function() {
                    instance.stop();
                });

                // Rewind
                on('.js-rewind', 'click', function() {
                    instance.rewind();
                });

                // Forward
                on('.js-forward', 'click', function() {
                    instance.forward();
                });
            });
        })();
    </script>
</body>

</html>
