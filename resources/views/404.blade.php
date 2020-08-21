@extends('site.template')

@section('content')
     <!-- Start page content -->
     <section id="page-content" class="page-wrapper">
            <div class="zm-section bg-color page-notfound-wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
                            <div class="page-notfound-inner">
                                <h1>4 0 4</h1>
                                <h4>Oops! That page can’t be found</h4>
                                <p>Sorry, but the page you are looking for does not existing</p>
                            <a href="{{route('home')}}" class="submit-button">go to home Page</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End page content -->
@endsection