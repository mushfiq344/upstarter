$(document).ready(function() {
    window.onscroll = function() { myFunction() };

    var navbar = document.getElementById("main_navbar");
    var sticky = navbar.offsetTop;

    function myFunction() {
        console.log(window.pageYOffset + "         " + sticky);
        if (window.pageYOffset > sticky) {
            navbar.classList.remove("navbar-custom");
            navbar.classList.add("sticky");
            navbar.classList.add("shadow");
        } else {
            navbar.classList.remove("sticky");
            navbar.classList.remove("shadow");
            navbar.classList.add("navbar-custom");


        }
    }
    // change navbar icon
    $("#navbar-toggler").click(function() {


        var background = $("#navbar-toggler-icon").html();

        if (!$("#navbar-toggler").hasClass("collapsed")) {
            $("#navbar-toggler-icon").html(`<i class="fa fa-bars"></i>`);
        } else {
            $("#navbar-toggler-icon").html(`<i class="fa fa-times"></i>`);
        }
    });


});