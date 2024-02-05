$(document).ready(function() {
    $("form").submit(function(e) {
        e.preventDefault();
        let th = $(this)
        let email = th.find("#mailBut")
        $.ajax({
            url: "../phpCode/mailSent.php",
            method: "POST",
            data: th.serialize(),
            success: function(data) {
                setTimeout(() => {
                    email.val('')
                })
                
            },
            error: function(xhr, status, error) {
                console.log("Error:", status, error)
            },
            followRedirects: true
        });
    })
  })