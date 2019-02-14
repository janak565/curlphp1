</div>
    <!-- /container -->
 
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
 
<!-- Latest compiled and minified Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
<!-- bootbox library -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>

<!--validation file-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>

<script>
// JavaScript for deleting product
$(document).on('click', '.delete-object', function(){
 
    var id = $(this).attr('delete-id');
 
    bootbox.confirm({
        message: "<h4>Are you sure?</h4>",
        buttons: {
            confirm: {
                label: '<span class="glyphicon glyphicon-ok"></span> Yes',
                className: 'btn-danger'
            },
            cancel: {
                label: '<span class="glyphicon glyphicon-remove"></span> No',
                className: 'btn-primary'
            }
        },
        callback: function (result) {
 
            if(result==true){
                $.post('delete_product.php', {
                    object_id: id
                }, function(data){
                    location.reload();
                }).fail(function() {
                    alert('Unable to delete.');
                });
            }
        }
    });
 
    return false;
});
$(document).ready(function() {
	$("#add_product").validate({
		rules: {
			name: "required",
			price: {
                required:true,
                    number: true
            },      
            category_id:"required",
            image:{
                required: true,
                 extension: "jpg|jpeg|png|gif",
                filesize: 1000000
            }
		},
		messages: {
            name: "Please enter your product name",
            price:{    
                required :"Please enter Product Price",
                number :"Only Number is allow",
            } ,
            category_id:"Please Select Category",
            image:{	
            	required :"Please Select Product Image",
                extension :"Only allow image extension jpg,jpeg,png,gif",
                filesize : "file size must be less than 1 MB."
            } 
            },
         submitHandler: function(form) {
            return true;
         }
	});
    return false;
});
$(document).ready(function() {
    $("#edit_product").validate({
        rules: {
            name: "required",
            price: {
                required:true,
                    number: true
            },      
            category_id:"required",
            
        },
        messages: {
            name: "Please enter your product name",
            price:{    
                required :"Please enter Product Price",
                number :"Only Number is allow",
            } ,
            category_id:"Please Select Category",
            
            },
         submitHandler: function(form) {
            return true;
         }
    });
    return false;
});	
$.validator.addMethod('filesize', function (value, element, param) {
    return this.optional(element) || (element.files[0].size <= param)
}, 'File size must be less than {0}');
</script>
 
</body>
</html>