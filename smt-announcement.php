<?php
	$title = "Scarborough Music Theatre - Home";
	$description = "Scarborough Music Theatre";
	include "header.php";
?>
<div class="mainBody">
	<div id="smtAnn" class="smt container">
		<h2>Announcement</h2>
		<div class="row">
			<div class="col-xs-12">
				<a href="smt-camp.php">
					<img src="img/smt/camp-banner.jpg" alt="Summer Day Camp" class="img-responsive">
				</a>
			</div>
			<div class="col-xs-12 col-sm-4">
				<div>
					<h3>Subscribe</h3>
					<img src="img/smt.png" id="annLogo" alt="SMT Logo" class="img-responsive">
					<p>To subscribe to our e-Newsletter, e-mail <a href="mailto:smt@theatrescarborough.com">smt@theatrescarborough.com</a> with the subject line "Subscribe".</p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4">
				<div>
					<h3>Auditions</h3>
					<a href="involve-volunteering.php">
						<img src="img/smt/spelling-teaser.jpg" alt="Spelling Bee" class="img-responsive">
					</a>
					<p id="auditionInfo">Audition Info Coming Soon</p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4">
				<div>
					<h3>Coming Soon</h3>
					<a href="smt-show-1.php">
						<img src="img/smt/anne-teaser.jpg" alt="Anne of Green Gables" class="img-responsive">
					</a>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-lg-6">
				<div class="sns">
					<iframe src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fscarboroughmusictheatre&amp;width=520&amp;height=250&amp;show_faces=false&amp;colorscheme=light&amp;stream=true&amp;border_color&amp;header=true&amp;appId=118361471601607" scrolling="no" frameborder="0" style="border:none; overflow:hidden;" allowTransparency="true" align="middle"></iframe>
				</div>
			</div>
			<div class="col-xs-12 col-lg-6">
				<div class="sns">
					<a class="twitter-timeline" href="https://twitter.com/ScarbMusicTheat" data-widget-id="345713347926319104">Tweets by @ScarbMusicTheat</a>
					<script>
						!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
					</script>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
	include "footer.php";
?>