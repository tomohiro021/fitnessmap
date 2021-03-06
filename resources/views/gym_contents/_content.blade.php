<div class="container">
    <div class="row">
        <div class="col-md-4  img-hidden">
            <a href="/images/stretching.jpg" data-lightbox="group"><img src="/images/stretching.jpg"  class="img-thumbnail float-right" width="400" height="400" alt=""></a>
        </div>
        <div class="col-md-8">
            <h2>{{ $gym_content->name }}</h2>
            <h6 class="font-weight-bold text-secondary">住所</h6>
            <p>
                〒{{ $gym_content->zip_code }}<br>
                {{ $gym_content->address->description }}
                {{ $gym_content->address1 }}
                {{ $gym_content->address2 }}
            </p>
            <h6 class="font-weight-bold text-secondary">キーワード</h6>
            <p>
                {{ implode(', ', $gym_content->keywords()->get()->pluck('name')->toArray()) }}
            </p>
        </div>
    </div>
    <h6 class="font-weight-bold text-secondary">説明文</h6>
    <div class="row">
        <div class="col-md-12">
            <p>
                {{ $gym_content->summary }}
            </p>
        </div>
    </div>
    <h6 class="font-weight-bold text-secondary">詳細説明文</h6>
    <div class="row">
        <div class="col-md-12">
            <p>
                {{ $gym_content->detail }}
            </p>
        </div>
    </div>
</div>
