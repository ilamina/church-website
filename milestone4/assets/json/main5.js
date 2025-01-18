document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('member-form').addEventListener('submit', function(event) {
        event.preventDefault();

        var firstName = document.getElementById('first-name').value;
        var lastName = document.getElementById('last-name').value;
        var phoneNumber = document.getElementById('phone-number').value;
        var date = document.getElementById('date').value;
        var photo = document.getElementById('photo').files[0];

        var table = document.getElementById('member-table').getElementsByTagName('tbody')[0];
        var newRow = table.insertRow(table.rows.length);
        var cell1 = newRow.insertCell(0);
        var cell2 = newRow.insertCell(1);
        var cell3 = newRow.insertCell(2);
        var cell4 = newRow.insertCell(3);
        var cell5 = newRow.insertCell(4);
        var cell6 = newRow.insertCell(5);

        cell1.textContent = firstName;
        cell2.textContent = lastName;
        cell3.textContent = phoneNumber;
        cell4.textContent = date;

        // Handle photo upload
        var reader = new FileReader();
        reader.onload = function(e) {
            var img = document.createElement('img');
            img.src = e.target.result;
            img.style.maxWidth = '100px'; // Adjust the image width as needed
            img.style.maxHeight = '100px'; // Adjust the image height as needed
            cell5.appendChild(img);

            // Add delete button
            var deleteBtn = document.createElement('button');
            deleteBtn.textContent = 'Delete';
            deleteBtn.addEventListener('click', function() {
                cell5.removeChild(img); // Remove the image element
            });
            cell6.appendChild(deleteBtn);

            // Add change button
            var changeBtn = document.createElement('button');
            changeBtn.textContent = 'Change';
            changeBtn.addEventListener('click', function() {
                // Trigger file input click to allow user to select a new image
                document.getElementById('photo').click();
            });
            cell6.appendChild(changeBtn);
        };
        reader.readAsDataURL(photo);

        document.getElementById('member-form').reset();
    });
});