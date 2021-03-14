<div class="card">
    <div class="card-header">
        <h5 class="card-title">Post Job</h5>
    </div>
    <div class="card-body">
        <form method="POST" action="{{ route('job.post') }}">
            <div class="row mb-2">
                <div class="col-6">
                    <label class="switch">
                        <input id="switch" type="checkbox" name="is_group" value="yes">
                        <span class="slider round"></span>
                    </label>
                    <p> Group Job</p>
                </div>
                <div class="col-6 add-job">
                    <a class="float-right" href="#"><i class="fa fa-plus"></i> Add Job</a>
                </div>
            </div>
            @csrf
            <div id="jobContainer">
                <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputEmail4">Company Name</label>
                      <textarea class="form-control" name="company_name" cols="30" rows="2"></textarea>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputPassword4">Company Reg No</label>
                      <input class="form-control" name="company_registration_no" type="text"> 
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputAddress">Address</label>
                    <textarea class="form-control" name="address" type="text"></textarea>
                </div>

                <div class="jobs">
                  <div id="job1">
                      <div class="row first-job-title">
                        <div class="col"><h4>Job Position 1</h4></div>
                      </div>
                      <div class="form-group">
                          <label for="inputAddress">Job Title</label>
                          <textarea class="form-control" name="job[1][title]" type="text"></textarea>
                      </div>

                      <div class="form-group form-row">
                        <div class="form-group col-md-6">
                          <label for="inputAddress">Requirements/Job description</label>
                          <textarea class="form-control" name="job[1][description]" cols="30" rows="5"></textarea>
                        </div>

                        <div class="form-group col-md-6">
                          <label for="inputAddress">Method of Application</label>
                          <textarea class="form-control" name="job[1][application_mode]" cols="30" rows="3"></textarea>
                        </div>
                      </div>

                      <div class="form-row">
                          <div class="form-group col-md-6">
                          <label for="inputEmail4">Salary Range</label>
                          <input class="form-control" name="job[1][salary]" required type="text">
                          </div>
                          <div class="form-group col-md-6">
                              <label for="inputPassword4">Deadline</label>
                              <input class="form-control" name="job[1][deadline]" type="text">
                          </div>
                      </div>

                      <div class="form-group">
                          <label for="inputAddress">Application Link</label>
                          <input class="form-control" name="job[1][link]" type="text">
                      </div>
                      <hr>
                  </div>

                </div>

                <button class="btn btn-block text-white" style="background-color:#072638; text-decoration:none">Submit</button>
            </div>
        </form>
    </div>
</div>

<style>
/* The switch - the box around the slider */
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

/* Hide default HTML checkbox */
.switch input {
  opacity: 0;
  width: 0;
  height: 0;
}

/* The slider */
.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
</style>

<script>
  $(document ).ready(function() {
        $('.add-job').hide()
        $('.first-job-title').hide()

        $('#switch').change(function(){
          if($('#switch').is(":checked")){
            $('.add-job').show()
            $('.first-job-title').show()
          }else{
            $('.add-job').hide()
            $('.first-job-title').hide()
          }
        })

        $('.add-job').on('click', function(){
          let length = $('.jobs').children().length + 1;

          let row = `<div id="job${length}">
                      <div class="row">
                        <div class="col"><h4>Job Position ${length}</h4></div>
                        <div class="col"><a onClick="removeDiv(${length})" class="float-right" href="#"><i class="fa fa-times fa-2x"></i></a></div>
                      </div>
                      <div class="form-group">
                          <label for="inputAddress">Job Title</label>
                          <textarea class="form-control" name="job[${length}][title]" type="text"></textarea>
                      </div>

                      <div class="form-group form-row">
                        <div class="form-group col-md-6">
                          <label for="inputAddress">Requirements/Job description</label>
                          <textarea class="form-control" name="job[${length}][description]" cols="30" rows="5"></textarea>
                        </div>

                        <div class="form-group col-md-6">
                          <label for="inputAddress">Method of Application</label>
                          <textarea class="form-control" name="job[${length}][application_mode]" cols="30" rows="3"></textarea>
                        </div>
                      </div>

                      <div class="form-row">
                          <div class="form-group col-md-6">
                          <label for="inputEmail4">Salary Range</label>
                          <input class="form-control" name="job[${length}][salary]" required type="text">
                          </div>
                          <div class="form-group col-md-6">
                              <label for="inputPassword4">Deadline</label>
                              <input class="form-control" name="job[${length}][deadline]" type="text">
                          </div>
                      </div>

                      <div class="form-group">
                          <label for="inputAddress">Application Link</label>
                          <input class="form-control" name="job[${length}][link]" type="text">
                      </div>
                      <hr>
                  </div>`;
            $('.jobs').append(row)
         
        })

    });

    function removeDiv(id){
      $(`#job${id}`).remove()
    }
</script>