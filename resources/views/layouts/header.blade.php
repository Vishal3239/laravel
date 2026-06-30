<!DOCTYPE html>
<html>
<head>
    <title>Laravel Practice</title>

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:Arial, sans-serif;
        }

        .header{
            background:#0d6efd;
            color:white;
            padding:20px;
            text-align:center;
        }

        .navbar{
            background:#222;
            padding:15px;
            text-align:center;
        }

        .navbar a{
            color:white;
            text-decoration:none;
            margin:0 15px;
            font-size:18px;
        }

        .navbar a:hover{
            color:yellow;
        }

        .content{
            min-height:400px;
            padding:30px;
            text-align:center;
        }

        .footer{
            background:#222;
            color:white;
            text-align:center;
            padding:20px;
        }
    </style>
</head>
<body>

<div class="header">
    <h1>Welcome to My Laravel Website</h1>
</div>

<div class="navbar">
    <a href="/home">Home</a>
    <a href="/about">About</a>
    <a href="/contact">Contact</a>
</div>