<section class="card" style="width: 16rem; padding: 0;">
    <img src="{{ $image_url }}" class="card-img-top" style=" max-height: 200px; min-height: 200px;" alt="donation card image">
    <div class="card-body text-white" style="background-color: {{ $bg_color }};max-height: 180px; min-height: 180px;">
        <h3 class="card-title text-center ">{{ $title }}</h5>
            <p class="card-text text-center">
                {{ $description }}
            </p>
    </div>
</section>