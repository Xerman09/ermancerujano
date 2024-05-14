var typed = new Typed(".multiple-text",{
    strings: ["Web Developer", "Web Developer", "Data Analyst"],
    typedSpeed: 100,
    backSpeed: 100,
    backDelay: 1000,
    loop: true
})

var typed = new Typed(".multiple-text1",{
    strings: ["ePortfolio", "ePortfolio"],
    typedSpeed: 100,
    backSpeed: 100,
    backDelay: 1000,
    loop: true
})


var abtlinks = document.getElementsByClassName("abt-links")
var abtcontents = document.getElementsByClassName("abt-contents")

function opentab(abtname){
    for(abtlink of abtlinks){
        abtlink.classList.remove("active");
    }

    for(abtcontent of abtcontents){
        abtcontent.classList.remove("active");
    }

    event.currentTarget.classList.add("active");
    document.getElementById(abtname).classList.add("active");
}



let mybutton = document.getElementById("myBtn");

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}


function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0; 
}