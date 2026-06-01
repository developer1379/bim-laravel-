@extends('layouts.site', [
    'headPartial' => 'includes.head_links',
    'headerPartial' => 'includes.inner_mba',
    'footerPartial' => 'includes.footer',
    'scriptsPartial' => 'includes.body_links',
])

@section('content')
<div class="container">
        <div class="row">
            <h3 class="text-center my-3 text-danger" style="text-transform: uppercase;">Department of Business Administration-PG</h3>
            <div class="card shadow py-3 px-3 my-3">
                <h5 class="text-danger" style="text-transform: uppercase;">Our Vision:</h5>
                <p class="px-4 py-2">To surpass in the study of business and its allied subjects and to grow into a noticeable position in the field of management studies with a focus on developing and creating future business leader, socially responsible professionals and transformational leadership to create progressive society and to fit into current corporate world.
                </p>
            </div>
            <div class="card shadow py-3 px-3 my-5">
                <h5 class="text-danger" style="text-transform: uppercase;">Our Mission:-</h5>
                <div class="px-4 py-2">
                    <p><b>M1.</b> To stimulates innovative learning processes for disseminating knowledge by utilizing state-of-the-art facilities.
</p>
                    <p><b>M2.</b> To imparts highly developed managerial skills and concepts by adopting application-based pedagogy.
</p>
                    
                    <p><b>M3.</b> To inculcates a sense of human values and concern for the environment to the students which helps them to become socially responsible individuals
</p>
                </div>
            </div>
        </div>
    </div>
@endsection
