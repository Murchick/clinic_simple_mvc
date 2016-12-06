<div class="content">
<table style="width:100%">
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Specialization</th>
  </tr>
<?php
foreach ($this->doctors as $value) {
	echo "<tr><td>".$value[0]."</td><td><a href='".SITE_PATH."doctor/getpacients/".$value[0]."'>".$value[1]."</a></td><td>".$value[2]."</td></tr><tr>";
}
?>
</table>
</div>