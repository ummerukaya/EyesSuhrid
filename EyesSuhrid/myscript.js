function hello() {
     let disease = ["visual disturbance", "flashes and floaters", "Glaucoma", "blurred vision", "Diabetic retinopathy", "Age-related macular degeneration", "Conjunctivitis", "colour blindness"];
     let count = [0, 0, 0, 0, 0, 0, 0, 0];

     if (document.getElementById('q1Y').checked === true) {
          count[0]++;
          count[1]++;
     }
     if (document.getElementById('q2a2').checked === true) {
          count[0]++;
     }
     if (document.getElementById('q2it').checked === true) {
          count[1]++
     }
     if (document.getElementById('q3N').checked === true) {
          count[0]++;
     }
     if (document.getElementById('q4Y').checked === true) {
          count[1]++;
     }
     if (document.getElementById('q5Y').checked === true) {
          count[2]++;
          count[3]++;
          count[4]++;
     }
     if (document.getElementById('q6Y').checked === true) {
          count[2]++;
     }
     if (document.getElementById('q7Y').checked === true) {
          count[2]++;
     }
     if (document.getElementById('q8Y').checked === true) {
          count[5]++;
     }
     if (document.getElementById('q9Y').checked === true) {
          count[5]++;
     }
     if (document.getElementById('q10Y').checked === true) {
          count[5]++;
     }
     if (document.getElementById('q11Y').checked === true) {
          count[4]++;
          count[6]++;
     }
     if (document.getElementById('q12Y').checked === true) {
          count[6]++;
     }
     if (document.getElementById('q13Y').checked === true) {
          count[6]++;
     }
     if (document.getElementById('q14Y').checked === true) {
          count[4]++;
     }
     if (document.getElementById('q15Y').checked === true) {
          count[7]++;
     }
     if (document.getElementById('q16Y').checked === true) {
          count[7]++;
     }
  //   document.write(count.length);
     var max = 0;
     for (var i = 0; i < count.length; i++) {
          if (max < count[i])
               max = count[i];
     }
  //  console.log( max)
    if (max == 0) {
          let s = "You are not suffering from any kind of eye diseases !"
          let hi = ``;
          hi += `<h3>${s}</h3>`
          document.getElementById('result').innerHTML = hi;
          document.getElementById('result').style.display = "block";
          //document.getElementById('result').style.color = 'green';
          document.getElementById('result').style.background = '#4CBB17';
          let s1 = "Always take the proper care of your eyes.";
          let ad = ``;
          ad += `<h3>${s1}</h3>`;
          document.getElementById('advice').innerHTML = ad;
          document.getElementById('advice').style.display = "block";
          document.getElementById('advice').style.background = 'powderblue';
          document.getElementById('answer-show').style.display = "none";
     }
     else {
          let out = '';
          var cnt = 0;
          let p = "You may suffer from eye diseases given below :\n\n";
          
          out += `<h3>${p}</h3>`
          for (let i = 0; i < disease.length; i++) {
               if (count[i] === max && count[i] !== 0) {
                  //  console.log(disease[i]);
                    cnt++;
                    out += `<h3>${cnt-'0'+'. '+disease[i]}</h3>`
                    
               }
          }
          let s = "Please consult with a specialist to be assured as soon as possible.";
          let ad = ``;
          ad += `<h3>${s}</h3>`;
          document.getElementById('result').innerHTML = out;
          document.getElementById('result').style.display = "block";


          if (cnt > 1) {
               document.getElementById('advice').innerHTML = ad;
               document.getElementById('advice').style.display = "block";
          }
          document.getElementById('answer-show').style.display = "none";
     }
    
}