<div class="card">
    <h3 class="row">Register</h3>
        <div class="card-body">
            <form method="POST" action="{{ route('login.custom') }}">
            @csrf
            <div class="form">
                    <label>Name</label>
                    <input type="text" placeholder="Name" id="name" class="form-control" name="name" required>
                </div>
                <div class="form">
                    <label>Email</label>
                    <input type="text" placeholder="Email" id="email" class="form-control" name="email" required>
                </div>
                <div class="form">
                    <label>Password</label>
                    <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
                </div>
                <div class="form">
                    <button type="submit" class="btn btn-dark btn-block">Register</button>
                </div>
            </form>
        </div>
</div>
