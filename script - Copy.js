$(document).ready(function(){


    // Save data
    $(".edit").focusout(function(){

        var id = this.id;
        var split_id = id.split("_");
        var field_name = split_id[0];
        var edit_id = split_id[1];

        var value = $(this).text();
        value = value.trim();

        $.ajax({
            url: 'update_data.php',
            type: 'post',
            data: { field:field_name, value:value, id:edit_id },
            success:function(response)

            {
                console.log(response);
                if(response == 1){
                    console.log('Save successfully');

                }else{
                    console.log("Not saved.");

                }
            }
        });

    });


// delete data?



    // Delete
    $('.delete').click(function(){
        var el = this;
        var id = $(this).data('id');


        var confirmalert = confirm("Are you sure?");
        if (confirmalert == true) {
            // AJAX Request
            $.ajax({
                url: 'delete.php',
                type: 'POST',
                data: { id:id },
                success: function(response){
console.log(response)
                    if(response == 1){
                        // Remove row from HTML Table
                        $(el).closest('tr').css('background','tomato');
                        $(el).closest('tr').fadeOut(800,function(){
                            $(this).remove();
                        });
                    }else{
                        alert('Invalid ID.');
                    }
                }
            });
        }
    });






});



    // view data
