// MEMBER -new user/member
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
        cell5.appendChild(img);
    };
    reader.readAsDataURL(photo);

    // Add action buttons
    var editBtn = document.createElement('button');
    editBtn.textContent = 'Edit';
    editBtn.addEventListener('click', function() {
        // Handle edit functionality here
        alert('Edit functionality');
    });
    cell6.appendChild(editBtn);

    document.getElementById('member-form').reset();
});
});
