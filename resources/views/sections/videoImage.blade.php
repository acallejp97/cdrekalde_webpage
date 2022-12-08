<div id="video-intro">
    <img src="{{ URL::asset('images/logos/logo.png') }}" class="logo">
    <video playsinline preload="auto" autoplay loop muted class="fillWidth fadeIn wow collapse in" data-wow-delay="0.5s"
        poster="{{ asset('images/logos/logo.png') }}" id="video-background"
        style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">
        <source src="{{ URL::asset('videos/intro-video.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>
</div>
