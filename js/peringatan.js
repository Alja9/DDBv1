var tutupki = document.getElementsByClassName("tutup");
var i;

for (i = 0; i < tutupki.length; i++) {
    tutupki[i].onclick = function(){
        var div = this.parentElement;
        div.style.opacity = "0";
        setTimeout(function(){ div.style.display = "none"; }, 600);
    }
}

$('.carousel').carousel() // <=== Gak tahu ini gunanya apa di web DDB :D tapi umumnya untuk slideshow sih JQuery