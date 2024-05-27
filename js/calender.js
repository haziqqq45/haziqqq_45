document.addEventListener('DOMContentLoaded', function() {
    function generateCalendar() {
        const calendar = document.getElementById('calendar');
        const daysInMonth = new Date().getDate();
        const currentMonth = new Date().getMonth();
        const currentYear = new Date().getFullYear();
        
        const monthNames = [
            "January", "February", "March", "April", "May", "June",
            "July", "August", "September", "October", "November", "December"
        ];

        // Create month and year header
        const monthYearHeader = document.createElement('div');
        monthYearHeader.style.gridColumn = 'span 7';
        monthYearHeader.style.textAlign = 'center';
        monthYearHeader.style.fontWeight = 'bold';
        monthYearHeader.textContent = `${monthNames[currentMonth]} ${currentYear}`;
        calendar.appendChild(monthYearHeader);

        // Create day headers
        const daysOfWeek = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];
        daysOfWeek.forEach(day => {
            const dayElement = document.createElement('div');
            dayElement.textContent = day;
            dayElement.style.fontWeight = 'bold';
            calendar.appendChild(dayElement);
        });

        // Create day cells
        for (let i = 1; i <= daysInMonth; i++) {
            const dayElement = document.createElement('div');
            dayElement.textContent = i;
            calendar.appendChild(dayElement);
        }
    }

    generateCalendar();
});
