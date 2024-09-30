<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #89f7fe 0%, #66a6ff 100%);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #fff;
            border-radius: 20px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            padding: 40px;
            max-width: 500px;
            width: 100%;
            text-align: center;
            animation: fadeIn 1s ease-in-out;
        }
        .profile-image {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            background-color: lightgray;
            background-position: center;
            background-size: cover;
            margin: 0 auto 20px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        }
        h1 {
            font-family: 'Poppins', sans-serif;
            color: #3f72af;
            font-size: 32px;
            margin-bottom: 10px;
            font-weight: 600;
        }
        p {
            font-family: 'Roboto', sans-serif;
            font-size: 18px;
            line-height: 1.6;
            margin: 10px 0;
            color: #555;
        }
        p span {
            font-weight: bold;
            color: #333;
        }
        .profile-details {
            margin-top: 20px;
        }

        /* Keyframe for animation */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Hover effect on image */
        .profile-image:hover {
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
            transform: scale(1.05);
            transition: all 0.3s ease;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="profile-image" style="background-image: url('{{ asset("assets/img/pia3.jpg") }}');"></div>
        <h1>Profile User</h1>
        <div class="profile-details">
            <span>{{ $data['nama'] }}</span></p>
            <span>{{ $data['npm'] }}</span></p>
            <span>{{ $data['kelas'] }}</span></>
        </div>
    </div>

</body>
</html>
