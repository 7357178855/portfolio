
let btna = [];

let i;
let btn = ['0', 'btn1', 'btn2', 'btn3', 'btn4', 'btn5', 'btn6', 'btn7', 'btn8'];

a1 = document.getElementById('tool1');
a2 = document.getElementById('tool2');
a3 = document.getElementById('tool3');
a4 = document.getElementById('tool4');
a5 = document.getElementById('tool5');
a6 = document.getElementById('tool6');
a7 = document.getElementById('tool7');
a8 = document.getElementById('tool8');

for (i = 1; i <= 8; i++) {
    btna[i] = document.getElementById(`${btn[i]}`);
}

btna[1].addEventListener("click", function () {
    if (a1.style.height != "100vh") {
        a1.style.height = "100vh";
        a1.style.width = "100vw";
        a1.style.position = "fixed";
        a1.style.left = "0";
        a1.style.top = "0";
        a1.style.zIndex = "2";
    }
    else {
        a1.style.height = "90%";
        a1.style.width = "90%";
        a1.style.position = "relative";
        a1.style.left = "0";
        a1.style.top = "0";
        a1.style.zIndex = "1";
    }

});
btna[2].addEventListener("click", function () {
    if (a2.style.height != "100vh") {
        a2.style.height = "100vh";
        a2.style.width = "100vw";
        a2.style.position = "fixed";
        a2.style.left = "0";
        a2.style.top = "0";
        a2.style.zIndex = "2";
    }
    else {
        a2.style.height = "90%";
        a2.style.width = "90%";
        a2.style.position = "relative";
        a2.style.left = "0";
        a2.style.top = "0";
        a2.style.zIndex = "1";
    }
});
btna[3].addEventListener("click", function () {
    if (a3.style.height != "100vh") {
        a3.style.height = "100vh";
        a3.style.width = "100vw";
        a3.style.position = "fixed";
        a3.style.left = "0";
        a3.style.top = "0";
        a3.style.zIndex = "2";
    }
    else {
        a3.style.height = "90%";
        a3.style.width = "90%";
        a3.style.position = "relative";
        a3.style.left = "0";
        a3.style.top = "0";
        a3.style.zIndex = "1";
    }
});
btna[4].addEventListener("click", function () {
    if (a4.style.height != "100vh") {
        a4.style.height = "100vh";
        a4.style.width = "100vw";
        a4.style.position = "fixed";
        a4.style.left = "0";
        a4.style.top = "0";
        a4.style.zIndex = "2";
    }
    else {
        a4.style.height = "90%";
        a4.style.width = "90%";
        a4.style.position = "relative";
        a4.style.left = "0";
        a4.style.top = "0";
        a4.style.zIndex = "1";
    }
});
btna[5].addEventListener("click", function () {
    if (a5.style.height != "100vh") {
        a5.style.height = "100vh";
        a5.style.width = "100vw";
        a5.style.position = "fixed";
        a5.style.left = "0";
        a5.style.top = "0";
        a5.style.zIndex = "2";
    }
    else {
        a5.style.height = "90%";
        a5.style.width = "90%";
        a5.style.position = "relative";
        a5.style.left = "0";
        a5.style.top = "0";
        a5.style.zIndex = "1";
    }
});
btna[6].addEventListener("click", function () {
    if (a6.style.height != "100vh") {
        a6.style.height = "100vh";
        a6.style.width = "100vw";
        a6.style.position = "fixed";
        a6.style.left = "0";
        a6.style.top = "0";
        a6.style.zIndex = "2";
    }
    else {
        a6.style.height = "90%";
        a6.style.width = "90%";
        a6.style.position = "relative";
        a6.style.left = "0";
        a6.style.top = "0";
        a6.style.zIndex = "1";
    }
});
btna[7].addEventListener("click", function () {
    if (a7.style.height != "100vh") {
        a7.style.height = "100vh";
        a7.style.width = "100vw";
        a7.style.position = "fixed";
        a7.style.left = "0";
        a7.style.top = "0";
        a7.style.zIndex = "2";
    }
    else {
        a7.style.height = "90%";
        a7.style.width = "90%";
        a7.style.position = "relative";
        a7.style.left = "0";
        a7.style.top = "0";
        a7.style.zIndex = "1";
    }
});
btna[8].addEventListener("click", function () {
    if (a8.style.height != "100vh") {
        a8.style.height = "100vh";
        a8.style.width = "100vw";
        a8.style.position = "fixed";
        a8.style.left = "0";
        a8.style.top = "0";
        a8.style.zIndex = "2";
    }
    else {
        a8.style.height = "90%";
        a8.style.width = "90%";
        a8.style.position = "relative";
        a8.style.left = "0";
        a8.style.top = "0";
        a8.style.zIndex = "1";
    }
});