$("document").ready(function(){
    renderSection("home");
});
let isAdmin;
let isUser;

$(".sectionLink").on("click", function(e){
    e.preventDefault();
    renderSection(this.name);
});

function renderSection(name){
    $.post(name,"", function(response){
        $(".js-section-content").html(response);
        activateButtonHandlers();
        configAcces();
    });
}
function configAcces(){
    // codigo para obtener si es admin o user
    console.log("entro");
    $.ajax({
        method: "GET",
        url: "userPermissions"
     })
     .done(function(response){
        isAdmin = response.admin;
        isUser = response.user;
     });
    
}
