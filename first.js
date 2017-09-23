function validate() {
	alert("Well done!");
}

function validuser() {
    var x, text;

    // Get the value of the input field with id="numb"
    x = document.getElementById("num").value.length;

    // If x is Not a Number or less than one or greater than 10
    if (x < 5 ) {
        text = "User Name is too Short";
    } else {
        text = "User Name is OK";
    }
    document.getElementById("demo").innerHTML = text;
}

function validname() {
    var x1, text1;

    // Get the value of the input field with id="numb"
    x1 = document.getElementById("num1").value.length;

    // If x is Not a Number or less than one or greater than 10
    if (x1 < 2) {
        text1 = "Name is too Short";
    } else {
        text1 = "Name is OK";
    }
    document.getElementById("demo1").innerHTML = text1;
}

function validnum() {
    var x2, text2;

    // Get the value of the input field with id="numb"
    x2 = document.getElementById("num2").value.length;

    // If x is Not a Number or less than one or greater than 10
    if (x2 < 10) {
        text2 = "Phone Number not valid";
    } else {
        text2 = "Phone Number OK";
    }
    document.getElementById("demo2").innerHTML = text2;
}

function validpass() {
    var x3, text3;

    // Get the value of the input field with id="numb"
    x3 = document.getElementById("num3").value.length;

    // If x is Not a Number or less than one or greater than 10
    if (x3 < 8 ) {
        text3 = "Password too Short";
    } else {
        text3 = "Password Ok";
    }
    document.getElementById("demo3").innerHTML = text3;
}

