@extends('back.layout.pages-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Page Title Here')
    
@section('content')

@livewire('admin.categories')

@endsection
@push('scripts')
    <script>
        window.addEventListener('showParentCategoryModalForm', function(){
            $('#pcategory_modal').modal('show');

        });
        window.addEventListener('hideParentCategoryModalForm', function(){
            $('#pcategory_modal').modal('hide');
        });

        window.addEventListener('showCategoryModalForm', function(){
            $('#category_modal').modal('show');

        });
        window.addEventListener('hideCategoryModalForm', function(){
            $('#category_modal').modal('hide');
        });

        $('table tbody#sortable_parent_categories').sortable({
            cursor: "move",
            update: function(event, ui){
                $(this).children().each(function(index){
                    if( $(this).attr('data-ordering') != (index + 1)){
                        $(this).attr('data-ordering', (index+1)).addClass('updated');
                    }
                });
                var positions = [];
                $('.updated').each(function(){
                    positions.push([$(this).attr('data-index'), $(this).attr('data-ordering')]);
                    $(this).removeClass('updated');
                });

                // alert(positions);

                Livewire.dispatch('updateParentCategoryOrdering', [positions]);
            }
        });
        $('table tbody#sortable_categories').sortable({
            cursor: "move",
            update: function(event, ui){
                $(this).children().each(function(index){
                    if( $(this).attr('data-ordering') != (index + 1)){
                        $(this).attr('data-ordering', (index+1)).addClass('updated');
                    }
                });
                var positions = [];
                $('.updated').each(function(){
                    positions.push([$(this).attr('data-index'), $(this).attr('data-ordering')]);
                    $(this).removeClass('updated');
                });

                // alert(positions);

                Livewire.dispatch('updateCategoryOrdering', [positions]);
            }
        });
        

        window.addEventListener('deleteParentCategory', function(event){
            var id = event.detail[0].id;
            $().konfirma({
                title: 'Are you sure?',
                html:'You want to delete this parent category',
                cancelButtonText:'Cancel',
                confirmButtonText:'Yes, Delete',
                cancelButotnColor: '#d33',
                confirmButtoncolor: '#3085d6',
                width: 320,
                allowOutsideClick:false,
                fontSize: '0.87rem',
                done: function(){
                    Livewire.dispatch('deleteParentCategoryAction',[id]);
                }
            })
        });
        window.addEventListener('deleteCategory', function(event){
            var id = event.detail[0].id;
            $().konfirma({
                title: 'Are you sure?',
                html:'You want to delete this category',
                cancelButtonText:'Cancel',
                confirmButtonText:'Yes, Delete',
                cancelButotnColor: '#d33',
                confirmButtoncolor: '#3085d6',
                width: 320,
                allowOutsideClick:false,
                fontSize: '0.87rem',
                done: function(){
                    Livewire.dispatch('deleteCategoryAction',[id]);
                }
            })
        });
    </script>
@endpush