// var lastTarget = null;
// function isFile(evt) {
//     var dt = evt.dataTransfer;
//
//     for (var i = 0; i < dt.types.length; i++) {
//         if (dt.types[i] === "Files") {
//             return true;
//         }
//     }
//     return false;
// }
//

//
// window.addEventListener("dragleave", function (e) {
//     e.preventDefault();
//     if (e.target === lastTarget) {
//         $("#dropzone").css('visibility','hidden');
//         $("#dropzone").css('opacity','0');
//         $("#textnode").css('fontsize','42px');
//     }
// });
//
// window.addEventListener("dragover", function (e) {
//     e.preventDefault();
// });
//

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


function allowDrop(e) {
    e.preventDefault();
}

function drag(e) {
    e.dataTransfer.setData("text", e.target.id);
}



window.addEventListener("dragenter", function (e) {
    if (isFile(e)) {
        lastTarget = e.target;
        $("#dropzone").css('visibility','visible');
        $("#dropzone").css('opacity','1')
    }
});
window.addEventListener("dragleave", function (e) {
     e.preventDefault();
     if (e.target === lastTarget) {
         $("#dropzone").css('visibility','visible');
         $("#dropzone").css('opacity','1')
     }
 });

 window.addEventListener("dragover", function (e) {
     e.preventDefault();
 });

function drop(e) {
    e.preventDefault();
    var i = 0 ;
        while (i < e.dataTransfer.files.length) {
             $("#text").append("<b>File selected:</b><br>" + e.dataTransfer.files[i].name);
             i++;
        }
}
