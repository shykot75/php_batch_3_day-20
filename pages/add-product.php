<?php include 'header.php'; ?>


<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">Add Product Form</div>

                    <div class="card-body">
                        <form action="action.php" method="POST" enctype="multipart/form-data">

                            <div class="form-group row">
                                <div class="col-md-3">Product Name</div>
                                <div class="col-md-9">
                                    <input type="text" name="name" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-3">Product Price</div>
                                <div class="col-md-9">
                                    <input type="number" name="price" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-3">Product Image</div>
                                <div class="col-md-9">
                                    <input type="file" name="image" class="form-control-file">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-3">Description</div>
                                <div class="col-md-9">
                                    <textarea name="description" rows="5"  class="form-control"></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-3"></div>
                                <div class="col-md-9">
                                    <input type="submit" name="product_btn" class="btn btn-outline-success" value="Submit">
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<?php include 'footer.php'; ?>
