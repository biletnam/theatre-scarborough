<?php
	$title = "Scarborough Theatre Guild - Home";
	$description = "Scarborough Theatre Guild";
	include "header.php";
?>
<div class="mainBody">
	<div id="stg" class="stg container">
		<h2>Announcement</h2>
		<div class="row">
			<div class="col-xs-12">
				<a href="stg-show-1.php">
					<img src="img/stg/banner.png" alt="Alone Together" class="img-responsive">
				</a>
			</div>
			<div class="col-xs-12 col-sm-4">
				<div>
					<h3>Subscribe</h3>
					<img id="annLogo" src="img/stg.png" alt="STG Logo" class="img-responsive">
					<iframe src="http://www.facebook.com/plugins/like.php?href=http://theatrescarborough.com/GUILD_home.html&amp;show_faces=false&amp;action=like" id="fbLike" scrolling="no" frameborder="0" style="height: 20px; width: 240px" allowtransparency="true"></iframe>
					<p>
						<a href="https://plus.google.com/115664524493541247722" rel="publisher">
							<i class="fa fa-google-plus-square"></i>
							Add us to your Google+ circles
						</a>
					</p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4">
				<div>
					<h3>Hiring</h3>
					<a href="involve-volunteering.php">
						<img src="img/stg/Hiring.jpg" alt="Hiring Info" class="img-responsive">
					</a>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4">
				<div>
					<h3>Auditions</h3>
					<a href="involve-volunteering.php">
						<img src="img/stg/Auditions.jpg" alt="Auditions Info" class="img-responsive">
					</a>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-4">
				<form action="https://theatrescarborough.us10.list-manage.com/subscribe/post?u=ac5ebf669da799141271f6541&amp;id=5804903a85" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
				<h3>Subscribe to Our Mailing List</h3>
				<p>
					Get the latest news, events and audition info, as well as our monthly newsletter (you may unsubscribe at any time).
				</p>
				<p>
					<span class="asterisk">* indicates required field</span>
				</p>
				<table>
					<tr>
						<th>
							<label for="mce-EMAIL">Email Address *</label>
						</th>
						<td>
							<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
						</td>
					</tr>
					<tr>
						<th>
							<label for="mce-FNAME">First Name </label>
						</th>
						<td>
							<input type="text" value="" name="FNAME" class="" id="mce-FNAME">
						</td>
					</tr>
					<tr>
						<th>
							<label for="mce-LNAME">Last Name </label>
						</th>
						<td>
							<input type="text" value="" name="LNAME" class="" id="mce-LNAME">
						</td>
					</tr>
				</table>
				<div id="mce-responses" class="clear">
					<div class="response" id="mce-error-response" style="display:none"></div>
					<div class="response" id="mce-success-response" style="display:none"></div>
				</div><!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
				<div style="position: absolute; left: -5000px;"><input type="text" name="b_ac5ebf669da799141271f6541_5804903a85" tabindex="-1" value=""></div>
				<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4">
				<iframe src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2FScarboroughTheatreGuild&amp;width=290&amp;show_faces=false&amp;colorscheme=light&amp;stream=true&amp;border_color&amp;header=true&amp;appId=118361471601607" scrolling="no" frameborder="0" style="height:250px;" allowTransparency="true"></iframe>
			</div>
			<div class="col-xs-12 col-md-4">
				<a class="twitter-timeline" href="https://twitter.com/ScarbTheatreGld" data-widget-id="585068759381057536">
					Tweets by @ScarbTheatreGld
				</a>
				<script>
					!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
				</script>
			</div>
		</div>
	</div>
</div>
<?php
	include "footer.php";
?>