<div class="content">
	<div class="pacients">
	<p>All pacients</p>
<table style="width:100%">
  <tr>
    <th>ID</th>
    <th>Name</th>
  </tr>
<?php
// var_dump($this->pacients);
foreach ($this->pacients as $key => $value) {
	echo "<tr><td>".$value[0]."</td><td><a href='".SITE_PATH."pacient/getdoctors/".$value[0]."'>".$value[1]."</a></td></tr><tr>";
}
?>
</table>
</div>

</div>

