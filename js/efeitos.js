$(document).ready(function() {

    $("#thumbnails").owlCarousel({
        navigation: true
    });

    $("#logotipo").on("mouseover", function() {
        console.log("Passou o mouse no logotipo!!");
    });


    $("#thumbnails .item").on("click", function() {
        $("video").attr({
            "src": "mp4/" + $(this).data('video') + ".mp4",
            "poster": "img/" + $(this).data('video') + ".jpg"
        });
    });

    $("#volume").on("mousemove", function() {
        $("video")[0].volume = $(this).val();
    });

    $("#btn-play-pause").on("click", function() {


        var video = $("video")[0];

        if ($(this).hasClass("btn-success")) {
            $(this).text("STOP");
            video.play();

        } else {
            $(this).text("PLAY");
            video.pause();

        }
        $(this).toggleClass("btn-success btn-danger");

    });
});
