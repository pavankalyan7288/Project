<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Vehicles</title>
<style>
    
body{
    overflow-x: hidden;
}

* {
  box-sizing: border-box;}
.vechiles-details form {
    height: 100vh;
    border: 2px solid #f1f1f1;
    padding: 16px;
    background-color: white;
    }
    .user-details{
      width: 30%;
    float: left;
    }

input{
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;}
input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;}
button[type=submit] {
    background-color: #434140;
    color: #ffffff;
    padding: 10px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
    font-size: 20px;}
label{
  font-size: 18px;;}
button[type=submit]:hover {
  background-color:#3d3c3c;}
  .form-title a, .form-title h2{
   display: inline-block;
   
  }
  .form-title a{
      text-decoration: none;
      font-size: 20px;
      background-color: green;
      color: honeydew;
      padding: 2px 10px;
  }
 
</style>
</head>
<body>

<div class="vechiles-details">

    <div class="form-title">
    <h2>Update Form</h2>
    
    
    </div>
    <form method="post" action="<?= base_url("vehicles/edit") ?>">
          <label>Vehiclename</label>
        
          <input type="text" placeholder="Enter vehicle name" name="Vehiclename" required value="<?php echo isset($editData) ? $editData['Vehiclename'] : '' ?>">

          <label>Vehiclecost</label>
        
          <input type="number" placeholder="Enter vechile cost" name="Vehiclecost" required value="<?php echo isset($editData) ? $editData['Vehiclecost'] : '' ?>">

          <label>Phonenumber</label>
          
          <input type="number" placeholder="Enter Phone number" name="Phonenumber" required value="<?php echo isset($editData) ? $editData['Phonenumber'] : '' ?>">

          <label>Vehicleowner</label>
        
          <input type="text" placeholder="Enter vechile owner" name="Vehicleowner" required value="<?php echo isset($editData) ? $editData['Vehicleowner'] : '' ?>">
          
          <div class="form-group">
          <label for="status">Status</label>
          <select name="status" id="status" class="form-control">
          <option value="0">Inactive</option>
          <option value="1">Active</option>
          </select>
          <?php echo form_error('status', '<span class="text-danger">', '</span>'); ?>
</div>
      <button type="submit" name="update">Submit</button>
    </form>
</div>

</body>
</html>