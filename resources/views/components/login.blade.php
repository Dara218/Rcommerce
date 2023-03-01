<x-layout>
    <div class="d-flex align-items-center justify-content-center min-vh-100 bg-light">
        <form action="" method="POST" class="border px-3 py-3 rounded w-100 my-5 bg-white" style="max-width: 600px">
            @csrf

            <div class="mb-3 d-flex flex-column gap-3">

                <h2>Login</h2>

                <div class="form-container">
                    <label for="" class="form-label">Email / Username</label>

                    <input type="email" class="form-control" name="email" placeholder="Enter your email address or username">
                </div>

                <div class="form-container">
                    <label for="" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Enter your password">
                </div>

                <button type="submit" class="btn btn-dark">Login</button>
                <p>Don't have an account? <a href="{{ route('gotoRegister') }}">Click here</a> to register.</p>
            </div>
        </form>
    </div>
</x-layout>
