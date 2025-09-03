<?php include "common/header.php";?> 
<?php include "common/sidebar.php";?> 

<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Slider</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= base_url('Dashboard') ?>">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="<?= base_url('Home/setup') ?>">Home Page</a></li>
            <li class="breadcrumb-item active">Slider</li>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <section class="content">
    <div class="container-fluid">

      <!-- Add button -->
      <div class="row mb-3">
        <div class="col-12">
          <button class="btn btn-primary btn-block" data-toggle="modal" data-target="#inputModal">
            Add <span class="fa fa-plus"></span>
          </button>
        </div>
      </div>

      <!-- Modal -->
      <div class="modal fade" id="inputModal" tabindex="-1" role="dialog" aria-labelledby="inputModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">

            <div class="modal-header">
              <h5 class="modal-title" id="inputModalLabel">Add New Slider</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <div class="modal-body">
              <form id="inputForm" enctype="multipart/form-data" method="post">
                <div class="form-group">
                  <label for="textInput">Header</label>
                  <input type="text" class="form-control" id="textInput" placeholder="Enter header text" required>
                </div>

                <div class="form-group">
                  <label for="textareaInput">Content</label>
                  <textarea class="form-control" id="textareaInput" rows="3" placeholder="Enter more details" required></textarea>
                </div>

                <div class="form-group">
                  <label for="linkInput">Link (optional)</label>
                  <input type="url" class="form-control" id="linkInput" placeholder="https://example.com">
                </div>

                <div class="form-group">
                  <label for="imageInput">Upload Image (optional)</label>
                  <input type="file" class="form-control-file" id="imageInput" accept="image/*">
                </div>
              </form>
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" form="inputForm" class="btn btn-primary">Save</button>
            </div>

          </div>
        </div>
      </div>

      <!-- Delete Modal -->
      <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header bg-danger text-white">
              <h5 class="modal-title" id="deleteModalLabel">Confirm Delete</h5>
              <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body text-center">
              <p>Are you sure you want to delete this item?</p>
              <span class="fa fa-trash fa-3x text-danger"></span>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
              <button type="button" class="btn btn-danger" id="deleteConfirmBtn">Yes, Delete</button>
            </div>
          </div>
        </div>
      </div>

      <!-- Edit Modal -->
      <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header bg-primary text-white">
              <h5 class="modal-title" id="editModalLabel">Edit Item</h5>
              <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form id="editForm">
                <div class="form-group">
                  <label for="editHeader">Header</label>
                  <input type="text" class="form-control" id="editHeader" placeholder="Enter new header">
                </div>
                <div class="form-group">
                  <label for="editContent">Content</label>
                  <textarea class="form-control" id="editContent" rows="3" placeholder="Enter new content"></textarea>
                </div>
                <div class="form-group">
                  <label for="editLink">Link</label>
                  <input type="url" class="form-control" id="editLink" placeholder="Enter new link">
                </div>
                <div class="form-group">
                  <label for="editImage">Image (optional)</label>
                  <input type="file" class="form-control-file" id="editImage" accept="image/*">
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
              <button type="button" class="btn btn-primary" id="saveEditBtn">Save Changes</button>
            </div>
          </div>
        </div>
      </div>

      <!-- Cards -->
      <div id="cardContainer" class="row"></div>

    </div>
  </section>
</div>

<script>
$(document).ready(function () {

  // ADD SLIDER
  $('#inputForm').on('submit', function (e) {
    e.preventDefault();

    const header = $('#textInput').val().trim();
    const content = $('#textareaInput').val().trim();
    const link = $('#linkInput').val().trim();
    const imageFile = $('#imageInput')[0].files[0];

    if (!header || !content) {
      alert("Please fill in both header and content.");
      return;
    }

    if (link && !isValidURL(link)) {
      alert("Please enter a valid URL.");
      return;
    }

    const formData = new FormData();
    formData.append('header', header);
    formData.append('content', content);
    if (imageFile) formData.append('image', imageFile);
    if (link) formData.append('link', link);

    $.ajax({
      url: '<?= base_url('Slider/saveslider') ?>',
      type: 'POST',
      data: formData,
      processData: false,
      contentType: false,
      success: function () {
        $('#inputForm')[0].reset();
        $('#inputModal').modal('hide');
        loadSliders();
      },
      error: function (xhr, status, error) {
        alert('Error posting data: ' + error);
      }
    });
  });

  // LOAD SLIDERS
  function loadSliders() {
    $.ajax({
      url: '<?= base_url('Slider/getsliders') ?>',
      type: 'GET',
      dataType: 'json',
      success: function (response) {
        $('#cardContainer').empty();
        response.forEach(item => {
          const card = `
            <div class="col-md-4 mb-4">
              <div class="card h-100 shadow-sm">
                ${item.imageUrl ? `<img width="100%" height="200" class="card-img-top" src="${item.imageUrl}" alt="Slider Image">` : ''}
                <div class="card-body text-center">
                  <h5 class="card-title">${item.header}</h5>
                  <p class="card-text">${item.content}</p>
                  ${item.link_ommitted ? `<a href="${item.link}" target="_blank" class="btn btn-outline-primary btn-sm mb-2">Visit Link</a>` : ''}
                  <div class="row">
                    <div class="col-6">
                      <button class="btn btn-primary btn-block editBtn" 
                        data-id="${item.id}" 
                        data-header="${item.header}" 
                        data-content="${item.content}" 
                        data-link="${item.link || ''}" 
                        data-image="${item.imageUrl || ''}" 
                        data-toggle="modal" data-target="#editModal">
                        Edit <span class="fa fa-pen"></span>
                      </button>
                    </div>
                    <div class="col-6">
                      <button class="btn btn-danger btn-block deleteBtn" 
                        data-id="${item.id}" 
                        data-header="${item.header}" 
                        data-toggle="modal" data-target="#deleteModal">
                        Delete <span class="fa fa-trash"></span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>`;
          $('#cardContainer').append(card);
        });
      },
      error: function (xhr, status, error) {
        alert('Error fetching sliders: ' + error);
      }
    });
  }

  // URL VALIDATOR
  function isValidURL(string) {
    try {
      new URL(string);
      return true;
    } catch {
      return false;
    }
  }

  loadSliders();

  // DELETE SLIDER
  $(document).on('click', '.deleteBtn', function () {
    let id = $(this).data('id');
    let header = $(this).data('header');

    // show name in modal
    $('#deleteModal .modal-body p').text(`Are you sure you want to delete "${header}" ?`);

    $('#deleteConfirmBtn').off('click').on('click', function () {
      $.ajax({
        url: '<?= base_url('Slider/delete/') ?>' + id,
        type: 'POST',
        dataType: 'json',
        success: function (res) {
          alert(res.message);
          if (res.status === 'success') {
            $('#deleteModal').modal('hide');
            loadSliders();
          }
        }
      });
    });
  });

  // EDIT SLIDER
  $(document).on('click', '.editBtn', function () {
    let id = $(this).data('id');
    let header = $(this).data('header');
    let content = $(this).data('content');
    let link = $(this).data('link');
    let image = $(this).data('image');

    // fill modal inputs
    $('#editHeader').val(header);
    $('#editContent').val(content);
    $('#editLink').val(link);

    // add preview if image exists
    if (image) {
      if ($('#editImagePreview').length === 0) {
        $('#editImage').after('<img id="editImagePreview" src="" class="img-fluid mt-2 rounded">');
      }
      $('#editImagePreview').attr('src', image);
    } else {
      $('#editImagePreview').remove();
    }

    // save changes
    $('#saveEditBtn').off('click').on('click', function () {
      let formData = new FormData();
      formData.append('header', $('#editHeader').val());
      formData.append('content', $('#editContent').val());
      formData.append('link', $('#editLink').val());
      if ($('#editImage')[0].files[0]) {
        formData.append('image', $('#editImage')[0].files[0]);
      }

      $.ajax({
        url: '<?= base_url('Slider/edit/') ?>' + id,
        type: 'POST',
        data: formData,
        contentType: false,
        processData: false,
        dataType: 'json',
        success: function (res) {
          alert(res.message);
          if (res.status === 'success') {
            $('#editModal').modal('hide');
            loadSliders();
          }
        }
      });
    });
  });

});
</script>
<?php include "common/footer.php";?> 
