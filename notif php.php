<html>
<head>
<title>Untitled</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="asset/js/notify.js"></script>
<script src="asset/js/notify.min.js"></script>
</head>

<body>
<input name="notif" id="ngentot" type="button" value="Shoow notif" onclick=".notify('Access granted','Hello Box');"/>
<script>
$("#ngentot").click(function () {
	$.notify("anjay");
});
</script>


</body>

</html>