<!doctype html>
<html lang="en"> 
 <head> 
  <meta charset="UTF-8"> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <title>SIM Details - Shadow Innovations</title> 
  <style>
        body {
            font-family: 'Helvetica', Arial, sans-serif;
            background-color: #f5f6fa;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 800px;
            text-align: center;
            margin: 10px;
        }
        .header {
            background-color: #FF0000;
            color: #fff;
            padding: 15px;
            border-radius: 10px 10px 0 0;
            margin: -20px -20px 20px -20px;
        }
        .header h1 {
            margin: 0;
            font-size: clamp(20px, 5vw, 24px);
            font-weight: normal;
        }
        .operator {
            font-size: clamp(14px, 4vw, 16px);
            color: #FF0000;
            margin-bottom: 15px;
            font-weight: bold;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group input {
            width: 80%;
            max-width: 500px;
            padding: 12px;
            font-size: clamp(14px, 4vw, 16px);
            border: 1px solid #ccc;
            border-radius: 5px;
            outline: none;
            transition: border-color 0.3s;
            margin-bottom: 10px;
        }
        .form-group input:focus {
            border-color: #FF0000;
        }
        .form-group button {
            background-color: #FF0000;
            color: #fff;
            padding: 12px 24px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: clamp(14px, 4vw, 16px);
            transition: background-color 0.3s;
        }
        .form-group button:hover {
            background-color: #cc0000;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            font-size: clamp(12px, 3.5vw, 14px);
        }
        th, td {
            padding: 10px;
            text-align: center;
            border: 1px solid #e0e0e0;
        }
        th {
            background-color: #FF0000;
            color: #fff;
            font-weight: bold;
        }
        td {
            background-color: #fff;
            color: #333;
        }
        td img {
            width: 40px;
            height: auto;
        }
        .error {
            color: #d32f2f;
            font-size: clamp(12px, 3.5vw, 14px);
            margin-top: 10px;
        }
        .download-btn {
            margin-top: 20px;
            background-color: #FF0000;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: clamp(14px, 4vw, 16px);
        }
        .download-btn:hover {
            background-color: #cc0000;
        }
        footer {
            background-color: #FF0000;
            color: #fff;
            padding: 10px;
            border-radius: 0 0 10px 10px;
            margin: 20px -20px -20px -20px;
            text-align: center;
            font-size: clamp(12px, 3.5vw, 14px);
        }
        .whatsapp-btn {
            background-color: #25D366;
            color: #fff;
            padding: 8px 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: clamp(12px, 3.5vw, 14px);
            text-decoration: none;
            display: inline-block;
            margin-top: 10px;
        }
        .whatsapp-btn:hover {
            background-color: #20b358;
        }
        /* Responsive adjustments */
        @media (max-width: 600px) {
            .container {
                padding: 15px;
                margin: 5px;
            }
            .form-group input {
                width: 90%;
            }
            table {
                display: block;
                overflow-x: auto;
                white-space: nowrap;
            }
            th, td {
                min-width: 100px;
            }
            td img {
                width: 30px;
            }
        }
        /* App view optimizations */
        @media (display-mode: standalone) {
            body {
                padding-top: env(safe-area-inset-top);
                padding-bottom: env(safe-area-inset-bottom);
            }
        }
    </style> 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script> 
 </head> 
 <body> 
  <div class="container"> 
   <div class="header"> 
    <h1>SIM Details</h1> 
   </div> 
   <p class="operator">Enter a Mobile Number or CNIC to Check Registered Details</p> 
   <form method="POST"> 
    <input type="hidden" name="csrf_token" value="5e2094e810e22670303e7ab86d96557d979dc9ff15b4ce9197eaed458ee35fd6"> 
    <div class="form-group"> 
     <input type="text" name="mobile_number" placeholder="Enter Mobile Number (e.g., 03338570120) or CNIC (e.g., 8220224477580)" value=""> 
    </div> 
    <div class="form-group"> <button type="submit">Search</button> 
    </div> 
   </form> 
   <footer> 
    <p>Developed by Shadow Innovations</p> <a href="https://whatsapp.com/channel/0029ValH0yv6GcG8pM6AN432" target="_blank" class="whatsapp-btn">Join our WhatsApp Channel</a> 
   </footer> 
  </div> 
  <script>
        function downloadTableAsPNG() {
            const table = document.getElementById('resultTable');
            if (!table) {
                alert('No table found to download.');
                return;
            }

            html2canvas(table, {
                backgroundColor: '#fff',
                scale: 2
            }).then(canvas => {
                const imgData = canvas.toDataURL('image/png');
                const link = document.createElement('a');
                link.href = imgData;
                link.download = 'sim-details.png';
                document.body.appendChild(link);
                link.click();
                document.body.removeChild(link);
            }).catch(err => {
                console.error('Error generating PNG:', err);
                alert('Failed to generate PNG. Please try again.');
            });
        }
    </script>  
 </body>
</html>
