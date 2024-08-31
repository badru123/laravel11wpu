@extends('layouts.app')
@section('content_body')
<div class="card">
<div class="card-header">
   <h2>{{ $title }}</h2>
</div>
<div class="card-body">
    {{ var_dump($posts) }}
@foreach ($posts as $p)
<div class="post">
<div class="user-block">
<img class="img-circle img-bordered-sm" alt="user image" data-cfsrc="../../dist/img/user1-128x128.jpg" style="display:none;visibility:hidden;"><noscript><img class="img-circle img-bordered-sm" src="../../dist/img/user1-128x128.jpg" alt="user image"></noscript>
<span class="username">
<a href=""> nama </a>
<a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
</span>
<span class="description">Shared publicly - {{ $p->created_at->diffForHumans() }}</span>
</div>

<p>
    {{ Str::limit($p->body,200) }}<a href="">Read More &raquo</a>
</p>
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
</div>
@endforeach
</div>
</div>
@stop