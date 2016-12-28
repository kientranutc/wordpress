$(document).ready(function() {
   $(".slideanh").owlCarousel({ 
    autoPlay:true,
      items:1,
      loop:true,
      pagination:true,
      navigation : true,
    navigationText :["<span class='glyphicon glyphicon-chevron-left'></span>","<span class='glyphicon glyphicon-chevron-right'></span>"]
    });
$("#anh").owlCarousel({ 
    autoPlay:true,
      items:3,
      loop:true,
      pagination:false,
     
    });
   
    });

function hienthi(text)
{
  
    var x = $("#"+text).attr("src");
     $(".anh1").attr({src:x});
    

}

