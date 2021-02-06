const toggleButton = document.querySelector('.dark-light');
const colors = document.querySelectorAll('.color');

colors.forEach(color => {
  color.addEventListener('click', (e) => {
    colors.forEach(c => c.classList.remove('selected'));
    const theme = color.getAttribute('data-color');
    document.body.setAttribute('data-theme', theme);
    color.classList.add('selected');
  });
});

toggleButton.addEventListener('click', () => {
  document.body.classList.toggle('dark-mode');
});




/*----------------------------Emojie----------------------------*/

const emojiBtn = document.querySelector('#emoji-btn');
const picker = new EmojiButton();
 

// Emoji selection  
window.addEventListener('DOMContentLoaded', () => {

    picker.on('emoji', emoji => {
      document.querySelector('#emoji').value += emoji;
    });
  
    emojiBtn.addEventListener('click', () => {
      picker.togglePicker(emojiBtn);
    });
  }); 



/*----------------------------Modal----------------------------*/
$('.button').click(function(){
  var buttonId = $(this).attr('id');
  $('#modal-container').removeAttr('class').addClass(buttonId);
  $('body').addClass('modal-active');
})

$('#modal-container').click(function(){
  $(this).addClass('out');
  $('body').removeClass('modal-active');
});
