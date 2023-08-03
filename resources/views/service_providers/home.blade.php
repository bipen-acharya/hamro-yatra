@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard Service Provider</h1>
@stop

@section('content')
    {{-- <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-gradient-primary">
                <div class="inner">
                    <h3>{{ $categories }}</h3>
                    <p>Categories</p>
                </div>
                <div class="icon">
                    <i class="fas fa-list"></i>
                </div>
                <a href="{{ route('categories.index') }}" class="small-box-footer">More Info <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        
    </div> --}}
@stop

@section('css')
    <style>
        /* Customize sidebar menu */
        .sidebar {
            background-color: #1d3557;
            color: #fff;
        }

        .sidebar .nav-sidebar .nav-item>.nav-link {
            color: #fff;
        }

        .sidebar .nav-treeview .nav-link {
            color: #fff;
        }

        .sidebar .nav-header {
            color: #fff;
        }

        .sidebar .nav-item:hover>.nav-link {
            background-color: #e63946;
        }
    </style>
@stop

@section('js')

@stop
