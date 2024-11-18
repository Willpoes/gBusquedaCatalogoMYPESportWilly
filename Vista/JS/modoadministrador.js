$(document).ready(function() {
    $(".checkme").click(function() {
        var x = $(this).is(':checked');
        if (x == true) {
            document.querySelector('#pass').style.cssText = 'opacity: 1; visibility: visible';
        } else {
            document.querySelector('#pass').style.cssText = 'opacity: 0; visibility: hidden';
        }
    });
});