{{-- <div>
<div class="pd-20 card-box mb-30">
    <div class="row mb-20">
        Filters here...
    </div>
    <div class="table-responsive">
        <table class="table table-stripped table-auto table-sm">
            <thead class="bg-secondary text-white">
                <th class="col">#ID</th>
                <th class="col">Image</th>
                <th class="col">Title</th>
                <th class="col">Author</th>
                <th class="col">Category</th>
                <th class="col">Visibility</th>
                <th class="col">Action</th>
            </thead>
            <tbody>
                @forelse ($posts as $item)
                <tr>
                    <td scope="row">{{ $item->id }}</td>
                    <td>
                        <a href="">
                            <img src="/images/posts/{{ $item->featured_image }}" width="100" alt="">
                        </a>
                    </td>
                    <td>{{ $item->title }}</td>
                    <td> - </td>
                    <td> - </td>
                    <td>
                        @if ( $item->visibility == 1)
                            <span class="badge badge-pill badge-success">
                                <i class="icon-copy ti-world"></i> Public
                            </span>
                        @else
                            <span class="badge badge-pill badge-warning">
                                <i class="icon-copy ti-lock"></i> Private
                            </span>
                        @endif
                    </td>
                    <td>
                        <div class="table-actions">
                            <a href="" data-color="#265ed7" style="color: rgb(38,94,215)">
                                <i class="icon-copy dw dw-edit2"></i>
                            </a>
                            <a href="" data-color="#e95959" style="color: rgb(233,89,89)">
                                <i class="icon-copy dw dw-delete-3"></i>
                            </a>
                        </div>
                    </td>
                </tr>

                @empty
                    <tr>
                        <td colspan="7">
                            <span class="text-danger">No posts(s)</span>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
</div> --}}

<!-- resources/views/livewire/post-table.blade.php -->

<div>
    <style>
        /* Restricting ID column width */
        th.col-id, td.scope-id {
            width: 50px;
            text-align: center;
        }
        /* Maximum column width for images */
        th.col-image, td.col-image {
            width: 120px;
            text-align: center;
        }
        /* Image styling to ensure they are not too large */
        .img-thumbnail {
            max-width: 100px;
            height: auto;
        }
    </style>

    <div class="table-responsive">
        <table class="table table-striped table-auto table-sm">
            <thead class="bg-secondary text-white">
                <tr>
                  <th class="col col-id">#ID</th>
                  <th class="col col-image">Image</th>
                  <th class="col">Title</th>
                  <th class="col">Author</th>
                  <th class="col">Category</th>
                  <th class="col">Visibility</th>
                  <th class="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($posts as $item)
                <tr>
                    <td class="scope-id">{{ $item->id }}</td>
                    <td class="col-image">
                        <a href="#">
                            <img src="/images/posts/{{ $item->featured_image }}" class="img-thumbnail" alt="Image for {{ $item->title }}">
                        </a>
                    </td>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->author->name }}</td>
                    <td>{{ $item->post_category->name}}</td>
                    <td>
                        @if ( $item->visibility == 1)
                            <span class="badge badge-pill badge-success">
                                <i class="icon-copy ti-world"></i> Public
                            </span>
                        @else
                            <span class="badge badge-pill badge-warning">
                                <i class="icon-copy ti-lock"></i> Private
                            </span>
                        @endif
                    </td>
                    <td>
                        <div class="table-actions">
                            <a href="#" data-color="#265ed7" style="color: rgb(38,94,215)">
                                <i class="icon-copy dw dw-edit2"></i>
                            </a>
                            <a href="#" data-color="#e95959" style="color: rgb(233,89,89)">
                                <i class="icon-copy dw dw-delete-3"></i>
                            </a>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7">
                        <span class="text-danger">No posts(s)</span>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="block mt-1">
        {{ $posts->links('livewire::simple-bootstrap')}}
    </div>

</div>