// all jQuery events are executed within the document ready function
$(document).ready(function() {
    $("input").bind("keydown", function(event) {
        // track enter key
        var keycode = (event.keyCode ? event.keyCode : (event.which ? event.which : event.charCode));
        if (keycode == 13) { // keycode for enter key
            // force the 'Enter Key' to implicitly click the Update button
            document.getElementById('defaultActionButton').click();
            return false;
        } else  {
            return true;
        }
    });

    $('#ex1').zoom();
    $('#ex2').zoom({ on:'grab' });
    $('#ex3').zoom({ on:'click' });
    $('#ex4').zoom({ on:'toggle' });
    //$('a.menu').click(function(){
    //        return false;
    //    })
    
    
});