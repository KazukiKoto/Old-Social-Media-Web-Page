function myFunction() {
        var CheckPassword = document.getElementById("password");
        var CheckConfirmPassword = document.getElementById("confirmpassword");
        if (CheckPassword.value == CheckConfirmPassword.value) {
            $("#registrationform").submit(function(event){
                formData = $("#registrationform").serialize();
                event.preventDefault();
                $.ajax({
                    type: "POST",
                    url: "RegistrationPageDAO.php",
                    data: formData+"&phpFunction=create",
                    success: function(msg) {
                        document.getElementById("errorbox").innerHTML=(msg);
                    },
                    error: function(msg) {
                        document.getElementById("errorbox").innerHTML=(msg);
                    }
                });
            });
        } else {
            document.getElementById("errorbox").innerHTML = "Passwords do not match.";
        }
    }