@extends('layouts.app')

@section('body')

    <div class="page page__contenu">
        <section>
            <div class="page__contenu__fond">
                <img class="page__fond--image page__contenu__fond__image" src="images/fond.jpg">
            </div>
        </section>

        <section class="page__entete">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page__contenu__entete">
                            <img class="page__contenu__entete__icone hidden-xs" src="images/icone.png">
                            <h1 class="hidden-xs">Le comité</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <h2>Histoire</h2>

        <section class="comite">
            <div class="container">
                <div class="comite__cadre">
                    <img src="images/equipe.jpg">
                </div>
            </div>
        </section>
    </div>

@endsection
