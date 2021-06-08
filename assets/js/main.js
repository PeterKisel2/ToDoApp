(function($) {
    //variables
    var form = $("#add-form"),
        input = form.find("#text");

    //focus on textarea after loading page
    input.val("").focus();

    //function after submitting form
    form.submit(function (e) {

        //won't do standard request to add-item.php 
        e.preventDefault();

        //instead do ajax request
        var req = $.ajax({
            type: "POST",
            url: form.attr("action"),
            data: form.serialize(),
        });

        //what to do when ajax request is done
        req.done(function(data) {
            
            if (data === "success") {
                var li = $('<li class="list-group-item">'+ input.val() +'</li>'),
                    liBgColor = $(".list-group-item").css("backgroundColor");

                console.log(liBgColor);

                li.appendTo(".list-group")
                    .css({backgroundColor: "#00bc8c"})
                    .delay(200)
                    .animate({backgroundColor: liBgColor});

                input.val("").focus();
            };
        });
    });

    //send by pressing "enter"
    input.keypress(function (e) { 
        if (e.which === 13) {
            form.submit();
            return false;
        }
    });

}(jQuery));