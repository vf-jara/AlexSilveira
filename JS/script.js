var lista = document.querySelectorAll('.item');
for (var i = 0; i < lista.length; i++) {
  lista[i].addEventListener('click', classToggle);
}
function classToggle() {
  this.classList.toggle('active');
}
