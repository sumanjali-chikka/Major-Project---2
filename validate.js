function validate(){
    var username=document.getElementById("username");
    var pwd=document.getElementById("password");
    if (username.value=="suma" && pwd.value=="Suma@1234")
    {
        alert("login sucessfully");
        location.href="bill.html";
    }
    else{
        alert("login failed");
        location.href="suma.html"
    }
}