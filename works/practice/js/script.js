jQuery("#about").on("click", function () {
  jQuery(this).find(".toggle-list").slideToggle();
});


jQuery("#menu").on("click", function () {
  jQuery(this).find(".toggle-list").slideToggle();
});

jQuery(".toggle-list").on("click",function(event){
  event.stopPropagation();
})


jQuery(function () {
  var topBtn = jQuery("#page-top");
  topBtn.hide();
  jQuery(window).scroll(function () {
    if (jQuery(this).scrollTop() > 80) {
      topBtn.fadeIn(300); // 修正: "I" が大文字
    } else {
      topBtn.fadeOut(300);
    }
  });
  topBtn.on("click",function(){
    jQuery("html,body").animate({ scrollTop: 0 }, 500)
    return false
  })
});


$(function(){
  $("#main img").click(function() {
    $("#graydisplay").html($(this).prop('outerHTML'));
    $("#graydisplay").fadeIn(1000);
  });
  $("#graydisplay, #graydisplay img").click(function() {
    $("#graydisplay").fadeOut(1000);
  });
});