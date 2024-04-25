<x-app>
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h1 class="display-4">Ajouter une entrée</h1>

                        <form action="{{ route('programme.store') }}" method="POST" class="p-4">
                            @csrf
                            <div class="mb-3">
                                <label for="programme_name" class="form-label">Nom du programme :</label>
                                <input type="text" class="form-control form-control-sm" id="test" name="nom_programme">
                            </div>

                            <div class="mb-3">
                                <label for="Secteur" class="form-label">Secteur :</label>
                                <select class="form-control form-control-sm" id="secteur" name="secteur" onchange="document.getElementById('secid').value = this.options[this.selectedIndex].getAttribute('id_sec');">
                                    @foreach($secteurs as $sect)
                                        <option id_sec="{{ $sect->id_secteur }}" value="{{ $sect->id }}">{{ $sect->secteur_name }}</option>       
                                    @endforeach
                                </select>
                                <input name="id_secteur" type="text" id="secid" value="sect" hidden>
                            </div>
                            <div class="mb-3">
                                <label for="niveau" class="form-label">Niveau :</label>
                                <select class="form-control form-control-sm" id="niveau" name="niveau" onchange="document.getElementById('nivid').value = this.options[this.selectedIndex].getAttribute('id_niv');">
                                    @foreach($niveaux as $niveau)
                                        <option id_niv="{{ $niveau->id_niveau }}" value="{{ $niveau->id }}">{{ $niveau->nom_niveau }}</option> 
                                    @endforeach
                                </select>
                                <input name="nivid" type="hidden" id="nivid" value="sect">
                            </div>

                            <div class="mb-3">
                                <label for="duree" class="form-label">Durée :</label>
                                <input type="text" class="form-control" name="duree">
                            </div>

                            <div class="mb-3">
                                <label for="Annee_Dev_Act" class="form-label">Année Dev Act :</label>
                                <input type="text" class="form-control" name="Annee_Dev_Act">
                            </div>

                            <div class="mb-3">
                                <label for="cadre" class="form-label">Cadre d'élaboration :</label>
                                <select class="form-control form-control-sm" id="cadre" name="cadre" onchange="document.getElementById('cad').value = this.options[this.selectedIndex].getAttribute('id_cadr');">
                                    @foreach($cadre as $cad)
                                        <option id_cadr="{{ $cad->id_cadre }}" value="{{ $cad->id }}">{{ $cad->nom_cadre_delaboration }}</option> 
                                    @endforeach
                                </select>
                                <input name="cadid" type="hidden" id="cad" value="sect">
                            </div>

                            <div class="mb-3">
                                <label for="operateur" class="form-label">Opérateur :</label>
                                <select class="form-control form-control-sm" id="op" name="opera" onchange="document.getElementById('opera').value = this.options[this.selectedIndex].getAttribute('id_operat');">
                                    @foreach($operateur as $op)
                                        <option id_operat="{{ $op->id_of }}" value="{{ $op->id }}">{{ $op->nom_organisation }}</option> 
                                    @endforeach
                                </select>
                                <input name="operaid" type="hidden" id="opera" value="sect">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Disponibilité :</label><br>
                                <input type="radio" name="cod" value="oui">
                                <label for="cod" class="form-label">OUI</label>
                                <input type="radio" name="cod" value="non">
                                <label for="cod" class="form-label">NON</label>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">AST :</label><br>
                                <input type="radio" name="ast" value="oui">
                                <label for="ast" class="form-label">OUI</label>
                                <input type="radio" name="ast" value="non">
                                <label for="ast" class="form-label">NON</label>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">PJF :</label><br>
                                <input type="radio" name="pjf" value="oui">
                                <label for="pjf" class="form-label">OUI</label>
                                <input type="radio" name="pjf" value="non">
                                <label for="pjf" class="form-label">NON</label>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">PF :</label><br>
                                <input type="radio" name="pf" value="oui">
                                <label for="pf" class="form-label">OUI</label>
                                <input type="radio" name="pf" value="non">
                                <label for="pf" class="form-label">NON</label>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">RE :</label><br>
                                <input type="radio" name="re" value="oui">
                                <label for="re" class="form-label">OUI</label>
                                <input type="radio" name="re" value="non">
                                <label for="re" class="form-label">NON</label>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">GOPM:</label><br>
                                <input type="radio" name="gopm" value="oui">
                                <label for="gopm" class="form-label">OUI</label>
                                <input type="radio" name="gopm" value="non">
                                <label for="gopm" class="form-label">NON</label>
                            </div>

                            <div class="mb-3">
                                <label for="observations" class="form-label">Observations :</label>
                                <textarea class="form-control" id="observations" name="observations"></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Ajouter</button>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app>
