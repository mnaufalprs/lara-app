const socket = io.connect('http://localhost:3000');

// chart untuk connection times
const labelsArray = [];
const dataArray = [];
let latestId = 0; // Menyimpan ID data terakhir yang diterima

const ctx = document.getElementById('myChart').getContext('2d');
const myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: labelsArray,
        datasets: [{
            label: 'Connection Time (ms)',
            data: dataArray,
            borderColor: 'rgba(75, 192, 192, 1)',
            backgroundColor: 'rgba(75, 192, 192, 1)',
            borderWidth: 1,
            fill: false
        }]
    },
    options: {
        scales: {
            x: {
                display: false // Menyembunyikan label tanggal pada sumbu x
            }
        }
    }
});

//chart untuk request per second
const dataArray2 = [];

const ctx2 = document.getElementById('myChart2').getContext('2d');
const myChart2 = new Chart(ctx2, {
    type: 'line',
    data: {
        labels: labelsArray,
        datasets: [{
            label: 'Request per Second (req/s)',
            data: dataArray2,
            borderColor: 'rgba(75, 19, 122, 1)',
            backgroundColor: 'rgba(75, 19, 122, 1)',
            borderWidth: 1,
            fill: false
        }]
    },
    options: {
        scales: {
            x: {
                display: false // Menyembunyikan label tanggal pada sumbu x
            }
        }
    }
});

//chart untuk transfer rate
const dataArray3 = [];

const ctx3 = document.getElementById('myChart3').getContext('2d');
const myChart3 = new Chart(ctx3, {
    type: 'line',
    data: {
        labels: labelsArray,
        datasets: [{
            label: 'Transfer Rate (Kbps)',
            data: dataArray3,
            borderColor: 'rgba(75, 192, 19, 1)',
            backgroundColor: 'rgba(75, 192, 19, 1)',
            borderWidth: 1,
            fill: false
        }]
    },
    options: {
        scales: {
            x: {
                display: false // Menyembunyikan label tanggal pada sumbu x
            }
        }
    }
});

//chart untuk time per request
const dataArray4 = [];

const ctx4 = document.getElementById('myChart4').getContext('2d');
const myChart4 = new Chart(ctx4, {
    type: 'line',
    data: {
        labels: labelsArray,
        datasets: [{
            label: 'Time per Request (ms)',
            data: dataArray4,
            borderColor: 'rgb(0, 0, 205)',
            backgroundColor: 'rgb(0, 0, 205)',
            borderWidth: 1,
            fill: false
        }]
    },
    options: {
        scales: {
            x: {
                display: false // Menyembunyikan label tanggal pada sumbu x
            }
        }
    }
});

//chart untuk time per request
const dataArray5 = [];

const ctx5 = document.getElementById('myChart5').getContext('2d');
const myChart5 = new Chart(ctx5, {
    type: 'line',
    data: {
        labels: labelsArray,
        datasets: [{
            label: 'Request Loss (%)',
            data: dataArray5,
            borderColor: 'rgb(255, 255, 0)',
            backgroundColor: 'rgb(255, 255, 0)',
            borderWidth: 1,
            fill: false
        }]
    },
    options: {
        scales: {
            x: {
                display: false // Menyembunyikan label tanggal pada sumbu x
            }
        }
    }
});

//chart untuk time taken for test
const dataArray6 = [];

const ctx6 = document.getElementById('myChart6').getContext('2d');
const myChart6 = new Chart(ctx6, {
    type: 'line',
    data: {
        labels: labelsArray,
        datasets: [{
            label: 'Time Testing (s)',
            data: dataArray6,
            borderColor: 'rgb(249, 0, 255)',
            backgroundColor: 'rgb(249, 0, 255)',
            borderWidth: 1,
            fill: false
        }]
    },
    options: {
        scales: {
            x: {
                display: false // Menyembunyikan label tanggal pada sumbu x
            }
        }
    }
});


socket.on('data', (data) => {
    console.log('Received data from server:', data);

    // Mengupdate data pada chart hanya jika data memiliki ID lebih besar dari yang terakhir diterima
    const newDataArray = data.filter(newData => newData.id > latestId);
    if (newDataArray.length > 0) {
        updateChart(newDataArray);
        latestId = Math.max(...data.map(item => item.id)); // Mengupdate ID terakhir
    }
});

function formatDateTime(dateTimeString) {
    const date = new Date(dateTimeString);

    // Mendapatkan bagian-bagian tanggal
    const year = date.getFullYear(); // Mendapatkan dua digit terakhir tahun
    const month = (date.getMonth() + 1).toString().padStart(2, '0'); // Mendapatkan bulan (di-start dari 0)
    const day = date.getDate().toString().padStart(2, '0'); // Mendapatkan hari

    // Mendapatkan bagian-bagian waktu
    const hours = date.getHours().toString().padStart(2, '0');
    const minutes = date.getMinutes().toString().padStart(2, '0');
    const seconds = date.getSeconds().toString().padStart(2, '0');

    return `${year}-${month}-${day} ${hours}:${minutes}:${seconds}`;
}

function updateChart(newDataArray) {
    console.log('Updating chart with data:', newDataArray);

    newDataArray.forEach(newData => {
        if ('created_at' in newData && 'connection_time' in newData && 'request_second' in newData && 'transfer_rate' in newData && 'time_request' in newData && 'request_loss' in newData && 'time_taken' in newData) {
            const formattedDateTime = formatDateTime(newData.created_at);
            // const formattedDateTime = newData.created_at;
            const connectionTime = newData.connection_time;
            const requestSecond = newData.request_second;
            const transferRate = newData.transfer_rate;
            const timeRequest = newData.time_request;
            const requestLoss = newData.request_loss;
            const timeTaken = newData.time_taken;

            labelsArray.push(formattedDateTime);
            dataArray.push(connectionTime);
            dataArray2.push(requestSecond);
            dataArray3.push(transferRate);
            dataArray4.push(timeRequest);
            dataArray5.push(requestLoss);
            dataArray6.push(timeTaken);

            // Memastikan jumlah data tidak melebihi batas tertentu (misalnya 15 data)
            const maxLength = 15;
            while (labelsArray.length > maxLength) {
                labelsArray.shift();
                dataArray.shift();
                dataArray2.shift();
                dataArray3.shift();
                dataArray4.shift();
                dataArray5.shift();
                dataArray6.shift();
            }
        } else {
            console.error('Invalid data format received from server:', newData);
        }
    });

    // Mengupdate chart dengan data terbaru
    myChart.data.labels = labelsArray;
    myChart.data.datasets[0].data = dataArray;
    myChart2.data.datasets[0].data = dataArray2;
    myChart3.data.datasets[0].data = dataArray3;
    myChart4.data.datasets[0].data = dataArray4;
    myChart5.data.datasets[0].data = dataArray5;
    myChart6.data.datasets[0].data = dataArray6;
    myChart.update();
    myChart2.update();
    myChart3.update();
    myChart4.update();
    myChart5.update();
    myChart6.update();
}