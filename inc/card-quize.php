<style>
    .card-quizes{
        margin-top: 150px;
    }
    .img-scale img{
        width: 25vh;
        top: 25px;
    }
    .card{
        box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;
    }
    .start-quize a {
        border: 1px solid #00A4BD;
        padding: 10px 25px;
        text-decoration: none;
        text-transform: uppercase;
        font-size: 14px;
        margin-top: 20px;
        display: inline-block;
        color: #00A4BD;
        
    }
    .start-quize a:hover {
        background: #00A4BD;
        color: #fff;
    }
    .modal{
        background: rgba(0, 0, 0, 0.253);
    }
</style>

<!-- <div id="my_modal">
    <span id="show_time">0.00</span>
    <h2>popup modal with time countdown</h2>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
</div> -->

<div class="modal" tabindex="-1" id="my_modal">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">លក្ខខណ្ឌមុនពេលអ្នកចាប់ផ្តើឆ្លើយសំណួរ ៖ <span id="show_time"></span></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="closeModal();"></button>
      </div>
      <div class="modal-body">
        <ol>
          <li>មានចំនួន 6 សំណួរ ។</li>
          <li>អ្នកមានពេលចំនួន 2 នាទីនៅក្នុងការឆ្លើយសំណួរ ។</li>
          <li>អ្នកអាចធ្វើការផ្លាស់ប្តូរចំម្លើយរបស់អ្នកបានមុនពេលចុច Submit</li>
          <!-- <li></li> -->
          <!-- <li></li> -->
        </ol>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="closeModal();">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="container card-quizes">
    <div class="row row-cols-1 row-cols-md-4 g-4">

    <div class="col mb-5">
        <div class="card h-100 img-scale">
        <img src="quizes-img/images/html.png" class="card-img-top position-relative start-50 translate-middle" alt="HTML Icon">
        <div class="card-body start-quize">
            <h5 class="card-title">សំណួរ HTML</h5>
            <p class="card-text">មានចំនួន 6 សំណួរ</p>
            <p class="card-text">រយះពេល 2 នាទី</p>
            <div class="text-center">
                <a href="html-quizes.php" class="btn">Start</a>
            </div>
        </div>
        </div>
    </div>

    <div class="col mb-5">
        <div class="card h-100 img-scale">
        <img src="quizes-img/images/css-3.png" class="card-img-top position-relative start-50 translate-middle" alt="HTML Icon">
        <div class="card-body start-quize">
            <h5 class="card-title">សំណួរ CSS</h5>
            <p class="card-text">មានចំនួន 6 សំណួរ</p>
            <p class="card-text">រយះពេល 2 នាទី</p>
            <div class="text-center">
                <a href="css-quizes.php" class="btn">Start</a>
            </div>
        </div>
        </div>
    </div>

    <div class="col mb-5">
        <div class="card h-100 img-scale">
        <img src="quizes-img/images/js.png" class="card-img-top position-relative start-50 translate-middle" alt="HTML Icon">
        <div class="card-body start-quize">
            <h5 class="card-title">សំណួរ JavaScript</h5>
            <p class="card-text">មានចំនួន 6 សំណួរ</p>
            <p class="card-text">រយះពេល 2 នាទី</p>
            <div class="text-center">
                <a href="javascript-quizes.php" class="btn">Start</a>
            </div>
        </div>
        </div>
    </div>

    <div class="col mb-5">
        <div class="card h-100 img-scale">
        <img src="quizes-img/images/bootstrap.png" class="card-img-top position-relative start-50 translate-middle" alt="HTML Icon">
        <div class="card-body start-quize">
            <h5 class="card-title">សំណួរ Bootstrap</h5>
            <p class="card-text">មានចំនួន 6 សំណួរ</p>
            <p class="card-text">រយះពេល 2 នាទី</p>
            <div class="text-center">
                <a href="bootstrap-quizes.php" class="btn">Start</a>
            </div>
        </div>
        </div>
    </div>

    <div class="col mb-5">
        <div class="card h-100 img-scale">
        <img src="quizes-img/images/computer.png" class="card-img-top position-relative start-50 translate-middle" alt="HTML Icon">
        <div class="card-body start-quize">
            <h5 class="card-title">សំណួរ NetWork</h5>
            <p class="card-text">មានចំនួន 6 សំណួរ</p>
            <p class="card-text">រយះពេល 2 នាទី</p>
            <div class="text-center">
                <a href="network-quizes.php" class="btn">Start</a>
            </div>
        </div>
        </div>
    </div>

    

    </div>
</div>

<script>
    var my_modal = document.getElementById('my_modal');
    // var modal_hidden = document.getElementById('my_modal');
    var span_tag = document.getElementById('show_time');
    var countdown_call = '';
    var time_count = 15;
    document.getElementById("show_time").innerHTML = time_count;

    


    
    function showModal(){
        my_modal.style.display = "block";
        // countdown after show
        countdown_call = setInterval(updateTime, 1000); // call for every 1s
    }
    // now show automatically after 1s
    // working
    setTimeout(showModal,1000) // 1000ms


    // now close 
    function closeModal(){
        my_modal.style.display = "none";
    }
    // setTimeout(closeModal,3000) // 1000ms
    // no need

    // now countdown time
    function updateTime(){
        time_count--;  
        span_tag.innerHTML = time_count;
        if(time_count == 0){
            clearInterval(countdown_call);
            closeModal();
        }

    }
   
</script>