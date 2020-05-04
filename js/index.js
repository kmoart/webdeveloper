function sendEmail() {
    Email.send({

        SecureToken: "31fdeb00-b4db-49b5-89ba-7fa4f73e2533",
        To: "kmoart@gmail.com",
        From: "you@isp.com",
        Subject: "New email from Web Developer Portfolio",
        Body: "The body",
    }).then(
        message => alert("mail sent successfully")
    );
}
/*
$('#contact-form').submit(function(e) {
    var name = document.getElementById('nombre'),
        email = document.getElementById('correo'),
        message = document.getElementById('mensaje');


    if (!name.value || !email.value || !message.value) {
        alert('Please check your entries');
    } else {
        $.ajax({
            url: "https://formspree.io/kmoart@gmail.com",
            method: "POST",
            data: $(this).serialize(),
            dataType: "json"
        });
        e.preventDefault()
        $(this).get(0).reset()
        alert('Message sent');
    }
});*/