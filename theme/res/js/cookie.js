var container = document.createElement('div');
container.id = 'cookie-popup';
container.classList.add('primary');
var p = document.createElement('p');
p.innerHTML = 'We use our own and third-party cookies to improve the website.  See our <a href="/res/privacy.pdf">Privacy Policy</a> and our <a href="/res/cookie.pdf">Cookie Policy</a> for more information on how we use your data.';
var btn = document.createElement('button');
btn.innerHTML = 'Accept';
btn.id = 'cookie-btn';
btn.addEventListener('click', () => {
	container.classList.remove('active');
	localStorage.setItem('cookie-popup-shown', 'true');
});

container.appendChild(p);
container.appendChild(btn);

if (!localStorage.getItem('cookie-popup-shown')) {
	document.body.appendChild(container);
	setTimeout( () => {
		container.classList.add('active');
	}, 2000);
};
