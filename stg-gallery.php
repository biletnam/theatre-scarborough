<!--
	* In order to add a new image to the gallery,
		1) Upload the new image to the correct folder (see "file-structure.txt" for folder structure)
		2) Add the following codes right after the last codes for the image
			<a href="#" class="masonry">
				<img src="ENTER THE FILE PATH HERE" alt="ENTER THE CAPTION HERE">
			</a>
		3) It is crucial that you assign a class of "masonry" to the outer div
	* In order to add a caption for each image, just replace "SMT Gallery" value in alt tag
	  with the caption you want for that particular image
-->
<?php
	$title = "Scarborough Theatre Guild - Gallery";
	$description = "";
	include "header.php";
?>
<div class="mainBody">
	<div class="stg container">
		<h2>Gallery</h2>
		<div class="gallery">
			<a href="" class="masonry">
				<img src="img/stg/gallery/Blithe1.jpg" alt="STG Gallery">
			</a>
			<a href="" class="masonry">
				<img src="img/stg/gallery/Blithe2.jpg" alt="STG Gallery">
			</a>
			<a href="" class="masonry">
				<img src="img/stg/gallery/Bride1.jpg" alt="STG Gallery">
			</a>
			<a href="" class="masonry">
				<img src="img/stg/gallery/Butterfly1.jpg" alt="STG Gallery">
			</a>
			<a href="" class="masonry">
				<img src="img/stg/gallery/Cactus1.jpg" alt="STG Gallery">
			</a>
			<a href="" class="masonry">
				<img src="img/stg/gallery/Cactus2.jpg" alt="STG Gallery">
			</a>
			<a href="" class="masonry">
				<img src="img/stg/gallery/Cactus3.jpg" alt="STG Gallery">
			</a>
			<a href="" class="masonry">
				<img src="img/stg/gallery/Cactus4.jpg" alt="STG Gallery">
			</a>
			<a href="" class="masonry">
				<img src="img/stg/gallery/Cactus5.jpg" alt="STG Gallery">
			</a>
			<a href="" class="masonry">
				<img src="img/stg/gallery/Cactus6.jpg" alt="STG Gallery">
			</a>
			<a href="" class="masonry">
				<img src="img/stg/gallery/Cactus7.jpg" alt="STG Gallery">
			</a>
			<a href="" class="masonry">
				<img src="img/stg/gallery/Cactus8.jpg" alt="STG Gallery">
			</a>
			<a href="" class="masonry">
				<img src="img/stg/gallery/Claymore1.jpg" alt="STG Gallery">
			</a>
			<a href="" class="masonry">
				<img src="img/stg/gallery/Claymore2.jpg" alt="STG Gallery">
			</a>
			<a href="" class="masonry" >
				<img src="img/stg/gallery/May1.jpg" alt="STG Gallery">
			</a>
			<a href="" class="masonry">
				<img src="img/stg/gallery/Tenor1.jpg" alt="STG Gallery">
			</a>
			<a href="" class="masonry">
				<img src="img/stg/gallery/Tenor2.jpg" alt="STG Gallery">
			</a>
			<a href="" class="masonry">
				<img src="img/stg/gallery/Tenor3.jpg" alt="STG Gallery">
			</a>
			<a href="" class="masonry">
				<img src="img/stg/gallery/Tenor4.jpg" alt="STG Gallery">
			</a>
			<a href="" class="masonry">
				<img src="img/stg/gallery/Tenor5.jpg" alt="STG Gallery">
			</a>
			<a href="" class="masonry">
				<img src="img/stg/gallery/Tenor6.jpg" alt="STG Gallery">
			</a>
		</div>
	</div>
</div>
<?php
	include "footer.php";
?>