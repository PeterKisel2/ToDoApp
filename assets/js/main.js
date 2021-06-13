(function($) {

    /*
    VARIABLES
    */

    var AddForm = $("#add-form"),
        AddInput = AddForm.find("#text"),
        list = $("#item-list");

    /*
    SETTINGS
    */

    var animation = {
        startColor: "#00bc8c",
        endColor: list.find('li').css("backgroundColor") || '#303030',
        delay: 200
    };

    /*
    ADD-FORM JS
    */
    
    //focus on textarea after loading page
    AddInput.val("").focus();

    //function after submitting form
    AddForm.submit(function (e) {

        //won't do standard request to add-item.php 
        e.preventDefault();

        //instead do ajax request
        var req = $.ajax({
                type: "POST",
                url: AddForm.attr("action"),
                data: AddForm.serialize(),
        });

        //what to do when ajax request is done
        req.done(function(data) {
            
            if (data === "success") {

                //ajax request to pick the last li
                $.ajax({ url: baseURL }).done( function(html){

                    $(".empty").remove();

                    var newItem = $(html).find('li:last-child');


                    //takes the color of li element
                    liBgColor = $(".list-group-item").css("backgroundColor");

                    //add next li to list-item-group
                    newItem.appendTo(  list )
                        .css({backgroundColor: animation.startColor})
                        .delay(animation.delay)
                        .animate({backgroundColor: animation.endColor});
                });
                
                //focus on textarea
                AddInput.val("").focus();
            };
        });
    });

    //send by pressing "enter"
    AddInput.keypress(function (e) { 
        if (e.which === 13) {
            AddForm.submit();
            return false;
        }
    });


    /*
    DONE BUTTON
    */
    $('#item-list').on("click", ".done-link", function (e) { 

        e.preventDefault();
        
        var listItem= $(this).parent().parent();
        
        listItem.toggleClass( "done" );

    });


    /*
    EDIT-FORM
    */

    //variables
    var editForm = $("#edit-form"),
        editInput = editForm.find("#text");

    //focus on textarea after loading page
        editInput.select().focus();

    //send by pressing "enter"
        editInput.keypress(function (e) { 
            if (e.which === 13) {
                editForm.submit();
                return false;
            }
        });


    /*
    DELETE-FORM
    */

    //variables
    var DeleteForm = $("#delete-form");

    //delete confirmation popup
    DeleteForm.submit(function(){
        return confirm("Are you sure?");
    });

}(jQuery));