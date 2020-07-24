// drop down menu 
$(".menu li > a ").click(function (e) {
    $(".menu ul ul").slideUp(), $(this).next().is(":visible") || $(this).next().slideDown(), e.stopPropagation()
})
/* apa bila media yang membuka skurang dati 768px */
$(window).bind("load resize", function () {
    if ($(this).width() < 768) {
        $(".sidebar-collapse").addClass("collapse")
    } else {
        $(".sidebar-collapse").removeClass("collapse")
    }
})



// $(document).ready(function () {
//     alert("test");
// })


$(".profil .icon_wrap").click(function () {
    $(this).parent().toggleClass("active");
})
