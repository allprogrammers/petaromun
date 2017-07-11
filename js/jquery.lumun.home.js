/* Author: Usama Muneeb */

$(document).ready(function(){
    /*
    for (var i=1; i <=10; i=i+2) {
        setTimeout( function() {$(".logo").attr('style','background-image:url("subtle_dots.png")');}, i*500 );
        setTimeout( function() {$(".logo").attr('style','');}, (i*500)+500 );
    }
    */
    
    var slides = $(".slides").children();
    var control = $($(".carousel-control").children()[0]).children();
    
    for (var i=0; i < slides.length; ++i) {
        $(control[i]).attr('id', i+1);
    }
    
    var currentslide=1;
    var lastSwitch = (new Date()).getTime();
    
    function nextSlide(current) {
        var next = (current+1)%(slides.length);
        return next;
    }
    
    function switchSlide() {
        lastSwitch = (new Date()).getTime();
        --currentslide;
        $(".slides").addClass('sliding');
        
        $(slides[nextSlide(currentslide)]).addClass('next');
        $(".slides").attr('style','left: -125.5px; width: 3200px; margin-left: 0px; -webkit-animation: carousel 1s 1; animation: carousel 1s 1;');
        $(control[currentslide]).removeClass('active');
        $(control[nextSlide(currentslide)]).addClass('active');
        
        setTimeout(function(){
            $(".slides").attr('style','left: -125.5px; width: 1600px; margin-left: 0px')
            
            $(slides[currentslide]).attr('style','z-index:1');
            
            currentslide=nextSlide(currentslide);
            
            $(slides[currentslide]).attr('style','z-index:2');
            $(slides[currentslide]).removeClass('next');
            
            $(".slides").removeClass('sliding');
            
            ++currentslide;
            
        },1000);
        
    }
    
    function customSwitchSlide(select) {
        lastSwitch = (new Date()).getTime();
        --currentslide;
        $(".slides").addClass('sliding');
        
        $(slides[select-1]).addClass('next');
        $(".slides").attr('style','left: -125.5px; width: 3200px; margin-left: 0px; -webkit-animation: carousel 1s 1; animation: carousel 1s 1;');
        $(control[currentslide]).removeClass('active');
        $(control[select-1]).addClass('active');
        
        setTimeout(function(){
            $(".slides").attr('style','left: -125.5px; width: 1600px; margin-left: 0px')
            
            $(slides[currentslide]).attr('style','z-index:1');
            
            currentslide=select-1;
            
            $(slides[currentslide]).attr('style','z-index:2');
            $(slides[currentslide]).removeClass('next');
            
            $(".slides").removeClass('sliding');
            
            ++currentslide;
            
        },1000);
        
    }
    
    var disable=false;
    
    
    for (var i=1; i < 2000; ++i) {
        
        if ((new Date()).getTime() - lastSwitch > 5000) {
            disable=true;
            switchSlide();
            setTimeout( function() { disable=false; }, 1000 );
            /*
            setTimeout( function() { disable=true; }, (i*5000)-100 );
            setTimeout( function() { switchSlide(); disable=false; }, i*5000 );
            */
        }
        else {
            setTimeout( function() {  }, 3000 );
        }
    }
    
    $(document).on('click', 'li.carousel-button', function () {
        var select = this.id;
        
        
        if ((disable==false) && ((new Date()).getTime() - lastSwitch > 1100)) {
            customSwitchSlide(select);
        }
    });
    
});