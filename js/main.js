var header = document.getElementById("header");
var logo = document.querySelector(".custom-logo");
var btn_cover = document.querySelector(".cover a");
var btn_benefits = document.querySelector("#benefits a");
var btn_about = document.querySelector(".about a");
var main = document.getElementById("main");

load();

function asyncBody(){
  main.style.opacity = "1";
}

function load(){
  setTimeout(function(){
    asyncBody()
  }, 0); 

  if (btn_cover && btn_benefits != null){
    btn_cover.classList.add('btn','btn-lg','btn-primary');
    btn_benefits.classList.add('btn','btn-lg','btn-primary');
  }
  if (btn_about != null){
    btn_about.classList.add('btn', 'btn-secondary');
  } 
  
  if (window.innerWidth < 1262) {
    header.classList.add("top-bar-js");
  }
}


window.onscroll = function() {topBar()};

function topBar() {
  if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100  || window.innerWidth < 1262) {
    header.classList.add("header-js");
    logo.classList.add("custom-logo-js")
  } else {
    header.classList.remove("header-js");
    logo.classList.remove("custom-logo-js")
  }
}

/* MENU */
document.getElementById("icon-menu").onclick = function () { menuPhone(); };
//document.getElementsByClassName("menu-item-has-children")[0].onclick = function () { subMenu(); };

function subMenu() {
    document.getElementsByClassName("sub-menu")[0].classList.toggle("mostrar");
}
function menuPhone() {
    document.querySelector("header nav").classList.toggle("mostrar");

    var line = document.getElementsByClassName("icon-line");
    line[0].classList.toggle("rotate-1");
    line[1].classList.toggle("rotate-2");
    line[2].classList.toggle("rotate-3");
}

