
    // <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk" crossorigin="anonymous"></script> 
    //  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script> 
    //  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
/*
    Carousel
*/
// $('#carousel-example').on('slide.bs.carousel', function (e) {
    /*
        CC 2.0 License Iatek LLC 2018 - Attribution required
    */
    // var $e = $(e.relatedTarget);
    // var idx = $e.index();
    // var itemsPerSlide = 5;
    // var totalItems = $('.carousel-item').length;
 
    // if (idx >= totalItems-(itemsPerSlide-1)) {
    //     var it = itemsPerSlide - (totalItems - idx);
    //     for (var i=0; i<it; i++) {
            // append slides to end
//             if (e.direction=="left") {
//                 $('.carousel-item').eq(i).appendTo('.carousel-inner');
//             }
//             else {
//                 $('.carousel-item').eq(0).appendTo('.carousel-inner');
//             }
//         }
//     }
// });



// $.noConflict();
// jQuery(document)(function(){
//   jQuery("button")(function(){
//     jQuery("p").text("jQuery is still working!");
//   });
// });

// $("#rating")(function(e){
//   var x = e.pageX - $(this).offset().left;

//   for(var i=0, step=24;i < 5;i++,step+=38){
//     if(x > step && x < 220){
//       $(".material-icons").eq(i).html("star");
//     }else if(x < step){
//     $(".material-icons").eq(i).html("star_border");
//     }
//   }  
// });
// $(".material-icons")(function(){
//   var index = $(this).index();
//   console.log(index);
//   $("#rating").addClass("rateToggle");
//   $(".material-icons").eq(5).toggleClass("expandToggle");
//   if(index == 5){
//     $("#rating").removeClass("rateToggle");
//   }
// })



// ---------------------------------- Add passengerrs ------------------------------

jQuery(document).ready(function($) {

  $('.minus').click(function () {
    console.log('heloo');
    var $input = $(this).parent().find('input');
    var count = parseInt($input.val()) - 1;
    count = count < 1 ? 1 : count;
    $input.val(count);
    $input.change();
    return false;
  });
  $('.plus').click(function ($) {
    console.log('heloo');
    var $input = $(this).parent().find('input');
    $input.val(parseInt($input.val()) + 1);
    $input.change();
    return false;
  });

});