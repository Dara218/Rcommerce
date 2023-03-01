<x-layout>
    <div class="d-flex align-items-center justify-content-center min-vh-100">

        <form action="" method="POST" class="border px-3 py-3 rounded w-100" style="max-width: 600px">
            @csrf
            <div class="mb-3">
                <h2>Register</h2>
              <label for="" class="form-label">Name</label>
              <input type="text"
                class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
              <small id="helpId" class="form-text text-muted">Help text</small>
            </div>
        </form>

    </div>
</x-layout>
