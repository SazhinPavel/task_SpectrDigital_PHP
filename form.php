<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>


<input type="text" name="year">
<input type="submit" onclick="checkYaer()" value="Проверить">
<div id="out"></div>
	
</body>
</html>



<script>
	

	function checkYaer() {

	var year = document.querySelector('input[name = year]').value;

	var params = "year="+year;

	ajax(params);

	}

	function ajax(params){
		var request = new XMLHttpRequest();

		request.onreadystatechange = function(){
			if(request.readyState == 4 && request.status == 200){

				document.querySelector('#out').innerHTML = request.responseText;
			
			}
		}
		request.open('POST', 'check_year.php');
		request.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		request.send(params);
	}
	
</script>