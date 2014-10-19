
  </body>

  	<script src="//assets.ziggeo.com/js/ziggeo-jquery-json2-betajs-player.min.js"></script>
	<script>ZiggeoApi.token = "7f2ac8412386c9623f5964d478141046";</script>
	<script type="text/javascript">
		ZiggeoApi.Events.on("submitted", function (data) {
			alert("Submitted a new video with token '" + data.video.token + "'!");
		});
	</script>
</html>
