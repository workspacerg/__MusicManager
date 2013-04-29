function allowDrop(ev)
{
	ev.preventDefault();
}

function drag(ev)
{
	ev.dataTransfer.setData("telechargement",ev.target.id);
}

function drop(ev)
{
   ev.preventDefault();
   var data=ev.dataTransfer.getData("telechargement");
   ev.target.appendChild(document.getElementById(data));
   //window.location.assign("connect.zip");
   document.getElementById("downloadDrop").moveTo(10,5);
}