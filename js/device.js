var per = document.getElementById('per1');
var per2 = document.getElementById('per2');
var per3 = document.getElementById('per3');
var per4 = document.getElementById('per4');


var div1 = document.getElementById('per1');
var number = document.getElementById('sp');
var previous = 0;
var current = 0

document.getElementById('click').onclick = function() {
    previous = current;

}

function animate(previous, current) {
    div1.animate({
        'width': (current * 500) / 100

    }, 2000);
    if (previous > current) {
        current -= 1;
    }
}





// function add1() {

//     document.getElementById('sp').innerHTML = document.getElementById('add1').value + '%';


//     var per = document.getElementById('per')
//     var add1 = Number(document.getElementById('add1').value);
//     // if (add1 <= 10) {



//     //     per.removeAttribute('class', 'style');
//     //     per.setAttribute('class', 'progress-bar progress-bar-danger progress-bar-striped active');
//     //     var progresswidth = add1;


//     //     // per.removeAttribute('style');
//     //     per.setAttribute('style', '"width:+"progresswidth"+10%"');




//     // }





//     if (add1 == 10) {
//         per.removeAttribute('class', 'style');
//         per.setAttribute('class', 'progress-bar progress-bar-danger progress-bar-striped active');

//         per.removeAttribute('style');
//         per.setAttribute('style', 'width:10%');

//     }
//     if (add1 == 20) {
//         per.removeAttribute('class');
//         per.setAttribute('class', 'progress-bar progress-bar-danger progress-bar-striped active');

//         per.removeAttribute('style');
//         per.setAttribute('style', 'width:20%');

//     }
//     if (add1 == 30) {
//         per.removeAttribute('class');
//         per.setAttribute('class', 'progress-bar progress-bar-danger progress-bar-striped active');

//         per.removeAttribute('style');
//         per.setAttribute('style', 'width:30%');

//     }
//     if (add1 == 40) {
//         per.removeAttribute('class');
//         per.setAttribute('class', 'progress-bar progress-bar-danger progress-bar-striped active');

//         per.removeAttribute('style');
//         per.setAttribute('style', 'width:40%');

//     }
//     if (add1 == 50) {
//         per.removeAttribute('class');
//         per.setAttribute('class', 'progress-bar progress-bar-warning progress-bar-striped active');

//         per.removeAttribute('style');
//         per.setAttribute('style', 'width:50%');


//     }
//     if (add1 == 60) {
//         per.removeAttribute('class');
//         per.setAttribute('class', 'progress-bar progress-bar-warning progress-bar-striped active');

//         per.removeAttribute('style');
//         per.setAttribute('style', 'width:60%');


//     }
//     if (add1 == 70) {
//         per.removeAttribute('class');
//         per.setAttribute('class', 'progress-bar progress-bar-info progress-bar-striped active');

//         per.removeAttribute('style');
//         per.setAttribute('style', 'width:70%');


//     }
//     if (add1 == 75) {
//         per.removeAttribute('class');
//         per.setAttribute('class', 'progress-bar progress-bar-success progress-bar-striped ');

//         per.removeAttribute('style');
//         per.setAttribute('style', 'width:75%');

//     }
//     if (add1 == 80) {
//         per.removeAttribute('class');
//         per.setAttribute('class', 'progress-bar progress-bar-default progress-bar-striped active');

//         per.removeAttribute('style');
//         per.setAttribute('style', 'width:80%');

//     }
//     if (add1 == 90) {
//         per.removeAttribute('class');
//         per.setAttribute('class', 'progress-bar progress-bar-warning progress-bar-striped active');

//         per.removeAttribute('style');
//         per.setAttribute('style', 'width:90%');

//     }
//     if (add1 == 100) {
//         per.removeAttribute('class');
//         per.setAttribute('class', 'progress-bar progress-bar-danger progress-bar-striped active');

//         per.removeAttribute('style');
//         per.setAttribute('style', 'width:100%');

//     }














// }


// first progress bar function
function add6() {
    document.getElementById('sp').innerHTML = '70%';
    per.removeAttribute('class');
    per.setAttribute('class', 'progress-bar progress-bar-info progress-bar-striped active');
    per.removeAttribute('style');
    per.setAttribute('style', 'width:70%');

}

function add2() {
    document.getElementById('sp').innerHTML = '25%';
    per.removeAttribute('class');
    per.setAttribute('class', 'progress-bar progress-bar-danger progress-bar-striped active');
    per.removeAttribute('style');
    per.setAttribute('style', 'width:25%');

}

function add3() {
    document.getElementById('sp').innerHTML = '50%';
    per.removeAttribute('class');
    per.setAttribute('class', 'progress-bar progress-bar-warning progress-bar-striped active');
    per.removeAttribute('style');
    per.setAttribute('style', 'width:50%');

}

function add4() {
    document.getElementById('sp').innerHTML = '75%';
    per.removeAttribute('class');
    per.setAttribute('class', 'progress-bar progress-bar-success progress-bar-striped ');
    per.removeAttribute('style');
    per.setAttribute('style', 'width:75%');

}

function add5() {
    document.getElementById('sp').innerHTML = '80%';

    per.removeAttribute('class');
    per.setAttribute('class', 'progress-bar progress-bar-primary progress-bar-striped active');
    per.removeAttribute('style');
    per.setAttribute('style', 'width:80%');

}

//second progress bar function
function add1() {
    document.getElementById('sp2').innerHTML = '25%';
    per2.removeAttribute('class');
    per2.setAttribute('class', 'progress-bar progress-bar-danger progress-bar-striped active');
    per2.removeAttribute('style');
    per2.setAttribute('style', 'width:25%');

}

function add7() {
    document.getElementById('sp2').innerHTML = '50%';
    per2.removeAttribute('class');
    per2.setAttribute('class', 'progress-bar progress-bar-warning progress-bar-striped active');
    per2.removeAttribute('style');
    per2.setAttribute('style', 'width:50%');

}

function add8() {
    document.getElementById('sp2').innerHTML = '70%';
    per2.removeAttribute('class');
    per2.setAttribute('class', 'progress-bar progress-bar-info progress-bar-striped active');
    per2.removeAttribute('style');
    per2.setAttribute('style', 'width:70%');

}

function add9() {
    document.getElementById('sp2').innerHTML = '75%';
    per2.removeAttribute('class');
    per2.setAttribute('class', 'progress-bar progress-bar-success progress-bar-striped ');
    per2.removeAttribute('style');
    per2.setAttribute('style', 'width:75%');

}

function add10() {
    document.getElementById('sp2').innerHTML = '80%';
    per2.removeAttribute('class');
    per2.setAttribute('class', 'progress-bar progress-bar-primary progress-bar-striped active');
    per2.removeAttribute('style');
    per2.setAttribute('style', 'width:80%');

}
//third progress bar function
function add11() {
    document.getElementById('sp3').innerHTML = '25%';
    per3.removeAttribute('class');
    per3.setAttribute('class', 'progress-bar progress-bar-danger progress-bar-striped active');
    per3.removeAttribute('style');
    per3.setAttribute('style', 'width:25%');

}

function add12() {
    document.getElementById('sp3').innerHTML = '50%';
    per3.removeAttribute('class');
    per3.setAttribute('class', 'progress-bar progress-bar-warning progress-bar-striped active');
    per3.removeAttribute('style');
    per3.setAttribute('style', 'width:50%');

}

function add13() {
    document.getElementById('sp3').innerHTML = '70%';
    per3.removeAttribute('class');
    per3.setAttribute('class', 'progress-bar progress-bar-info progress-bar-striped active');
    per3.removeAttribute('style');
    per3.setAttribute('style', 'width:70%');

}

function add14() {
    document.getElementById('sp3').innerHTML = '75%';
    per3.removeAttribute('class');
    per3.setAttribute('class', 'progress-bar progress-bar-success progress-bar-striped ');
    per3.removeAttribute('style');
    per3.setAttribute('style', 'width:75%');

}

function add15() {
    document.getElementById('sp3').innerHTML = '80%';
    per3.removeAttribute('class');
    per3.setAttribute('class', 'progress-bar progress-bar-primary progress-bar-striped active');
    per3.removeAttribute('style');
    per3.setAttribute('style', 'width:80%');

}
//fourth progress bar function

function add16() {
    document.getElementById('sp4').innerHTML = '25%';
    per4.removeAttribute('class');
    per4.setAttribute('class', 'progress-bar progress-bar-danger progress-bar-striped active');
    per4.removeAttribute('style');
    per4.setAttribute('style', 'width:25%');

}

function add17() {
    document.getElementById('sp4').innerHTML = '50%';
    per4.removeAttribute('class');
    per4.setAttribute('class', 'progress-bar progress-bar-warning progress-bar-striped active');
    per4.removeAttribute('style');
    per4.setAttribute('style', 'width:50%');

}

function add18() {
    document.getElementById('sp4').innerHTML = '70%';
    per4.removeAttribute('class');
    per4.setAttribute('class', 'progress-bar progress-bar-info progress-bar-striped active');
    per4.removeAttribute('style');
    per4.setAttribute('style', 'width:70%');

}

function add19() {
    document.getElementById('sp4').innerHTML = '75%';
    per4.removeAttribute('class');
    per4.setAttribute('class', 'progress-bar progress-bar-success progress-bar-striped ');
    per4.removeAttribute('style');
    per4.setAttribute('style', 'width:75%');

}

function add20() {
    document.getElementById('sp4').innerHTML = '80%';
    per4.removeAttribute('class');
    per4.setAttribute('class', 'progress-bar progress-bar-primary progress-bar-striped active');
    per4.removeAttribute('style');
    per4.setAttribute('style', 'width:80%');

}