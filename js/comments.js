
    let commentsTemplate;
    $.ajax({url: 'js/templates/comments.mst'}).done(template => commentsTemplate = template);

    function getComments(product){
        let productID = product.name;
        $.get("api/comments/"+ productID, function(comments){
            renderComments(comments,productID);
        }).fail(function(result){
            renderNoComments(productID);
        });       
    }

    function renderComments(commentsArray,productID){
        
        let commentsRendered = Mustache.render(commentsTemplate, {'commentsArray':commentsArray});
        $("#product_"+productID).html(commentsRendered);
        activateCommentEvents();
    }

    function renderNoComments(productID){
        let noCommentsRender = Mustache.render(commentsTemplate, {'noComment':true});
        $("#product_"+productID).html(noCommentsRender);
    }


    function deleteComment(idComentario){
        alert("borrar");
    }
 

    function activateCommentEvents(){
        $(".js-delete-comment").click(function(){
            deleteComment(this.id);
        });
    }