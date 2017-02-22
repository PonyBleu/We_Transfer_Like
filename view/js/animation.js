$(document).ready(function() 
{
    
    var images=["view/img/background1.jpg",
               "view/img/background2.jpg"];
    
//    $("body").css({"background-image": "url(view/img/background1.jpg)"});
    
    var randomImg = Math.floor(Math.random() * images.length);
    
    var bgImg = 'url(' + images[randomImg] + ')';
    
    $("body").css({"background-image" :bgImg, "background-size": "cover"});
    
    $(".button-collapse").click(function()
    {
        $()
        $("#logo").animate({

            marginLeft: "16em"
        });
    });
});