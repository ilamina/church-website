// REPORT -ATTENDANCE TRENDS & MEMBERS STATS

// JavaScript for Attendance Trends
const attendanceData = {
    labels: ['January', 'February', 'March', 'April', 'May', 'June'],
    datasets: [{
        label: 'Attendance Trends',
        data: [65, 59, 80, 81, 56, 55],
        fill: false,
        borderColor: 'rgb(75, 192, 192)',
        tension: 0.1
    }]
};

const config = {
    type: 'line',
    data: attendanceData,
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
};

var attendanceChart = new Chart(
    document.getElementById('attendanceChart'),
    config
);


// JavaScript for Member Statistics
const memberData = {
    labels: ['Category 1', 'Category 2', 'Category 3'],
    datasets: [{
        label: 'Member Statistics',
        data: [30, 40, 30],
        backgroundColor: [
            'rgb(255, 99, 132)',
            'rgb(54, 162, 235)',
            'rgb(255, 205, 86)'
        ]
    }]
};

const pieConfig = {
    type: 'pie',
    data: memberData
};

var memberChart = new Chart(
    document.getElementById('memberChart'),
    pieConfig
);


