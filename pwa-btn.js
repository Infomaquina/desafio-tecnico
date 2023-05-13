    import 'https://cdn.jsdelivr.net/npm/@pwabuilder/pwaupdate';
		import '/public/js/cookie.js'
		const el = document.createElement('pwa-update');
		document.body.appendChild(el);

		let deferredPrompt;
		const addBtn = document.querySelector('.add-button');
		$(addBtn).html(`
      <a href="result" type="button" class="text-dark btn btn-success shadow" onclick="vibrate(), acesso()">
        <i class="fa-solid text-white fa-lg fa-power-off fa-fade me-2"></i>
        <span class="h5 text-white">Iniciar</span>
      </a>
		`)

		window.addEventListener('beforeinstallprompt', (e) => {
			e.preventDefault();
			deferredPrompt = e;
			$(addBtn).html(`
				<button type="button" class="text-dark btn btn-primary shadow" onclick="vibrate()" id="add-app">
					<i class="fa-solid text-white fa-lg fa-download me-2 fa-bounce"></i>
					<span class="h5 text-white">Instalar App</span>
				</button>
			`)
			$.cookie("instalado","NAO");
		  const addApp = document.querySelector('#add-app');
		
			addApp.addEventListener('click', (e) => {
			$(addBtn).html(`
				<button type="button" class="text-dark btn btn-secondary shadow"">
					<i class="fa-solid text-white fa-lg fa-spinner fa-spin me-2"></i>
					<span class="h5 text-white">Confirmando</span>
				</button>
			`)
			// Show the prompt
			deferredPrompt.prompt();
			// Wait for the user to respond to the prompt
			deferredPrompt.userChoice.then((choiceResult) => {
				if (choiceResult.outcome === 'accepted') {
					console.log('Usuario aceitou a instalação');
					location.reload();
				} else {
					console.log('User não aceitou a instalação');
          $.cookie("instalado","NAO");
				}
				deferredPrompt = null;
				});
			});
		});