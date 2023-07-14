<?php

echo '<hr>I am from show_data view <br>';

foreach ($employees as $employee) {
	echo '<hr>';
	echo "<br>id: $employee->id";
	echo "<br>id: $employee->name";
	echo "<br>id: $employee->designation";
	echo "<br>id: $employee->status";
	echo "<br>id: $employee->created_at";
}

echo '<br>';
print_r($employees_array);
foreach ($employees_array as $employee) {
	echo '<hr>';
	echo "<br>id: " . $employee['id'];
	echo "<br>id: {$employee['name']}";
	echo "<br>id: " . $employee['designation'];
	echo "<br>id: " . $employee['status'];
	echo "<br>id: " . $employee['created_at'];
}
