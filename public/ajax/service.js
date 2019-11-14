
$(function () {



    function loadSelect(items,lang)
    {

        $('#result-category').empty()
            .append($('<select autocomplete="off" name="cat" class="form-control"/>'));


        $.each( items, function( key, value ) {


            $('#result-category').find('select').append('<option value="'+value.id+'">'+value.name+'</option>');

            listchild=value.childlist;

            $.each( listchild, function( index, item ) {

                $('#result-category').find('select').append('<option value="'+item.id+'">-'+item.name+'</option>');

            });


        });

    }



    $('#request-category').change(function () {



        switch($(this).val())
        {



            case '1':

                $.ajax({
                    type: "GET",
                    url: "/admin/cat/service/list/1",
                    dataType: 'json',
                    success: function (response) {

                        console.log(response);
                        loadSelect(response,"fa");
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        console.log(thrownError);
                    }
                });
                break;
            case '2':

                $.ajax({
                    type: "GET",
                    url: "/admin/cat/service/list/2",
                    dataType: 'json',
                    success: function (response) {
                        console.log(response);
                        loadSelect(response,"en");
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        console.log(thrownError);
                    }
                });
                break;

            default:
                $('#result-category')
                    .empty();
                break;




        }



    });









    function loadSelectCat(items,lang)
    {

        $('#result-category-url').empty()
            .append($('<select autocomplete="off" name="parentCat" class="form-control"/>'));

        if(lang==="fa")
        {
            $('#result-category-url').find('select').append('<option value="0"> بدون والد</option>');
        }
        else if(lang==="en")
        {
            $('#result-category-url').find('select').append('<option value="0"> no parent</option>');
        }

        $.each( items, function( key, value ) {


            $('#result-category-url').find('select').append('<option value="'+value.id+'">'+value.name+'</option>');

            listchild=value.childlist;

            $.each( listchild, function( index, item ) {

                $('#result-category-url').find('select').append('<option value="'+item.id+'">-'+item.name+'</option>');

            });


        });



    }


    $('#request-category-url').change(function () {


        switch($(this).val())
        {



            case '1':

                $.ajax({
                    type: "GET",
                    url: "/admin/cat/service/list/1",
                    dataType: 'json',
                    success: function (response) {

                        console.log(response);

                        loadSelectCat(response,"fa");
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        console.log(thrownError);
                    }
                });
                break;
            case '2':

                $.ajax({
                    type: "GET",
                    url: "/admin/cat/service/list/2",
                    dataType: 'json',
                    success: function (response) {

                        console.log(response);
                        loadSelectCat(response,"en");
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        console.log(thrownError);
                    }
                });
                break;

            default:
                $('#result-category-url')
                    .empty();
                break;




        }



    });


    AjaxActiveCat();


    function AjaxActiveCat() {

        var tmp = window.location.href.split("/"),
            id=tmp[tmp.length-2];
        $.ajax({
            type: "GET",
            url: "/admin/cat/active/list/service/"+id,
            dataType: 'json',
            success: function (response) {


                LoadActiveCat(response);
            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log(thrownError);
            }
        });


    }


    function LoadActiveCat(result) {




        $('#result-category-url').empty()
            .append($('<select autocomplete="off" name="parentCat" class="form-control"/>'));



        $.each( result.listCat, function( key, value ) {

            if(value.id==result.catId) {

                $('#result-category-url').find('select').append('<option selected value="' + value.id + '">' + value.name + '</option>');
            }
            else {
                $('#result-category-url').find('select').append('<option value="' + value.id + '">' + value.name + '</option>');
            }

            listchild=value.childlist;

            $.each( listchild, function( index, item ) {

                if(item.id==result.catId){
                    $('#result-category-url').find('select').append('<option selected  value="'+item.id+'">-'+item.name+'</option>');
                }
                else {
                    $('#result-category-url').find('select').append('<option  value="'+item.id+'">-'+item.name+'</option>');
                }


            });


        });


    }




    function columnService() {
        return columns = {
            data: ['counter', 'img', 'title', 'cat', 'created_at', 'statusBar', 'action'],
            order: {
                'counter': 0
            }
        }
    }


    columnService();






});