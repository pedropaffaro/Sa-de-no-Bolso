function buttonLogin(){
    var btnLogin = document.getElementById("btn-login");

    btnLogin.addEventListener("mouseover", () => {
        btnLogin.style.transitionDuration = ".2s";
        btnLogin.style.boxShadow = "rgba(0, 0, 0, 0.13) 0px 0px 10px";
    })
    btnLogin.addEventListener("mouseout", () => {
        btnLogin.style.transitionDuration = ".2s";
        btnLogin.style.boxShadow = "rgba(100, 100, 111, 0.2) 0px 7px 29px 0px";
    })

    btnLogin.addEventListener("click", () => {
        window.open("https://google.com"); 
    })
}
   
function buttonSignUp(){
    var btnSignUp = document.getElementById("btn-signup");

    btnSignUp.addEventListener("mouseover", () => {
        btnSignUp.style.transitionDuration = ".2s";
        btnSignUp.style.boxShadow = "rgba(0, 0, 0, 0.13) 0px 0px 10px";
    })
    btnSignUp.addEventListener("mouseout", () => {
        btnSignUp.style.transitionDuration = ".2s";
        btnSignUp.style.boxShadow = "rgba(100, 100, 111, 0.2) 0px 7px 29px 0px";
    })

    btnSignUp.addEventListener("click", () => {
        window.open("https://google.com"); 
    })
}