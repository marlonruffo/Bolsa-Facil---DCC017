include("../assets/js/spin.js");
var agendamentos;
var obj;
carrega();
var spinner = new Spinner().spin();
document.getElementById('loading').appendChild(spinner.el);

setTimeout(function(){
					inicializa();
				},2000);
				
function inicializa() {

    /* initialize the external events
     -----------------------------------------------------------------*/
	$('#painel').css('display','block')
	spinner.stop();
    $('#external-events div.external-event').each(function() {

        // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
        // it doesn't need to have a start or end
        var eventObject = {
            title: $.trim($(this).text()) // use the element's text as the event title
        };

        // store the Event Object in the DOM element so we can get to it later
        $(this).data('eventObject', eventObject);

        // make the event draggable using jQuery UI
        $(this).draggable({
            zIndex: 999,
            revert: true,      // will cause the event to go back to its
            revertDuration: 0  //  original position after the drag
        });

    });


    /* initialize the calendar
     -----------------------------------------------------------------*/
	var index;
    //var date = new Date();
   // var d = date.getDate();
   // var m = date.getMonth();
   // var y = date.getFullYear();
	/*for(index = 0; index < agendamentos.length; index++){
		if(aux!=0)
			texto += ',';
		texto += '{ "title":"' + agendamentos[index].title + '" , "start":"' + agendamentos[index].start + '"}';
		aux++;
	}
	texto += ' ]}';
	
	//var obj = JSON.parse(texto);*/
	
	//console.log(obj);
	//alert(obj);
    $('#calendar').fullCalendar(
	
	{
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,basicWeek,basicDay'
        },
        editable: false,
        droppable: false, // this allows things to be dropped onto the calendar !!!
        drop: function(date, allDay) { // this function is called when something is dropped

            // retrieve the dropped element's stored Event Object
            var originalEventObject = $(this).data('eventObject');

            // we need to copy it, so that multiple events don't have a reference to the same object
            var copiedEventObject = $.extend({}, originalEventObject);

            // assign it the date that was reported
            copiedEventObject.start = date;
            copiedEventObject.allDay = allDay;

            // render the event on the calendar
            // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
            $('#calendar').fullCalendar('renderEvent', copiedEventObject, true);

            // is the "remove after drop" checkbox checked?
            if ($('#drop-remove').is(':checked')) {
                // if so, remove the element from the "Draggable Events" list
                $(this).remove();
            }

        },
        events:
		
			agendamentos['events']
		
    });


}

function carrega(){
				$.ajax({
					type: "GET",
					url: "controller.php?p=equipamentosAgendados",
					dataType: 'json',
					success: function(data){
						//alert(JSON.stringify(data));
						agendamentos = data;
						//console.log(agendamentos);
	var aux=0;	
	var texto='[';
				for(index = 0; index < agendamentos.length; index++){
		if(aux!=0)
			texto += ',';
		texto += '{ "title":"' + agendamentos[index].title + '" , "start":"' + agendamentos[index].start + '"}';
		aux++;
	}
	texto += ' ]';
	
	obj = JSON.parse(texto);
					}
				});
			}
function include_once(file_path) {
	var sc = document.getElementsByTagName("script");
	for (var x in sc)
		if (sc[x].src != null && sc[x].src.indexOf(file_path) != -1) 
			return;
	include(file_path);
}
function include(file_path){
	var j = document.createElement("script"); /* criando um elemento script: </script><script></script> */
	j.type = "text/javascript"; /* informando o type como text/javacript: <script type="text/javascript"></script>*/
	j.src = file_path; /* Inserindo um src com o valor do parâmetro file_path: <script type="javascript" src="+file_path+"></script>*/
	document.body.appendChild(j); /* Inserindo o seu elemento(no caso o j) como filho(child) do  BODY: <html><body><script type="javascript" src="+file_path+"></script></body></html> */
}