<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<!--fontawesome -->
<script src="https://kit.fontawesome.com/1954a5386a.js" crossorigin="anonymous"></script>

<style>
h1{
    text-align: center;
    font-weight: bold;
    margin-top:30px;
    color:rgb(30, 0, 255);
}
thead th{
    font-size:20px;
}
br{
    height:20px;
}

</style>
</head>

<body>
    <div class="container" style="margin-top:20px">
    <div class="row">
        <div class="col-md-12">
            <h2>Product list</h2>
            <?php if(Session::has('success')): ?>
                <div class="alert alert-success">
                    <?php echo e(Session::get('success')); ?>

                </div>
            <?php endif; ?>
            <div style="margin-right: 5%; margin-bottom: 20px; float:right">
                <a href="<?php echo e(url('add')); ?>" class="btn btn-primary">Add Product</a>
            </div>
            <table class="table table-hover">
                <thead class="table-success">
                    <tr>
                        <th>ID</th>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Details</th>
                        <th>Categories</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $products): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($products ->proID); ?></td> 
                        <td><?php echo e($products ->productname); ?></td> 
                        <td><?php echo e($products ->productprice); ?></td> 
                        <td><?php echo e($products ->productdetail); ?></td> 
                        <td><img src="<?php echo e(url('pro_img/'.$products->productimage)); ?>" style="height:100px; width:100px;"></td>
                        <td><?php echo e($products ->catName); ?></td> 
                        <td>
                            <a href="<?php echo e(url('edit/'.$products->proID)); ?>" title="Edit this product"><i class="fa-solid fa-pen-to-square" style="color: #000000;"></i></a>&nbsp;
                            <a href="<?php echo e(url('delete/'.$products->proID)); ?>" title="Delete this product"><i class="fa-solid fa-trash" style="color: #090c11;"></i></a> 
                            
                            <a href="#" data-bs-toggle="modal" data-bs-target="#myModal" title="Delete this product">
                                <i class ="fa-solid fa-trash-can"> </i>
                            </a>
                        </td>
                     </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
      </div>
      </div>
    <!-- The Modal: Show confirm message when you click delete icon -->
    <div class="modal fade" id="myModal">
        <div class="modal-dialog">
        <div class="modal-content">    
            <!-- Modal Header -->
            <div class="modal-header">
            <h4 class="modal-title" style="color: red; font-weight: bold">Warning</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>    
            <!-- Modal body -->
            <div class="modal-body" style="font-weight: bold; color:royalblue;">
                Are you sure delete this product?
            </div>    
            <!-- Modal footer -->
            <div class="modal-footer">
                <a href="<?php echo e(url('delete/'.$products ->proID)); ?>"> <button type="submit" class="btn btn-danger" data-bs-dismiss="modal">Yes</button></a>
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">No</button>
            </div>    
        </div>
        </div>
    </div>
</body>

</html>





<?php /**PATH C:\xampp\htdocs\GCS210834project\resources\views/index.blade.php ENDPATH**/ ?>