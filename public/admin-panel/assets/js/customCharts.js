function donartChart(types,names){
  var options = {
    chart: {
        height: 270,
        type: 'donut',
    },
    plotOptions: {
      pie: {
        donut: {
          size: '85%'
        }
      }
    },
    dataLabels: {
      enabled: false,
    },

    stroke: {
      show: true,
      width: 2,
      colors: ['transparent']
    },

    series: types,
    legend: {
      show: true,
      position: 'bottom',
      horizontalAlign: 'center',
      verticalAlign: 'middle',
      floating: false,
      fontSize: '13px',
      offsetX: 0,
      offsetY: 0,
    },
    labels: names,


    responsive: [{
        breakpoint: 600,
        options: {
          plotOptions: {
              donut: {
                customScale: 0.2
              }
            },
            chart: {
                height: 240
            },
            legend: {
                show: false
            },
        }
    }],
    tooltip: {
      y: {
          formatter: function (val) {
              return   val;
          }
      }
    }

  }

  var chart = new ApexCharts(
    document.querySelector("#ana_device"),
    options
  );

  chart.render();
}

function yearlySaleChart(year,data_array){

  var options = {
    chart: {
        height: 320,
        type: 'area',
        stacked: true,
        toolbar: {
          show: true,
          autoSelected: 'zoom'
        },
    },
    colors: [ 'lightblue'],
    dataLabels: {
        enabled: true,

    },
    stroke: {
        curve: 'smooth',
        width: [1.5, 1.5],
        dashArray: [0, 4],
        lineCap: 'round',
    },
    grid: {
      padding: {
        left: 0,
        right: 0
      },
      strokeDashArray: 3,
    },
    markers: {
      size: 0,
      hover: {
        size: 0
      }
    },
    series: [{
        name: year,
        data: data_array,
    }],

    xaxis: {
        type: 'month',
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        axisBorder: {
          show: true,
        },
        axisTicks: {
          show: true,
        },
    },
    fill: {
      type: "gradient",
      gradient: {
        shadeIntensity: 1,
        opacityFrom: 0.4,
        opacityTo: 0.3,
        stops: [0, 90, 100]
      }
    },

    tooltip: {
        y: {
            formatter:function(val){
              return val + " PKR";
            }
        },
    },
    legend: {
      position: 'top',
      horizontalAlign: 'right'
    },
  }

  var chart = new ApexCharts(
    document.querySelector("#ana_dash_1"),
    options
  );

  chart.render();

}
