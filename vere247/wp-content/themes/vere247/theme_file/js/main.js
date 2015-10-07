// JavaScript Document
$(document).ready(function(){
    $(".dataList1 dt").on("click",function(){
        if($(this).hasClass('open')){
            $(this).stop().next("dd").slideUp(250);
            $(this).stop().removeClass('open');               
        }else{
            $(".dataList1 dt").stop().removeClass('open');
            $(".dataList1 dd").stop().slideUp(250);
            
            $(this).next("dd").stop().slideDown(250);
            $(this).stop().addClass('open');
        }
        return false;
    });  
    $(".dataList2 dt").on("click",function(){
        if($(this).hasClass('open')){
            $(this).stop().next("dd").slideUp(250);
            $(this).stop().removeClass('open');               
        }else{
            $(".dataList2 dt").stop().removeClass('open');
            $(".dataList2 dd").stop().slideUp(250);
            
            $(this).next("dd").stop().slideDown(250);
            $(this).stop().addClass('open');
        }
        return false;
    });
    jQuery(".buyTicket").click(function (event) {
        var pf = jQuery(this).attr("data-place-from");
        var pc = jQuery(this).attr("data-place-come");
        jQuery('input#placeFrom').val(pf);
        jQuery('input#placeCome').val(pc);
		var target = jQuery("#formTicket").parents(".contentSmall").offset().top-35;
		jQuery('html,body').stop().animate({ scrollTop: target }, 500);
		event.preventDefault();
		return false;
	});
});