(function($) {
    
    /*
    ADD FORM
    */
    
    //variables

    var AddForm = $("#add-form"),
        AddInput = AddForm.find("#text");
        
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
                //ajax request to pick 
                $.ajax({ url: '/webrebel2/ToDoApp/master'}).done( function(html){
                    var newItem = $(html).find('li:last-child');
                    console.log( newItem );

                    //takes the color of li element
                    liBgColor = $(".list-group-item").css("backgroundColor");

                    //add next li to list-item-group
                    newItem.appendTo(".list-group")
                        .css({backgroundColor: "#00bc8c"})
                        .delay(200)
                        .animate({backgroundColor: liBgColor});
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
EDIT FORM
*/

//variables
var EditForm = $("#edit-form"),
    EditInput = EditForm.find("#text");

//focus on textarea after loading page
    EditInput.select().focus();

//send by pressing "enter"
    EditInput.keypress(function (e) { 
        if (e.which === 13) {
            EditForm.submit();
            return false;
        }
    });


/*
DELETE FORM
*/

//variables
var DeleteForm = $("#delete-form");

//delete confirmation popup
DeleteForm.submit(function(e){
    return confirm("Are you sure?");
});

}(jQuery));