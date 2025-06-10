@extends('back.layout.pages-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Page Title Here')
    
@section('content')

<div class="page-header">
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="title">
                <h4>Profile</h4>
            </div>
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ route('admin.dashboard')}}">Home</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Profile
                    </li>
                </ol>
            </nav>
        </div>
    </div>
</div>

@livewire('admin.profile')

@endsection
@push('scripts')
    <script>
        const cropper = new Kropify('input[type="file"][id="profilePictureFile"]', {
            aspectRatio: 1,
            viewMode: 1,
            preview: 'image#profilePicturePreview  ',
            processURL: '{{ route("admin.update_profile_picture") }}', // or processURL:'/crop'
            maxSize: 2 * 1024 * 1024, // 2MB
            allowedExtensions: ['jpg', 'jpeg', 'png'],
            showLoader: true,
            animationClass: 'pulse',
                // fileName: 'avatar', // leave this commented if you want it to default to the input name
            cancelButtonText:'Cancel',
            resetButtonText: 'Reset',
            cropButtonText: 'Crop & Upload',
            maxWoH:255,
            onError: function (msg) {
                alert(msg);
                // toastr.error(msg);
            },
            onDone: function(response){
                Livewire.dispatch('updateTopUserInfo',[]);
                Livewire.dispatch('updateProfile',[]);
                if (response.status == 1){
                    $().notifa({
                        vers:2,
                        cssClass: 'success',
                        html: response.message,
                        delay: 2500
                    });
                } else {
                    $().notifa({
                        vers:2,
                        cssClass: 'error',
                        html: response.message,
                        delay: 2500
                    });
                }
            }
        });
    </script>
@endpush
