document.getElementById("contactForm").addEventListener("submit", function(event){
    var firstname = document.getElementById("firstname").value;
    var lastname = document.getElementById("lastname").value;
    var email = document.getElementById("email").value;
    var message = document.getElementById("message").value;

    if (firstname === "" || lastname === "" || email === "" || message === "") {
        alert("Veuillez remplir tous les champs.");
        event.preventDefault();
    }
});