
// import express from 'express'; 
// import { createServer } from "http"; 
// import { Server as SocketServer } from 'socket.io';

// const app = express(); 
// const httpServer = createServer(app); 
// const io = new SocketServer(httpServer, {   
//     cors: { origin: "*"} 
// });  

// import mysql from 'mysql';

// // Membuat koneksi MySQL
// var connection = mysql.createConnection({
//      host: 'localhost',
//      user: 'root',
//      password: '',
//      database: 'project_webapp'
//  });
 
//  // Menghubungkan koneksi ke server MySQL
//  connection.connect(function (err) {
//      if (err) {
//          console.error('Error connecting to MySQL database: ' + err.stack);
//          return;
//      }
//      console.log('Connected to MySQL database');
//  });
 
//  // Fungsi untuk mendapatkan data
//  async function getData() {
//      return new Promise((resolve, reject) => {
//          connection.query('SELECT * FROM data_livetests', (error, results, fields) => {
//              if (error) {
//                  reject(error);
//              } else {
//                  resolve(results);
//              }
//          });
//      });
//  }
 
//  // Mendengarkan koneksi dari klien
//  io.on('connection', async (socket) => {
//      console.log('Connection');
 
//      try {
//          const data = await getData();
//          console.log(data);
//          // Lakukan sesuatu dengan data di sini
//          // io.sockets.emit('data', data);
//      //     io.clients.forEach( e => {
//      //           e.send(JSON.stringify(data))
//      //     })
//           socket.send(JSON.stringify(data));
//      } catch (error) {
//          console.error('Error fetching data from MySQL database: ' + error);
//      }
//      // httpServer.on('message', message => {
//      //      switch (message) {
//      //           case 'load':
//      //                getData()
//      //                break;
          
//      //      }
//      // })

//      socket.on('message', message => {
//           const parsedMessage = JSON.parse(message);
//           if (parsedMessage.type === 'load') {
//               getData().then(data => {
//                   socket.send(JSON.stringify(data));
//               }).catch(error => {
//                   console.error('Error fetching data from MySQL database: ' + error);
//               });
//           }
//      });

//      // Menangani koneksi yang terputus
//      socket.on('disconnect', () => {
//          console.log('Disconnect');
//      });
//  });
 
//  // Memulai server HTTP
//  httpServer.listen(3000, () => {
//      console.log('Server is running');
//  });

import express from 'express'; 
const webServer = express()
const port = 3000
import { WebSocketServer } from 'ws';
const socketServer = new WebSocketServer({port: 443})

webServer.get('/realtimeAnalytic', (req, res) => {
     res.sendFile(__dirname + '../realtime_analytic/index.blade.php');
})

webServer.listen(port, () => {
     console.log(`web server listening on port ${port}`)
})

socketServer.on('connection', ws => {
     console.log('new client connected')
})