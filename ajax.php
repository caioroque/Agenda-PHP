<script type="text/javascript">

    $(window).scroll(function() {

        if($(window).scrollTop() + $(window).height() >= $(document).height()) {

            var last_id = $(".post-id:last").attr("id");

            loadMoreData(last_id);

        }

    });


    function loadMoreData(last_id){

      $.ajax(

            {

                url: 'load_more_data.php?last_id=' + last_id,

                type: "get",

                beforeSend: function()

                {

                    $('.ajax-load').show();

                }

            })

            .done(function(data)

            {

                $('.ajax-load').hide();

                $("#post-data").append(data);

            })

            .fail(function(jqXHR, ajaxOptions, thrownError)

            {

                  alert('O servidor não está respondendo...');

            });

    }

</script>