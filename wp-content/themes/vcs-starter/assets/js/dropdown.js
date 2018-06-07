$ (function () {

//pasizymime buttona kuri spaudant vyks dropdownas
var button = document.querySelector('button');

button.addEventListener('click', function(){ //uzdedame, kad klausytu paspaudimo ivykio
  var navigation = document.querySelector('nav'); //pasizymime nacigacija kuriai desime arba nuimsime "open" klase
  navigation.classList.toggle('open'); //jeigu open klase uzdeta, tada nuimame, o jei jos nera uzdedame
});
