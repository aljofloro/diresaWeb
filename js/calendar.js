$(document).ready(function() {

    var elementos = document.getElementsByClassName('calendarboletin');
    for(var i in elementos){
        identificador = "#"+elementos[i].id;

        if ($(identificador).length > 0) {
            var seccion = $(identificador).attr("data-params");
            let tooltip = null;
            new Calendar(identificador, {
                language: 'es',
                dataSource: function(year){
                    return fetch('async/archivoBoletin.php?idSeccion='+seccion)
                    .then(result => result.json())
                    .then(result =>{
                        if(result.data){
                            return result.data.map(r=>({
                                startDate : new Date(r.fecha),
                                endDate : new Date(r.fecha),
                                name : r.nombre,
                                url : r.url
                            }));
                        }
                        return [];
                    });
                },
                clickDay: function(e){
                    if(typeof e.events[0] != 'null'){
                        window.open(e.events[0].url, '_blank')
                    }
                },
                mouseOnDay: function(e) {
                    if(e.events.length > 0) {
                        var content = '';
                        
                        for(var i in e.events) {
                            content += '<div class="event-tooltip-content">'
                                            + '<div class="event-name">' + e.events[i].name + '</div>'                                      
                                        + '</div>';
                        }
                    
                        $(e.element).popover({ 
                            trigger: 'manual',
                            container: 'body',
                            html:true,
                            content: content
                        });
                        
                        $(e.element).popover('show');
                    }
                },
                mouseOutDay: function(e) {
                    if(e.events.length > 0) {
                        $(e.element).popover('hide');
                    }
                },
                style:'background',
                Overlap:'true',
                autoHalfDay:'true'
            });
        }
    }
});