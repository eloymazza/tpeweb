$("document").ready(function(){
    renderSection("home");
});

$(".sectionLink").on("click", function(e){
    e.preventDefault();
    renderSection(this.name);
});

function renderSection(name){
    configAcces();
    $.post(name,"", function(response){
        $(".js-section-content").html(response);
        activateButtonHandlers();
    });
}

function configAcces(){
    $.ajax({
        method: "GET",
        url: "userPermissions"
     })
     .done(function(response){
        isAdmin = response.admin;
        isUser = response.user;
     });
    
}


