import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])

const buttons = document.querySelectorAll('.deletBtn');
const confirmDeleteDiv = document.getElementById('confirmDelete');
const confirmBtn = document.getElementById('confirmBtn');
const cancelBtn = document.getElementById('cancelBtn');
/* console.log(buttons, confirmDeleteDiv, confirmBtn, cancelBtn); */

buttons.forEach(element => {
  element.addEventListener('click', (e) => {
    e.preventDefault();  // evita il comportamento di default del form cioe l'invio dei dati e refresh della pagina
    confirmDeleteDiv.classList.add('d-block');

    confirmBtn.addEventListener('click', () => {
      element.parentElement.submit();
    });

    cancelBtn.addEventListener('click', () => {
      confirmDeleteDiv.classList.remove('d-block');
    });
  })
});