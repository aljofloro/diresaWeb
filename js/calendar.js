$(document).ready(function() {

    if($(".calendarboletin").length > 0 ){
        new Calendar('.calendarboletin', {
            language: 'es'
        });

        if(typeof calendarBoletin != 'null'){
            document.querySelector('.calendarboletin').addEventListener('clickDay', function(e) {
                var download = function(downloadURL) {
                    location = downloadURL;
                }
                download('http://example.com/archive.zip');
            });
        }
    }

    if($(".calendarsala").length > 0 ){
        new Calendar('.calendarsala', {
            language: 'es'
        });
    }
    
});