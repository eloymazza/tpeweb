
function activateButtonHanlers(){
    $(".js-catalogue-buttons").click(function(){
        renderCatalogue(this.id,this.innerText);
        buttonActiveEffects(this);
    });
    $(".js-offers-buttons").click(function(){
        renderOffers(this.id,this.innerText);
        buttonActiveEffects(this);
    });
    activateCommentButtons();
}


function renderCatalogue(categoryId,nombreCategoria){
    let url;
    if(categoryId == "allProductsButton"){
        url="allProducts/0/Todos";
    }
    else{
        url = "categoryFilter/"+ categoryId +"/"+nombreCategoria;
    }
    $.post(url,"", function(response){
        $(".js-catalogue").html(response);
        activateCommentButtons();
    });
}

function renderOffers(categoryId,nombreCategoria){
    let url;
    if(categoryId == "allOffersButton"){
        url="allOffers/0/Todas";
    }
    else{
        url = "offersFilter/"+ categoryId +"/"+nombreCategoria;
    }
    $.post(url,"", function(response){
        $(".js-offers").html(response);
    });
}

function buttonActiveEffects(buttonActive){
    $(".category-button").removeClass("active-button");
    $(buttonActive).addClass("active-button");
}
function activateCommentButtons(){
    $(".js-comments-button").click(function(){
        getComments(this.id.split("_")[1]);
    });
}
