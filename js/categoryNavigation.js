
function activateButtonHanlers(){
    $(".js-category-buttons").on("click", function(){
        renderCategory(this.id,this.innerText);
        buttonActiveEffects(this);
    });
    $(".js-offers-buttons").on("click", function(){
        renderOffers(this.id,this.innerText);
        buttonActiveEffects(this);
    });
}

function renderCategory(categoryId,nombreCategoria){
    let url;
    if(categoryId == "allProductsButton"){
        url="allProducts/0/Todos";
    }
    else{
        url = "categoryFilter/"+ categoryId +"/"+nombreCategoria;
    }
    $.post(url,"", function(response){
        $(".js-catalogue").html(response);
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
