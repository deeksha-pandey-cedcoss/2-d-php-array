
<h3>Original array</h3>

<table border="1">
  <caption>Data</caption>
  <thead>
    <tr>
      <th scope="col">Key</th>
      <th scope="col">Name</th>
      <th scope="col">Edit Action</th>
      <th scope="col">Delete Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
     $arr = require "config/data.php";
     foreach ($arr as $key => $value)  {
      echo "<tr><td>$key</td><td>$value</td><td><a href='/edit.php?id=$key&&value=$value'>Edit</a></td><td>
     <a href='/delete.php?id=$key'>Delete</a><t/d></tr>";
    }

    ?>