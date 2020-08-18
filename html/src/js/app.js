$(document).on("click", "[data-scrollto]", function(e) {
    e.preventDefault();   
    var scrollToElm = $(this).data("scrollto");
    var scrollPos = $("#" + scrollToElm).offset().top;
    $("html,body").stop().animate({ scrollTop: scrollPos }, 1000);    
});

gsap.registerPlugin(ScrollTrigger);


$(".animTop").each(function(){
  gsap.fromTo($(this), {
    autoAlpha: 0
  },{
    scrollTrigger: {
      trigger: $(this),
      start: "top 90%",
    },
    duration: 1.5,   
    autoAlpha: 1
  });
});

// ScrollTrigger.create({
//     trigger: ".hero-wrap",
//     start: "top top", 
//     end: "top 150px",
//     pin: ".section-home"
//   });

function homeAnime(){
    if($(".hero-wrap").height() <= $(window).height()){
        gsap.to(".hero-wrap .section-hero", {
            id: "myID",
            opacity: 0, 
            y: -150,  
            scrollTrigger: {  
                id:"gt",         
                trigger: ".hero-wrap",
                invalidateOnRefresh: true,
                anticipatePin: 1,
                pinSpacing: false,
                pin: true,
                start: "top top",
                end: "bottom 0",
                scrub: true
            }
        });
    }
}
homeAnime();
$(window).on("resize", function(){    
    if(gsap.getById("myID") || ScrollTrigger.getById("gt")){      
        gsap.getById("myID").kill(true);     
        ScrollTrigger.getById("gt").kill(true);              
    }
    homeAnime();
});

var heroTl = gsap.timeline({ paused: true});

heroTl.to(".hero-content", {visibility:"visible"});
heroTl.fromTo(".hero-content img,.hero-content h2", {autoAlpha:0, y:30}, {stagger:0.2,duration: 0.5,autoAlpha:1, y:0});
heroTl.fromTo(".hero-content .line span", {width:0}, {duration: 0.5, width:70}, "-=0.2");
heroTl.fromTo(".hero-content .section-content,.hero-content .btn-wrap", {autoAlpha:0, y:30}, {stagger:0.2,duration: 0.5,autoAlpha:1, y:0}, "-=0.4");

heroTl.play();