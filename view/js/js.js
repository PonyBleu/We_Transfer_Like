var lastTarget = null;
function isFile(evt) {
    var dt = evt.dataTransfer;

    for (var i = 0; i < dt.types.length; i++) {
        if (dt.types[i] === "Files") {
            return true;
        }
    }
    return false;
}

window.addEventListener("dragenter", function (e) {
    if (isFile(e)) {
        lastTarget = e.target;
        $("#dropzone").css('visibility','');
        $("#dropzone").css('opacity','1');
        $("#textnode").css('fontsize','48px');
    }
});

window.addEventListener("dragleave", function (e) {
    e.preventDefault();
    if (e.target === lastTarget) {
        $("#dropzone").css('visibility','hidden');
        $("#dropzone").css('opacity','0');
        $("#textnode").css('fontsize','42px');
    }
});

window.addEventListener("dragover", function (e) {
    e.preventDefault();
});

window.addEventListener("drop", function (e) {
    e.preventDefault();
    $("#dropzone").css('visibility','hidden');
    $("#dropzone").css('opacity','0');
    $("#textnode").css('fontsize','42px');

    var i = 0 ;
    while (i < e.dataTransfer.files.length) {
        $("#text").append("<b>File selected:</b><br>" + e.dataTransfer.files[i].name);
        i++;
    }

});
