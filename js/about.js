document.addEventListener('DOMContentLoaded', function() {
    fetch('about_text.php')
        .then(response => response.json())
        .then(data => {
            document.querySelector('.about-textarea').value = data.text;
        })
        .catch(error => console.error('Error fetching the about text:', error));
});
