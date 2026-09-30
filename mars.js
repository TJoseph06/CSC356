function validateForm(){
    // create a shortcut to our form
    let form = document.frmApp;

    // get the name that the user intended
    let fullName = form.txtName.value.trim();

    // create a boolean variable (true/false) that travcks if the user corrrectly entered their name
    let validInput = true;

    // to test if a name was entered
    if (fullName.length == 0){
    document.getElementById("divMsg").textContent = "Please enter you name!";
    validInput = false;
    // or you can use return false; here to skip the rest of the code from running
    }

    // add more validation for the other inputs
    return validInput;
 }