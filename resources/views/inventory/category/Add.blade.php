<x-app-layout>
    <div class="card">
        <div class="card-body">
            <h1>
                Add product
            </h1>
            <hr />

            <form method="post" action="/inventory/category/add-post">
                @csrf
                <div class="form-group>
        <label for=" name">Name</label>
                    <input type="text" name="name" id="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">code</label>
                    <input type="text" name="code" class="form-control" required>
                </div>

                <div class="form-group">
                    <button class="btn btn-success">
                        save
                    </button>
                </div>


</x-app-layout>