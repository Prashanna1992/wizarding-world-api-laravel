@extends('layout.app')
@section('title', 'Know Your Wizarding World!')
@section('content')
    <div class="row" style="padding: 0; margin:0;">
        <div class="col-md-12 heading" style="color: #fff;">
            Wizarding World Search Engine
        </div>
    </div>

    @livewire('search-wizards', ['categories' => $categories])
@endsection


@push('after-scripts')
@endpush
