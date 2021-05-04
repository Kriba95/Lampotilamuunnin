// document.getElementById('Muunna').onclick = tempConvert;


function tempConvert() {

    const val = document.getElementById("lampotila").value;
    const yd = document.querySelector('#yddesi');
    const ka = document.querySelector('#kadesi');
    const ko = document.querySelector('#kodesi');
    let lampoArvo = document.querySelector('#arvo').value;
   


    
    
    if (val === "celcius"  && yd.checked==true) {
        document.getElementById("output").innerHTML = +((parseFloat(lampoArvo) - 32) * 0.5556).toFixed(1);
        document.getElementById("kumpi").innerHTML = "°C";



    } else if (val === "celcius" && ka.checked==true) {
        document.getElementById("output").innerHTML = +((parseFloat(lampoArvo) - 32) * 0.5556).toFixed(2);
        document.getElementById("kumpi").innerHTML = "°C";
      }
      else if (val === "celcius" && ko.checked==true) {

        document.getElementById("output").innerHTML = +((parseFloat(lampoArvo) - 32) * 0.5556).toFixed(3);
        document.getElementById("kumpi").innerHTML = "°C";
      }
      else if (val === "fahrenheit" && yd.checked==true) {
        document.getElementById("output").innerHTML = +((parseFloat(lampoArvo) * 1.8000) + 32).toFixed(1);
        document.getElementById("kumpi").innerHTML = "°F";
      }
      else if (val === "fahrenheit" && ka.checked==true) {

        document.getElementById("output").innerHTML = +((parseFloat(lampoArvo) * 1.8000) + 32).toFixed(2);
        document.getElementById("kumpi").innerHTML = "°F";
      }
      else if (val === "fahrenheit" && ko.checked==true) {
        document.getElementById("output").innerHTML = +((parseFloat(lampoArvo) * 1.8000) + 32).toFixed(3);
        document.getElementById("kumpi").innerHTML = "°F";
      }
      
    }