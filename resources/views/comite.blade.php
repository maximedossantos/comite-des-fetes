@extends('layouts.app')

@section('body')

    <div class="page page__accueil">
        <section>
            <div class="page__fond">
                <img class="page__fond--image" src="images/fond.jpg">
            </div>
        </section>

        <section class="page__entete">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page__accueil__entete">
                            <img class="page__accueil__entete--icone hidden-xs" src="images/icone.png">
                            <h1 class="hidden-xs">
                                <p>Comité</p>
                                <p class="typo__texte__indent--60">Des</p>
                                <p class="typo__texte__indent--120">Fêtes</p>
                                <span>La Verrie</span>
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <h1>Accueil</h1>

@endsection
