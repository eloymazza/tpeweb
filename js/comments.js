
let commentsTemplate;
$.ajax({url: 'js/templates/comments.mst'}).done(template => commentsTemplate = template);

let commentsFormTemplate;
$.ajax({url: 'js/templates/commentsForm.mst'}).done(template => commentsFormTemplate = template);



function getComments(productID){
    $.get("api/comments/"+ productID, function(comments){
      console.log("encontro comentarios");
        renderComments(comments,productID);
        activateCommentEvents(productID);
    }).fail(function(result){
        console.log("NO encontro comentarios");
        renderNoComments(productID);
        activateCommentEvents(productID);
    });
}

function postComment(data, productID,form){
    $.ajax({
        method: "POST",
        url: "api/comments/"+productID,
        data: data
     })
     .done(function(response) {
         grecaptcha.reset();
        console.log(response);
        getComments(productID);
    })
    .fail(function(err) {
        alert(err.responseText);
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
    let commentsRendered = Mustache.render(commentsTemplate, {'commentsArray':commentsArray, 'canDelete':isAdmin, 'canComment': (isAdmin || isUser),'productID': productID});
    $("#commentsContainer_"+productID).html(commentsRendered);
}


function renderNoComments(productID){
    let noCommentsRendered = Mustache.render(commentsTemplate, {'noComment':true, 'canComment': (isAdmin || isUser),'productID':productID});
    $("#commentsContainer_"+productID).html(noCommentsRendered);
}


function activateCommentEvents(productID){
    let commentsContainer = $("#commentsContainer_"+productID);
    commentsContainer.find(".js-delete-comment").click(function(){
        deleteComment(this);
    });
    commentsContainer.find("#comment_button_"+productID).click(function(){
        $('#modal_'+productID).modal();
    });
}

function renderCommentsForm(productID){
    if(isAdmin || isUser){
        let commentsFormRendered = Mustache.render(commentsFormTemplate, {'productID': productID,'isAdmin':isAdmin, 'isUser':isUser});
        $("#commentsFormContainer_"+productID).html(commentsFormRendered);
        activateCommentFormEvents(productID);
    }
}

function activateCommentFormEvents(productID){
    let form = $("#js-newComment-form_"+productID);
    form.on("submit",function(event){
        event.preventDefault();
        let data = $(this).serialize();
        console.log(data);
        postComment(data,productID,form);
        $('#comment-content-'+productID).val('');
    });
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



