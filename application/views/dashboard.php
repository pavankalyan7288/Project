<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
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
    
    .table-container {
        width: 65%;
        margin-right: 20px;
    }
    
    .table-data {
        margin-top: 30px;
    }
    
    th, td {
        padding: 15px;
    }
    
    body {
        overflow-x: hidden;
        font-family: Georgia, "Times New Roman", Times, serif;
        color: white;
        background-color: black;
    }
    
    .container {
        max-width: 90rem;
        margin: 2rem auto;
        padding: 0px 2rem;
    }
    
    .img-fluid {
        max-width: 100%;
    }
    
    nav {
        display: flex;
        justify-content: space-between;
        padding: 1rem 3rem;
        align-items: center;
    }
    
    .items {
        display: flex;
        align-items: center;
        gap: 30px;
        margin: 50px;
    }
    
    .items a:link {
        text-decoration: none;
        color: white;
        font-size: 1.5rem;
        font-weight: bold;
    }
    
    .items a:hover {
        color: red;
    }
    
    .active {
        color: red !important;
    }
    
    button {
        font-size: 2rem;
        padding: 0.6rem 1rem;
        font-weight: bold;
        color: white;
        background: linear-gradient(to right, #c31432, #892211);
        border-radius: 10px;
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        cursor: pointer;
        border: none;
    }
    
    button:hover {
        background: white;
        outline: 1px solid red;
        color: red;
        border: none;
    }
    
    .row {
        display: grid;
        grid-template-columns: 1fr 1fr;
        justify-content: center;
        align-items: center;
    }
    </style>
</head>
<body>
    <div class="container">
            <div>
                <p style="text-align: right; font-size: 30px; color: red; font-weight: bold;">
                    <a href="<?php echo site_url('logout'); ?>">Logout</a></p>
                <p style="text-align: right; font-size: 20px; color: red; font-weight: bold;">
            
                Hey, <?php echo $this->session->userdata('username'); ?></p>
                
            </div>
        <div>
                <h1 style="text-align:center;">WELCOME TO DASHBOARD</h1>
            </div>
        <div class="items">
            <a href="<?php echo site_url('menu'); ?>" class="active">Menu</a>
            <a href="<?php echo site_url('home'); ?>">Home</a>
            <a href="<?php echo site_url('vehicles'); ?>">Vehicle</a>
            <a href="<?php echo site_url('users'); ?>">Users</a>
            <a href="<?php echo site_url('about'); ?>">About</a>
        </div>

        
        
    </div>
</body>
</html>
