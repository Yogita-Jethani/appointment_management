var TableDatatables = function(){
    window.alert("hello");
    var handleDoctorTable = function(){

        window.alert("hello");

        var doctorTable = $("#doctor_list");
        
        var oTable = doctorTable.dataTable({

            
            "processing": true,
            "serverSide": true,
            "ajax":{
                url:"http://localhost/medical/pages/scripts/doctor/manage.php",
                type:"POST",
            },
            "lengthMenu": [
                [5, 15, 20, -1],
                [5, 15, 25, "All"]
            ],
            "pageLength": 15, //set the default length
            "order":[
                [1, "desc"]
            ],
            "columnDefs":[{
                'orderable': false,
                'targets':[0,-1, -2]
            }],
            
           "columnDefs":[{
               'orderable':false,
               'targets':[0],
               'data':"img",
               "render":function(data,type,row){
                   var image_name = row[0];
                   var res = image_name.split(".");
                   if(res[1]!=""){
                       return "<img class ='img-responsive' height ='75px' src='http://localhost/medical/assets/doctor/images/"+row[0]+"'/>";
                   }
                   else{
                       return '<img height="75px" class ="img-responsive" src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="no image" /> </div>'
                   }
               }
           }],
        });
        doctorTable.on('click', '.edit', function (e) {
            $id = $(this).attr('id');
            $("#edit_doctor_id").val($id);
            //fetching all the other values from database using ajax and loading them onto their respective edit fields:
            $.ajax({
                url: "http://localhost/medical/pages/scripts/doctor/fetch.php",
                method: "POST",
                data: {doctor_id: $id},
                dataType: "json",
                success: function(data){
                
                      $("#doctor_name").val(data.doctor_name);
                    
                    $("#doctor_email").val(data.doctor_email);
                    $("#doctor_contact").val(data.doctor_contact);
                   $("#doctor_experience").val(data.doctor_name);
                   $("#doctor_specialization").val(data.doctor_specialization);
                   $("#doctor_degree").val(data.doctor_degree);
                    
                    
                    
                },
            });
        });
        doctorTable.on('click', '.delete', function (e) {
            $id = $(this).attr('id');
            $("#recordID").val($id);
        });
        
     
        
    }
    return{
        //main function in javascript to handle all the initialization part
        init: function(){
            handleDoctorTable();
        }
    };
}();
jQuery(document).ready(function(){
    TableDatatables.init();
});




























