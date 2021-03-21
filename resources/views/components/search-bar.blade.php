<section class="my-md-5 container">
        <form action="{{ route('job.search') }}" method="post">
            @csrf
            <div class="searchEng">
                <div class="row">
                    <div class="col-md-4">
                        <input class="form-control" name="job" placeholder="Prefered Jobs and Companies" type="text">
                    </div>
                    <div class="col-md-4">
                        <input class="form-control" name="state" placeholder="Prefered Location" type="text">
                    </div>
                    <div class="col-md-4 text-center">
                        <button type="submit">Search</button>
                    </div>
                </div>
                <!-- <div class="row mt-2">
                    <div class="col text-center">
                        <button type="submit">Search</button>
                    </div>
                </div> -->
            </div>

            <div class="searchEngMobile">
                <div class="row mt-4">
                    <div class="col-8">
                        <input class="form-control" placeholder="Search for job vancancies" type="text" name="mobile_search"/>
                    </div>
                    <div class="col-2">
                        <button type="submit" >Search</button>
                    </div>
                </div>
            </div>
        </form>
    </section>