// $(document).ready(function() {
//     $(".nav li").click(function() {
//         $(this).parent().find('li.active').removeClass('active');
//         $(this).addClass('active');
//     })
// })

$(document).ready(function() {
    $('.btn-group .btn').click(function() {
        $(this).css({
            'background-color': 'red',
            'color': 'white'

        }).siblings().css({
            'background-color': 'white',
            'color': 'red'
        })
    })



    $('.btn').click(function() {
        const value = $(this).attr('data-filter');
        if (value == "all") {
            $('.itemBox').show('1000');


        } else {

            $('.itemBox').not('.' + value).hide('1000');
            $('.itemBox').filter('.' + value).show('1000');

        }

    })
    $('.list-inline-item').click(function() {
        $(this).addClass('active').siblings().removeClass('active');
    })

})

const text = document.querySelector(".fancy");
const strText = text.textContent;
const splitText = strText.split("");
text.textContent = "";

for (let i = 0; i < splitText.length; i++) {
    text.innerHTML += "<b>" + splitText[i] + "</b>";
}
let char = 0;
let timer = setInterval(onTick, 100);



function onTick() {
    const span = text.querySelectorAll('b')[char];
    span.classList.add('fade');
    char++;
    if (char === splitText.length) {
        complete();
        show();
        return;



    }
}

function complete() {
    clearInterval(timer);
    timer = null;



}
var box = document.getElementById('box');

function show() {
    var div = document.createElement('div');
    div.innerHTML = "<h2 style='color:red;font-size:3em;font-weight:bold;'> CHANGE YOUR LIFE AND STAY IN THE FUTURE   WITH <i>SHOE</i><span style='color:blue;'>STORE</span>...</h2>" + "<form action='/shop'><button style='margin-left:250px' class='btn btn-danger submit-button' data-target='/shop' >SHOP NOW</button></form>";
    // div.style.margin = "10px";
    box.appendChild(div);




}