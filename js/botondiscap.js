$(document).ready(function() {

    var left = $('#left').tabSlideOut({
        tabLocation: 'left',
        clickScreenToClose: false,
        offset: '3.2em',
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

    
    const eliminarCookies = element => {
        document.cookie.split(";").forEach(function(c) {
            document.cookie = c.replace(/^ +/, "").replace(/=.*/, "=;expires=" + new Date().toUTCString() + ";path=/");
        });
    }

    const getFontSize = () =>
        parseFloat(getComputedStyle(document.documentElement)
            .getPropertyValue('--font-size'))

    const fontUp = element => {
        // escuchamos los clicks del elemento
        element.addEventListener('click', () => {
            // obtenemos el valor de la variable CSS
            let fontSize = getFontSize()
                // aumentamos el valor de esa variable en 1.1
            document.documentElement
                .style.setProperty('--font-size', `${fontSize * 1.3}`)
        })
    }

    const fontDown = element => {
        // escuchamos los clicks del elemento
        element.addEventListener('click', () => {
            // obtenemos el valor de la variable CSS
            let fontSize = getFontSize()
                // disminuimos el valor de esa variable en 0.9
            document.documentElement
                .style.setProperty('--font-size', `${fontSize * 0.7}`)
        })
    }

    const subLinks = element =>{
        element.addEventListener('click',()=>{
            var a = document.getElementsByTagName('a');
            for(var i in a){
                //a[i].style.setProperty('background-color','yellow')
                a[i].style.setProperty('text-decoration','underline')
            }
        })
    }
    const resaltarLinks = element =>{
        element.addEventListener('click',()=>{
            var a = document.getElementsByTagName('a');
            for(var i in a){
                a[i].style.setProperty('background-color','yellow')
            }
        })
    }

    
    fontUp(document.getElementById('font-up'))
    fontDown(document.getElementById('font-down'))
    eliminarCookies(document.getElementById('eliminarCookies'))
    subLinks(document.getElementById('subrayarLinks'))
    resaltarLinks(document.getElementById('resaltarLinks'))

});