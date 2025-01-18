// ATTENDANCE
document.addEventListener('DOMContentLoaded', function() {
document.getElementById('attendance-form').addEventListener('submit', function(event) {
    event.preventDefault();
    
    var firstName = document.getElementById('firstname').value;
    var lastName = document.getElementById('lastname').value;
    var phoneNumber = document.getElementById('phone_num').value;
    var date = document.getElementById('date').value;
    var service = document.getElementById('service').value;
    
    var table = document.getElementById('attendance-table').getElementsByTagName('tbody')[0];
    var newRow = table.insertRow(table.rows.length);
    var cell1 = newRow.insertCell(0);
    var cell2 = newRow.insertCell(1);
    var cell3 = newRow.insertCell(2);
    var cell4 = newRow.insertCell(3);
    var cell5 = newRow.insertCell(4);
    cell1.innerHTML = firstName;
    cell2.innerHTML = lastName;
    cell3.innerHTML = phoneNumber;
    cell4.innerHTML = date;
    cell5.innerHTML = service;
    
    document.getElementById('attendance-form').reset();
  });
});