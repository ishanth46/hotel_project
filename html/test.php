<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Contact Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      padding: 40px;
      background: #f4f4f4;
    }

    form {
      background: #fff;
      padding: 20px;
      border-radius: 8px;
      max-width: 400px;
      margin: auto;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    input[type="text"], input[type="email"] {
      width: 100%;
      padding: 10px;
      margin: 10px 0;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    button {
      padding: 10px 20px;
      background: #007bff;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    button:hover {
      background: #0056b3;
    }

    .popup {
      display: none;
      position: fixed;
      top: 30%;
      left: 50%;
      transform: translate(-50%, -50%);
      background: #333;
      color: white;
      padding: 20px;
      border-radius: 8px;
      z-index: 1000;
    }
  </style>
</head>
<body>

  <form id="contactForm">
    <h2>Contact Us</h2>
    <input type="text" id="name" name="name" placeholder="Your Name">
    <input type="email" id="email" name="email" placeholder="Your Email">
    <input type="hidden" name="source" value="index">
    <button type="submit">Submit</button>
  </form>

  <div id="popup" class="popup"></div>

  <script>
    const form = document.getElementById('contactForm');
    const popup = document.getElementById('popup');

    form.addEventListener('submit', function(e) {
      e.preventDefault();

      const formData = new FormData(form);

      fetch('actionn.php', {
        method: 'POST',
        body: formData
      })
      .then(response => response.text())
      .then(data => {
        showPopup(data);
        form.reset();
      })
      .catch(error => {
        showPopup("⚠️ Error occurred: " + error.message);
      });
    });

    function showPopup(message) {
      popup.textContent = message;
      popup.style.display = 'block';

      setTimeout(() => {
        popup.style.display = 'none';
      }, 3000);
    }
  </script>

</body>
</html>
