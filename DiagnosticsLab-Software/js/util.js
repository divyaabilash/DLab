
   $(document).ready(function(){
        var top = $("footer").position().top 
        var bottom = $(".runner").position().top;
        var h = $(".techcontents").height();
        console.log(top-bottom);
        console.log(h);
        h = h > (top-bottom) ? h : (top-bottom);  
        h = h + 0.16 * h;
        console.log(h);

        $(".sideBar").height(h);
        $(".navigation").height(h);
        


        $('#searchResult').click(function() {
            return false;
        }).dblclick(function() {
        alert('double clicked');
        // add the content to the selected test table
        return false;
    });
    });

 //   (function (window, $) {
  
  // $(function() {
    
    
//     $('.ripple').on('click', function (event) {
//       event.preventDefault();
      
//       var $div = $('<div/>'),
//           btnOffset = $(this).offset(),
//             xPos = event.pageX - btnOffset.left,
//             yPos = event.pageY - btnOffset.top;
      

      
//       $div.addClass('ripple-effect');
//       var $ripple = $(".ripple-effect");
      
//       $ripple.css("height", $(this).height());
//       $ripple.css("width", $(this).height());
//       $div
//         .css({
//           top: yPos - ($ripple.height()/2),
//           left: xPos - ($ripple.width()/2),
//           background: $(this).data("ripple-color")
//         }) 
//         .appendTo($(this));

//       window.setTimeout(function(){
//         $div.remove();
//       }, 1000);
//     });
    
//   });
  
// })(window, jQuery);
