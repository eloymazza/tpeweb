$("button").on("click",function(){

  $(this).next().toggleClass("hide");
  adminButtonActiveEffects(this);

});

function adminButtonActiveEffects(buttonActive){
    $("button").removeClass("active-button");
    $(buttonActive).addClass("active-button");
}
