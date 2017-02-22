$(document).ready(function() 
{
    
    var outsideBar = $("#slide-out");
    
    var images=["view/img/background1.jpg",
               "view/img/background2.jpg"];
    
    var randomImg = Math.floor(Math.random() * images.length);
    
    var bgImg = 'url(' + images[randomImg] + ')';
    
    $("body").css({"background-image" :bgImg, "background-size": "cover"});
    

    
    if (randomImg == 1)
        {
            console.log("Hello World");
        }
    
    
    $(".button-collapse").click(function()
    {
        $("#logo").animate({

            marginLeft: "16em"
        });
    });
    
    
      $("body").click(function (e)
        {
          
          if (outsideBar.is(e.target))
            {
                  
                $("#logo").animate({
                marginLeft: "16em" 
                }); 
                  
            }
          
          else
          {
              $("#logo").animate({
              marginLeft: "3em" 
              });  
          }

        });
    

    
        
});