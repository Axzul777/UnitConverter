<form method="post">
  <label for="unit">Enter the length to convert</label>
  <input type="text" mame="unit" placeholder="E.j. 300">
  <br/>
  <label for="from">Unit to convert from</label>
  <select name="from" onchange="this.form.submit()">
    <?php foreach ($units as $unit): ?>
        <option value="<?= $unit ?>"> <?= ucfirst($unit) ?> </option>
      <?php endforeach; ?>
  </select>
  <label for="to">to</label>
  <select name="to" onchange="this.form.submit()">
    <?php foreach ($units as $unit): ?>
      <option value="<?= $unit ?>"> <?= ucfirst($unit) ?> </option>
      <?php endforeach; ?>
  </select>
  <!-- <input name="convert" type="submit" value="Convert"> -->
</form>
