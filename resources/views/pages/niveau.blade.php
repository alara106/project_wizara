<x-app>

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h1 class="card-title">Ajouter un niveau</h1>
                    <form action="{{ route('niveau.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="nom_niveau">Nom du niveau :</label>
                            <input type="text" class="form-control form-control-sm" name="nom_niveau">
                        </div>
                        <button type="submit" class="btn btn-primary">Ajouter</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Nom du Niveau</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($niveaux as $niveau)
                            <tr>
                                <td>{{ $niveau->nom_niveau }}</td>
                                <!-- Actions here -->
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

</x-app>
