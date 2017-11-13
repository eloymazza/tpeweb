
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


    function deleteComment(comment){
        let commentID = comment.title;
        let productID = comment.id;
        console.log(productID);
        $.ajax({
            url: 'api/comments/'+ commentID,
            method: 'DELETE',
            success: function() {
                $("#"+productID).remove();
            },
            error: function(){
                alert("error al borrar");
            }
        });
    }
 

    function activateCommentEvents(){
        $(".js-delete-comment").click(function(){
            deleteComment(this);
        });
    }