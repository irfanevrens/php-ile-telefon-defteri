$(document).ready(function () {
	/*
	Sercan Aksoy
	sercan@bulsam.net
	sercan@buraya.com
	http://www.buraya.com
	*/
	
/*--------------------------------------------------------------------------------------------------------*/
	
	/*Arama sonucunda çıkan tooltip kapatma*/
	
	$('label[for="kisiAra"] span').click(function () { $(this).fadeOut(); })
	
	// giriş yaparken şifre alanında enter basılınca Giriş Yap butonuna tıklama tetiklenecek
	$('#kSifre').bind('keypress', function(e) {
		
		var code = (e.keyCode ? e.keyCode : e.which);
		
		// Enter
		if (code == 13) {
		  
			$('#telGirisi').click();
		}
	});
	
	/*Rehber girişinde kullanılan fonksiyonlar*/
	$('#telGirisi').click(function () {
	
			var kMail=$('#kMail').val(); //Mail Adresini al
			var kSifre=$('#kSifre').val(); //Şifreyi al
			
			$('.cevap').html("<img src='resim/ajax-loader.gif' /> Lütfen bekleyin..."); // Kullanıcı girişi yaparken loading göster
		
			//Ajax ile verileri giriş kontrol sayfasına gönder
			$.ajax({
				type:'POST',
				url:'site/girisKontrol.php',
				data:'kMail='+kMail+'&kSifre='+kSifre,
				success:function(cevap){
					if (cevap == "tamam") {
						
						// cevap olumlu ise rehber sayfasına gönder
						window.location.href="rehber/kisi_listesi.php"
					} else {
					
						//sonuç olumsuz ise hatayı ekrana bastır
						$('.cevap').html(cevap);
					}
				}
			});
	});
	
	/*Kişi Ekleme yapılırken Kullanılan Ajax Fonksiyonu*/
	$('#kisiEkle').click(function () {
		
			var tAd=$('#tAd').val();      	 //Ad Soyad verisini al 
			var tCep=$('#tCep').val();		//Cep telefonu 1 verisi
			var tCep2=$('#tCep2').val();	//Cep telefonu 2 verisi 
			var tCep3=$('#tCep3').val(); 	//Cep telefonu 3 verisi 
			var tEv=$('#tEv').val();		//Ev telefonu verisi
			var tAdres=$('#tAdres').val();	//Adres bilgisini al
			
			$('.cevap').html("<img src='../resim/ajax-loader.gif' /> Lütfen bekleyin..."); //Kişi eklenirken loading göster
			
			/*Ajax işlemini başlat*/
			$.ajax({
				
				type:'POST',
				url:'../site/kisiEkle.php',
				data:'tAd='+tAd+'&tCep='+tCep+'&tEv='+tEv+'&tAdres='+tAdres+'&tCep2='+tCep2+'&tCep3='+tCep3,
				success:function(cevap){ $('.cevap').html(cevap); }
				
			})
	})
	
	
	/*Arama yapılırken Kullanılan Ajax Fonksiyonu*/
	$('#arama').keyup(function (event) {
			
		var arama=$(this).val(); //Aranan kelimeyi al
		$('#arama').css('background','url("../resim/ajax-loader.gif") no-repeat right'); // Arama esnasında loading göster
		
		/*Ajax işlemini başlat*/
		$.ajax({
			type:'POST',
			url:'../site/kisiAra.php',
			data:'arama='+arama,
			success:function(cevap){
				$('.icerikEkle').html(cevap); //Bulanan sonuçları ekrana bas
				$('#arama').css('background','none'); //Bu arada loading göster
						var sonucAdet=$('.icerikEkle tr').length
						$('label[for="kisiAra"] span').html(sonucAdet+' sonuç bulundu...<div></div>').show();
				}

			})
		});
		
	
	/*Kayıt silme işleminde kullanılan fonksiyon*/
	$('.kayitSil a').click(function () {
		
			var id=$(this).attr('id'); //Kişinin id bilgisini al
			
			/*Ajax işlemine başla*/
			$.ajax({
				type:'POST',
				url:'../site/kisiSil.php',
				data:'id='+id,
				success:function(cevap){
								if(cevap=="yes") {$('#'+id).parent().parent().fadeOut();}
								else {alert('Hata meydana geldi...'); }	
				}
			})
				
			return false;
		})
		
	$('.kayitSil2 a').live('click',function () {
		
			var id=$(this).attr('id'); //Kişinin id bilgisini al
			
			/*Ajax işlemine başla*/
			$.ajax({
				type:'POST',
				url:'../site/kisiSil.php',
				data:'id='+id,
				success:function(cevap){
								if(cevap=="yes") {$('#'+id).parent().parent().fadeOut();}
								else {alert('Hata meydana geldi...'); }	
				}
			})
				
			return false;
		})
})