$(function() {
    $('.validity').validity({
        // selector: 'select',
        // ignore: 'select',
        messages: {
            missing: 'Campo obrigatório',
            mismatch: 'O valor informado é inválido'
        }
    })
        .on('submit', function(e) {
            var $this = $(this),
                $btn = $this.find('[type="submit"]');
                $btn.button('loading');

            if (!$this.valid()) {
                e.preventDefault();
                $btn.button('reset');
            }
    });

    $('.validity2').validity()
        .on('submit', function(e) {
            var $this = $(this),
                $btn = $this.find('[type="submit"]');
                $btn.button('loading');

            if (!$this.valid()) {
                e.preventDefault();
                $btn.button('reset');
            }
    });
});

//Toggle for Menu
function openNav() {
    document.getElementById("mySidebar").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
  }
  
  function closeNav() {
    document.getElementById("mySidebar").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
  }

//Sticky Header
$(document).ready(function(){
    $(window).on('scroll',function(){
        var scroll = $(window).scrollTop();
        if(scroll>=50){
            $(".sticky").addClass("stickyadd");
        }else{
            $(".sticky").removeClass("stickyadd");
        }
    });

    var typed = new Typed('.element', {
        Strings: [ 'I am a Web Developer', 'Good in UI/UX Designs', 'a little bit IT Support', 'proud Graphic Designer' ],
        smartBackspace:true,
        typeSpeed:100,
        backSpees:100,
        loop:true,
        shuffle: true,
        loopCount: Infinity,
        startDelay:1000
    });

    var p = document.querySelectorAll('.progress-bar');
    p[0].setAttribute("style", "width:70%;transition:1s all");
    p[1].setAttribute("style", "width:95%;transition:1.2s all");
    p[2].setAttribute("style", "width:90%;transition:1.7s all");
    p[3].setAttribute("style", "width:80%;transition:1.6s all");
    p[4].setAttribute("style", "width:40%;transition:1s all");

});