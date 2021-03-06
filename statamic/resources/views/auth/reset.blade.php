@extends('outside')

@section('content')

    <h3 class="mt-0">{{ t('reset_password')}}</h3>
    <hr>
    <form method="POST" class="email-login">
        {!! csrf_field() !!}

        <div class="form-group">
            <label>{{ trans_choice('cp.emails', 1) }}</label>
            <input type="text" class="form-control" name="email" value="{{ old('email') }}" autofocus>
        </div>

        <div>
            <button type="submit" class="btn btn-primary btn-block">{{ trans('cp.send_email') }}</button>
            <a href="{{ route('login')}}" class="help-link">&larr; {{ t('go_back')}}</a>
        </div>
    </form>

@endsection
