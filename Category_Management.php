<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>


<style>
/* Form Styles */
form.row.g-3 {
  background-color: #f8f9fa;
  padding: 30px;
  border-radius: 10px;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
}

/* Form Row Styles */
.row.g-3 > * {
  margin-bottom: 20px;
}

/* Form Label Styles */
.form-lable {
  font-weight: 600;
  color: #333;
  margin-bottom: 5px;
}

/* Form Input Styles */
.form-control {
  border: 1px solid #ced4da;
  border-radius: 5px;
  padding: 10px 15px;
  font-size: 16px;
  transition: border-color 0.3s ease;
  width: 100%;
}

.form-control:focus {
  border-color: #007bff;
  box-shadow: none;
}

/* Select Styles */
.form-select {
  border: 1px solid #ced4da;
  border-radius: 5px;
  padding: 10px 15px;
  font-size: 16px;
  appearance: none;
  background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='%23343a40' xmlns='http://www.w3.org/2000/svg'%3e%3cpath d='M7.5 8l4 4m0-8l-4 4'/%3e%3c/svg%3e");
  background-repeat: no-repeat;
  background-position: right 0.75rem center;
  background-size: 16px 12px;
  transition: border-color 0.3s ease;
  width: 100%;
}

.form-select:focus {
  border-color: #007bff;
  box-shadow: none;
}

/* Submit Button Styles */
.btn-success {
  background-color: #28a745;
  border-color: #28a745;
  color: #fff;
  font-weight: 600;
  padding: 10px 20px;
  border-radius: 5px;
  transition: background-color 0.3s ease, border-color 0.3s ease;
}

.btn-success:hover {
  background-color: #218838;
  border-color: #1e7e34;
}
</style>



<body>
       
<h3 style="text-align: center;">make categories</h3>
   <section class="body-content">

       <form action="" class="row g-3" method="post" enctype="multipart/form-data">

        <div class="col-md-6">
           <label for="name" class="form-lable" >name</label>
            <input type="text" name="name" class="form-control" id="name">
       </div>


        <div class="col-6">
           <label for="name" class="form-lable" >slug</label>
           <input type="text" name="name" class="form-control" id="name">
        </div>


          <div class="col-md-12">
               <label for="name" class="form-lable" >Description</label>
              <input type="text" name="name" class="form-control" id="name">
         </div>


             <div class="mb-3 col-md-6">
                       <form action="upload.php" method="post" enctype="multipart/form-data">
                      <label for="name" class="form-lable" >picture</label>
                     <input type="file" name="name" class="form-control" id="name">
                
             </div>


              <div class="col-md-6">
                       <label for="name" class="form-lable" >Condition</label>
                      <select class="form-select"   name="status" id="status">
                      <option value="1">avtive</option>
                      <option value="0">inavtive</option></select>
            </div>

               <div class="col-12">
                    <button type = "submit" class="btn btn-success">Record</button>
             </div>


  </form>
</section>

</body>
</html>
