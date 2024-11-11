document.getElementById('reportForm').addEventListener('submit', function(event) {
    event.preventDefault();

    const formData = new FormData(this);
    fetch('getFilteredData.php', {  // Pointing to getFilteredData.php
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.error) {
            document.getElementById('reportResult').innerText = data.error;
        } else {
            // Process and display the results
            document.getElementById('reportResult').innerHTML = JSON.stringify(data, null, 2);
        }
    })
    .catch(error => {
        document.getElementById('reportResult').innerText = 'An error occurred: ' + error.message;
    });
});
