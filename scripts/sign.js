function usernameCheck(inputHTML) {
    if (inputHTML.value.length == 0 || inputHTML.value.length > 20) {
        inputHTML.className = "incorrect-input";
    }
    else {
         inputHTML.className = "";   
    }
}