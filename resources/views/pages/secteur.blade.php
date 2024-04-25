<x-app>
     <div class="rim">
                <div class="container mt-4">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h1 class="card-title">Ajouter un secteur</h1>
                                    <form action="{{ route('secteur.store') }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="nom_secteur">Nom du secteur :</label>
                                            <input type="text" class="form-control form-control-sm" name="secteur_name">
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
                                                <th>Nom du secteur</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($secteurs as $secteur)
                                            <tr>
                                                <td>{{ $secteur->secteur_name }}</td>
                                                
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </div>


</x-app>
