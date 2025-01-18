// LOGIN VALIDATION
document.addEventListener('DOMContentLoaded', function () {
    var form = document.getElementById('loginForm');
    form.addEventListener('Login', function (event) {
        event.preventDefault(); // Prevent default form submission
        
        // Gather form data
        var formData = new FormData(form);

        // Send form data to login.php using AJAX
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'login.php');
        xhr.onload = function () {
            if (xhr.status === 200) {
                var response = xhr.responseText;
                if (response === 'success') {
                    // Redirect to main PHP page if authentication is successful
                    window.location.href = 'admin panel-dashboard.php';
                } else {
                    // Display error message if authentication fails
                    alert('Invalid credentials. Please try again.');
                }
            } else {
                // Handle error
                alert('Error occurred. Please try again later.');
            }
        };
        xhr.send(formData);
    });
});









    