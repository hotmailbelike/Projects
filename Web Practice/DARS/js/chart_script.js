var iubStud;
var aiubStud;
var bracStud;
var ewuStud;
var iubStud;

function getData(){

}

funtion showChart(){
var myChart = document.getElementById('myChart').getContext('2d');

    // Global Options
    Chart.defaults.global.defaultFontFamily = 'Arial';
    Chart.defaults.global.defaultFontSize = 14;
    Chart.defaults.global.defaultFontColor = '#333333';

    var massPopChart = new Chart(myChart, {
      type:'bar', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
      data:{
        labels:['IUB', 'AIUB', 'NSU', 'BRAC', 'EWU'],
        datasets:[{
          label:'Students',
          data:[
            617594,
            181045,
            153060,
            106519,
            105162,
            95072
          ],
          //backgroundColor:'green',
          backgroundColor:[
            'rgba(255, 99, 132, 1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(75, 192, 192, 1)',
            'rgba(153, 102, 255, 1)',
            'rgba(255, 159, 64, 1)',
            'rgba(255, 99, 132, 1)'
          ],
          borderWidth:1,
          borderColor:'#777',
          hoverBorderWidth:1,
          hoverBorderColor:'#000'
        }]
      },
      options:{
        // title:{
        //   display:true,
        //   text:'Largest Cities In Massachusetts',
        //   fontSize:18
        // },
        // legend:{
        //   display:true,
        //   position:'right',
        //   labels:{
        //     fontColor:'#000'
        //   }
        // },
        layout:{
          padding:{
            left:50,
            right:0,
            bottom:0,
            top:0
          }
        },
        tooltips:{
          enabled:true
        }
      }
    });
  }