@extends('layouts.app')

@section('content')
    <div class="px-4 sm:px-8 lg:px-16 xl:px-40 py-2">
        <div class="article mt-4">
            <h3 class="title text-3xl">
                {{ $article->judul }}
            </h3>
            <div class="meta">
                Published at: {{ $article->tanggal_dibuat->format('d M Y h:i') }}
            </div>
            <div class="content">
                {{ $article->isi }}
            </div>
        </div>
    </div>
@endsection
