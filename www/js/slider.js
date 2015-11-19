$(document).ready(function() {
	var currentIndex = 0,
  		slideCount = $('.slider section'),
  		slideCounter = slideCount.length;

	function cycleItems() {
		var item = $('.slider section').eq(currentIndex);
		slideCount.hide();
		item.css('display','block');
	}

	var autoSlide = setInterval(function() {
		currentIndex += 1;
		if (currentIndex > slideCounter - 1) {
			currentIndex = 0;
		}
		cycleItems();
	}, 5000);

	$('.next').click(function() {
		clearInterval(autoSlide);
		currentIndex += 1;
		if (currentIndex > slideCounter - 1) {
			currentIndex = 0;
		}
		cycleItems();
	});

	$('.prev').click(function() {
		clearInterval(autoSlide);
		currentIndex -= 1;
		if (currentIndex < 0) {
			currentIndex = slideCounter - 1;
		}
		cycleItems();
	});
});