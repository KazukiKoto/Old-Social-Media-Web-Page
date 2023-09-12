function myFunction() {
    $("#loginform").submit(function(event){
    formData = $("#loginform").serialize();
    event.preventDefault();
    $.ajax({
        type: "POST",
        url: "LoginPageDAO.php",
        data: formData+"&phpFunction=login",
        success: function(msg) {
            document.getElementById("errorbox").innerHTML=(msg);
        },
        error: function(msg) {
            document.getElementById("errorbox").innerHTML=(msg);
        }
    });
});
}