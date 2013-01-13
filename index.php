<html>
	<head>
		<title>Mesai loglari</title>
		<script src="assets/js/jquery.js" type="text/javascript"></script>
		<script src="assets/js/script.js" type="text/javascript"></script>
		<script src="lib/bootstrap/js/bootstrap.js" type="text/javascript"></script>
		<link rel="stylesheet" href="lib/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="assets/css/style.css" />
	</head>
	<body style="background-image:url('assets/img/creampaper.png');">
	
	<!-- Gecmis zamanlara ait lolarýn secilmesini saglayan zaman menusu -->
	<div id="arsiv" class="left col" style="background-image:url('assets/img/honey.png');">
		<div id="arsivMenu" style="margin-top:50%;margin-left:10px;width:95%;">
		<ul class="nav nav-list">
			<li><a href="#">12.01.2013</a></li>
			<li><a href="#">13.01.2013</a></li>
			<li><a href="#">14.01.2013</a></li>
		</ul>
			
		</div>
	</div>
	<!-- Log girise olanak saðlayan,log giriþi formu -->
	<button class="btn arsivGoster" onclick="arsivGoster();"><i class="icon-chevron-left"></i>Log Arsivi</button>
	<div id="logGiris" class="middle col"  style="background-image:url('assets/img/honey.png');">
		<div id="logGirisFormu">
			<form action="">
				<div>Log Konusu</div>
				<div><input type="text" id="baslik" class="logGiris" /></div>
				<div>
					<div>
						<div class="btn-group">
						    <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
							    @Ornek
						   <span class="caret"></span>
						   </a>
						    <ul class="dropdown-menu">
						    	<li><a id="girdi" href="#">Girdi</a></li>
						    	<li><a id="cikti" href="#">Cikti</a></li>
						    </ul>
						</div>
						<div class="btn-group">
						 <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
							    @Hata
						   <span class="caret"></span>
						 </a>
						 <ul id="hata" class="dropdown-menu">
						    	<li><a id="uyari" href="#">Uyarý</a></li>
						    	<li><a id="dikkat" href="#">Dikkat</a></li>
						    	<li><a id="acil" href="#">Acil</a></li>
						 </ul>
						</div>
						<div class="btn-group">
						 <a id="yapilacak" class="btn" href="#">
							    @Yapilacak
						 </a>
						</div>
					</div>
					<div>Log Mesajý</div>
					<div>
						<textarea id="logMesajGirisi" class="logGiris" rows="10" cols="50"></textarea>
					</div>
					
				</div>
				<div>
					 <button class="btn pull-right btn-primary" onClick="logGir();">Gönder</button>
				</div>
			</form>
		</div>
	</div>
	<!-- Loglarýn zaman ve basliklarýnýn yer aldýðý menu -->
	<div id="logGoruntu" class="right col" style="background-image:url('assets/img/honey.png');">
	<div id="logContainer">
		<div id="log-1" class="log alert alert-success">
			<i class="icon-time"></i>
			<span>11:05</span>
			<span>Mesaj Basligi</span>
			<div id="logIcerik-1" class="logIcerik">
			</div>
		</div>
	</div>
	
	</div>
	</body>
</html>
