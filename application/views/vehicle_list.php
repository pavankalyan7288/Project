<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicles</title>
    <style>
    table, td, th {
        border: 1px solid #ddd;
        text-align: left;
    }
    
    table {
        border-collapse: collapse;
        max-width: 100%;
        width: 90%;
    }
    
    .table-data {
        width: 65%;
        margin-right: 8px;
    }
    
    th, td {
        padding: 15px;
    }
    
    body {
        overflow-x: hidden;
    }
    
    * {
        box-sizing: border-box;
    }
    </style>
</head>
<body>
<h2>Active Vehicles:</h2>
    <ul>
        <?php foreach ($active_vehicles as $vehicle): ?>
            <li><?php echo $vehicle->Vehiclename; ?></li>
        <?php endforeach; ?>
    </ul>
<div class="table-data">
    <div class="list-title">
        <h2>Vehicles List</h2>
    </div>
    <a href="<?php echo site_url('vehicles/create'); ?>">Create</a>
    <table>
        <tr>
            <th>s.n</th>
            <th>Vehiclename</th>
            <th>Vehiclecost</th>
            <th>Phonenumber</th>
            <th>Vehicleowner</th>
            <th>status</th>
            <th>Edit</th>
            <th>Remove</th>
           
        </tr>
        <?php foreach ($vehicles as $row): ?>
        <tr>
            <td><?php echo $row->id; ?></td>
            <td><?php echo $row->Vehiclename; ?></td>
            <td><?php echo $row->Vehiclecost; ?></td>
            <td><?php echo $row->Phonenumber; ?></td>
            <td><?php echo $row->Vehicleowner; ?></td>
            <td><?php echo ($row->status == 1) ? "Active" : "Inactive"; ?></td>
            <td><a href="<?php echo site_url('vehicles/edit' . $row->id); ?>">Edit</a></td>
            <td><a href="<?php echo site_url('vehicles/delete' . $row->id); ?>">Remove</a></td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>
</body>
</html>
