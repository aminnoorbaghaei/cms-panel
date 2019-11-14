
$(function () {



    function loadSelect(items,lang)
    {

        $('#result-parent').empty()
            .append($('<select autocomplete="off" name="parent" class="form-control"/>'))
            .find('select').append('<option value="0"> بدون والد</option>');

        $('#result-href').empty()
            .append($('<select autocomplete="off" name="hrefUrl" class="form-control"/>'))
            .find('select').append('<option value="0">لینک دستی</option>');


        $.each( items, function( key, value ) {


            $('#result-parent').find('select').append('<option value="'+value.id+'">'+value.title+'</option>');

            listchild=value.childlist;

            $.each( listchild, function( index, item ) {

                $('#result-parent').find('select').append('<option value="'+item.id+'">-'+item.title+'</option>');

            });


            $('#result-href').find('select').append('<option value="'+value.hrefUrl+'">'+value.title+'</option>');

            listchild=value.childlist;

            $.each( listchild, function( index, item ) {

                $('#result-href').find('select').append('<option value="'+item.hrefUrl+'">-'+item.title+'</option>');

            });


        });

    }



    $('#request-menu').change(function () {

        $("#LinkAddress").empty();


        $('#request-menu-url option').filter(function() {
            return ($(this).val() == '1');
        }).prop('selected', true);



        switch($(this).val())
        {



            case '1':

                $.ajax({
                    type: "GET",
                    url: "/admin/menu/list/1",
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
                    url: "/admin/menu/list/2",
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
            case '3':

                $.ajax({
                    type: "GET",
                    url: "/admin/menu/list/3",
                    dataType: 'json',
                    success: function (response) {
                        console.log(response);
                        loadSelect(response,"ar");
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



    function columnMenu() {
        return columns = {
            data: ['counter', 'icon', 'title',  'created_at', 'order','slug','hrefMenu','statusBar', 'action'],
            order: {
                'counter': 0
            }
        }
    }


    columnMenu();







});