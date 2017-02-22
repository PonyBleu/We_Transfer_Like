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

//
// var opts =
// {
//   lines: 17,
//   length: 0,
//   width: 16,
//   radius: 48,
//   scale: 1,
//   corners: 1,
//   color: '#000',
//   opacity: 0.30,
//   rotate: 18,
//   direction: 1, // 1: clockwise, -1: counterclockwise
//   speed: 1.4,
//   trail: 100,
//   fps: 20,
//   zIndex: 2e9, // The z-index (defaults to 2000000000)
//   className: 'spinner',
//   top: '50%',
//   left: '50%',
//   shadow: false,
//   hwaccel: false,
//   position: 'absolute'
// }
// var spinner = new Spinner().spin()
// target.appendChild(spinner.el)
