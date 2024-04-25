<x-app>

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h1 class="card-title">Ajouter un cadre d'élaboration</h1>
                    <form action="{{ route('cadre.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="nom_cadre_delaboration">Nom du cadre d'élaboration :</label>
                            <input type="text" class="form-control form-control-sm" id="nom_cadre_delaboration" name="nom_cadre_delaboration">
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
                                <th>Nom du Cadre d'élaboration</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($cadres as $cadre)
                            <tr>
                                <td>{{ $cadre->nom_cadre_delaboration }}</td>
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
