<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CRUD</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">

</head>
<!-- background:#212121 -->
<body style="">

  <!-- top bar -->

  <!-- <div style="display: flex; gap: 50rem;">
        <div><button style="border: none; background-color: transparent; cursor: pointer;"><a href="">Home</a></button></div>
        <div>Mod</div>
        <div>Profile</div>
    </div>
     -->


  <!-- add new list Start -->
  <div class="modal fade" tabinbex="-1" id="addNewListModal">
    <div class="modal-dialog modal-dialog-centered">

      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-header">Add New List</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">
          <form id="add-list-form" class="p-2" novalidate>
            <div class="row mb-3 gx-3">
              <div class="mb-3">
                <div class="fs-5 mb-2">Kind</div>
                <input type="text" name="kind" class="form-control form-control-lg" placeholder="chicken, pork, meet" required>
                <div class="invalid-feedback">enter kind such as chicken, pork, meet</div>
              </div>
              <div class="mb-3">
                <div class="fs-5 mb-2">Part</div>
                <input type="text" name="part" class="form-control form-control-lg" placeholder="chest, wings, hips" required>
                <div class="invalid-feedback">enter part such as chest, wings, hips</div>
              </div>
              <div class="mb-3">
                <div class="fs-5 mb-2">Protein (per 100g of meat)</div>
                <input type="text" name="protein" class="form-control form-control-lg" placeholder="unit of grams"
                  required>
                <div class="invalid-feedback">enter protein</div>
              </div>
              <div class="mb-3">
                <div class="fs-5 mb-2">kcal</div>
                <input type="text" name="kcal" class="form-control form-control-lg" placeholder="unit of kcal">
                <div class="invalid-feedback">enter kcal</div>
              </div>
              <div class="mb-3">
                <input type="submit" value="Add list" class="btn btn-primary btn-block btn-lg" id="add-list-btn">
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- add new list End -->

  <!-- Edit List Modal Start -->
  <div class="modal fade" tabindex="-1" id="editListModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-header">Edit This List</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="edit-list-form" class="p-2" novalidate>
            <input type="hidden" name="id" id="id">
            <div class="row mb-3 gx-3">
              <div class="mb-3">
                <div class="fs-5 mb-2">Kind</div>
                <input type="text" id="kind" name="kind" class="form-control form-control-lg" placeholder="chicken, pork, meet" required>
                <div class="invalid-feedback">enter kind such as chicken, pork, meet</div>
              </div>
              <div class="mb-3">
                <div class="fs-5 mb-2">Part</div>
                <input type="text" id="part" name="part" class="form-control form-control-lg" placeholder="chest, wings, hips" required>
                <div class="invalid-feedback">enter part such as chest, wings, hips</div>
              </div>
              <div class="mb-3">
                <div class="fs-5 mb-2">Protein (per 100g of meat)</div>
                <input type="text" id="protein" name="protein" class="form-control form-control-lg" placeholder="unit of grams"
                  required>
                <div class="invalid-feedback">enter protein</div>
              </div>
              <div class="mb-3">
                <div class="fs-5 mb-2">kcal</div>
                <input type="text" id="kcal" name="kcal" class="form-control form-control-lg" placeholder="unit of kcal">
                <div class="invalid-feedback">enter kcal</div>
              </div>
              <div class="mb-3">
                <input type="submit" value="Edit List" class="btn btn-primary btn-block btn-lg" id="edit-list-btn">
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- data -->
  <div class="container">
    <div class="row mt-4">
      <div class="col-lg-12 d-flex justify-content-between align-items-center">
        <div>
          <h4 class="text-primary">All List in database</h4>
        </div>
        <div>
          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#addNewListModal">Add New
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
            <thead>
              <tr>
                <th>ID</th>
                <th>Kind</th>
                <th>Part</th>
                <th>Protein</th>
                <th>kcal</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
    crossorigin="anonymous"></script>
  <script src="main.js"></script>
</body>

</html>