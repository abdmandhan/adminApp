<div class="card">
    <div class="card-header">
        <h3 class="card-title">{{ $title }}</h3>
        <div class="card-tools">
            @if ($buttonUrl)
            <a href="{{ route($buttonUrl) }}" class="btn btn-primary">{{ $buttonText }}</a>
            @endif
        </div>
    </div>
    <div class="card-body">
        {{ $slot }}
    </div>
</div>