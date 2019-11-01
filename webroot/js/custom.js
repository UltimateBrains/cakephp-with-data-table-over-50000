 $(document).ready(function(){
            
            //console.log(csrfToken);
            var dataTable=$('#example').DataTable({
                "processing": true,
                "serverSide":true,
                 
              
                "ajax":{
                    headers: {'X-CSRF-TOKEN': csrfToken },
                    url: "getleads",
                    
                }
            });
        });