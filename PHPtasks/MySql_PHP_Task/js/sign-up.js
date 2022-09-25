// document.getElementById('B1').onclick = function () { Validation()}
function valid() {

    var fname = document.getElementById("firstName").value;
    var lName = document.getElementById("lastName").value;
    var email = document.getElementById("the_email").value;
    var password = document.getElementById("the_password").value;
    var phone = document.getElementById("exampleInputphone1").value
    // var password = document.getElementById("the_password2").value;
    var alerts_2 = document.getElementById("text1")
    var alerts_4 = document.getElementById("text2")
    var alerts_6 = document.getElementById("number")
    var alerts_1 = document.getElementById("email_text");
    var alerts_3 = document.getElementById("password_text");


    if (fname == "") {
        alerts_2.innerHTML = "Please enter first name";
        document.getElementById("firstName").style.border = "2px solid red"

    }
    if (lName == "") {
        alerts_4.innerHTML = "Please enter last name";
        document.getElementById("lastName").style.border = "2px solid red"

    }

      
    if (phone.length < 14) {
        alerts_6.innerHTML = " you have to enter at least 14 digit!"
        document.getElementById("exampleInputphone1").style.border = "2px solid red"
        message2.innerHTML = " you have to enter at least 14 digit!"
    }
    if (email == "") {
        alerts_1.innerHTML = "The email must be a valid email address."
        document.getElementById("the_email").style.border = "2px solid red"
    }


    if (password.length < 5) {
        alerts_3.innerHTML = "The password field is required."

        document.getElementById("the_password").style.border = "2px solid red"
    }

    if (password.length > 20) {
        alerts_3.innerHTML = "The Password should be between 5-20 characters."

        document.getElementById("the_password").style.border = "2px solid red"
    }
    else{
        window.location.replace("eva.https://getbootstrap.com/docs/4.0/components/buttons/")
    }


}