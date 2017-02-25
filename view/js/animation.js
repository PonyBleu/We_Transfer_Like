
$(document).ready(function() 
{
    
    var outsideBar = $("#slide-out");
    
    var images=["view/img/background1.jpg",
               "view/img/background2.jpg"];
    
    var randomImg = Math.floor(Math.random() * images.length);
    
    var bgImg = 'url(' + images[randomImg] + ')';
    
    $("body").css({"background-image" :bgImg, "background-size": "cover"});
    
    $("button").click(function animateFinger () 
    {
        
        $("#finger").animate({
            opacity: 0.25,
            marginRight: "3em"
        },  
                             
        {
            duration: 750
            
        }), 100,  $("#finger").animate({
            
            opacity: 1,
            marginRight: "0em"
        }, 
            {
            
            duration: 750 
            
            });
    });
                            
    
    
//    if($("#finger").css("display") == "block")
//        {
//            console.log("Helle World");
//        }
//    else{
//        
//    }
//    $("#finger").animate
//    ({
//         opacity: 0.25,
//        left: "+=50"
//    });

    
    
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