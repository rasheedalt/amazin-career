<div class="card">
    <div class="card-header">
        <h5 class="card-title">Post Job</h5>
    </div>
    <div class="card-body">
        <form method="POST" action="{{ route('job.post') }}">
            <div class="mb-2">
                <label class="switch">
                    <input type="checkbox">
                    <span class="slider round"></span>
                </label>
                <p> Group Job</p>
            </div>
            @csrf
            <div id="jobContainer">
                <div class="job1">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="inputEmail4">Company Name</label>
                        <textarea class="form-control" name="company_name[0]" cols="30" rows="2"></textarea>
                        </div>
                        <div class="form-group col-md-6">
                        <label for="inputPassword4">Company Reg No</label>
                        <input class="form-control" name="company_registration_no[0]" type="text"> 
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputAddress">Address</label>
                        <textarea class="form-control" name="address[0]" type="text"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="inputAddress">Job Title</label>
                        <textarea class="form-control" name="title[0]" type="text"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="inputAddress">Requirements/Job description</label>
                        <textarea class="form-control" name="description[0]" cols="30" rows="8"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="inputAddress">Method of Application</label>
                        <textarea class="form-control" name="application_mode[0]" cols="30" rows="3"></textarea>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="inputEmail4">Salary Range</label>
                        <input class="form-control" name="salary[0]" required type="text">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Deadline</label>
                            <input class="form-control" name="deadline[0]" type="text">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputAddress">Application Link</label>
                        <input class="form-control" name="link[0]" type="text">
                    </div>
                </div>

                <!-- <input class="form-control" name="company_name" placeholder="Company Name" type="text"> <br> -->
                <!-- <textarea class="form-control" name="company_name" placeholder="Company Name" cols="30" rows="2"></textarea><br>
                <input class="form-control" name="company_registration_no" placeholder="Company Registration No" type="text"> <br> -->
                <!-- <input class="form-control" name="address" placeholder="Adress/Location" type="text"><br> -->
                <!-- <input class="form-control" name="title" placeholder="Job Positions" type="text"><br> -->
                <!-- <textarea class="form-control" name="description" placeholder="Requirements/Job description" id="" cols="30" rows="9"></textarea><br> -->
                <!-- <textarea class="form-control" name="application_mode" placeholder="Method of Application" id="" cols="30" rows="3"></textarea><br> -->
                <!-- <input class="form-control" name="salary" required placeholder="Salary Range" type="text"><br> -->
                <!-- <input class="form-control" name="application_mode" placeholder="Method of Application" type="text"><br> -->
                <!-- <input class="form-control" name="deadline" placeholder="Deadlines" type="text"><br> -->
                <!-- <input class="form-control" name="link" placeholder="Application Link" type="text"><br> -->
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