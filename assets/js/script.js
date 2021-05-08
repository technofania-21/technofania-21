(function ($) {
    $(function () {
  
      $(window).resize(agResize);
      agResize();
  
      function agResize() {
  
        $('#js-countdown').TimeCircles({
          ref_date: new Date(2021, 3, 17, 0, 0, 0, 0),
          start: true,
          refresh_interval: 0.1,
          count_past_zero: true,
          circle_bg_color: '#DEDEDE',
          use_background: true,
          fg_width: 0.03,
          bg_width: 0.30,
          time: {
            Days: {show: true, text: 'Days', color: 'white'},
            Hours: {show: true, text: 'Hours', color: 'white'},
            Minutes: {show: true, text: 'Minutes', color: 'white'},
            Seconds: {show: true, text: 'Seconds', color: 'white'}
          }
        }).rebuild();
      }
  
    });
  })(jQuery);