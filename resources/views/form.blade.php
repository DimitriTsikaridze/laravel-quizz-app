@extends('layouts.app')

@section('title', isset($quiz) ? 'Edit Quiz' : 'Create Quiz')

@section('content')
  <h1>{{ isset($quiz) ? 'Edit Quiz' : 'Create Quiz' }}</h1>

  <form action="{{ isset($quiz) ? route('quiz.storeOrUpdate', $quiz->id) : route('quiz.storeOrUpdate') }}" method="post">
    @csrf
    @if(isset($quiz))
      @method('PUT')
    @endif

    <label for="name">Name</label>
    <input type="text" name="name" value="{{ old('name', isset($quiz) ? $quiz->name : '') }}" required>

    <label for="description">Description</label>
    <textarea name="description" required>{{ old('description', isset($quiz) ? $quiz->description : '') }}</textarea>

    <label for="status">Status</label>
    <select name="status" required>
      <option value="answered" {{ old('status', isset($quiz) ? $quiz->status : '') === 'answered' ? 'selected' : '' }}>Answered</option>
      <option value="unanswered" {{ old('status', isset($quiz) ? $quiz->status : '') === 'unanswered' ? 'selected' : '' }}>Unanswered</option>
    </select>

    <button type="submit">{{ isset($quiz) ? 'Update Quiz' : 'Create Quiz' }}</button>
  </form>
@endsection
