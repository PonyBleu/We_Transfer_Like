function allowDrop(e) {
   e.preventDefault();
}
function drop(e) {
   e.preventDefault();
}

(function($){


    var o = {
        message : 'Déposez vos fichiers ici',
        script : 'controller/uploadDrop.php'
    };


    $.fn.dropfile = function(oo){
        console.log("tada");
        if(oo) $.extend(o,oo);
        this.each(function(){
            $('<span>').append(o.message).appendTo(this);
            $(this).bind({
                dragenter : function(e){
                    e.preventDefault();
                    $(this).addClass('hover');
                },
                dragover : function(e){
                    e.preventDefault();
                    $(this).addClass('hover');
                },
                dragleave : function(e){
                    e.preventDefault();
                    $(this).removeClass('hover');
                },
            });
            this.addEventListener('drop' ,function(e){
                e.preventDefault();
                var files = e.dataTransfer.files;
                upload(files,$(this) ,0);
                $(this).removeClass('hover');
                $("#fichierr").append(files[0].name);
            }, false);
        });

        function upload(files , area , index){
            var file = files[index];
            var xhr = new XMLHttpRequest();
            xhr.open('post',o.script,true);
            xhr.setRequestHeader('content-type', 'multipart/form-data');
            xhr.setRequestHeader('x-file-type', file.type );
            xhr.setRequestHeader('x-file-size', file.size );
            xhr.setRequestHeader('x-file-name', file.name );
            xhr.send(file);
        }

    };


})(jQuery);
