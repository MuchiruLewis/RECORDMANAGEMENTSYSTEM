<link rel="stylesheet" href="<?php echo asset('bootstrap-4.1.3-dist/css/bootstrap.css');?>">









<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

.navbar {
  width: 100%;
  background-color: #555;
  overflow: auto;
}

.navbar a {
  float: left;
  padding: 12px;
  color: white;
  text-decoration: none;
  font-size: 17px;
}

.navbar a:hover {
  background-color: #000;
}

.active {
  background-color: #4CAF50;
}

@media screen and (max-width: 500px) {
  .navbar a {
    float: none;
    display: block;
  }
}
</style>
<body>


<div class="navbar">
  <a class="active" href='/student'><i class="fa fa-fw fa-home"></i> Home</a> 
   
  
</div>


</body>
</html> 






















<form action="<?php echo route('student.update', $student->id);?>" method="POST">
    <div class="form-group" >
        <?php echo csrf_field(); echo  "\n";?>
        <?php echo method_field('PATCH'); echo  "\n";?>










        <div class="col-xl-15 col-lg-15">
            <div class="card">
                    <div class="card-body">
        
            <html>
                <head>
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <style>
                body {font-family: Arial, Helvetica, sans-serif;}
                * {box-sizing: border-box;}
                
                input[type=text], select, textarea {
                    width: 100%;
                    padding: 12px;
                    border: 1px solid #ccc;
                    border-radius: 4px;
                    box-sizing: border-box;
                    margin-top: 6px;
                    margin-bottom: 16px;
                    resize: vertical;
                   
                }
                
                input[type=submit] {
                    background-color: #4CAF50;
                    color: white;
                    padding: 12px 20px;
                    border: none;
                    border-radius: 4px;
                    cursor: pointer;
                }
                
                input[type=submit]:hover {
                    background-color: #45a049;
                }
                
                .container {
                    border-radius: 10px;
                    background-color: #f2f2f2;
                    padding: 20px;
                }
                </style>
                </head>
                <body>











 
         
        <input type="hidden" class="form-control" name = "id" value=" <?php echo $student->id;?>"/>
        <input type="hidden" class="form-control"  name = "OBNo" value=" <?php echo $student->OBNo;?>" />

        <label for="department">OB Number</label>
        <input type="text" class="form-control"  name = "title" value=" <?php echo $student->title;?>" readonly/>

        <label for="department">CASE NUMBER</label>
        <input type="text" class="form-control"  name = "CaseNo" value=" <?php echo $student->CaseNo;?>"readonly />

        <label for="statust">INVESTIGATOR</label>
        <input type="text" class="form-control"  name = "Investigator" value=" <?php echo $student->Investigator;?>"readonly/>

        <label for="statust">DATE OF OCCURRENCE</label>
        <input type="text" class="form-control"  name = "Occurredon" value=" <?php echo $student->Occurredon;?>"/>

        

        <label for="statust">REPORTING DATE</label>
        <input type="text" class="form-control"  name = "Reportingdate" value=" <?php echo $student->Reportingdate;?>"/>

        <label for="statust">PERSON REPORTING</label>
        <input type="text" class="form-control"  name = "Reportername" value=" <?php echo $student->Reportername;?>"/>

        <label for="statust">LOCATION OF OCCURRENCE</label>
        <input type="text" class="form-control"  name = "Locationofoccurence" value=" <?php echo $student->Locationofoccurence;?>"/>
    
        <label for="statust">REPORT TYPE</label>
        <input type="text" class="form-control"  name = "Reporttype" value=" <?php echo $student->Reporttype;?>"/>     
        
        <label for="statust">CRIME DESCRIPTION</label>
        <input type="text" class="form-control"  name = "Crimedescription" value=" <?php echo $student->Crimedescription;?>"/>

        <label for="statust">POLICE COMMENTS</label>
        <input type="text" class="form-control"  name = "Policecomments" value=" <?php echo $student->Policecomments;?>"/>

        <label for="statust">CASE</label>
        <input type="text" class="form-control"  name = "cases" value=" <?php echo $student->cases;?>"/>

        <label for="statust">REPORT</label>
        <input type="text"  class="form-control"  name = "Report" value=" <?php echo $student->Report;?>"/>

        


        





        <input type="submit" class= "btn btn-primary" value = "Edit"/>





                </body>

            </html>
                    </div>
            </div>
        


        
    </div>
</form>


