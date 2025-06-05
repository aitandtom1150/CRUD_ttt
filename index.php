<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CRUD</title>

  <link href="style.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">

</head>

<body style="background:grey">

  <!-- top bar -->

  <!-- <div style="display: flex; gap: 50rem;">
        <div><button style="border: none; background-color: transparent; cursor: pointer;"><a href="">Home</a></button></div>
        <div>Mod</div>
        <div>Profile</div>
    </div>
     -->


  <!-- add new list Start -->
  <div class="modal fade" tabinbox="-1" id="addNewListModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <h5 class="modal-header">Add New List</h5>
        <button type="button" class="btn-close" data-dismiss="modal">New List</button>
      </div>
      <div class="modal-body">
        <form id="add-list-form" class="p-2" novalidate>
          <div class="row mb-3 gx-3">
            <div class="col">
              <input type="text" name="kind" class="form-control form-control-lg" placeholder="Enter Kind" required>
              <div class="invalid-feedback">enter kind</div>
            </div>
            <div class="col">
              <input type="text" name="part" class="form-control form-control-lg" placeholder="Enter Part" required>
              <div class="invalid-feedback">enter kind</div>
            </div>
            <div class="col">
              <input type="text" name="protein" class="form-control form-control-lg" placeholder="Enter Protein"
                required>
              <div class="invalid-feedback">enter kind</div>
            </div>
            <div class="col">
              <input type="text" name="kcal" class="form-control form-control-lg" placeholder="Enter kcal">
              <div class="invalid-feedback">enter kind</div>
            </div>
            <div class="mb-3">
              <input type="submit" value="Add list" class="btn btn-primary btn-block btn-lg" id="add-list-btn">
            </div>
          </div>
        </form>
      </div>

    </div>
  </div>
  <!-- add new list End -->

  <!-- Edit List Modal Start -->
  <div class="modal fade" tabindex="-1" id="editListModal">
    <div class="moda-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-header">Edit This List</h5>
          <button type="button" class="btn-close" data-></button>
        </div>
      </div>
    </div>
  </div>

  <!-- data -->
  <div class="container">
    <div class="row mt-4">
      <div class="col-lg-12 d-flex justify-content-between align-items-center">
        <div>
          <h4 class="text-danger">All List in database</h4>
        </div>
        <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#addNewUserModal">Add New
          List</button>
      </div>
    </div>
  </div>
  <hr>
  <div class="row">
    <div class="col-lg-12">
      <div id="showAlert"></div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12">
      <div class="table-responsive">
        <table class="table table-striped table-boredered text-center">
          <div>
            <table class="table">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Kind</th>
                  <th>Part</th>
                  <th>Protein</th>
                  <th>kcal</th>
                </tr>
              </thead>
              <tbody>
              </tbody>
            </table>
          </div>
        </table>
      </div>
    </div>
  </div>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
    crossorigin="anonymous"></script>
  <script src="main.js"></script>
</body>

</html>