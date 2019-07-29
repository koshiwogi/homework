
<!DOCTYPE html>
<html lang="ja">
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
		<title>TODAY</title>

		 <link rel= "stylesheet" href= "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity= "sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin= "anonymous" > 

		 <link rel="stylesheet" href="assets/css/style.css">
	</head>
<body> 
	<header>
		<h1>TODAY</h1>
	</header>

	<div class="container">
		<script>
			//日つけを表示する*/
			let today = new Date();
			let todayHtmL = today.getFullYear() + '/' + (today.getMonth()+1) + '/' + today.getDate();

			document.write('<p class="date">' + todayHtmL + '</p>');
		</script>
		<footer id="contact">
    <div class="footer-top">
      <div id="drop-us">
		<h3>Inquiry form</h3>
		
        <form id="form" method="post" action="check.php">

		<div class="attention">
            <p>(*)は必須項目</p>
          </div>
          <div class="form-group">
            <div class="attention">
              <span id="text_data0_error" class="error_m"></span>
            </div>
            <input type="text" name="name" class="form" id="text_data0" placeholder="*Name" autocomplete="off">
          </div>
          <div class="form-group">
            <div class="attention">
              <span id="text_data2_error" class="error_m"></span>
            </div>
            <input type="text" name="email" class="form" id="text_data2" placeholder="*E-mail" autocomplete="off">
          </div>
 
          <div class="form-group">
            <div class="attention">
              <span id="text_data3_error" class="error_m"></span>
            </div>
            <textarea type="text" name="message" id="text_data3" placeholder="*Message" rows="10" cols="10" wrap="hard" maxlength="160"></textarea>
          </div>
 
          <div class="form-group">
            <div id="submit-center">
			  <input id="submit" type="submit" name="btn_confirm" value="Check">
            </div>
          </div>
        </form>
      </div>
    </div>
  </footer>
</body>
</html>