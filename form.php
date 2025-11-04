<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Personal Trainer Website Questionnaire</title>
  <style>
    body {
      background: #f7f8fa;
      font-family: Arial, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
    }
    .container {
      background: #fff;
      padding: 30px;
      border-radius: 12px;
      max-width: 700px;
      width: 90%;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }
    h1 {
      text-align: center;
      margin-bottom: 20px;
      font-size: 1.8rem;
    }
    label {
      display: block;
      margin-top: 15px;
      font-weight: bold;
      color: #333;
    }
    input, textarea, select {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 1rem;
    }
    textarea { min-height: 70px; }
    button {
      background: #ff5a2b;
      color: #fff;
      border: none;
      padding: 12px 20px;
      margin-top: 20px;
      border-radius: 6px;
      cursor: pointer;
      font-size: 1rem;
    }
    button:hover { background: #e14c21; }
    .success { color: green; font-weight: bold; margin-top: 15px; text-align: center; }
  </style>
</head>
<body>
  <div class="container">
    <h1>Personal Trainer Website Questionnaire</h1>
    <form action="salvar.php" method="POST">
      <label>Your Name</label>
      <input type="text" name="client_name" required>

      <label>Contact (Email or WhatsApp)</label>
      <input type="text" name="contact" required>

      <label>1. What is the main goal of your website?</label>
      <input type="text" name="goal" required>

      <label>2. Who is your target audience?</label>
      <input type="text" name="audience" required>

      <label>3. Do you offer in-person training, online coaching, or both?</label>
      <select name="service_type" required>
        <option value="" disabled selected>Select</option>
        <option value="In-person">In-person</option>
        <option value="Online">Online</option>
        <option value="Both">Both</option>
      </select>

      <label>4. What services or products will the website promote?</label>
      <textarea name="services" required></textarea>

      <label>5. Do you need online scheduling and payment options?</label>
      <select name="scheduling" required>
        <option value="Yes">Yes</option>
        <option value="No">No</option>
      </select>

      <label>6. Should the site have a member area (login, progress tracking, videos)?</label>
      <select name="members" required>
        <option value="Yes">Yes</option>
        <option value="No">No</option>
      </select>

      <label>7. Do you already have a logo, brand colors, and professional media?</label>
      <select name="branding" required>
        <option value="Yes">Yes</option>
        <option value="No">No</option>
      </select>

      <label>8. Are there websites or styles you like for inspiration?</label>
      <textarea name="inspiration"></textarea>

      <label>9. How will you promote the site and measure success?</label>
      <textarea name="promotion"></textarea>

      <label>10. What is your budget and desired timeline?</label>
      <input type="text" name="budget" required>

      <button type="submit">Submit</button>
    </form>
  </div>
</body>
</html>
