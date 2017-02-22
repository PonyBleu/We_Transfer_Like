// $(document).ready(function() {
//
//     var lastTarget = null;
//     function isFile(e) {
//         var dt = e.dataTransfer;
//
//         for (var i = 0; i < dt.types.length; i++) {
//             if (dt.types[i] === "Files") {
//                 return true;
//             }
//         }
//         return false;
//     }
//
//
//     function allowDrop(e) {
//         e.preventDefault();
//     }
// 
//     function drag(e) {
//         e.dataTransfer.setData("text", e.target.id);
//     }
//
//
//
//     window.addEventListener("dragenter", function (e) {
//         if (isFile(e)) {
//             lastTarget = e.target;
//             $("#dropzone").css('visibility','visible');
//             $("#dropzone").css('opacity','1')
//         }
//     });
//     window.addEventListener("dragleave", function (e) {
//          e.preventDefault();
//          if (e.target === lastTarget) {
//              $("#dropzone").css('visibility','hidden');
//              $("#dropzone").css('opacity','0')
//          }
//      });
//
//      window.addEventListener("dragover", function (e) {
//          e.preventDefault();
//      });
//
//     window.addEventListener("drop", function(e) {
//
//         e.preventDefault();
//         $("#dropzone").css('visibility','hidden');
//         $("#dropzone").css('opacity','0');
//         var files =e.dataTransfer.files;
//         $.ajax({
//             type : "POST",
//             url: 'upload.php' ,
//             data: $files ,
//             success: function(){
//                 console.log("pouet");
//             },
//             error: function(){
//                 console.log("raté !");
//             }
//         });
//     }, false);
//
// })


    // var i = 0 ;
    //     while (i < e.dataTransfer.files.length) {
    //          $("#text").append("<b>File selected:</b><br>" + e.dataTransfer.files[i].name);
    //          console.log(e.dataTransfer.files[i]);
    //          i++;
    //     }


        // var donnee = $("#formulaire").serialize() ;



    // $.ajax({
    //    url: $("#formulaire").attr('action'),
    //    type: $("#formulaire").attr('method'),
    //    data: donnee,
    //    success: function(data) {
    //      console.log("pouet");
    //    },
    //    error: function() {
    //      console.log("Noob !");
    //    }
   // });
