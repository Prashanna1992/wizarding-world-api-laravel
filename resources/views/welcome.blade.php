@extends('layout.app')
@section('title', 'Know Your Wizarding World!')
@section('content')
    <div class="row">
        <div class="col-md-12 heading">
            Wizarding World Search Engine
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="flip-card-container">
                <div class="flip-card">
                    <div class="flip-card-front">
                        <img src="https://m.media-amazon.com/images/M/MV5BM2I5YzM4NjQtNjZkMi00ZGZjLThkMjktYjVmNDIzODYwNzRhXkEyXkFqcGdeQXVyNDUzOTQ5MjY@._V1_.jpg" alt="Dimebag Darrell">
                    </div>
                    <div class="flip-card-back">
                        "Getch'a Pull!"
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@push('after-scripts')
@endpush
