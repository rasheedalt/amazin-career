<section class="my-md-5 container">
        <form action="{{ route('job.search') }}" method="post">
            @csrf
            <div class="searchEng">
                <div class="row">
                    <div class="col">
                        <input class="form-control" name="job" placeholder="Prefered Jobs and Companies" type="text">
                    </div>
                    <div class="col">
                        <input class="form-control" name="state" placeholder="Prefered Location" type="text">
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col text-center">
                        <button type="submit">Search</button>
                    </div>
                </div>
            </div>

            <div class="searchEngMobile">
                <input style="width: 55vw;" placeholder="Search for job vancancies" type="text" name="mobile_search"/><br><br>
                <p class="text-center" >
                    <button type="submit" >Search</button>
                </p>
            </div>
        </form>
    </section>