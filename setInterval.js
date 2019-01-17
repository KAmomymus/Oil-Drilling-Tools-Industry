
    setInterval(function(){
      if(document.querySelectorAll(".navbar_fixed").length>0){
        document.querySelector(".navbar").style.background="white";
        var x1=document.querySelectorAll(".nav-item .nav-link");
        for(var i=0;i<x1.length;i++){
          x1[i].style.color="#4F2B4F";
        }
        document.querySelector(".logo_h").style.color="#4F2B4F";
        document.querySelector(".logo_h img").src="image/logo_.png";

      }
      else{
        document.querySelector(".navbar").style.background="transparent";var x=document.querySelectorAll(".nav-item .nav-link");
        for(var i=0;i<x.length;i++){
          x[i].style.color="white";
        }
        document.querySelector(".logo_h").style.color="white";
document.querySelector(".logo_h img").src="image/logo_1w.png";
    }
  },500);
