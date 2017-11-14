$("document").ready(function(){
    renderSection("home");
    
});

$(".sectionLink").on("click", function(e){
    e.preventDefault();
    renderSection(this.name);
});

function renderSection(name){
    $.post(name,"", function(response){
        $(".js-section-content").html(response);
        activateButtonHanlers();
    });
}

