/* ------- NAVIGATION BAR FUNCTION (provide css & javascript for mobile view) ------ */






/* ------- NAVIGATION BAR FUNCTION ------ */
// Get all the navigation links
const navLinks = document.querySelectorAll('.nav-links li a');

// Loop through each link and add click event listener
navLinks.forEach(link => {
    link.addEventListener('click', function() {
        // Remove the 'active' class from all links
        navLinks.forEach(link => {
            link.classList.remove('active1');
        });
        // Add the 'active' class to the clicked link
        this.classList.add('active1');
    });
});



    
/* ------- ABOUT US SECTION (JavaScript for Slideshow)------ */
let slideIndex = 0;

function showSlides() {
    let i;
    let slides = document.getElementsByClassName("slide");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}
    slides[slideIndex-1].style.display = "block";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}

function plusSlides(n) {
    showSlides(slideIndex += n);
}

showSlides();




/* ------- GIVING SECTION ------ */
function redirectToDonationPage() {
    // URL of the donation page
    var donationPageURL = 'https://www.paypal.com/donate/?cmd=_s-xclick&hosted_button_id=GNLW2V243DDC2&source=url&fbclid=IwAR1Azk_5dXtBjqnYfA2ai83GmH-LFf0-hd4LVcvAUlUg3QAs6JOsh0qY6-w&ssrt=1708318632276';
    
    // Open the donation page link in a new tab
    window.open(donationPageURL, '_blank');
}



/* ------- EVENT SECTION -Contact Form------ */
document.getElementById('contact-form').addEventListener('submit', function(event) {
    // Prevent the form from submitting
    event.preventDefault();

    // Get form input values
    var firstName = document.getElementById('firstName').value.trim();
    var lastName = document.getElementById('lastName').value.trim();
    var phoneNumber = document.getElementById('phoneNumber').value.trim();
    var message = document.getElementById('message').value.trim();

    // Validate input fields
    if (firstName === '' || lastName === '' || phoneNumber === '' || message === '') {
        alert('Please fill in all fields.');
        return; // Stop further execution
    }

    // Additional validation for phone number
    if (!/^\d{10}$/.test(phoneNumber)) {
        alert('Please enter a valid 10-digit phone number.');
        return; // Stop further execution
    }

    // If all fields are valid, submit the form
    this.submit();
});







