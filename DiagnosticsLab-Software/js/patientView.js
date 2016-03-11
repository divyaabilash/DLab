  var test = {
        "testcase": [{
            "testname": "Blood Test"
        }, {
            "testname": "Urine Test"
        }, {
            "testname": "White Blood Cells Test"
        }, {
            "testname": "Culture Test"
        }, {
            "testname": "1 hour Glucose Test"
        }, {
            "testname": "3 hours Glucose Test"
        }]
    };
var selected=false;
   var text = test.testcase;  
function viewclicked() {
        if(selected){
        window.location.href = 'testview.html';
    }else{
        $('#error').html="Please Select the Test Case";
    }
    };

    $(document).ready(function() {

         text.forEach(function(i) {
            var table = document.getElementById("searchResult");
            console.log(i.testname);
            var newrow = table.insertRow(1);
            var cell = newrow.insertCell(0);
            // cell.innerHTML = text[i.testname];
            cell.innerHTML = i.testname;
            // cell.className="dynamic";
            console.log(text[i.testname]);
        });
        
        // alert("jquery load");
        var table = $('#searchResult');
        $("#searchResult tbody").delegate('tr', 'click', function(event) {
var current=$(this).addClass('selected');
            $(this).parent("tbody").find("tr").removeClass('selected')
            current.parent("tbody").find("tr").removeClass('selected')
            $(this).addClass('selected');
            selected=true;
        });

        $('#search').click(function(event) {
            var id = $('#PatientID').val();
            if (id == "") {
                event.preventDefault();
                $("#error").html("Please Enter the Patient Id to View Test Results");
                return;
            } 
        });
    });