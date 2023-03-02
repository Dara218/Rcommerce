<x-layout>
    <div class="d-flex align-items-center justify-content-center min-vh-100 bg-light">
        <form action="{{ route('user.login') }}" method="POST" class="border px-3 py-3 rounded w-100 my-5 bg-white" style="max-width: 600px">
            @csrf

            <div class="mb-3 d-flex flex-column gap-3">

                <h2>Login</h2>

                @if (session()->has('success'))
                    <div class="alert alert-primary alert-dismissible fade show" role="alert">
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      <p class="text-success">{{ session('success') }}</p>
                    </div>

                    <script>
                      var alertList = document.querySelectorAll('.alert');
                      alertList.forEach(function (alert) {
                        new bootstrap.Alert(alert)
                      })
                    </script>
                @endif

                @if (session()->has('error'))
                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    <p class="text-danger">{{ session('error') }}</p>
                  </div>

                  <script>
                    var alertList = document.querySelectorAll('.alert');
                    alertList.forEach(function (alert) {
                      new bootstrap.Alert(alert)
                    })
                  </script>
                @endif

                <div class="form-container">
                    <label for="" class="form-label">Email / Username</label>

                    <input type="email" class="form-control" name="email" placeholder="Enter your email address or username">
                </div>

                @error('email')
                    <p class="text-danger fw-bold">{{ $message }}</p>
                @enderror

                <div class="form-container">
                    <label for="" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Enter your password">
                </div>

                @error('password')
                    <p class="text-danger fw-bold">{{ $message }}</p>
                @enderror

                <button type="submit" class="btn btn-dark">Login</button>
                <p>Don't have an account? <a href="{{ route('user.create') }}">Click here</a> to register.</p>
            </div>
        </form>
    </div>
</x-layout>
