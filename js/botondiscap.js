$(document).ready(function() {

    var left = $('#left').tabSlideOut({
        tabLocation: 'left',
        clickScreenToClose: false,
        offset: '18em',
        offsetReverse: false, // offset from bottom, not top
        // handlers: enable and disable buttons when sliding open or closed
        onOpen: function() {
            $('#open').prop('disabled', true);
            $('#close').prop('disabled', false);
        },
        onClose: function() {
            $('#open').prop('disabled', false);
            $('#close').prop('disabled', true);
        }
    });


});