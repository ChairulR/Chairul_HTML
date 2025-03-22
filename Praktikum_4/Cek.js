    function Cek(){
        let num = document.getElementById("num").value;
        if (num > 100) {
            document.getElementById("hasil").innerHTML="Error";
        } else if ( num >= 80) {
            document.getElementById("hasil").innerHTML="A";
        } else if ( num >= 70) {
            document.getElementById("hasil").innerHTML="B";
        } else if ( num >= 60) {
            document.getElementById("hasil").innerHTML="C";
        } else if( num >= 50) {x
            document.getElementById("hasil").innerHTML="D";
        } else if( num >= 0) {
            document.getElementById("hasil").innerHTML="E";
        } else {
            document.getElementById("hasil").innerHTML="Error";
        }
    }