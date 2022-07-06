




// let btn = document.getElementsByClassName('reg-option-1');
// let btn2 = document.getElementsByClassName('reg-option-2');
let btn = document.getElementById('reg-option-1');
let btn2 = document.getElementById('reg-option-2');
let a = document.getElementById('Sign-in-box');
let b = document.getElementById('Sign-up-box');
btn2.addEventListener("click", function () {
    // b.style.height = "auto";
    // a.style.height = "0px";
    a.style.transform = "translateX(101%)";
    b.style.transform = "translateX(0%)";
    b.style.display = "flex";
});
btn.addEventListener("click", function () {
    b.style.transform = "translateX(-101%)";
    a.style.transform = "translateX(0%)";
    b.style.display = "none";
    // b.style.height = "0px";
});