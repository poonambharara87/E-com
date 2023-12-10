<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Product Form</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
  <h2>Product Form</h2>
  <form action="{{ route('product.update')}}" method="post">
    @csrf

    
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Product Name">
      </div>
      <div class="form-group col-md-6">
        <label for="small_description">Small Description</label>
        <input type="text" class="form-control" id="small_description" name="small_description" placeholder="Small Description">
      </div>
    </div>

    <div class="form-group">
      <label for="description">Description</label>
      <textarea class="form-control" id="description" name="description" rows="3" placeholder="Product Description"></textarea>
    </div>

    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="original_price">Original Price</label>
        <input type="number" class="form-control" id="original_price" name="original_price" placeholder="Original Price">
      </div>
      <div class="form-group col-md-6">
        <label for="selling_price">Selling Price</label>
        <input type="number" class="form-control" id="selling_price" name="selling_price" placeholder="Selling Price">
      </div>
    </div>

    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="image">Select File</label>
        <input type="file" class="form-control" id="image" name="image" placeholder="Image URL">
      </div>
      <div class="form-group col-md-6">
        <label for="qty">Quantity</label>
        <input type="number" class="form-control" id="qty" name="qty" placeholder="Quantity">
      </div>
    </div>

    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="tax">Tax</label>
        <input type="number" class="form-control" id="tax" name="tax" placeholder="Tax">
      </div>
      <div class="form-group col-md-6">
        <label for="status">Status</label>
        <select id="status" name="status" class="form-control">
          <option selected>Choose...</option>
          <option value="active">Active</option>
          <option value="inactive">Inactive</option>
        </select>
      </div>
    </div>

    <div class="form-row">
      <!-- <div class="form-group col-md-6">
        <label for="trending">Trending</label>
        <select id="trending" name="trending" class="form-control">
          <option selected>Choose...</option>
          <option value="yes">Yes</option>
          <option value="no">No</option>
        </select>
      </div> -->
      <div class="form-group col-md-6">
        <label for="meta_title">Meta Title</label>
        <input type="text" class="form-control" id="meta_title" name="meta_title" placeholder="Meta Title">
      </div>
    </div>

    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="meta_keywords">Meta Keywords</label>
        <input type="text" class="form-control" id="meta_keywords" name="meta_keywords" placeholder="Meta Keywords">
      </div>
      <div class="form-group col-md-6">
        <label for="meta_description">Meta Description</label>
        <input type="text" class="form-control" id="meta_description" name="meta_description" placeholder="Meta Description">
      </div>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

<!-- Bootstrap JS and dependencies (jQuery, Popper.js) -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>
