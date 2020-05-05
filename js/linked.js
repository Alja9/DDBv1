	var teksnya = "<i>Klik Disini!</i>";
	var linknya = teksnya.link("ddbgtsnew.html");
	var teksnya2 = "SELAMAT NATAL 2018 &#127876;<br>WEBSITE AKAN TERBUKA DALAM:<br><br>";
	document.getElementById("hitung_mundur").style.color = "red";
	// Penyetelan waktu mundur
	var hitungMundurCoy = new Date("Jan 01, 2019 06:00:00").getTime();

	// Perubahan waktu
	var x = setInterval(function() {

	    // Mendapatkan waktu default
	    var sekarang = new Date().getTime();
	    
	    // Mencari jarak/sisa waktu dari waktu yang disetel dengan waktu sekarang
	    var jarak = hitungMundurCoy - sekarang;
	    
	    // Menghitung hari, jam, menit, dan detik
	    var hari = Math.floor(jarak / (1000 * 60 * 60 * 24));
	    var jam = Math.floor((jarak % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
	    var menit = Math.floor((jarak % (1000 * 60 * 60)) / (1000 * 60));
	    var detik = Math.floor((jarak % (1000 * 60)) / 1000);
	    
	    // Keluaran dari id="hitung_mundur"
	    document.getElementById("hitung_mundur").innerHTML = teksnya2 + hari + "Hari " + jam + "Jam " + menit + "Menit " + detik + "Detik ";
	    
	    // Jika waktu telah berakhir maka akan muncul link website DDBGTS 
	    if (jarak < 0) {
	        clearInterval(x);
	        document.getElementById("hitung_mundur").innerHTML = "WEB DDBGTS 2019 TELAH DIBUKA!<br><br>" + linknya;
	    }
	}, 1000);