function validateRegisterForm() {
    var title = document.forms["registerForm"]["title"].value;
    if (title == "") {
        alert("Title must be filled out");
        return false;
    }
    if(title.indexOf("/") != -1){
        alert("'/' is not allowed in title");
        return false;
    }

    var author = document.forms["registerForm"]["author"].value;   
    if(author.indexOf("/") != -1){
        alert("'/' is not allowed in author");
        return false;
    }

    var course = document.forms["registerForm"]["course"].value;   
    if(course.indexOf("/") != -1){
        alert("'/' is not allowed in course");
        return false;
    }

    var courseid = document.forms["registerForm"]["courseid"].value;   
    if(courseid.indexOf("/") != -1){
        alert("'/' is not allowed in course code");
        return false;
    }

    var isbn = document.forms["registerForm"]["isbn"].value;   
    if(isbn.indexOf("/") != -1){
        alert("'/' is not allowed in ISBN");
        return false;
    }

    var name = document.forms["registerForm"]["name"].value;   
    if(name == ""){
        alert("Please enter your name");
        return false;
    }

    var email = document.forms["registerForm"]["email"].value;
    if (email == "") {
        alert("Email must be filled out");
        return false;
    } else if(email.indexOf("@") == -1){
        alert("Please enter an valid email address");
        return false;
    }
    if(email.indexOf("/") != -1){
        alert("'/' is not allowed in email");
        return false;
    }

    var phone = document.forms["registerForm"]["phone"].value;
    if (phone == "") {
        alert("Phone must be filled out");
        return false;
    }  
    var phoneNum = phone.replace(/[^\d]/g, '');
    if(phoneNum.length < 10 || phoneNum.length > 13) {  
        alert("please enter an valid phone number");
        return false;  
    }

    var expiry = document.forms["registerForm"]["expiry"].value;
    if(!Number.isInteger(parseFloat(expiry))){
        alert("Please enter an valid number between 1-30");
        return false;
    }
    if (parseInt(expiry) > 30 || parseInt(expiry) < 1) {
        alert("Expiry must be between 1-30");
        return false;
    }

    var terms = document.forms["registerForm"]["terms"].checked;
    if (terms == false) {
        alert("Please agree to our Terms&Services");
        return false;
    }
}

function validateSearchForm() {
    var keyword = document.forms["searchForm"]["keyword"].value;
    if (keyword == "") {
        alert("Search cannot be empty");
        return false;
    }
    if(keyword.indexOf("/") != -1){
        alert("'/' is not allowed in search");
        return false;
    }

    var optionBuy = document.getElementById("buy").checked;
    var optionSell = document.getElementById("sell").checked;
    if (optionBuy == false && optionSell == false) {
        alert("Please choose one of the options");
        return false;
    }
}