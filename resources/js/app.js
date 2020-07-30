require('./bootstrap');
import 'bootstrap';

var $ = require( "jquery" );

$(document).ready(function(){
//Quando clicco sull'elemento 'question' mi viene mostrata la 'answer' corrispettiva
  $('.question').click(function(){
    $(this).children('.answer').toggle();
    console.log(this);
  });
});
