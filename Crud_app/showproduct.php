<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>Page Title</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    
    <script type="text/javascript">
    
    $(document).ready(function(){
     
        $("#test").DataTable();
    })
    </script>
    
    </head>
<body>
<div class="container  p-5">
    
    <button type="button" data-bs-toggle="modal" data-bs-target="#prod" class="float-end btn btn-sm btn-primary text-white mt-2"><i class="bi bi-bag-plus-fill"></i> Add Products</button>   
   <div class="table mt-3"> 
   <table class="table mt-3" id="test">
       <thead>
         <tr>
           <th scope="col">#</th>
           <th scope="col">Image</th>
           <th scope="col">Name</th>
           <th scope="col">Price</th>
           <th scope="col">Category</th>
           <th scope="col">Action</th>
         </tr>
       </thead>
       <tbody>
           <?php 
           foreach($shwprod as $row)
           {
           ?>
         <tr>
           <th scope="row"><?php echo $row["id"];?></th>
           <td><img src="<?php echo $row["pimg"];?>" width="85px" height="85px"></td>
           <td><?php echo $row["pname"];?></td>
           <td><?php echo $row["price"];?></td>
           <td><?php echo $row["category"];?></td>
           <td><a href=""><button type="button" class="btn btn-outline-success  bi-eye-fill text-success">Read</button></a> | <a href=""><button type="button" class="btn btn-outline-primary  bi-pencil-square text-primary">Edit</button></a> | <a href=""><button type="button" class="btn btn-outline-danger bi-trash3-fill text-danger">Delete</button></a></td>
         </tr>
         <?php 
       }
       ?>
       </tbody>
     </table>
</div>
</div>


<!-- add product -->

<div class="modal fade" role="dialog" id="prod">
   <div class="modal-dialog">
       <div class="modal-content p-5">
           <h3 class="text-center p-1">Add products</h3>
           <hr class="border border-1 bg-dark w-25 mx-auto">

           <form method="post" enctype="multipart/form-data">
               
               <div class="form-group mt-2">
                   <input type="file" name="pimage" placeholder="Enter pimage *" required class="form-control">
               </div>
               <div class="form-group mt-2">
                   <input type="text" name="pname" placeholder="Enter product Name *" required class="form-control">
               </div>
               
               <div class="form-group mt-2">
                   <input type="number" name="price" placeholder="Enter price *" required class="form-control">
               </div>
               
               <div class="form-group mt-2">
                   <input type="category" name="category" placeholder="Enter Category Name *" required class="form-control">
               </div>

               
               <div class="form-group mt-2">
                   <input type="submit" name="addprod" placeholder="Enter price Name *" required class="btn btn-sm btn-secondary" value="Add Products >>">
               </div>
           </form>

       </div>
   </div>
</div>
</body>
</html>
</body>
</html>