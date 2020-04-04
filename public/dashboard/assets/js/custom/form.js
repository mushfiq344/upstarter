var default_trailer_embed = 'https://www.youtube.com/embed/Q4dfXFDctfQ';
var default_trailer = 'https://www.youtube.com/watch?v=Q4dfXFDctfQ';


function setting_trailer(url) {
    var regExp = /^.*(youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=|\&v=)([^#\&\?]*).*/;
    var match = url.match(regExp);

    if (match && match[2].length == 11) {
        document.getElementById('set_trailer').value = 'https://www.youtube.com/watch?v=' + match[2];
        document.getElementById('trailer_frame').src = 'https://www.youtube.com/embed/' + match[2];
    } else {
        //error
        document.getElementById('set_trailer').value = default_trailer;
        document.getElementById('trailer_frame').src = default_trailer_embed;
        alert(default_trailer_embed);
    }
}

function setting_poster(url) {

    if (url.trim().length != 0) {
        document.getElementById('set_poster').value = url;
        document.getElementById('poster_frame').src = url;
    }
}

function setting_cover(url) {
    if (url.trim().length != 0) {
        document.getElementById('set_cover').value = url;
        document.getElementById('cover_frame').src = url;
    }
}

