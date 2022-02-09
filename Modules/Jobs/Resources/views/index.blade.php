@extends('layouts.app')

@section('content')
    <!-- Replace with your content -->
    <div>
        <livewire:jobs::jobs.jobs-component job="{{ $job }}"></livewire:jobs::jobs.jobs-component>
    </div>

    <!-- /End replace -->
@endsection
