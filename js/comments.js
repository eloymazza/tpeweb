
let commentsTemplate;
$.ajax({url: 'js/templates/comments.mst'}).done(template => commentsTemplate = template);

function getComments(productID){
    $.get("api/comments/"+ productID, function(comments){
        renderComments(comments,productID);
    }).fail(function(result){
        renderNoComments(productID);
    });       
}

function postComment(data, productID){
    console.log(productID);
    $.ajax({
        method: "POST",
        url: "api/comments/"+productID,
        data: JSON.stringify(data)
     })
     .done(function(response) {
         console.log(response);
        getComments(productID);
    })
    .fail(function(err) {
        console.log("error" + err);
    });
}

function deleteComment(comment){
    let commentID = comment.id.split("_")[1];
    let productID = comment.title.split("_")[1];
    $.ajax({
        url: 'api/comments/'+ commentID,
        method: 'DELETE',
        success: function() {
            getComments(productID);
        },
        error: function(){
            alert("error al borrar");
        }
    });
}

function renderComments(commentsArray,productID){
    let commentsRendered = Mustache.render(commentsTemplate, {'commentsArray':commentsArray, "productID": productID});
    $("#commentsContainer_"+productID).html(commentsRendered);
    activateCommentEvents();
}


function renderNoComments(productID){
    let noCommentsRender = Mustache.render(commentsTemplate, {'noComment':true,'noCommentproductID': productID});
    $("#commentsContainer_"+productID).html(noCommentsRender);
    activateCommentEvents();
}

function activateCommentEvents(){
    $(".js-delete-comment").click(function(){
        deleteComment(this);
    });
    $(".js-newComment-form").on("submit",function(event){
        event.preventDefault();
        let data = {
            comentario : $("#comment-content").val()
        };
        let productID = this.id.split("_")[1];
        postComment(data, productID);
    });
    
}