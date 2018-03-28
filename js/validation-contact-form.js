/*---------------------------------------------Contact Validation----------------------------------------------------------------*/

$('.contact-form-btn').on('click', function (event) {
    event.preventDefault();



    validateName();
    validateMail();
    validateMsg();
});


function validateName() {
    var nameVal = $('#inputName').val();
    if (nameVal.length === 0 || nameVal.length >= 50) {
        $('.input-error-name').text('Please enter your name');
    } else {
        $('.input-error-name').text('');
    }
}

function validateMail() {
    var emailVal = $('#inputEmail').val();
    if (emailVal.length === 0) {
        $('.input-error-email').text('Please enter valid email address');

    } else {
        $('.input-error-email').text('');
    }
}

function validateMsg() {
    var msgVal = $('#inputText').val();
    if (msgVal.length === 0 || msgVal.length >= 255) {
        $('.input-error-msg').text('Please enter a message (1-255 letters)');
    } else {
        $('.input-error-msg').text('');
    }
}

