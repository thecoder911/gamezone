var swiper new Swiper(".swiper", {

    effect: "coverflow",
    
    grabCursor: true,
    
    spaceßetween: 36,
    
    centeredSlides: false,
    
    coverflowEffect: {
    
    rotate: 8,
    
    stretch: 0,
    
    depth: 0,
    
    modifier: 1,
    
    slideShadows: false
    
    Loop: true,
    
    pagination: {
    
    el: ".swiper-pagination",
    
    clickable: true
    
    },
    
    keyboard:
    
    enabled: true
    
    nousewheet: {
    
    thresholdDelta: 70
    
    },
    
    breakpoints: {
    
    460: {
    
    slidesPerView: 3
    
    768: {
    
    slidesPerView: 3
    
    },
    
    1024:
    
    slidesPerView: 3
    
    1600:{
    
    slidesPerView: 3.6
    
    }