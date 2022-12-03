<!-- Bootstrap CDN -->
<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/popper.min.js" type="text/javascript"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.2.2/Chart.min.js"></script>
<!-- Bootstrap CDN -->
<!-- Main Js -->
<script src="js/main.js"></script>
<!-- Main Js -->

<!-- Slick Slider CDN -->
<script src="slick/slick.min.js"></script>
<!-- Slick Slider CDN -->

<!-- Wow Js CDN -->
<script src="js/wow.min.js"></script>
<script>
    new WOW().init();
</script>
<!-- Wow Js CDN -->
<script>
    $('document').ready(function() {
        $('.canvas-icon i').click(function() {
            $(".mobile-header").addClass('showheader');
        });
        $(' .mobile-header .cancel').click(function() {
            $(".mobile-header").removeClass('showheader');
        });
    });
</script>
<script>

// Card's slider

$('.slider-for').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
  asNavFor: '.slider-nav'
});
$('.slider-nav').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  asNavFor: '.slider-for',
  dots: true,
  centerMode: true,
  focusOnSelect: true
});

</script>
<script>
        function ratingStar(star){
            star.click(function(){
                var stars = $('.ratingW').find('li')
                stars.removeClass('on');
                var thisIndex = $(this).parents('li').index();
                for(var i=0; i <= thisIndex; i++){
                    stars.eq(i).addClass('on');
                }
                putScoreNow(thisIndex+1);
            });
        }

        function putScoreNow(i){
            $('#ratingField').val(i);
            ratingToWord(i);
        }

        $(function(){
            if($('.ratingW').length > 0){
                ratingStar($('.ratingW li a'));
            }
        });

        function ratingToWord(rating)
        {
            if(rating == 1) {
                $("#ratingTxt").val('Bad');
            }

            if(rating == 2) {
                $("#ratingTxt").val('Poor');
            }

            if(rating == 3) {
                $("#ratingTxt").val('Fair');
            }

            if(rating == 4) {
                $("#ratingTxt").val('Good');
            }

            if(rating == 5) {
                $("#ratingTxt").val('Excellent');
            }
        }
    </script>