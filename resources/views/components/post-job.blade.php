<form method="POST" action="{{ route('job.post') }}">
    @csrf
    <div >
        <input class="form-control" name="company_name" placeholder="Company" type="text"> <br>
        <input class="form-control" name="address" placeholder="Adress/Location" type="text"><br>
        <input class="form-control" name="title" placeholder="Job Positions" type="text"><br>
        <input class="form-control" name="salary" placeholder="Salary Range" type="text"><br>
        <textarea class="form-control" name="description" placeholder="Requirements" id="" cols="30" rows="10"></textarea><br>
        <input class="form-control" name="method_of_application" placeholder="Method of Application" type="text"><br>
        <input class="form-control" name="deadline" placeholder="Deadlines" type="text"><br>
        <input class="form-control" name="link" placeholder="Application Link" type="text"><br>
        <button class="btn btn-block text-white" style="background-color:#072638; text-decoration:none">Submit</button>
    </div>
</form>