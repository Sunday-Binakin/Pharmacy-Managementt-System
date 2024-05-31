<form method="POST" action="">
    @csrf
    <div class="row mb-3">
        <label for="inputText" class="col-sm-2 col-form-label">Medicine Name<span style="color: red;">*</span></label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="name">
        </div>

    </div>
    <div class="row mb-3">
        <label for="inputText" class="col-sm-2 col-form-label">Packing<span style="color: red;">*</span></label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="packing">
        </div>
    </div>
    <div class="row mb-3">
        <label for="inputText" class="col-sm-2 col-form-label">Generic Name<span style="color: red;">*</span></label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="generic_name">
        </div>
    </div>
    <div class="row mb-3">
        <label for="inputText" class="col-sm-2 col-form-label">Supplier Name<span style="color: red;">*</span></label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="supplier_name">
        </div>
    </div>


    <div class="d-flex justify-content-center align-items-center">
        <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>

