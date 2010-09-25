$(document).ready(function () {

	$('#telGirisi').click(function () {
	
		var kMail=$('#kMail').val();
		var kSifre=$('#kSifre').val();
		$('.cevap').html("<img src='resim/ajax-loader.gif' /> Lütfen bekleyin...");
		$.ajax({
			type:'POST',
			url:'site/girisKontrol.php',
			data:'kMail='+kMail+'&kSifre='+kSifre,
			success:function(cevap){
				if(cevap=="tamam") {window.location.href="rehber/"}
				else {$('.cevap').html(cevap);}
			}
		})
	})
	
$('#kisiEkle').click(function () {
	
		var tAd=$('#tAd').val();
		var tCep=$('#tCep').val();
		var tEv=$('#tEv').val();
		var tAdres=$('#tAdres').val();
		
		$('.cevap').html("<img src='../resim/ajax-loader.gif' /> Lütfen bekleyin...");
		$.ajax({
			type:'POST',
			url:'../site/kisiEkle.php',
			data:'tAd='+tAd+'&tCep='+tCep+'&tEv='+tEv+'&tAdres='+tAdres,
			success:function(cevap){
				$('.cevap').html(cevap);
			}
		})
	})
	
$('#arama').keyup(function (event) {
		
	var arama=$(this).val();
	$('#arama').css('background','url("../resim/ajax-loader.gif") no-repeat right');
	
		$.ajax({
			type:'POST',
			url:'../site/kisiAra.php',
			data:'arama='+arama,
			success:function(cevap){
				$('.icerikEkle').html(cevap);
				$('#arama').css('background','none');
			}

		})
	});
})