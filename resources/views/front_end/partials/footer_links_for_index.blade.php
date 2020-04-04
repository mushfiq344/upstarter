<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{url('front_end/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{url('front_end/js/propper.js')}}"></script>
<script src="{{url('front_end/js/bootstrap.min.js')}}"></script>
<script src="{{url('front_end/vendors/bootstrap-selector/js/bootstrap-select.min.js')}}"></script>
<script src="{{url('front_end/vendors/wow/wow.min.js')}}"></script>
<script src="{{url('front_end/vendors/sckroller/jquery.parallax-scroll.js')}}"></script>
<script src="{{url('front_end/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
<script src="{{url('front_end/vendors/nice-select/jquery.nice-select.min.js')}}"></script>
<script src="{{url('front_end/vendors/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{url('front_end/vendors/isotope/isotope-min.js')}}"></script>
<script src="{{url('front_end/vendors/magnify-pop/jquery.magnific-popup.min.js')}}"></script>
<script src="{{url('front_end/js/plugins.js')}}"></script>
<script src="{{url('front_end/vendors/scroll/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{url('front_end/vendors/multiscroll/jquery.easings.min.js')}}"></script>
<script src="{{url('front_end/vendors/multiscroll/multiscroll.responsiveExpand.limited.min.js')}}"></script>
<script src="{{url('front_end/vendors/multiscroll/jquery.multiscroll.extensions.min.js')}}"></script>
<script src="{{url('front_end/js/main.js')}}"></script>
<script>
    function inc_appli(id,type,link) {
        $.ajax({
            data: {id: id,type:type},
            type: "GET",
            url: '{{route('inc_application')}}',
            cache: false,
            success: function (resp) {
                window.open(link, '_blank');
            }
        });

    }
    function subscribe() {
        alert('g');
        var text=document.getElementById("number").value;

    }
</script>