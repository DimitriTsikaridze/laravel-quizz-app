@extends('layouts.app')

@section('title', 'Quiz')

@section('content')
  <h1>Country capitals Quiz</h1>
  @foreach ($quiz as $question => $data)
    <div @class(['answered' => $data['status'] === 'answered', 'question'])>
      <p>{{ $question }}</p>
      <input type="text">
    </div>
  @endforeach


  <form>
    @csrf
    <label for="email">Subscribe</label>
    <input type="email" id="email">
    <button>Subscribe</button>
  </form>
@endsection


@push('styles')
  <link href="{{ asset('css/quiz.css') }}" rel="stylesheet">
@endpush
