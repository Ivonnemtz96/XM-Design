<!-- For Js Library -->
<script src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<script src="/assets/js/popper.min.js"></script>
<script src="/assets/js/jquery.magnific-popup.min.js"></script>
<script src="/assets/js/appear.js"></script>
<script src="/assets/js/slick.js"></script>
<script src="/assets/js/jquery.counterup.min.js"></script>
<script src="/assets/js/waypoints.min.js"></script>
<script src="/assets/js/isotope.pkgd.min.js"></script>
<script src="/assets/js/imagesloaded.pkgd.min.js"></script>
<script src="/assets/js/masonry.pkgd.min.js"></script>
<script src="/assets/js/wow.min.js"></script>
<script src="/assets/js/jquery.inputarrow.js"></script>
<script src="/assets/js/script.js"></script>

<script>
    $(document).ready(function() {
	$('.popup-gallery').magnificPopup({
		delegate: 'a',
		type: 'image',
		tLoading: 'Loading image #%curr%...',
		mainClass: 'mfp-img-mobile',
		gallery: {
			enabled: true,
			navigateByImgClick: true,
			preload: [0,1] // Will preload 0 - before current, and 1 after the current image
		},
		image: {
			tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
			titleSrc: function(item) {
				return item.el.attr('title') + '<small>Por XM Design</small>';
			}
		}
	});
});
</script>