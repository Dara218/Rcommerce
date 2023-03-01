<x-layout>
    <div class="d-flex align-items-center justify-content-center min-vh-100 bg-light">

        <form action="{{ route('createUser') }}" method="POST" class="border px-3 py-3 rounded w-100 my-5 bg-white" style="max-width: 600px">
            @csrf

            <div class="mb-3 d-flex flex-column gap-3">

                <h2>Register</h2>

                <div class="form-container">
                    <label for="firstname" class="form-label">First Name</label>
                    <input type="text" class="form-control" name="firstname" placeholder="Enter your firstname">
                </div>

                @error('firstname')
                    <p class="text-danger font-bold">{{ 'Enter your first name.' }}</p>
                @enderror

                <div class="form-container">
                    <label for="lastname" class="form-label">Last Name</label>
                    <input type="text" class="form-control" name="lastname" placeholder="Enter your lastname">
                </div>

                <div class="form-container">
                    <label for="email" class="form-label">Email</label>

                    <input type="email" class="form-control" name="email" placeholder="Enter your email address">
                </div>

                <div class="form-container">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" name="username" placeholder="Enter your username">
                </div>

                <div class="form-container">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Enter your password">
                </div>

                <div class="form-container">
                    <label for="password_confirmation" class="form-label">Re-type password</label>
                    <input type="password" class="form-control" name="password_confirmation" placeholder="Re-enter your password">
                </div>

                {{-- <div class="form-container">
                    <label for="" class="form-label">Mobile Number</label>
                    <input type="number" class="form-control" name="mobile" placeholder="Enter your mobile number">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">City</label>
                    <select class="form-select form-select-lg" name="" id="">
                        <option selected disabled>Select one</option>
                        <option value="">New Delhi</option>
                        <option value="">Istanbul</option>
                        <option value="">Jakarta</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Barangay</label>
                    <select class="form-select form-select-lg" name="" id="">
                        <option selected disabled>Select one</option>
                        <option value="">New Delhi</option>
                        <option value="">Istanbul</option>
                        <option value="">Jakarta</option>
                    </select>
                </div> --}}

                <button type="submit" class="btn btn-dark" x-on:click="confirm('Do you really wish to register?')">Submit</button>
                <p>Already have an account? <a href="{{ route('gotoLogin') }}">Click here</a> to login.</p>
            </div>
        </form>

    </div>
</x-layout>
