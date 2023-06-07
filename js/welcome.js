document.getElementById('nameForm').addEventListener('submit', function(event) {
    event.preventDefault();
    var name = document.getElementById('nameInput').value;
    var greeting = document.getElementById('greeting');
    greeting.textContent = 'Hello ' + name + '! Welcome to FlowerVisa Prototype One. Please Feel Free to click and interact.You can view this prototype from any device as it is interactive! ';
    greeting.style.display = 'block';
    document.getElementById('nameForm').style.display = 'none';
    document.getElementById('prototype-link').style.display = 'block';
  })
  
