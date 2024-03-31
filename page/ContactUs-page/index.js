const scriptURL = 'https://script.google.com/macros/s/AKfycbx3JOdyc87_JqmfkShCBGh5w4sAu3DKWfRIwWkmcdWjmL63bTNfbbTAbqMgIV8Gxu8F8g/exec'

const form = document.forms['Feedback-form']

form.addEventListener('submit', e => {
  e.preventDefault()
  fetch(scriptURL, { method: 'POST', body: new FormData(form)})
  .then(response => alert("Thank you! your form is submitted successfully." ))
  .then(() => { window.location.reload(); })
  .catch(error => console.error('Error!', error.message))
})