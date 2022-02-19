/* START animated progressbar FILE */
$(document).ready(function() {
    $(".progress-bar").ProgressBar();
});
/* START Stiky Menu FILE */
$(document).ready(function() {

    $(".js-service-section1").waypoint(function(direction) {
        if (direction == "down") {
            $("nav").addClass("sticky")
        } else {
            $("nav").removeClass("sticky")
        }
    });

});
/* END Stiky Menu FILE */
/* Start mobile Menu FILE */
function openNav() {
    document.getElementById("mynav").style.width = "100%";
}

function closeNav() {
    document.getElementById("mynav").style.width = "0%";
}