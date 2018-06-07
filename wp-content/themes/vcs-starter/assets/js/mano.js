document.addEventListener('DOMContentLoaded', function(){
  const mySiema = new Siema();
  var btn0 = document.querySelector('.btn0');
  var btn1 = document.querySelector('.btn1');
  var btn2 = document.querySelector('.btn2');

  btn0.addEventListener('click', () => mySiema.goTo(0));
  btn1.addEventListener('click', () => mySiema.goTo(1));
  btn2.addEventListener('click', () => mySiema.goTo(2));
});
