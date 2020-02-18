<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Homepage » My Amazing Blog</title>
        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

        <link
            rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
            crossorigin="anonymous"
        />
    </head>
    <body>
        <div class="container">
            <nav class="mt-4 navbar navbar-light bg-light">
                <a class="navbar-brand" href="/">My Amazing Blog</a>
                
                <form class="form-inline" action="/search" method="get">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="query">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </nav>

            <div class="row mt-4">
                <main class="col-9">
                    <h1>Welcome to my blog</h1>

                    <p>Read my articles:</p>

                </main>

                <aside class="col-3">
                    <div class="card">
                        <div class="card-header">
                            Tags
                        </div>
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Wombats
                                    <span class="badge badge-primary badge-pill">14</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Penguins
                                    <span class="badge badge-primary badge-pill">2</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Kangaroos
                                    <span class="badge badge-primary badge-pill">1</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </aside>
            </div>

            <footer class="mt-4">
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        &copy; Wombats Ltd.
                    </li>
                </ul>
            </footer>
        </div>
    </body>
</html>