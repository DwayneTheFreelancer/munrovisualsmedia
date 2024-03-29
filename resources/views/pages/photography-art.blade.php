@extends('layouts.secondary')

@section('styles')
    <style>
    
    </style>
@endsection

@section('content')
    
    <div class="container photography">
        <div class="baguetteBoxOne gallery">
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <a href="img/Prom Pic 3.png">
                            <img src="img/Prom Pic 3.png" alt="2019 Prom" class="card-img-top"/>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <a href="img/MVM Logo.jpg">
                            <img src="img/MVM Logo.jpg" alt="Munro Viusals Media" class="card-img-top"/>
                        </a>
                    </div>
                </div>
                <div class="col-md-3"></div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        window.onload = function() {
            baguetteBox.run('.baguetteBoxOne', {
                captions: function(element) {
                    return element.getElementsByTagName('img')[0].alt;
                }
            });
        }
    </script>
@endsection