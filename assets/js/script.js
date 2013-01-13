var veri = null;
$(document).ready(function(){
	$("#log-1").click(function(){
		$("#logIcerik-1").toggle();
	});
	$("#uyari").click(function(){
		$("#logMesajGirisi").val($("#logMesajGirisi").val()+"@uyari:");
		
	});
	$("#acil").click(function(){
		$("#logMesajGirisi").val($("#logMesajGirisi").val()+"@acil:");
		
	});
	$("#yapilacak").click(function(){
		$("#logMesajGirisi").val($("#logMesajGirisi").val()+"@yapilacak:");
		
	});
	$("#girdi").click(function(){
		$("#logMesajGirisi").val($("#logMesajGirisi").val()+"@girdi:");
		
	});
	$("#cikti").click(function(){
		$("#logMesajGirisi").val($("#logMesajGirisi").val()+"@cikti:");
		
	});

});
function logGir()
{
	var zaman = new Date();
	var veri  = $("#logMesajGirisi").val().replace(/\s*@(ornek|uyari|yapilacak|acil|girdi|cikti):\s*([a-zA-Z0-9\s*.,\?;@]*)<-\s*/g,"<pre class='$1'>@$1:$2</pre>");	
	$("#logContainer").prepend("<div class='log alert'><i class='icon-time'></i><span>"+zaman.getHours()+":"+zaman.getMinutes()+"</span>&nbsp;<span>"+$("#baslik").val()+"</span><div id='logIcerik-1' class='logIcerik'>"+veri+"</div></div>");
	formTemizle();
}
function formTemizle()
{
	$("#baslik").val("");
	$("#logMesajGirisi").val("");
}
function arsivGoster()
{
	$("#arsiv").toggle();
}