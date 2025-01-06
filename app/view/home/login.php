<section class="vh-100 overflow-auto">
  <div class="container h-100 px-3">
    <div class="row d-flex align-items-center justify-content-between h-100">
      
      <!-- Form login -->
      <div class="col-12 col-md-6 col-xl-5 p-4">
        <form>
          <h1 class="mb-4">Login</h1>

          <!-- Email input -->
          <div data-mdb-input-init class="form-outline mb-4">
            <label class="form-label" for="form1Example13">Email address</label>
            <input type="email" id="form1Example13" class="form-control form-control-lg" placeholder="Masukkan email anda" />
          </div>

          <!-- Password input -->
          <div data-mdb-input-init class="form-outline mb-4">
            <label class="form-label" for="form1Example23">Password</label>
            <input type="password" id="form1Example23" class="form-control form-control-lg" placeholder="Masukkan password anda" />
          </div>

          <div class="d-flex justify-content-between align-items-center mb-4">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
              <label class="form-check-label" for="form1Example3"> Remember me </label>
            </div>
            <a href="#!">Forgot password?</a>
          </div>

          <button type="submit" class="btn btn-primary btn-lg btn-block mb-5">Sign in</button>
        </form>
      </div>

      <!-- Gambar: disembunyikan di mode HP -->
      <div class="col-12 col-md-6 d-none d-md-block px-md-3">
        <img src="<?=BASEURL; ?>/img/Screen.jpg"
          class="img-fluid h-100 w-100 object-fit-cover rounded-3 shadow p-2" 
          alt="Phone image" style="max-height: 90vh;">
      </div>
    </div>
  </div>
</section>
