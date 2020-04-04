<script type="text/javascript">

    $(document).ready(function () {

        $('.summernote').summernote({

            height: 300,
            callbacks: {
                onMediaDelete: function (target) {
                    // alert(target[0].src)
                    deleteFile(target[0].src);
                }
            }

        });

    });

    function deleteFile(src) {
        $.ajax({
            data: {src: src},
            type: "GET",
            url: '{{route('delete_image')}}',
            cache: false,
            success: function (resp) {
                console.log(resp);
            }
        });
    }

    // Add the following code if you want the name of the file appear on select
    $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        readURL(this);
    });

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                if(input.id=='choose_logo'){
                    $('#logoPreview').attr('src', e.target.result);
                }else {
                    $('#coverPreview').attr('src', e.target.result);
                }
            };
            reader.readAsDataURL(input.files[0]);
        }
    }


</script>