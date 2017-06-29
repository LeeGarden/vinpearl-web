 //slide
$('.slide').slick({
    dots: true,
    infinite: true,
    speed: 1500,
    arrows: true,
    autoplay: true,

    autoplaySpeed: 3000
});
//go-top
 $(function() {
     $(window).scroll(function() {
         if ($(this).scrollTop() >= 200) {
             $('#go-top').stop().animate({bottom: '50px'});
         } else {
             $('#go-top').stop().animate({bottom: '-50px'});
         }
     });
     $('#go-top').click(function() {
         $('body,html').animate({
             scrollTop: 0
         }, 800);
     });
 });
// link scroll
$('a[href^="#"]').click(function() {
    var the_id = $(this).attr("href");
    $('html, body').animate({
        scrollTop: $(the_id).offset().top
    }, 800);
    return false;
});
 //fancy-box
 $(function() {
     $(".gp-fancy-box").fancybox({
        openEffect  : 'elastic',
        closeEffect : 'elastic',
        prevEffect  : 'none',
        nextEffect  : 'none',
        arrows      : false,
        closeBtn    : false,
        helpers     : {
            title   : { type : 'inside' },
            thumbs  : {
                width   : 50,
                height  : 50
            },
            buttons : {}
        }
    });
    $(".fancy-box").fancybox({
        openEffect  : 'elastic',
        closeEffect : 'elastic'
    });
});
//ajax post add info consult
$('#sendConsult').click(function(){
    var url = $(this).attr('url-data');
    var fulname = $('#fulname').val();
    var email = $('#email').val();
    var phone = $('#phone').val();
    var message = $('#message').val();
    var data = {
        _token: $(this).data('token'),
        fulname : fulname,
        email: email,
        phone: phone,
        message: message
    }
    console.log(data);
    $.ajax({
        url : url,
        type : "post",
        cache : false,
        data : data,
        success:function(data){
            $(this).attr('url-data');
            $('#fulname').val('');
            $('#email').val('');
            $('#phone').val('');
            $('#message').val('');
            alert('Đã gửi thông tin đăng ký tư vấn miễn phí.');

        },
        error:function(data){
            console.log(data);
        }
    });
});
//ajax post add info register sale
$('#sendRegSale').click(function(){
    var url = $(this).attr('url-data');
    var fulname = $('#rs-fulname').val();
    var email = $('#rs-email').val();
    var phone = $('#rs-phone').val();
    var message = $('#rs-message').val();
    var data = {
        _token: $(this).data('token'),
        fulname : fulname,
        email: email,
        phone: phone,
        message: message
    }
    console.log(data);
    $.ajax({
        url : url,
        type : "post",
        cache : false,
        data : data,
        success:function(data){
            $(this).attr('url-data');
            $('#rs-fulname').val('');
            $('#rs-email').val('');
            $('#rs-phone').val('');
            $('#rs-message').val('');
            alert('Thông tin đăng ký mở bán đã được gửi thành công.');

        },
        error:function(data){
            console.log(data);
        }
    });
});