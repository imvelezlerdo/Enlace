
function checkUsername() {
    var username = document.getElementById("username");
    var result = username.value.search("^[a-z][a-z\d]{4,10}$");
    if (result != 0) {
        alert("Error in username format.");
        username.select();
        username.focus();
        return false;
    }
    return false;
}