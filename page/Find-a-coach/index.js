const scriptURL = 'https://script.google.com/macros/s/AKfycbxaeNx3LYu7_BU_OhHq3erCo-5W47dqKq1ZxZn13aSiolhOm0NpIUcMs2EvSm_DhY4u/exec'

const form = document.forms['Feedback-form']

form.addEventListener('submit', e => {
  e.preventDefault()
  fetch(scriptURL, { method: 'POST', body: new FormData(form)})
  .then(response => alert("Thank you! your form is submitted successfully." ))
  .then(() => { window.location.reload(); })
  .catch(error => console.error('Error!', error.message))
})