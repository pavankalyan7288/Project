<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
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
<div class="table-data">
    <div class="list-title">
    <h2>Active Users:</h2>
    <ul>
        <?php foreach ($active_users as $user): ?>
            <li><?php echo $user->full_name; ?></li>
        <?php endforeach; ?>
    </ul>
        <h2>Users List</h2>
    </div>
    <a href="<?php echo site_url('users/create'); ?>">Create</a>
    <table>
        <tr>
            <th>S.N</th>
            <th>full_name</th>
            <th>email_address</th>
            <th>phone_number</th>
            <th>password</th>
            <th>status</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <?php $sn = 1; ?>
        <?php foreach ($users as $row): ?>
            <tr>
                <td><?php echo $sn; ?></td>
                <td><?php echo $row->full_name; ?></td>
                <td><?php echo $row->email_address; ?></td>
                <td><?php echo $row->phone_number; ?></td>
                <td><?php echo $row->password; ?></td>
                <td><?php echo ($row->status == 1) ? "Active" : "Inactive"; ?></td>
                <td><a href="<?php echo site_url('users/edit/' . $row->user_id); ?>">Edit</a></td>
                <td><a href="<?php echo site_url('users/delete/' . $row->user_id); ?>">Remove</a></td>

            </tr>
            <?php $sn++; ?>
        <?php endforeach; ?>
    </table>
</div>
</body>
</html>
