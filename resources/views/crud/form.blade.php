@extends('layouts.admin')

@section('title', $title ?? 'Form')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ $title ?? 'Form' }}</h3>
                </div>
                <div class="card-body">
                    <form action="{{ $route }}" method="POST">
                        @csrf
                        @if(isset($method) && $method != 'POST')
                            @method($method)
                        @endif

                        @foreach($fields as $field)
                            <div class="form-group">
                                <label for="{{ $field['name'] }}">{{ $field['label'] }}</label>
                                <input type="{{ $field['type'] ?? 'text' }}" 
                                       class="form-control @error($field['name']) is-invalid @enderror"
                                       name="{{ $field['name'] }}"
                                       value="{{ old($field['name'], $model->{$field['name']} ?? '') }}"
                                       {{ isset($field['required']) && $field['required'] === false ? '' : 'required' }}>
                                @error($field['name'])
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        @endforeach

                        @if(isset($extra))
                            {!! $extra !!}
                        @endif

                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary">{{ $submitText ?? 'Save' }}</button>
                            <a href="{{ url()->previous() }}" class="btn btn-secondary">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
