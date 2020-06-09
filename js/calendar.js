$(document).ready(function() {
    new Calendar('.calendarboletin', {
        language: 'es'
    });
    new Calendar('.calendarsala', {
        language: 'es'
    });
    document.querySelector('.calendarboletin').addEventListener('clickDay', function(e) {
        var download = function(downloadURL) {
            location = downloadURL;
        }
        download('http://example.com/archive.zip');
    });
});