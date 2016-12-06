<div class="content">
<p>SORT by id <a href="?sortdir=DESC&sortby=id">DESC</a> <a href="?sortdir=ASC&sortby=id">ASC</a></p>
<p>SORT by name <a href="?sortdir=DESC&sortby=name">DESC</a> <a href="?sortdir=ASC&sortby=name">ASC</a></p>
	<div>
		<p>Pacients</p>
<table style="width:100%">
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Bithday</th>
  </tr>
<?php
foreach ($this->pacients as $value) {
	echo "<tr><td>".$value[0]."</td><td><a href='".SITE_PATH."pacient/getdoctors/".$value[0]."'>".$value[1]."</a></td><td>".$value[2]."</td></tr><tr>";
}
?>
</table>
</div>
	<div>
		<p>Doctors</p>
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
</div>
