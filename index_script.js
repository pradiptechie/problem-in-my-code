
//============== JavaScript for handling navigation and loading content ==================== 

const leftNavLinks = document.querySelectorAll('#left-nav a');
const mainContent = document.getElementById('main-content');

leftNavLinks.forEach(link => {
    link.addEventListener('click', (e) => {
        e.preventDefault();
        const sectionId = e.target.getAttribute('href').substring(1);
        loadSection(sectionId);
    });
});

function loadSection(sectionId) {
    const contentFilePath = sectionId + '.php';
    fetch(contentFilePath)
        .then(response => response.text())
        .then(data => {
            mainContent.innerHTML = data;
        })
        .catch(error => {
            console.error('Error loading content:', error);
        });
}
// Load the initial section
loadSection('dashboard');





// ============================== JavaScript for displaying current date and time ================================
function updateCurrentDateTime() {
const currentDate = new Date();

// Define custom date and time format with AM/PM
const options = {
weekday: 'long', 
year: 'numeric', 
month: 'short', 
day: 'numeric', 
hour: '2-digit', 
minute: '2-digit', 
second: '2-digit',
hour12: true, 
};

const formattedDate = currentDate.toLocaleDateString('en-US', options);
document.getElementById('current-date-time').textContent = formattedDate;
}

// Update the date and time initially and then every second
updateCurrentDateTime();
setInterval(updateCurrentDateTime, 1000);
