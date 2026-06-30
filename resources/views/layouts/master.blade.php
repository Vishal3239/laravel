<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Dashboard</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            background: #f4f4f4;
        }

        /* Header */
        header {
            background: #0d6efd;
            color: #fff;
            padding: 20px;
            text-align: center;
            font-size: 28px;
            font-weight: bold;
        }

        /* Main Layout */
        .container {
            display: flex;
            min-height: calc(100vh - 140px);
        }

        /* Sidebar */
        aside {
            width: 250px;
            background: #212529;
            color: white;
            padding: 20px;
        }

        aside h2 {
            margin-bottom: 20px;
            text-align: center;
        }

        aside ul {
            list-style: none;
        }

        aside ul li {
            margin: 12px 0;
        }

        aside ul li a {
            display: block;
            color: white;
            text-decoration: none;
            padding: 12px;
            border-radius: 6px;
            transition: 0.3s;
        }

        aside ul li a:hover {
            background: #0d6efd;
        }

        /* Article */
        article {
            flex: 1;
            padding: 30px;
        }

        .card {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, .1);
        }

        .card h2 {
            margin-bottom: 15px;
            color: #0d6efd;
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 20px;
            margin-top: 25px;
        }

        .box {
            background: #0d6efd;
            color: white;
            padding: 25px;
            border-radius: 10px;
            text-align: center;
            font-size: 22px;
            font-weight: bold;
        }

        /* Footer */
        footer {
            background: #212529;
            color: white;
            text-align: center;
            padding: 18px;
        }
    </style>
</head>

<body>

    <header>
        Laravel Dashboard
    </header>

    <div class="container">

        <aside>

            <h2>Menu</h2>
            @section('sidebar')
                <ul>
                    <li><a href="home">🏠 Home</a></li>
                    <li><a href="profile">👤 Profile</a></li>
                    <li><a href="about">📄 About</a></li>
                    <li><a href="contact">📞 Contact</a></li>
                    <li><a href="#">⚙ Settings</a></li>
                    <li><a href="#">🚪 Logout</a></li>
                </ul>
            @show


        </aside>

        <article>

            <div class="card">

                <h2>Welcome Vishal 👋</h2>

                <p>
                    This is the main content area. You can display
                    tables, forms, charts, blog posts or dashboard data here.
                </p>

            </div>

            <div class="cards">

                @hasSection('contant')
                    @yield('contant');
                @else
                    <h2>no contant found</h2>
                @endif

            </div>

        </article>

    </div>

    <footer>
        © 2026 Laravel Dashboard | Designed for Practice
    </footer>

</body>

</html>
