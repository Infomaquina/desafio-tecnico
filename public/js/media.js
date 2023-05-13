
function sonora(tip) {
	document.getElementById(tip).play();
}

function vibrate(){
  navigator.vibrate(50);
}

const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))

console.log("%cBr@ndev", "font-weight: bold; font-size: 70px;color: red; text-shadow: 3px 3px 0 rgb(4,77,145) , 6px 6px 0 rgb(42,21,113);");
console.log("%cGitUser", "background: green; color: white; display: block; padding: 1%;font-weight: bold; margin-left: 5px");
console.log("%cEsta aplicação foi desenvolvida para a ZUKKIN BRASIL INTELIGENCIA DE MERCADO LTDA. Para saber mais entre em contato pelo WhatsApp (11)94364-6208 ou e-mail contato@brandev.tech", "color: #007acc;font-size: 20px; margin-left: 5px");
console.log("%chttps://brandev.tech", "background: white; display: block; padding: 1%;font-weight: bold; margin-left: 5px");