@extends('layouts.admin-layout')

@section('more-styles')
<link  href="{{ asset('css/admin/dashboard.css') }}" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
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
@endsection

@section('content')
  <div id="contaner" class="mt-2 mr-2 mb-3">
    <h3>Post Job</h3>
      <div class="row">
          <div class="col-md-9 pb-3">
              @include('components.post-job', [
                'isAdmin' => TRUE
              ])
          </div>
      </div>
  </div>
@endsection

@section('more-scripts')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
  $(document ).ready(function() {
        $('#add-job').hide();
        $('.first-job-title').hide();
        $('.select-single').select2();

        $('#switch').change(function(){
          if( $('#switch').is(":checked") ){
            $('#add-job').show();
            $('.first-job-title').show();
          }else{
            $('#add-job').hide();
            $('.first-job-title').hide();
          }
        })

        $('#add-job').on('click', function(){
          let length = $('#jobs').children().length + 1;

          let row = `
              <li class="list-group-item" id="job${length}">
                  <div>
                      <div class="row">
                        <div class="col"><h4>Job Position ${length}</h4></div>
                        <div class="col"><a onClick="removeDiv(${length})" class="float-right" href="#"><i class="fa fa-times fa-2x"></i></a></div>
                      </div>

                      <div class="form-group form-row">
                        <div class="form-group col-md-6">
                          <label for="inputAddress">Job Title</label>
                          <textarea class="form-control" name="job[${length}][title]" type="text"></textarea>
                        </div>
                          <div class="form-group col-md-6">
                            <label for="inputAddress">Location</label>
                            <select class="form-control select-single" data-placeholder="Choose a state..." multiple="multiple" name="job[${length}][address][]">
                              <option value="Nation wide">Nigeria (nation wide)</option>
                              @foreach ($states as $state)
                                <option value="{{ $state->name }}">{{ $state->name }}</option>
                              @endforeach
                            </select>
                          </div>
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
                  </div>
                  </li>`;
            $('#jobs').append(row)
            $('.select-single').select2();
        })
    });

    function removeDiv(id){
      $(`#job${id}`).remove()
    }
</script>
@endsection
