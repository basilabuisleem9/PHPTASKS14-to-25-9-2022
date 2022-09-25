
async function valid() {

    var email = document.getElementById("Email_1").value;
    
    var password = document.getElementById("Password_1").value;
    
    if (!isFormValid(email, password)) {
    return
    }
    let response = await validate_user(email, password)
    //console.log(response)

    if (response) {
    
    // setTimeout(function () { location.replace("eva.html"); }, 500);
    
    
    // window.location.replace("eva.html")

// console.log("trying  to redirect the user to the dashboard")
    
    window.open("http://127.0.0.1/MySql_PHP_Task/table.php")
    
    
    
    // location.replace("./index.html")
    
    }
    else {
    alert("user name or password is invalid")
    }
    
    }// end valid method
    
    
    // this function will wait unti the job is done
     async function validate_user(email, password) {
        return new Promise((resolve, reject)=> {

      console.log('trying to validate the user')
        var data = new FormData();
        data.append("email", email);
        data.append("password", password);

    var xhr = new XMLHttpRequest();
        xhr.withCredentials = true;

    xhr.addEventListener("readystatechange", function() {
        if(this.readyState === 4) {
        console.log(this.responseText);
        let json = JSON.parse(this.responseText)
        resolve(json.status)
    }});

xhr.open("POST", "http://127.0.0.1/MySql_PHP_Task/backend/loginHandler.php");
xhr.send(data);

});


        
}
    
    function isFormValid(email, password) {
    
    
    var message1 = document.getElementById("emailtext");
    
    var message3 = document.getElementById("passtext");
    

    
    let isvalid = true
    
    if (email == "") {
    message1.innerHTML = "There was a problem logging you. Please try again soon..";
    
    document.getElementById("Email_1").style.border =
        "2px solid red";
    isvalid = false
    }
    
    if (password.length < 6) {
    message3.innerHTML = "The password field is required.";
    
    document.getElementById("Password_1").style.border =
        "2px solid red";
    isvalid = false
    }
    return isvalid
    }