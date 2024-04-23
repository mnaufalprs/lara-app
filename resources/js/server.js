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

// async function getLatestData() {
//     return new Promise((resolve, reject) => {
//         // Mengambil data terbaru dari database berdasarkan ID
//         connection.query('SELECT * FROM data_livetests ORDER BY id DESC LIMIT 1', (error, results, fields) => {
//             if (error) {
//                 reject(error);
//             } else {
//                 resolve(results);
//             }
//         });
//     });
// }

// io.on('connection', async (socket) => {
//     console.log('Connection');

//     try {
//         // Mengirim data pertama kali saat koneksi berhasil
//         const initialData = await getLatestData();
//         socket.emit('data', initialData);

//         // Membuat fitur realtime update
//         const updateInterval = setInterval(async () => {
//             const latestData = await getLatestData();
//             socket.emit('data', latestData);
//         }, 1000); // Update setiap 7 detik (sesuaikan dengan kebutuhan)

//         // Menangani koneksi yang terputus
//         socket.on('disconnect', () => {
//             console.log('Disconnect');
//             clearInterval(updateInterval); // Membersihkan interval saat koneksi terputus
//         });
//     } catch (error) {
//         console.error('Error fetching data from MySQL database: ' + error);
//     }
// });
async function getLatestData() {
    return new Promise((resolve, reject) => {
        // Mengambil 15 data terbaru dari database berdasarkan ID
        connection.query('SELECT * FROM data_livetests ORDER BY id DESC LIMIT 15', (error, results, fields) => {
            if (error) {
                reject(error);
            } else {
                resolve(results.reverse());
            }
        });
    });
}

io.on('connection', async (socket) => {
    console.log('Connection');

    try {
        // Mengirim 15 data terbaru saat koneksi berhasil
        const initialData = await getLatestData();
        socket.emit('data', initialData);
        // console.log(initialData);

        // Membuat fitur realtime update
        const updateInterval = setInterval(async () => {
            const latestData = await getLatestData();
            socket.emit('data', latestData);
        }, 1000); // Update setiap 1 detik (sesuaikan dengan kebutuhan)

        // Menangani koneksi yang terputus
        socket.on('disconnect', () => {
            console.log('Disconnect');
            clearInterval(updateInterval); // Membersihkan interval saat koneksi terputus
        });
    } catch (error) {
        console.error('Error fetching data from MySQL database: ' + error);
    }
});

httpServer.listen(3000, () => {
    console.log('Server is running');
});
