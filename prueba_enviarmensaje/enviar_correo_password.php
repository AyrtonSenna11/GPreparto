emailjs.init('y_ElvjYidj4L-FVn-')
const btn = document.getElementById('button');

document.getElementById('enviaremail')
.addEventListener('submit', function(event) {
event.preventDefault();

btn.value = 'Enviando...';

const serviceID = 'default_service';
const templateID = 'template_8ji3fn8';

emailjs.sendForm(serviceID, templateID, this)
.then(() => {
btn.value = 'Restablecer';
$.getScript("true_enviado.php");
}, (err) => {
btn.value = 'Restablecer';
$.getScript("false_enviado.php");
});
});