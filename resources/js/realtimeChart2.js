// // chart untuk connection times
//   const dataPengukuran1 = [30, 22];
//   const dataPengukuran2 = [15.7, 24.34];
//   const labelPengukuran = ['50 Request/sec', '100 Request/sec'];
//   let latestId = 0; // Menyimpan ID data terakhir yang diterima

//   const ctx = document.getElementById('myChart7').getContext('2d');
//   const myChart7 = new Chart(ctx, {
//       type: 'line',
//       data: {
//           labels: labelPengukuran,
//           datasets: [{
//               label: 'Apache Bench',
//               data: dataPengukuran1,
//               borderColor: 'rgba(75, 192, 192, 1)',
//               backgroundColor: 'rgba(75, 192, 192, 1)',
//               borderWidth: 1,
//               fill: false
//           },
//           {
//               label: 'Httperf',
//               data: dataPengukuran2,
//               borderColor: 'rgb(75 89 192)',
//               backgroundColor: 'rgb(75 89 192)',
//               borderWidth: 1,
//               fill: false
//           }]
//       },
//       options: {
//           scales: {
//               x: {
//                   // display: false // Menyembunyikan label tanggal pada sumbu x
//               }
//           }
//       }
//   });

//chart untuk connection times
const dataPengukuran1 = [{x: '100 connection', net: 30, cogs: 15.7}, {x: '250 connection', net: 22, cogs: 24.34}];

const ctx = document.getElementById('myChart7').getContext('2d');
const myChart7 = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['100 connection', '250 connection'],
        datasets: [{
            label: 'Apache Bench',
            data: dataPengukuran1.map(entry => entry.net)
        }, {
            label: 'Httperf',
            data: dataPengukuran1.map(entry => entry.cogs)
        }]
    },
    options: {
    scales: {
        y: {
            min: 0, // Nilai minimum sumbu y
            max: 35, // Nilai maksimum sumbu y
        }
        }
    }
});

const dataPengukuran2 = [{x: '500 connection', net: 80, cogs: 51.76}, {x: '1000 connection', net: 68.67, cogs: 38.73}];

const ctx2 = document.getElementById('myChart8').getContext('2d');
const myChart8 = new Chart(ctx2, {
    type: 'bar',
    data: {
        labels: ['500 connection', '1000 connection'],
        datasets: [{
            label: 'Apache Bench',
            data: dataPengukuran2.map(entry => entry.net)
        }, {
            label: 'Httperf',
            data: dataPengukuran2.map(entry => entry.cogs)
        }]
    },
    options: {
    scales: {
        y: {
            min: 0, // Nilai minimum sumbu y
            max: 90, // Nilai maksimum sumbu y
        }
        }
    }
});

//chart untuk Troughput
const dataPengukuran3 = [{x: '100 connection', net: 316.46, cogs: 55.73}, {x: '250 connection', net: 289.34, cogs: 55.5}];

const ctx3 = document.getElementById('myChart9').getContext('2d');
const myChart9 = new Chart(ctx3, {
    type: 'bar',
    data: {
        labels: ['100 connection', '250 connection'],
        datasets: [{
            label: 'Apache Bench',
            data: dataPengukuran3.map(entry => entry.net)
        }, {
            label: 'Httperf',
            data: dataPengukuran3.map(entry => entry.cogs)
        }]
    },
    options: {
    scales: {
        y: {
            min: 0, // Nilai minimum sumbu y
            max: 350, // Nilai maksimum sumbu y
        }
        }
    }
});

const dataPengukuran4 = [{x: '500 connection', net: 301.4, cogs: 110.76}, {x: '1000 connection', net: 366.32, cogs: 111.7}];

const ctx4 = document.getElementById('myChart10').getContext('2d');
const myChart10 = new Chart(ctx4, {
    type: 'bar',
    data: {
        labels: ['500 connection', '1000 connection'],
        datasets: [{
            label: 'Apache Bench',
            data: dataPengukuran4.map(entry => entry.net)
        }, {
            label: 'Httperf',
            data: dataPengukuran4.map(entry => entry.cogs)
        }]
    },
    options: {
    scales: {
        y: {
            min: 0, // Nilai minimum sumbu y
            max: 400, // Nilai maksimum sumbu y
        }
        }
    }
});