let form = $('form[data-validate]');

if(form.length != 0)
{
  var formValidator = new FormValidator(form);
  formValidator.run();
}