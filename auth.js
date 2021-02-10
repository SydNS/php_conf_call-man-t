
function passwordMatch() {
    var pswd=document.getElementsByName("paswd")
    var pswd2=document.getElementsByName("paswd2")

    var x1=pswd.value
    var x2=pswd2.value

    if (x1!=x2) {
        alert("Passwords dont Match")    
    }
}


function tel() {
    var tel=document.getElementsByName("tel")
    var x1=tel.value
 
    if (x1.isNan()) {
             alert("Tel number")    
    }
 }
 