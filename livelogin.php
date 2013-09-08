<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>SkyShare</title>
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<link href='http://fonts.googleapis.com/css?family=Bubbler+One' rel='stylesheet' type='text/css'>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
	<script src="js/script.js"></script>
</head>
<body>
	<div id="main_box">
	</div>
	<div id="main_main">
		<div id="title">
			SkyShare
		</div>
		<div>
		    <div id="meName" class="Name"></div>
		    <div id="meImg"></div>
		    <div id="signin"></div>
		</div>
		<script src="//js.live.net/v5.0/wl.js" type="text/javascript"></script>
		<script type="text/javascript">

		    // Update the following values
		    var client_id = "0000000048103E6B",
		        scope = ["wl.signin", "wl.basic", "wl.offline_access"],
		        redirect_uri = "https://login.live.com/oauth20_desktop.srf";

		    function id(domId) {
		        return document.getElementById(domId);
		    }

		    function displayMe() {
		        var imgHolder = id("meImg"),
		            nameHolder = id("meName");

		        if (imgHolder.innerHTML != "") return;

		        if (WL.getSession() != null) {
		            WL.api({ path: "me/picture", method: "get" }).then(
		                    function (response) {
		                        if (response.location) {
		                            imgHolder.innerHTML = "<img src='" + response.location + "' />";
		                        }
		                    }
		                );

		            WL.api({ path: "me", method: "get" }).then(
		                    function (response) {
		                        nameHolder.innerHTML = response.name;
		                    }
		                );
		        }
		    }

		    function clearMe() {
		        id("meImg").innerHTML = "";
		        id("meName").innerHTML = "";
		    }

		    WL.init({ client_id: client_id, redirect_uri: redirect_uri, response_type: "code", scope: scope });


		    WL.Event.subscribe("auth.sessionChange",
		        function (e) {
		            alert("butts");
		            if (e.session) {
		                displayMe();
		            }
		            else {
		                clearMe();
		            }            
		        }
		    );


		    WL.ui({ name: "signin", element: "signin" });

		</script>
		<form name="longurl" id="longurl" method="get" action="addtodb.php">
			<input type="text" placeholder="Paste last url here" id="dumburl" name="codeURL"></input><br>
			<input type="submit" id="submit_url" name="submit_url"></input>
		</form>
	</div>
</body>
</html>