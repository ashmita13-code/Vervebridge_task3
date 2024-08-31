document.addEventListener('DOMContentLoaded', () => {
    // Fetch and display doctors
    fetch('get_doctors.php')
        .then(response => response.json())
        .then(doctors => {
            const doctorList = document.getElementById('doctor-list');
            const doctorSelect = document.getElementById('doctor_id');
            
            doctors.forEach(doctor => {
                const doctorCard = document.createElement('div');
                doctorCard.classList.add('doctor-card');
                doctorCard.innerHTML = `
                    <h3>${doctor.name}</h3>
                    <p><strong>Specialization:</strong> ${doctor.specialization}</p>
                    <p><strong>Consultation Fee:</strong> $${doctor.fee}</p>
                `;
                doctorList.appendChild(doctorCard);
                
                const option = document.createElement('option');
                option.value = doctor.doctor_id;
                option.textContent = doctor.name;
                doctorSelect.appendChild(option);
            });
        })
        .catch(error => console.error('Error fetching doctors:', error));

    // Handle form submission
    const form = document.getElementById('appointment-form');
    form.addEventListener('submit', (e) => {
        e.preventDefault();
        
        const formData = new FormData(form);
        fetch('book_ap.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(message => alert(message))
    });
});
