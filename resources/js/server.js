$('.like').on('click', function(event) {
    event.preventDefault();
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    });
    var token = '{{ csrf_token() }}';
    var isLike = event.target.previousElementSibling == null;
    console.log(isLike);
    $.ajax({
        method: 'post',
        url: '{{ url("/liked") }}',
        data: {isLiked: isLike, post_id:5}

    });

});
