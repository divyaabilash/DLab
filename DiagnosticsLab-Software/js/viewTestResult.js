   // document.getElementById("searchResult").style.visibility = "hidden";
   //  var test = {
   //      "testcase": [{
   //          "testname": "Blood Test"
   //      }, {
   //          "testname": "Urine Test"
   //      }, {
   //          "testname": "White Blood Cells Test"
   //      }, {
   //          "testname": "Culture Test"
   //      }, {
   //          "testname": "1 hour Glucose Test"
   //      }, {
   //          "testname": "3 hours Glucose Test"
   //      }]
   //  };
 document.getElementById("layouthidden").style.visibility="hidden";
var viewtestdata;
function setdata(data){
viewtestdata = data;
}
    var selected = false;
    // var text = test.testcase;

    function clicked() {
        var patientID, testcase;
        patientID = document.getElementById("patientID");

        if (patientID.value === "") {
            document.getElementById("error").innerHTML = "Enter ReportID";
            addClass("#patientID", 'error');
        } else {
            removeClass("#patientID", 'error');
            document.getElementById("search").style.visibility="hidden";
            document.getElementById('error').innerHTML = "";
            myFunction();
        }
    };

    function viewclicked() {
        if (selected) {
            window.location.href ='patientView.php';
        } else {
            $('#error').html = "Please Set the Test Case";
        }
    };

    function myFunction() {
        document.getElementById("searchResult").style.visibility = "visible";

        testdata.forEach(function(i) {
            var table = document.getElementById("searchResult");
            console.log(i.TEST_NAME);
            var newrow = table.insertRow(1);
            var cell = newrow.insertCell(0);
            // cell.innerHTML = text[i.testname];
            cell.innerHTML = i.TEST_NAME;
            // cell.className="dynamic";
            console.log(testdata[i.TEST_NAME]);
        });
    }
    $(document).ready(function() {
        var table = $('#searchResult');
        $("#searchResult tbody").delegate('tr', 'click', function(event) {
            var current = $(this).addClass('selected');
            $(this).parent("tbody").find("tr").removeClass('selected');
            current.parent("tbody").find("tr").removeClass('selected');
            $(this).addClass('selected');
            selected = true;
        });

        $("#reset").click(function(event) {
            event.preventDefault(); 
            $('#searchResult').css('visibility', 'hidden');
            $('buttonContainer').css('visibility', 'hidden');
            $('#patientID').val('');
            selected = false;
            removeClass('#patientID','error');
            document.getElementById('error').innerHTML = "";
        });

        $('#search').click(function(event) {
            var id = $('#PatientID').val();
            if (id == "") {
                event.preventDefault();
                $("#error").html("Please Enter the Patient Id to View Test Results");
                addClass("#patientID",'error');
                return;
            } else {
                $('#layouthidden').css('visibility', 'visible');
            }
        });
    });