var header = $('[data-role=header]').outerHeight();
var panel = $('.ui-panel').height();
var panelheight = panel - header;
$('.ui-panel').css({
    'top': header,
    'min-height': panelheight
});

window.onload = function() {

    var myShakeEvent = new Shake({
        threshold: 15
    });

    myShakeEvent.start();

    window.addEventListener('shake', shakeEventDidOccur, false);

    function shakeEventDidOccur () {

        alert('shaker active!');
    }
};