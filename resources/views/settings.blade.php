@extends('layouts.app')

@section('content')
<div class="container settings">
    <div class="row">
        <div class="col-3">
            <div>
                <button class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample1" role="button"
                    aria-expanded="false" aria-controls="multiCollapseExample1">Toggle first element</button>
                <button class="btn btn-primary" type="button" data-toggle="collapse"
                    data-target="#multiCollapseExample2" aria-expanded="false"
                    aria-controls="multiCollapseExample2">Toggle second element</button>
            </div>
        </div>
        <div class="col-9">
            <div class="collapse multi-collapse show" id="multiCollapseExample1">
                <div class="card card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                    Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                </div>
            </div>

            <div class="collapse multi-collapse" id="multiCollapseExample2">
                <div class="card card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                    Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
