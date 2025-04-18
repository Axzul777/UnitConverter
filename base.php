<form action="convert.php" method="post">
  <label for="unitVal">Enter the length to convert</label>
  <input type="text" name="unitVal" placeholder="E.j. 300">
  <br/>
  <label for="from">Unit to convert from</label>
  <select name="from">
    <?php foreach ($units as $unit): ?>
        <option value="<?= $unit ?>"> <?= ucfirst($unit) ?> </option>
      <?php endforeach; ?>
  </select>
  <label for="to">to</label>
  <select name="to">
    <?php foreach ($units as $unit): ?>
      <option value="<?= $unit ?>"> <?= ucfirst($unit) ?> </option>
      <?php endforeach; ?>
  </select>
  <!-- <input name="convert" type="submit" value="Convert"> -->
  <input value="convert" name="convert" type="submit">
</form>
