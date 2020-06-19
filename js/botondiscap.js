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

    const getFontSize = () =>
        parseFloat(getComputedStyle(document.documentElement)
        .getPropertyValue('--font-size'));
    
    const fontUp = element => {
        // escuchamos los clicks del elemento
        element.addEventListener('click', () => {
            // obtenemos el valor de la variable CSS
            let fontSize = getFontSize()
            // aumentamos el valor de esa variable en 1.1
            document.documentElement
            .style.setProperty('--font-size', `${fontSize * 1.3}`)
        })
    };

    const fontDown = element => {
        // escuchamos los clicks del elemento
        element.addEventListener('click', () => {
          // obtenemos el valor de la variable CSS
          let fontSize = getFontSize()
          // disminuimos el valor de esa variable en 0.9
          document.documentElement
            .style.setProperty('--font-size', `${fontSize * 0.7}`)
        })
    };

    fontUp(document.getElementById('font-up'));
    fontDown(document.getElementById('font-down'));


});