var css = document.querySelector('#amias-page-css');

if (localStorage.getItem('dark-mode') === null) {
	localStorage.setItem('dark-mode', false);
} else if (localStorage.getItem('dark-mode') === 'true' ) {
	document.body.classList.add('dark');
	css.href = css.href.replace('root', 'dark-root');
}

document.querySelector('.dark-mode-toggle').addEventListener('click', function() {
	if (localStorage.getItem('dark-mode') === 'true' ) {
		localStorage.setItem('dark-mode', false);
		document.body.classList.remove('dark');
		css.href = css.href.replace('dark-root', 'root');
	} else {
		localStorage.setItem('dark-mode', true);
		document.body.classList.add('dark');
		css.href = css.href.replace('root', 'dark-root');
	}
});
