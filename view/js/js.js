function allowDrop(e) {
   e.preventDefault();
}
function drop(e) {
   e.preventDefault();
}

function supr(){
}

(function($){

    var o = {
        message : 'Déposez vos fichiers ici',
        script : 'controller/uploadDrop.php'
    };


    $.fn.dropfile = function(oo){
        if(oo) $.extend(o,oo);
        this.each(function(){
            $('<span>').append(o.message).appendTo(this);
            $('<span>').addClass('progress').appendTo(this);
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
                console.log(files[0].name);
                $("#fichierr").html(files[0].name);
            }, false);
        });

        function upload(files , area , index){
            var file = files[index];
            var xhr = new XMLHttpRequest();
            var progress = area.find('.progress');

            //Evenements
            xhr.addEventListener('load',function(e){
                var json = jQuery.parseJSON(e.target.responseText);
                progress.css({height:0});
                if(json.error){
                    alert(json.error);
                    return false;
                }else{
                    area.append(json.content);
                }
            },false);
            xhr.upload.addEventListener('progress',function(e){
                if(e.lengthComputable){
                    var perc = (Math.round(e.loaded/e.total) * 100)+'%';
                    progress.css({height:perc}).html(perc);
                }
            },false);

            xhr.open('post',o.script,true);
            xhr.setRequestHeader('content-type', 'multipart/form-data');
            xhr.setRequestHeader('x-file-type', file.type );
            xhr.setRequestHeader('x-file-size', file.size );
            xhr.setRequestHeader('x-file-name', file.name );
            xhr.send(file);
        }

    };


})(jQuery);
