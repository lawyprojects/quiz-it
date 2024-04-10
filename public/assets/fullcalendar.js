document.addEventListener("DOMContentLoaded",function(){var t=document.getElementById("external-events");new FullCalendar.Draggable(t,{itemSelector:".fc-event",eventData:function(e){return{title:e.innerText.trim(),title:e.innerText,className:e.className+" overflow-hidden "}}});var n=document.getElementById("calendar2"),r=new FullCalendar.Calendar(n,{headerToolbar:{left:"prev,next today",center:"title",right:"dayGridMonth,timeGridWeek,timeGridDay"},defaultView:"month",navLinks:!0,businessHours:!0,editable:!0,selectable:!0,selectMirror:!0,droppable:!0,select:function(e){var a=prompt("Event Title:");a&&r.addEvent({title:a,start:e.start,end:e.end,allDay:e.allDay}),r.unselect()},eventClick:function(e){confirm("Are you sure you want to delete this event?")&&e.event.remove()},editable:!0,dayMaxEvents:!0,events:[{title:"Business Lunch",start:"2021-03-03T13:00:00",constraint:"businessHours"},{title:"Meeting",start:"2021-03-13T11:00:00",constraint:"availableForMeeting",color:"#f35e90"},{title:"Conference",start:"2021-07-18",end:"2021-07-20",color:"#e67e22"},{title:"Party",start:"2021-07-29T20:00:00",color:"#22c865"},{id:"availableForMeeting",start:"2021-03-11T10:00:00",end:"2021-03-11T16:00:00",rendering:"background",color:"#5e72e4"},{id:"availableForMeeting",start:"2021-03-13T10:00:00",end:"2021-03-13T16:00:00",rendering:"background"},{start:"2021-03-24",end:"2021-03-28",overlap:!1,rendering:"background",color:"rgba(0,0,0,0.1)"},{start:"2021-03-06",end:"2021-03-11",overlap:!1,rendering:"background",color:"rgba(0,0,0,0.1)"}]});r.render()});document.addEventListener("DOMContentLoaded",function(){var t=document.getElementById("calendar"),n=new FullCalendar.Calendar(t,{height:"auto",headerToolbar:{left:"prev,next today",center:"title",right:"listDay,listWeek"},views:{listDay:{buttonText:"list day"},listWeek:{buttonText:"list week"}},initialView:"listWeek",initialDate:"2021-07-12",navLinks:!0,editable:!0,eventLimit:!0,dayMaxEvents:!0,events:[{title:"All Day Event",start:"2021-11-01"},{title:"Long Event",start:"2019-11-07",end:"2021-03-10"},{id:999,title:"Repeating Event",start:"2021-11-09T16:00:00"},{id:999,title:"Repeating Event",start:"2021-11-16T16:00:00"},{title:"Conference",start:"2019-11-11",end:"2021-11-13"},{title:"Meeting",start:"2019-11-12T10:30:00",end:"2021-11-12T12:30:00"},{title:"Lunch",start:"2021-11-12T12:00:00"},{title:"Meeting",start:"2021-11-12T14:30:00"},{title:"Happy Hour",start:"2021-11-12T17:30:00"},{title:"Dinner",start:"2021-11-12T20:00:00"},{title:"Birthday Party",start:"2021-11-13T07:00:00"},{title:"Click for Google",url:"http://google.com/",start:"2021-11-28"}]});n.render()});
