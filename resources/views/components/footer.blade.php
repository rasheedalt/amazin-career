<!-- <footer class="bg-light text-center">
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
        © Copyright {{ date('Y') }}
        <a class="text-dark" href="/">Amazin Careers</a>
    </div>
</footer> -->

<!-- Footer -->
<footer class="bg-dark text-center text-white" style="background-color: #072638 !important;">
  <!-- Grid container -->
  <div class="container p-4">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://www.facebook.com/amazincareers" role="button"
        ><i class="fa fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a class="btn btn-outline-light btn-floating m-1" href=" https://www.twitter.com/AmazinCareers" role="button"
        ><i class="fa fa-twitter"></i
      ></a>

      <!-- Google -->
      <a class="btn btn-outline-light btn-floating m-1" href="mailto:amazincareers1@gmail.com" role="button"
        ><i class="fa fa-google"></i
      ></a>

      <!-- Instagram -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://www.instagram.com/amazincareers" role="button"
        ><i class="fa fa-instagram"></i
      ></a>

      <!-- Linkedin -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://www.linkedin.com/company/amazin-career" role="button"
        ><i class="fa fa-linkedin"></i
      ></a>

    </section>
    <!-- Section: Social media -->

    <!-- Section: Form -->
    <section class="">
        <!--Grid row-->
        <div class="row d-flex justify-content-center">
          <!--Grid column-->
          <div class="col-auto">
            <p class="pt-2">
              <strong>Subscribe for our job alerts</strong>
            </p>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-5 col-12">
            <!-- Email input -->
            <div class="form-outline form-white mb-4">
              <form action="{{ route('email.subscribe') }}" method="POST">
                @csrf
                <input type="email" name="email" placeholder="Email Address" class="form-control" />
                <label class="form-label" for="form5Example2"></label>
            </div>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-auto">
            <!-- Submit button -->
            <button type="submit" class="btn btn-outline-light mb-4">
              Subscribe
            </button>
          </form>

          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </form>
    </section>
    <!-- Section: Form -->

    <!-- Section: Text -->
    <section class="mb-4">
      <p>
        Amazin Careers focuses on helping people get their dream jobs and scholarship. We also provide other services including CV review, Linked optimization and business plan writing.
      </p>
    </section>
    <!-- Section: Text -->

    <!-- Section: Links -->
    <section class="">
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 col-6">
          <h5 class="text-uppercase">Links</h5>

          <ul class="list-unstyled mb-0" style="color: #02977 !important;">
            <li>
              <a href="{{ route('disclaimer.page') }}" class="text-white">Disclamier</a>
            </li>
            <li>
              <a href="{{ route('policy.page') }}" class="text-white">Privacy Policy</a>
            </li>
            <li>
              <a href="{{ route('terms.page') }}" class="text-white">Terms of Services</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 col-6 mb-4">
          <h5 class="text-uppercase">Links</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="/" class="text-white">Home</a>
            </li>
            <li>
              <a href="{{ route('about.page') }}" class="text-white">About</a>
            </li>
            <li>
              <a href="{{ route('contact.page') }}" class="text-white">Contact</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 col-6 mb-4 mb-md-0 ">
          <h5 class="text-uppercase">Links</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="{{ route('posts') }}" class="text-white">Blog</a>
            </li>
            <li>
              <a href="{{ route('scholarships.list') }}" class="text-white">Scholarships</a>
            </li>
            <li>
              <a href="{{ route('services.page') }}" class="text-white">Services</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 col-6 mb-4">
          <h5 class="text-uppercase">Services</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="{{ route('service.business_plan')}}" class="text-white" >Business Plan</a>
            </li>
            <li>
              <a href="{{ route('service.company_reg')}}" class="text-white" >Company Registration</a>
            </li>
            <li>
              <a href="{{ route('service.cover_letter')}}" class="text-white" >Cover Letter</a>
            </li>
            <li>
              <a href="{{ route('service.cv_review')}}" class="text-white" >CV Rewrite</a>
            </li>
            <li>
              <a href="{{ route('service.linkin_opt')}}" class="text-white" >LinkedIn Optimization</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->
    </section>
    <!-- Section: Links -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © {{ date('Y') }} Copyright <a class="text-white" href="/">Amazin Careers</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
