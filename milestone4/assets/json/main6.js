// Function to add a new event
function addEvent() {
    var title = prompt("Enter event title:");
    var date = prompt("Enter event date:");
    var url = prompt("Enter event URL:");
    
    if (title && date && url) {
        // Create a new event card
        var eventContainer = document.querySelector('.event-container');
        var newEventCard = document.createElement('div');
        newEventCard.classList.add('card-event');
        newEventCard.innerHTML = `
            <div class="card-header-event">
                <h2>${title}</h2>
                <button class="delete-btn" onclick="deleteEvent(this)">Delete</button>
            </div>
            <div class="card-body">
                <p>Date: ${date}</p>
                <p>URL: ${url}</p
            </div>
        `;
        eventContainer.appendChild(newEventCard);
    } else {
        alert("Please fill in all fields.");
    }
}

// Function to delete an event
function deleteEvent(button) {
    var card = button.parentElement.parentElement;
    card.remove();
}

// Event delegation for deleting events
document.querySelector('.event-container').addEventListener('click', function(event) {
    if (event.target.classList.contains('delete-btn')) {
        deleteEvent(event.target);
    }
});