<div class="container mt-3 text-center button-quize">
    <h3>PHP Quize Modal Example</h3>
    <p>Click on the button to open Quizes.</p>
    
    <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
        Open modal
    </a>
</div>



<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">លក្ខខណ្ឌមុនពេលអ្នកចាប់ផ្តើឆ្លើយសំណួរ ៖</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <ol>
          <li>មានចំនួន 6 សំណួរ ។</li>
          <li>អ្នកមានពេលចំនួន 3 នាទីនៅក្នុងការឆ្លើយសំណួរ ។</li>
          <li>អ្នកអាចធ្វើការផ្លាស់ប្តូរចំម្លើយរបស់អ្នកបានមុនពេលចុច Submit</li>
        </ol>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer start-quize">
        <a href="start-quizes.php" class="btn">Start Quizes</a>
      </div>

    </div>
  </div>
</div>