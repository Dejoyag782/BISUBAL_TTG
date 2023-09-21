@extends('layouts.app')

@section('title')
Dashboard
@endsection
    
@include('dashboard.modals')

@section('content')
    <section>
        <div class="container subsection">
            <!--Main View Container-->
            <div class="row">
                <div class="col-md-6 left-col" id="left-container">
                    <!--Left Nav Container-->
                    @include('dashboard.left-nav') 
                </div>
                <div class="col-md-6 main-container" id="main-container">
                    <!--Dash View Container-->
                    @include('dash.index')
                    <!--Room View Container-->
                    @include('rooms.index')
                    <!--Courses View Container-->
                    @include('courses.index')
                    <!--Professors View Container-->
                    @include('professors.index')
                    <!--Classes View Container-->
                    @include('classes.index')
                    <!--Periods View Container-->
                    @include('periods.index')
                    <!--End of Periods Container-->
                </div>
            </div>
        </div>
    </section>
@endsection
