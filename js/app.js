//for loading icon
$(window).on("load",function(){
    $(".page-loading-icon").fadeOut("slow");
});
//for rest of the page
$(document).ready(function(){
//slider functions
    var count = 0;
    setInterval(function(){
        if(count < 8){
            var fst = count;
            count++;
            sliderMove(fst,count);
            if(count === 8){
                count = 0;
                sliderMove(8,count);
            }
        }
    },6000);
//end of slider function
    
//for categories up and down show start        
    $("#prev").on("click",function(){
        $("#categ2").slideUp("slow")
        $("#categ1").slideDown("slow");
        $(this).fadeOut("slow");
        $("#next").fadeIn("slow");
    });
    
    $("#next").on("click",function(){
        $("#categ1").slideUp("slow")
        $("#categ2").slideDown("slow");
        $(this).fadeOut("slow");
        $("#prev").fadeIn("slow");
    });
//end of show
   
//checking the feedback form
    formInputCheck();
    $("#feedback").on("submit",function(){
        var check = checkCIField();
        if(check === 0){
            return true;
        }else{
            alert("empty bro");
            return false;
        }
    });
});

//end of ready function..

function sliderMove(prev,next){
    $(".slider:eq("+prev+")").toggleClass("show img-responsive");
    $(".slider:eq("+next+")").toggleClass("show img-responsive");
}

//feedback formchecking client side ..
function formInputCheck(){
    $("#nameOfFeedbacker").on("blur",function(e){
        if($(this).val() === ""){
            $("#feedN").text("Name Require");
        }else{
            $("#feedN").text("");
        }
    });
    
     $("#emailOfFeedbacker").on("blur",function(e){
         if($(this).val() === ""){
             $("#feedE").text("Email Address Require");
         }else{
             $("#feedE").text("");
         }
     });
    
}

function checkCIField(){
    
    if($("#nameOfFeedbacker").val() !== "" && $("#emailOfFeedbacker").val() !== "" && $("#feedbackMsg").val() !== ""){
        return 0;
    }else{
        return -1;
    }
}
