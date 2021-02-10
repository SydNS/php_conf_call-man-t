
function passwordMatch() {
   var pswd=document.getElementsByName("paswd")
var pswd2=document.getElementsByName("paswd2")
var signup_submit=document.getElementsByName("signup_submit")

var x1=pswd.value
var x2=pswd2.value
    if (x1!=x2) {
    return alert("Passwords dont Match")    
}
}
