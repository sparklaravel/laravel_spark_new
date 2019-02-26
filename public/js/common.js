
//Copy button
function copyFunction() {
  var copyText = document.getElementById("copy-url-input");
  copyText.select();
  document.execCommand("copy");
  alert("Copied the text: " + copyText.value);
}

$(document).ready(function(){

    $('.go').click(function() {
        let go = $(this).attr('href');
            if ($(go).length != 0) {
                $('html,body').animate({ scrollTop: $(go).offset().top }, 1000);
            }
            return false;
    });
});

var bar = new ProgressBar.Circle(yearly, {
    strokeWidth: 6,
    easing: 'easeInOut',
    duration: 1400,
    color: '#7ed321',
    trailColor: '#eee',
    trailWidth: 1,
    svgStyle: null
  });
  
bar.animate(0.5);

var bar2 = new ProgressBar.Circle(monthly, {
    strokeWidth: 6,
    easing: 'easeInOut',
    duration: 1400,
    color: '#6ca9f8',
    trailColor: '#eee',
    trailWidth: 1,
    svgStyle: null
  });

  
bar2.animate(0.4);


var bar3 = new ProgressBar.Circle(weekly, {
    strokeWidth: 6,
    easing: 'easeInOut',
    duration: 1400,
    color: '#ee9665',
    trailColor: '#eee',
    trailWidth: 1,
    svgStyle: null
  });
  
bar3.animate(0.7);

function openNav() {
    document.getElementById("myNav").style.width = "250px";
}

/* Close when someone clicks on the "x" symbol inside the overlay */
function closeNav() {
    document.getElementById("myNav").style.width = "0";
}
