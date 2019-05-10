<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Unicode to Bijoy Converter - BanglaText</title>
	<meta name="description" content="Convert Bangla unicode text to old bijoy format and Bijoy text into unicode text." />
	<meta name="keywords" content="unicode, bijoy," />
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/style.css">
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
		<script>
	</script>
</head>
<body>
	

	<div class="container-fluid">
		<div class="conatainer">
			<div class="input_box">
				<form action="">
					<textarea name="" placeholder="Put Your Unicode Text Here" id="input" cols="30" rows="10"></textarea>
				</form>
				<input type="submit" value="U2B" id="U2B">
				<input type="button" value="clear" id="clear" title="Clear">
				<div class="ajex_loding">
					<img src="img/loader.gif" alt="">
				</div>
			</div>
			<div class="output_box">
				<textarea name="" placeholder="weRq d›U Gi †jLv GLv‡b cv‡eb" id="output" cols="30" rows="10"></textarea>
				<input type="button" id="cutbtn">
			</div>	
		</div>
		<span style="color: #fff;position: absolute;bottom: 0;">যদি এই Convartor টিতে বানান বেশি ভুল হয় তবে আপনার System Font টি আপডেট নয় দয়া করে আপডেট করুন </span>    
	</div>

<script>
	$('#cutbtn').click(function(e) {
		var copyText = document.querySelector("#output");
  		copyText.select();
  		document.execCommand("cut");
	});

	$('#clear').click(function(e) {
		$('#input').val('');
		$('#output').val('');
	});

	$('#U2B').click(function(e) {

		$('.ajex_loding').css('display', 'block');
		$('#U2B').attr('disabled', true)
		$.ajax({
			url: 'php/convart.php',
			type: 'POST',
			data: {unicode: $('#input').val()},
		})
		.done(function(e) {
			$('#output').val(e);
			$('#U2B').removeAttr('disabled')
			$('.ajex_loding').css('display', 'none');
		})
		.fail(function() {
			alert('Server Error');
		})
	})
	
</script>

</body>
</html>