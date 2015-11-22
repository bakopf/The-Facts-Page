var header = $('[data-role=header]').outerHeight();
var panel = $('.ui-panel').height();
var panelheight = panel - header;
$('.ui-panel').css({
    'top': header,
    'min-height': panelheight
});

var isMobile = {
    Android: function() {
        return navigator.userAgent.match(/Android/i);
    },
    BlackBerry: function() {
        return navigator.userAgent.match(/BlackBerry/i);
    },
    iOS: function() {
        return navigator.userAgent.match(/iPhone|iPad|iPod/i);
    },
    Opera: function() {
        return navigator.userAgent.match(/Opera Mini/i);
    },
    Windows: function() {
        return navigator.userAgent.match(/IEMobile/i);
    },
    any: function() {
        return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
    }
};

$(document).ready(function(){
    if(isMobile.any()) {
      $("#shaker").css("display", "block");
      $("#getfact").css("display", "none");
    } else {
      $("#shaker").css("display", "none");
      $("#getfact").css("display", "block");
    }
});

// Thanks to https://gist.github.com/kylebarrow/1042026#file-stay_standalone-js
if(("standalone" in window.navigator) && window.navigator.standalone){

    // If you want to prevent remote links in standalone web apps opening Mobile Safari, change 'remotes' to true
    var noddy, remotes = false;
    
    document.addEventListener('click', function(event) {
        
        noddy = event.target;
        
        // Bubble up until we hit link or top HTML element. Warning: BODY element is not compulsory so better to stop on HTML
        while(noddy.nodeName !== "A" && noddy.nodeName !== "HTML") {
            noddy = noddy.parentNode;
        }
        
        if('href' in noddy && noddy.href.indexOf('http') !== -1 && (noddy.href.indexOf(document.location.host) !== -1 || remotes))
        {
            event.preventDefault();
            document.location.href = noddy.href;
        }
    
    },false);
}