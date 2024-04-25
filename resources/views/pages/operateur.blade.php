<x-app>

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h1 class="card-title">Ajouter une organisation</h1>
                    <form action="{{ route('operateur.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="nom_organisation">Nom de l'organisation :</label>
                            <input type="text" class="form-control form-control-sm" id="nom_organisation" name="nom_organisation">
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
                                <th>Nom de l'organisation</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($organisations as $organisation)
                            <tr>
                                <td>{{ $organisation->nom_organisation }}</td>
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
