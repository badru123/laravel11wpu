@extends('layouts.app')
@section('content_body')
<div class="row">
    <div class="col-12">
<form action="/posts">
    @if(request('category'))
    <input type="hidden" name="category" value="{{ request('category')}}">
    @endif
    @if(request('author'))
    <input type="hidden" name="author" value="{{ request('author') }}">
    @endif
    <div class="input-group">
        <input class="form-control form-control-border" type='text' name='search' value='' placeholder="Search Post">
        <div class="input-group-append">
            <button type='submit' name='submit' value='submit' class="btn btn-default"> <i class="fas fa-search"></i>Search</button>
        </div>
    </div>
</form>
</div>
</div>
<br/>
<div class="card">
<div class="card-header">
   <h2>{{ $title }}</h2>
</div>
<div class="card-body">
{{ $posts->links() }}
@forelse($posts as $p)

<h5>{{ $p->title }}</h5>
<span class="text-default">By <a href="/posts?author={{$p->author->username}}">{{$p->author->name}}</a> On <a href="/posts?category={{$p->category->slug}}">{{$p->category->name}}</a> Shared publicly - {{ $p->created_at->diffForHumans() }}</span>


<article>
    {{ Str::limit($p->body,200) }}<a href="{{ route('posts.show', $p->slug) }}">Read More &raquo</a>
</article>
<p>
<a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a>
<a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>
<span class="float-right">
<a href="#" class="link-black text-sm">
<i class="far fa-comments mr-1"></i> Comments (5)
</a>
</span>
</p>
<input class="form-control form-control-sm" type="text" placeholder="Type a comment">
@empty
<p>Nothing Find <a href="/posts"> Back To All Post&laquo</a></p>
@endforelse
</div>
</div>
{{ $posts->links() }}
@stop