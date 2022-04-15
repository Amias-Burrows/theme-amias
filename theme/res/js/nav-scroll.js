	//Scroll effect on nav bar
window.onscroll = function() {
	const header = document.querySelector('header');

	if (window.scrollY > 0 && !header.classList.contains('scroll')) {
		header.classList.add('scroll');
		header.classList.remove('restore');
	} else if (window.scrollY <= 0) {
		header.classList.remove('scroll');
		header.classList.add('restore');
	}
		//Icon Show Scroll Effect
	if (!media.matches) {
		const services = document.querySelectorAll('.service').forEach( function(icon, index) {
			const rect = icon.getBoundingClientRect();
			if (
				rect.top >= 0 &&
				rect.left >= 0 &&
				rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
				rect.right <= (window.innerWidth || document.documentElement.clientWidth)
			) {
				icon.classList.add('visible');
			}
		})
	}
}
