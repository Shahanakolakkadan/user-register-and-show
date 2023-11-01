document.getElementById('myForm').addEventListener('submit', function(event) {
    var fieldValue = document.getElementById('name').value.trim();

    if (fieldValue === '') {
        document.getElementById('name_error').style.display = 'inline-block';
        event.preventDefault();
    } else {
        document.getElementById('name_error').style.display = 'none';
    }
    var fieldValue = document.getElementById('email').value.trim();

    if (fieldValue === '') {
        document.getElementById('email_error').style.display = 'inline-block';
        event.preventDefault();
    } else {
        document.getElementById('email_error').style.display = 'none';
    }
    var fieldValue = document.getElementById('phone_no').value.trim();

    if (fieldValue === '') {
        document.getElementById('phone_no_error').style.display = 'inline-block';
        event.preventDefault();
    } else {
        document.getElementById('phone_no_error').style.display = 'none';
    }
    var fieldValue = document.getElementById('place').value.trim();

    if (fieldValue === '') {
        document.getElementById('place_error').style.display = 'inline-block';
        event.preventDefault();
    } else {
        document.getElementById('place_error').style.display = 'none';
    }
});

function redirectToTarget() {
    window.location.href = '/signup';
}
