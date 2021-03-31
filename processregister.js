$(document).ready(function() {
    $('#signUp').submit(function(e){
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: 'processRegister.php',
            data: $(this).serialize(),
            success: function(){ 
                window.location="login.php";
            }
        });
    });
});