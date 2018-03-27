
let commentsTemplate;
$.ajax({url: 'js/templates/comments.mst'}).done(template => commentsTemplate = template);

let commentsFormTemplate;
$.ajax({url: 'js/templates/commentsForm.mst'}).done(template => commentsFormTemplate = template);


function getComments(productID){
    $.get("api/comments/"+ productID, function(comments){
      console.log("encontro comentarios");
        renderComments(comments,productID);
    }).fail(function(result){
      console.log("NO encontro comentarios");
        renderNoComments(productID);
    });
}

function postComment(data, productID, input){
    $.ajax({
        method: "POST",
        url: "api/comments/"+productID,
        data: JSON.stringify(data)
     })
     .done(function(response) {
        console.log(response);
        getComments(productID);
        input.val('');
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
    let commentsRendered = Mustache.render(commentsTemplate, {'commentsArray':commentsArray, 'isAdmin':isAdmin});
    $("#commentsContainer_"+productID).html(commentsRendered);
    activateCommentEvents(productID);
}


function renderNoComments(productID){
    let noCommentsRendered = Mustache.render(commentsTemplate, {'noComment':true});
    $("#commentsContainer_"+productID).html(noCommentsRendered);
    activateCommentEvents(productID);
}

function renderCommentsForm(productID){
    if(isUser){
        let commentsFormRendered = Mustache.render(commentsFormTemplate, {'productID': productID});
        $("#commentsFormContainer_"+productID).html(commentsFormRendered);
        activateCommentFormEvents(productID);
    }
}

function activateCommentEvents(productID){
    $("#commentsContainer_"+productID).find(".js-delete-comment").click(function(){
        deleteComment(this);
    });
}

function activateCommentFormEvents(productID){
    let form = $("#commentsFormContainer_"+productID);
    
    $('.modal').modal();
  /*
  form.find(".js-newComment-form").on("submit",function(event){
      event.preventDefault();
      let input = form.find("#comment-content");
      let puntaje = form.find(".js-puntuacion").val();
      let data = {
          comentario : input.val(),
          puntaje : puntaje
        };
        postComment(data, productID, input);
    });
    */
}