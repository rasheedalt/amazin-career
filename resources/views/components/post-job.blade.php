<div class="card border-none">
  <form method="POST" action="{{ route('job.post') }}">

    <div class="card-header">
        <!-- <h5 class="card-title">Post Job</h5> -->
    </div>
    <div class="card-body" >
            <div class="row">
                <div class="col-6">
                    <label class="switch">
                        <input id="switch" type="checkbox" name="is_group" value="yes">
                        <span class="slider round"></span>
                    </label>
                    <p> Group Job</p>
                </div>
                <div class="col-6" id="add-job">
                    <a class="float-right text-success" href="javascript:void(0);"><i class="fa fa-plus"></i> Add Job</a>
                </div>
            </div>
    </div>
    <div class="card-header border-top">
        Company Details
    </div>
    <div class="card-body" >
      @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Company Name</label>
              <input class="form-control" name="company_name" cols="30" rows="2">
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">Company Reg No</label>
              <input class="form-control" name="company_registration_no" type="text">
            </div>
        </div>
    </div>

        <div class="card-header border-top">
            Job Details
          </div>
        <ul id="jobs" class="list-group list-group-flush">
            <li class="list-group-item">
              <div id="job1">
                  <div class="row first-job-title">
                    <div class="col"><h4>Job Position 1</h4></div>
                  </div>
                  <div class="form-group form-row">
                    <div class="form-group col-md-6">
                      <label for="inputAddress">Job Title</label>
                      <textarea class="form-control" name="job[1][title]" type="text"></textarea>
                    </div>
                      <div class="form-group col-md-6">
                        <label for="inputAddress">Location</label>
                        <select class="form-control select-single" data-placeholder="Choose a state..." multiple="multiple" name="job[1][address][]">
                          <option value="">Choose a location</option>
                          @foreach ($states as $state)
                            <option value="{{ $state->name }}">{{ $state->name }}</option>
                          @endforeach
                        </select>
                        <!-- <input class="form-control" name="job[1][address]" type="text"> -->
                      </div>
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
              </div>
            </li>
            </ul>
    <div class="card-body">
      <button class="btn text-white" style="background-color:#072638; text-decoration:none">Submit</button>
    </div>

  </form>
</div>
