document.getElementById('submit-btn').addEventListener('click', function() {
    var name = document.getElementById('name-input').value;
    document.getElementById('user-name').textContent = name;
    document.getElementById('description-container').style.display = 'block';
    document.getElementById('name-input').value = '';
});
