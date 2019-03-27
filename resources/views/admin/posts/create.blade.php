@extends('layouts.app')

@section('content')

    <div class="flex-container">
            {!! Form::open(array('route' => 'posts.store')) !!}
        <div class="columns">
            <div class="column is-three-quarters">
                <h1 class="title">New Post</h1>
                <hr>
                {{ Form::hidden('author_id', Auth::user()->id , null, array('class' => '')) }}
                <div class="field">
                    <span class="input input--chisato">
                        {{ Form::text('title', null, array('class' => 'input__field input__field--chisato input', 'required')) }}
                        <label class="input__label input__label--chisato" for="input-13">
                            <span class="input__label-content input__label-content--chisato" data-content="Title">Title</span>
                        </label>
                    </span>
                </div>
                <div class="field">
                    {{ Form::textarea('body', null, array('class' => 'wysiwyg', 'id' => 'wysiwyg')) }}
                    {{-- <textarea id="wysiwyg" class="wysiwyg"></textarea> --}}
                </div>
            </div>

            <div class="column card right-clmn">
                <div class="columns card-content btn-clmn">
                        <div class="column">
                                <div class="submit-btn">
                                        {{-- <button class="btn btn-1 btn-1c login btn-cprimary" type="submit">
                                                <span>
                                                    {{ __('Submit') }}
                                                </span>
                                            </button> --}}
                                        {{ Form::button('<span>Create</span>', array('class' => 'btn btn-1 btn-1c login btn-cprimary', 'type' => 'submit')) }}
                                </div>
                        </div>
                        <div class="column">
                                <div class="cancel-btn">
                                        {{-- <button class="btn btn-1 btn-1c login btn-cdanger">
                                                <span>
                                                    {{ __('Cancel') }}
                                                </span>
                                            </button> --}}
                                        {{-- {{ Form::button('<span>Cancel</span>', array('class' => 'btn btn-1 btn-1c login btn-cdanger')) }} --}}
                                        <a href="{{ route('posts.index')}}" class="btn btn-1 btn-1c login btn-cdanger"><span>Cancel</span></a>
                                </div>
                        </div>
                </div>
                
                    
                    
            </div>
        
    {!! Form::close() !!}
        </div>
                
        

    </div>

@endsection