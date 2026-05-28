@extends('layouts.site')
@php($headPartial = 'includes.head_links1')
@php($headerPartial = 'includes.inner_bgi')
@php($footerPartial = 'includes.footer1')
@php($scriptsPartial = 'includes.body_links1')

@section('content')
<div class="container py-5">
    <div class="alert alert-warning mb-0">
        The original BGI page content needs to be restored. The layout shell is ready, but the body text was not recoverable from the workspace.
    </div>
</div>
@endsection
