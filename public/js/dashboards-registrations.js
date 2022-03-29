/**
 * registration Dashboard
 */

'use strict';
(function () {
  let cardColor, headingColor, axisColor, borderColor, shadeColor;

  if (isDarkStyle) {
    cardColor = config.colors_dark.cardColor;
    headingColor = config.colors_dark.headingColor;
    axisColor = config.colors_dark.axisColor;
    borderColor = config.colors_dark.borderColor;
    shadeColor = 'dark';
  } else {
    cardColor = config.colors.white;
    headingColor = config.colors.headingColor;
    axisColor = config.colors.axisColor;
    borderColor = config.colors.borderColor;
    shadeColor = 'light';
  }

  // Permohonan - Kerja Terancang
  // --------------------------------------------------------------------
  const organizedChartEl = document.querySelector('#organizedChart'),
  organizedChartConfig = {
      chart: {
        height: 270,
        type: 'radialBar'
      },
      colors: [config.colors.primary, config.colors.danger, config.colors.warning, config.colors.success],
      series: [75, 80, 85, 10],
      plotOptions: {
        radialBar: {
          offsetY: -5,
          hollow: {
            size: '40%'
          },
          track: {
            margin: 5,
            background: cardColor
          },
          dataLabels: {
            name: {
              fontSize: '15px',
              colors: [config.colors.secondary],
              fontFamily: 'IBM Plex Sans',
              offsetY: 25,
              
            },
            value: {
              fontSize: '2rem',
              fontFamily: 'Rubik',
              fontWeight: 500,
              color: headingColor,
              offsetY: -15,
              formatter: function (val) {
                return val
            }
            },
            total: {
              show: true,
              label: 'Jum. Permohonan',
              fontSize: '12px',
              fontWeight: 400,
              fontFamily: 'IBM Plex Sans',
              color: config.colors.secondary,
              formatter: function (w) {
                return w.globals.seriesTotals.reduce(function (a, b) {
                return a + b
                }, 0)
            }
            }
          }
        }
      },
      grid: {
        padding: {
          top: -10,
          bottom: -10
        }
      },
      stroke: {
        lineCap: 'round'
      },
      labels: ['A1', 'A2', 'A3', 'A4'],
      legend: {
        show: true,
        position: 'bottom',
        horizontalAlign: 'center',
        labels: {
          colors: axisColor,
          useSeriesColors: false
        },
        itemMargin: {
          horizontal: 15
        },
        markers: {
          width: 10,
          height: 10,
          offsetX: -3
        }
      }
    };

  if (typeof organizedChartEl !== undefined && organizedChartEl !== null) {
    const organizedChart = new ApexCharts(organizedChartEl, organizedChartConfig);
    organizedChart.render();
  }

  // Permohonan - Kerja Pengalihan
  // --------------------------------------------------------------------
  const relocatingChartEL = document.querySelector('#relocatingChart'),
    relocatingChartConfig = {
      chart: {
        height: 270,
        type: 'radialBar'
      },
      colors: [config.colors.primary, config.colors.danger, config.colors.warning],
      series: [12, 32, 8],
      plotOptions: {
        radialBar: {
          offsetY: -5,
          hollow: {
            size: '35%'
          },
          track: {
            margin: 7,
            background: cardColor
          },
          dataLabels: {
            name: {
              fontSize: '15px',
              colors: [config.colors.secondary],
              fontFamily: 'IBM Plex Sans',
              offsetY: 25,
              
            },
            value: {
              fontSize: '2rem',
              fontFamily: 'Rubik',
              fontWeight: 500,
              color: headingColor,
              offsetY: -15,
              formatter: function (val) {
                return val
            }
            },
            total: {
              show: true,
              label: 'Jum. Permohonan',
              fontSize: '12px',
              fontWeight: 400,
              fontFamily: 'IBM Plex Sans',
              color: config.colors.secondary,
              formatter: function (w) {
                return w.globals.seriesTotals.reduce(function (a, b) {
                return a + b
                }, 0)
            }
            }
          }
        }
      },
      grid: {
        padding: {
          top: -10,
          bottom: -10
        }
      },
      stroke: {
        lineCap: 'round'
      },
      labels: ['R1', 'R2', 'R3'],
      legend: {
        show: true,
        position: 'bottom',
        horizontalAlign: 'center',
        labels: {
          colors: axisColor,
          useSeriesColors: false
        },
        itemMargin: {
          horizontal: 15
        },
        markers: {
          width: 10,
          height: 10,
          offsetX: -3
        }
      }
    };

  if (typeof relocatingChartEL !== undefined && relocatingChartEL !== null) {
    const relocatingChart = new ApexCharts(relocatingChartEL, relocatingChartConfig);
    relocatingChart.render();
  }

  // Butang Tukar Chart
  const oB = document.getElementById('organizedButton');
  const oC = document.getElementById('organizedChart');
  const rB = document.getElementById('relocatingButton');
  const rC = document.getElementById('relocatingChart');

  oB.onclick = () => {
    oC.classList.remove("d-none")
    rC.classList.add("d-none")
  };

  rB.onclick = () => {
    rC.classList.remove("d-none")
    oC.classList.add("d-none")
  };


  // Jumlah Permohonan - Bar Chart
  // --------------------------------------------------------------------
  const totalApplicationChartEl = document.querySelector('#totalApplicationChart'),
  totalApplicationChartConfig = {
    chart: {
      height: 380,
      type: 'area',
      toolbar: false,
      sparkline:{
        enabled: true,
      },
      dropShadow: {
        enabled: true,
        top: 18,
        left: 2,
        blur: 3,
        color: [config.colors.primary, config.colors.danger, config.colors.warning],
        opacity: 0.2
      }
    },
    
    series: [{
      name: '2021',
      data: [0, 0, 3, 1, 42, 25, 59, 32, 54, 45, 73, 15]
      }, {
      name: '2022',
      data: [28, 12, 40, 0, 0, 0, 0, 0, 0, 0, 0, 0]
    }],
    legend: {
      show: true,
      onItemHover: {
          highlightDataSeries: true
      },
      position: 'top',
      horizontalAlign: 'right',
    },
    dataLabels: {
      enabled: false
    },
    stroke: {
      curve: 'smooth',
      lineCap: 'round'
    },
    colors: [config.colors.primary, config.colors.danger, config.colors.warning],
    fill: {
      type: 'gradient',
      gradient: {
        shade: shadeColor,
        shadeIntensity: 0.8,
        opacityFrom: 0.7,
        opacityTo: 0.25,
        stops: [0, 95, 100]
      }
    },
    grid: {
      show: false,
      borderColor: borderColor,
      padding: {
        top: 20,
      }
    },
    xaxis: {
      categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Sep', 'Nov', 'Dec'],
      labels: {
        offsetX: 0,
        style: {
          colors: axisColor,
          fontSize: '13px'
        }
      },
      axisBorder: {
        show: false
      },
      axisTicks: {
        show: false
      },
      lines: {
        show: false
      }
    },
    yaxis: {
      labels: {
        offsetX: 7,
        formatter: function (val) {
          return val + ' Permohonan';
        },
        style: {
          fontSize: '13px',
          colors: axisColor
        }
      },
      tickAmount: 5
    }
  };
  if (typeof totalApplicationChartEl !== undefined && totalApplicationChartEl !== null) {
    const totalApplicationChart = new ApexCharts(totalApplicationChartEl, totalApplicationChartConfig);
    totalApplicationChart.render();
  }

  // Jarak Permohonan - Bar Chart
  // --------------------------------------------------------------------
  const totalLengthChartEl = document.querySelector('#totalLengthChart'),
  totalLengthChartConfig = {
      chart: {
        height: 90,
        type: 'bar',
        stacked: true,
        toolbar: {
          show: false
        }
      },
      grid: {
        show: false,
        padding: {
          left: 0,
          right: 0,
          top: -20,
          bottom: -20
        }
      },
      plotOptions: {
        bar: {
          horizontal: false,
          columnWidth: '20%',
          borderRadius: 2,
          startingShape: 'rounded',
          endingShape: 'flat'
        }
      },
      legend: {
        show: false
      },
      dataLabels: {
        enabled: false
      },
      colors: [config.colors.info, config.colors_label.secondary],
      series: [
        {
          name: '2021',
          data: [0, 0, 125, 40, 50, 30, 70, 80, 100, 40, 80, 60]
        },
        {
          name: '2022',
          data: [50, 65, 40, 0, 0, 0, 0, 0, 0, 0, 0, 0]
        }
      ],
      xaxis: {
        categories: ['01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12'],
        axisBorder: {
          show: false
        },
        axisTicks: {
          show: false
        },
        labels: {
          style: {
            colors: axisColor
          },
          offsetY: -5
        }
      },
      yaxis: {
        show: false,
        floating: true
      },
      tooltip: {
        x: {
          show: false
        }
      }
    };
  if (typeof totalLengthChartEl !== undefined && totalLengthChartEl !== null) {
    const totalLengthChart = new ApexCharts(totalLengthChartEl, totalLengthChartConfig);
    totalLengthChart.render();
  }

  // Marketing Campaign - Donut Chart 1
  // --------------------------------------------------------------------
  const marketingCampaignChart1El = document.querySelector('#marketingCampaignChart1'),
    marketingCampaignChart1Config = {
      chart: {
        height: 55,
        width: 55,
        fontFamily: 'IBM Plex Sans',
        type: 'donut'
      },
      dataLabels: {
        enabled: false
      },
      grid: {
        padding: {
          top: -5,
          bottom: -5,
          left: -2,
          right: 0
        }
      },
      series: [60, 45, 60],
      stroke: {
        width: 3,
        lineCap: 'round',
        colors: cardColor
      },
      colors: [config.colors.primary, config.colors.warning, config.colors.success],
      plotOptions: {
        pie: {
          donut: {
            size: '65%',
            labels: {
              show: false,
              value: {
                show: false
              },
              total: {
                show: false
              }
            }
          }
        }
      },
      legend: {
        show: false
      },
      states: {
        active: {
          filter: {
            type: 'none'
          }
        }
      }
    };

  if (typeof marketingCampaignChart1El !== undefined && marketingCampaignChart1El !== null) {
    const marketingCampaignChart1 = new ApexCharts(marketingCampaignChart1El, marketingCampaignChart1Config);
    marketingCampaignChart1.render();
  }

  // Marketing Campaign - Donut Chart 2
  // --------------------------------------------------------------------
  const marketingCampaignChart2El = document.querySelector('#marketingCampaignChart2'),
    marketingCampaignChart2Config = {
      chart: {
        height: 55,
        width: 55,
        fontFamily: 'IBM Plex Sans',
        type: 'donut'
      },
      dataLabels: {
        enabled: false
      },
      grid: {
        padding: {
          top: -5,
          bottom: -5,
          left: -2,
          right: 0
        }
      },
      series: [60, 30, 30],
      stroke: {
        width: 3,
        lineCap: 'round',
        colors: cardColor
      },
      colors: [config.colors.danger, config.colors.secondary, config.colors.primary],
      plotOptions: {
        pie: {
          donut: {
            size: '65%',
            labels: {
              show: false,
              value: {
                show: false
              },
              total: {
                show: false
              }
            }
          }
        }
      },
      legend: {
        show: false
      },
      states: {
        active: {
          filter: {
            type: 'none'
          }
        }
      }
    };

  if (typeof marketingCampaignChart2El !== undefined && marketingCampaignChart2El !== null) {
    const marketingCampaignChart2 = new ApexCharts(marketingCampaignChart2El, marketingCampaignChart2Config);
    marketingCampaignChart2.render();
  }
})();
