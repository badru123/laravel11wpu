@extends('layouts.app')
@section('content_body')
<div class="card">
<div class="card-header">
<h3 class="card-title">{{ $judul }}</h3>
</div>
<div class="card-body">
<div class="row">
<div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">
<div class="row">
<div class="col-12 col-sm-4">
<div class="info-box bg-light">
<div class="info-box-content">
<span class="info-box-text text-center text-muted">Estimated budget</span>
<span class="info-box-number text-center text-muted mb-0">2300</span>
</div>
</div>
</div>
<div class="col-12 col-sm-4">
<div class="info-box bg-light">
<div class="info-box-content">
<span class="info-box-text text-center text-muted">Total amount spent</span>
<span class="info-box-number text-center text-muted mb-0">2000</span>
</div>
</div>
</div>
<div class="col-12 col-sm-4">
<div class="info-box bg-light">
<div class="info-box-content">
<span class="info-box-text text-center text-muted">Estimated project duration</span>
<span class="info-box-number text-center text-muted mb-0">20</span>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-12">
<h4>Recent Activity</h4>
<div class="post">
<div class="user-block">
<img class="img-circle img-bordered-sm" alt="user image" data-cfsrc="../../dist/img/user1-128x128.jpg" style="display:none;visibility:hidden;"><noscript><img class="img-circle img-bordered-sm" src="../../dist/img/user1-128x128.jpg" alt="user image"></noscript>
<span class="username">
<a href="#">Jonathan Burke Jr.</a>
</span>
<span class="description">Shared publicly - 7:45 PM today</span>
</div>

<p>
Lorem ipsum represents a long-held tradition for designers,
typographers and the like. Some people hate it and argue for
its demise, but others ignore.
</p>
<p>
<a href="#" class="link-black text-sm"><i class="fas fa-link mr-1"></i> Demo File 1 v2</a>
</p>
</div>
<div class="post clearfix">
<div class="user-block">
<img class="img-circle img-bordered-sm" alt="User Image" data-cfsrc="../../dist/img/user7-128x128.jpg" style="display:none;visibility:hidden;"><noscript><img class="img-circle img-bordered-sm" src="../../dist/img/user7-128x128.jpg" alt="User Image"></noscript>
<span class="username">
<a href="#">Sarah Ross</a>
</span>
<span class="description">Sent you a message - 3 days ago</span>
</div>

<p>
Lorem ipsum represents a long-held tradition for designers,
typographers and the like. Some people hate it and argue for
its demise, but others ignore.
</p>
<p>
<a href="#" class="link-black text-sm"><i class="fas fa-link mr-1"></i> Demo File 2</a>
</p>
</div>
<div class="post">
<div class="user-block">
<img class="img-circle img-bordered-sm" alt="user image" data-cfsrc="../../dist/img/user1-128x128.jpg" style="display:none;visibility:hidden;"><noscript><img class="img-circle img-bordered-sm" src="../../dist/img/user1-128x128.jpg" alt="user image"></noscript>
<span class="username">
<a href="#">Jonathan Burke Jr.</a>
</span>
<span class="description">Shared publicly - 5 days ago</span>
</div>

<p>
Lorem ipsum represents a long-held tradition for designers,
typographers and the like. Some people hate it and argue for
its demise, but others ignore.
</p>
<p>
<a href="#" class="link-black text-sm"><i class="fas fa-link mr-1"></i> Demo File 1 v1</a>
</p>
</div>
</div>
</div>
</div>
<div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
<h3 class="text-primary"><i class="fas fa-paint-brush"></i> {{ $post->title }}</h3>
<p class="text-muted">{{ $post->body }}</p>
<br>
</div>
</div>
</div>

</div>
@stop