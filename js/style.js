// language toggle 

let engs = document.querySelectorAll(".l-en");
let mms = document.querySelectorAll(".l-mm");
let chs = document.querySelectorAll(".l-ch");

function lang_en(){
    mms.forEach(el => el.style.display = "none")
    chs.forEach(el => el.style.display = "none")
    engs.forEach(el => el.style.display = "block")
}

function lang_mm(){
    chs.forEach(el => el.style.display = "none")
    engs.forEach(el => el.style.display = "none")
    mms.forEach(el => el.style.display = "block")
}

function lang_ch(){
    engs.forEach(el => el.style.display = "none")
    mms.forEach(el => el.style.display = "none")
    chs.forEach(el => el.style.display = "block")
}
lang_en()

// popup img
function show_img(url){
  document.querySelector('.show-img').style.display='flex'
  var img =`
    <div class="show-img-body">
        <img src="${url}" alt="">
    </div>`
document.querySelector('.show-img').innerHTML = img

}


function hide_img(){
  document.querySelector('.show-img').style.display='none'
}