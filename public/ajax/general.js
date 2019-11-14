

$(function () {



    $("#filterCount").change(function () {


        $paginate=$(this).val();
        $model=$(this).attr('data-parent');


        $.ajax({
            type: "GET",
            url: "/admin/"+$model+"/filterCount/"+$paginate,
            dataType: 'json',
            success: function (response) {
                loadDataTable(response,$model);


            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log(thrownError);
            }
        });

    });
    function  loadDataTable(items,model) {

        model=model+"s";
        tbody=$("tbody");
        tbody.empty();
       

        CustomTable(tbody,items[model].data,columns);
        CreatePaginate(items.paginate);
        CreateCounter(items.counter);

    }

    function  CustomTable(target,result,columns) {

        counter=0;
        $.each( result, function( key, value ) {
            columns.order['counter']=columns.order['counter']+1;
            target.append('<tr role="row" class="even">'+CreateColumn(value,columns)+'</tr>');
        });



        $("button[data-option='remove']").click(function () {
            model=$("#filterCount").attr('data-parent');
            model=$model+"s";

            alertify.confirm('هشدار',function (e) {if(e) {
                var Id=$("button[data-option='remove']").attr("data-level");
                token=$("button[data-option='remove']").find("input[name='_token']").val();

                $.ajax({
                    type: "DELETE",
                    url: "/admin/"+model+"/"+Id+"?_token="+token,
                    dataType: 'json',
                    success: function (response) {

                        if(response.status==1){

                            window.location.replace("http://cmsadminpanel.com/admin/"+model);

                        }


                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        alertify
                            .alert("خطایی رخ داده است");

                    }
                });


            }});


        });



    }
    function CreatePaginate(paginate) {

        $("#DataTables_Table_0_paginate").empty().append(paginate);
    }
    function CreateCounter(counter) {

        $("#DataTables_Table_0_info span#count").empty().append(counter);
    }


    function CreateColumn(value,columns) {

        for (i=0;i<columns.data.length;i++){


            if(value[columns.data[i]]){
                var record=record+ "<td >"+value[columns.data[i]]+"</td>";
            }
            else if((columns.data[i] in columns.order)) {
                var record=record+ "<td >"+columns.order[columns.data[i]]+"</td>";
            }
            else  {
                var record=record+ "<td >null</td>";
            }
        }

        return record;

    }


    
    
    function defualt() {
        $model=$("#filterCount").attr("data-parent");
        $.ajax({
            type: "GET",
            url: "/admin/"+$model+"/getDefault",
            dataType: 'json',
            success: function (response) {
                console.log(response);
                loadDataTable(response,$model);



            },
            complete: function(){
                $('#loading-div').hide();
            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log(thrownError);
              
            }
        });
    }

    defualt();




});