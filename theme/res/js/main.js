var media = window.matchMedia('(min-width: 768px)');

	//Scroll effect on nav bar
window.onscroll = function() {nav_scroll()};

function nav_scroll() {
	const header = document.querySelector('header');

	if (window.scrollY > 0 && !header.classList.contains('scroll')) {
		header.classList.add('scroll');
		header.classList.remove('restore');
	} else if (window.scrollY <= 0) {
		if (header.classList.contains('open')) {
			header.wait = true;
		} else {
			header.classList.remove('scroll');
			header.classList.add('restore');
		}
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

	//Nav open
const nav = document.querySelector('.header-menu-btn').addEventListener('click', navOpen);

function navOpen() {
	const header = document.querySelector('header');

	if (header.classList.contains('open')) {
		header.classList.remove('open');
		if (header.wait) {
			nav_scroll();
			header.wait = false;
		}
	} else {
		header.classList.add('open');
	}
};

/*
	//Contact Open
document.querySelector('#handle').addEventListener('click', function () {
	const container = document.querySelector('#contact');

	if (container.classList.contains('open')) {
		container.classList.remove('open');
	} else {
		container.classList.add('open');
	}
});

	//Nav Active Page
const menu = document.querySelector('nav').querySelectorAll('a').forEach( function(anchor, index) {
	if (anchor.href == window.location.href) {
		anchor.classList.add('active');
	}
})

	//Personalised right Click
/*
document.onclick = hideMenu;
document.oncontextmenu = rightClick;
var contextMenu = document.querySelector('#context_menu');

function hideMenu() {
	contextMenu.classList.remove('show');
}

function rightClick(e) {
	e.preventDefault();
	if (contextMenu.classList.contains('show')) {
		hideMenu();
	} else {
		contextMenu.classList.add('show');
		contextMenu.style.left = e.pageX + 'px';
		contextMenu.style.top = e.pageY + 'px';
	}
}

function regularMenu() {
	console.log('regular Menu COming up');
}
*/
