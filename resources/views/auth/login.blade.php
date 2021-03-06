@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            @component('components.cards.layout')

                @component('components.form.layout',['action'=>route('login'),'submit'=>false])

                    @include('components.form.text',[
                        'label'=>__('form.mobile'),
                        'name'=>'mobile',
                    ])

                    @include('components.form.text',[
                        'label'=>__('Password'),
                        'name'=>'password',
                        'type'=>'password'
                    ])

                    <div class="form-group row">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember"
                                       id="remember" checked>
                                <label class="form-check-label" for="remember">
                                    {{ __('form.remember_me') }}
                                </label>
                            </div>
                        </div>
                    </div>


                    @component('components.form.submit',['text'=>__('Login')])
                        @slot('extra')
                            <a class="btn btn-link" href="{{ route('password.mobile_reset') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endslot
                    @endcomponent

                @endcomponent

            @endcomponent
        </div>
    </div>

@endsection
