
// Make navar disapear onscroll

(function(a) {
    a(document).ready(function() {
        a(".navbar").show();
        a(function() {
            a(window).scroll(function() {
                100 < a(this).scrollTop() ? a(".navbar").fadeOut() : a(".navbar").fadeIn()
            })
        })
    })
})(jQuery);