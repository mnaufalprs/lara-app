import express from 'express';
import { createServer } from "http";
import { Server as SocketServer } from 'socket.io';
import mysql from 'mysql';

const app = express();
const httpServer = createServer(app);
const io = new SocketServer(httpServer, {
    cors: { origin: "*" }
});

var connection = mysql.createConnection({
    host: 'localhost',
    user: 'root',
    password: '',
    database: 'project_webapp'
});

connection.connect(function (err) {
    if (err) {
        console.error('Error connecting to MySQL database: ' + err.stack);
        return;
    }
    console.log('Connected to MySQL database');
});

async function getLatestData(dataUserId) {
    return new Promise((resolve, reject) => {
        // Mengambil 15 data terbaru dari database berdasarkan ID
        connection.query('SELECT * FROM data_livetests WHERE user_id = ? ORDER BY id DESC LIMIT 15', [dataUserId], (error, results, fields) => {
            if (error) {
                reject(error);
            } else {
                resolve(results.reverse());
            }
        });
    });
}

async function getDataWebInp(dataUserId) {
    // console.log('Mendapatkan dataWebInp dengan dataUserId:', dataUserId);
    return new Promise((resolve, reject) => {
        // Mengambil data terbaru dari database berdasarkan user_id
        connection.query('SELECT user_id, server_address, test_id FROM input_wbtests WHERE user_id = ? ORDER BY id DESC LIMIT 1', [dataUserId], (error, results, fields) => {
            if (error) {
                // console.error('Kesalahan pada query getDataWebInp:', error);
                reject(error);
            } else {
                // console.log('Hasil query getDataWebInp:', results);
                resolve(results.reverse());
            }
        });
    });
}

async function getDataWebTest(dataUserId) {
    // console.log('Mendapatkan dataWebTest dengan dataUserId:', dataUserId);
    return new Promise((resolve, reject) => {
        // Mengambil data terbaru dari database berdasarkan user_id
        connection.query('SELECT user_id, server_address, input_test_id FROM data_wbtests WHERE user_id = ? ORDER BY id DESC LIMIT 1', [dataUserId], (error, results, fields) => {
            if (error) {
                // console.error('Kesalahan pada query getDataWebTest:', error);
                reject(error);
            } else {
                // console.log('Hasil query getDataWebTest:', results);
                resolve(results.reverse());
            }
        });
    });
}

async function getDataLoadInp(dataUserId) {
    return new Promise((resolve, reject) => {
        // Mengambil data terbaru dari database berdasarkan ID
        connection.query('SELECT user_id, server_address, test_id FROM input_loadtests WHERE user_id = ? ORDER BY id DESC LIMIT 1', [dataUserId], (error, results, fields) => {
            if (error) {
                reject(error);
            } else {
                resolve(results.reverse());
            }
        });
    });
}

async function getDataLoadTest(dataUserId) {
    return new Promise((resolve, reject) => {
        // Mengambil data terbaru dari database berdasarkan ID
        connection.query('SELECT user_id, server_address, input_test_id FROM data_loadtests WHERE user_id = ? ORDER BY id DESC LIMIT 1', [dataUserId], (error, results, fields) => {
            if (error) {
                reject(error);
            } else {
                resolve(results.reverse());
            }
        });
    });
}

// // Menerima koneksi dari klien
// io.on('connection', (socket) => {
//     // Mendengarkan pesan 'sendDataUserId'
//     socket.on('sendDataUserId', (dataUserId) => {
//         console.log('Data user ID diterima:', dataUserId);
//         // Simpan dataUserId di dalam variabel lokal
//         socket.data.dataUserId = dataUserId;

//         // Kirim konfirmasi kembali ke klien
//         socket.emit('dataUserIdAcknowledged');
//     });

//     // Menerima koneksi dari klien
//     io.on('connection', async (socket) => {
//         console.log('Connection');

//         try {
//             // Mengirim 15 data terbaru saat koneksi berhasil
//             const initialData = await getLatestData();
//             socket.emit('data', initialData);
            
//             // Membuat fitur realtime update
//             const updateInterval = setInterval(async () => {
//                 const latestData = await getLatestData();
//                 socket.emit('data', latestData);
//             }, 1000);

//             // Mengirim data input_wbtests berdasarkan dataUserId
//             const initialDatawbinp = await getDataWebInp(socket.data.dataUserId);
//             socket.emit('datawbtestinp', initialDatawbinp);
            
//             // Membuat fitur realtime update untuk data input_wbtests
//             const updateIntervalwbinp = setInterval(async () => {
//                 const latestDatawbinp = await getDataWebInp(socket.data.dataUserId);
//                 socket.emit('datawbtestinp', latestDatawbinp);
//             }, 100);

//             // Mengirim data data_wbtests berdasarkan dataUserId
//             const initialDatawb = await getDataWebTest(socket.data.dataUserId);
//             socket.emit('datawbtest', initialDatawb);
            
//             // Membuat fitur realtime update untuk data data_wbtests
//             const updateIntervalwb = setInterval(async () => {
//                 const latestDatawb = await getDataWebTest(socket.data.dataUserId);
//                 socket.emit('datawbtest', latestDatawb);
//             }, 100);

//             // Menangani koneksi yang terputus
//             socket.on('disconnect', () => {
//                 console.log('Disconnect');
//                 clearInterval(updateInterval);
//                 clearInterval(updateIntervalwbinp);
//                 clearInterval(updateIntervalwb);
//             });
//         } catch (error) {
//             console.error('Error fetching data from MySQL database: ' + error);
//         }
//     });
// });

// Menerima koneksi dari klien
io.on('connection', async (socket) => {
    console.log('Connection');

    // Mendengarkan pesan 'sendDataUserId'
    socket.on('sendDataUserId', (dataUserId) => {
        console.log('Data user ID diterima:', dataUserId);
        // Simpan dataUserId di dalam variabel lokal
        socket.data.dataUserId = dataUserId;

        // Kirim konfirmasi kembali ke klien
        socket.emit('dataUserIdAcknowledged');
    });

    try {
        // Mengirim 15 data terbaru saat koneksi berhasil
        const initialData = await getLatestData(socket.data.dataUserId);
        socket.emit('data', initialData);
        
        // Membuat fitur realtime update
        const updateInterval = setInterval(async () => {
            const latestData = await getLatestData(socket.data.dataUserId);
            socket.emit('data', latestData);
        }, 1000);

        // Mengirim data input_wbtests berdasarkan dataUserId
        const initialDatawbinp = await getDataWebInp(socket.data.dataUserId);
        socket.emit('datawbtestinp', initialDatawbinp);
        
        // Membuat fitur realtime update untuk data input_wbtests
        const updateIntervalwbinp = setInterval(async () => {
            const latestDatawbinp = await getDataWebInp(socket.data.dataUserId);
            socket.emit('datawbtestinp', latestDatawbinp);
        }, 100);

        // Mengirim data data_wbtests berdasarkan dataUserId
        const initialDatawb = await getDataWebTest(socket.data.dataUserId);
        socket.emit('datawbtest', initialDatawb);
        
        // Membuat fitur realtime update untuk data data_wbtests
        const updateIntervalwb = setInterval(async () => {
            const latestDatawb = await getDataWebTest(socket.data.dataUserId);
            socket.emit('datawbtest', latestDatawb);
        }, 100);

        // Mengirim data input_loadtests berdasarkan dataUserId
        const initialDataloadinp = await getDataLoadInp(socket.data.dataUserId);
        socket.emit('dataloadtestinp', initialDataloadinp);
        
        // Membuat fitur realtime update untuk data input_loadtests
        const updateIntervalloadinp = setInterval(async () => {
            const latestDataloadinp = await getDataLoadInp(socket.data.dataUserId);
            socket.emit('dataloadtestinp', latestDataloadinp);
        }, 100);

        // Mengirim data data_loadtests berdasarkan dataUserId
        const initialDataload = await getDataLoadTest(socket.data.dataUserId);
        socket.emit('dataloadtest', initialDataload);
        
        // Membuat fitur realtime update untuk data data_wbtests
        const updateIntervalload = setInterval(async () => {
            const latestDataload = await getDataLoadTest(socket.data.dataUserId);
            socket.emit('dataloadtest', latestDataload);
        }, 100);

        // Menangani koneksi yang terputus
        socket.on('disconnect', () => {
            console.log('Disconnect');
            clearInterval(updateInterval);
            clearInterval(updateIntervalwbinp);
            clearInterval(updateIntervalwb);
            clearInterval(updateIntervalloadinp);
            clearInterval(updateIntervalload);
        });
    } catch (error) {
        console.error('Error fetching data from MySQL database: ' + error);
    }
});

httpServer.listen(3000, () => {
    console.log('Server is running');
});
