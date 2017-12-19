
	<footer class="w3-padding-32 w3-center w3-text-white" style="background: #37010e"> All rights reserved &copy Aungkur 2018-2019 </footer>

 		<script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
 		<script src="<?php echo base_url()?>js/jquery.tickerNews.min.js"></script>
	    <script type="text/javascript">
	    	$(function(){
	    		var timer = !1;
				_Ticker = $("#T1").newsTicker();
				_Ticker.on("mouseenter",function(){
					var __self = this;
					timer = setTimeout(function(){
						__self.pauseTicker();
					},200);
				});
				_Ticker.on("mouseleave",function(){
					clearTimeout(timer);
					if(!timer) return !1;
					this.startTicker();
				});
			});

			function myFunction() {
			    var x = document.getElementById("demo");
			    if (x.className.indexOf("w3-show") == -1) {
			        x.className += " w3-show";
			    } else { 
			        x.className = x.className.replace(" w3-show", "");
			    }
			}
	    </script>

</body>
</html>
