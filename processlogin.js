$(document).ready(function() {
    $('#signIn').submit(function(e){
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: 'processLogin.php',
            data: $(this).serialize(),
            success:function(response){
                response=response.trim();
                switch (response) {
                    case "uee":
                        alert("user does not exist");
                        break;
                    case "sl":
                        alert("successful login");
                        break;
                    case "ip":
                        alert("incorrect password or email");
                        break;
                    default:
                        break;
                }
            }
        });
    });
});