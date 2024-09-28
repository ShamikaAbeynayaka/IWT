<!DOCTYPE html>
<html>
<head>
  <title>Seller Account Page</title>
  <link rel="stylesheet" type="text/css" href="style4.css">
</head>
<body>
  <!-- HTML code for header, sections, and footer -->

  <section>
    <h2>Forms</h2>
    <form method="POST" action="submit.php" enctype="multipart/form-data">
      <label for="address">Address:</label>
      <input type="text" id="address" name="address" required>

      <label for="description">Description:</label>
      <textarea id="description" name="description" required></textarea>

      <label for="city">City:</label>
      <input type="text" id="city" name="city" required>

      <label for="extend">Extend in Perches:</label>
      <input type="number" id="extend" name="extend" required>

      <label for="price">Price in SLRS:</label>
      <input type="number" id="price" name="price" required>

      <label for="facilities">Nearby Facilities:</label>
      <select id="facilities" name="facilities[]" multiple>
        <option value="water">Water</option>
        <option value="school">School</option>
        <option value="bus">Bus</option>
      </select>

      <label for="images">Upload Images:</label>
      <input type="file" id="images" name="images[]" accept="image/*" multiple>

      <button type="submit" name="submit">Submit</button>
    </form>
  </section>

  <!-- HTML code for footer -->
</body>
</html>
