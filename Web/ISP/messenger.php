<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Messenger</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/messenger.css">
    <link rel="stylesheet" href="assets/css/fonts.css"/>
</head>
<body dir="ltr">

<div class="container-fluid">
    <div class="row">
        <!-- Sidebar Chat List -->
        <div class="col-md-3 d-none d-md-block chat-list bg-light p-3">
            <h5>Chats</h5>
            <ul class="list-group">
                <li class="dropdown-item">User</li>
            </ul>
        </div>

        <!-- Chat Main -->
        <div class="col-md-9 col-12 chat-container p-0">
            <!-- Header -->
            <nav class="navbar navbar-light bg-white shadow-sm px-3">
                <button class="btn btn-outline-secondary d-md-none" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasMenu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <span class="navbar-brand mb-0 h1">Messages</span>
            </nav>

            <!-- Chat Body -->
            <div class="chat-body" id="chatBody">
                <section class="chat-messages" style="background: white; border-radius: 15px; width: 50%; align-content: center;" id="chatMessages">
                    <label class="card-title" id="chatTitle" for="chatMessage">John Doe</label>
                    <h6 class="message-body" id="chatMessage">Hello</h6>
                    <p>3 June 2023 - 12:15</p>
                </section>
            </div>

            <!-- Chat Input -->
            <div class="p-2 bg-white border-top" dir="ltr">
                <div class="d-flex align-items-center">
                    <input type="text" class="form-control me-5" placeholder="Write a message..."/>
                    <button class="btn btn-primary me-2">Send</button>
                    <button class="btn btn-warning" id="mediaToggle">...</button>
                </div>
                <!-- Media Panel -->
                <div class="media-panel mt-2" id="mediaPanel">
                    <button class="btn btn-outline-dark"><img class="img-thumbnail" src="assets/images/messenger/file.png"></button>
                    <button class="btn btn-outline-dark"><img class="img-thumbnail" src="assets/images/messenger/contact.png"></button>
                    <button class="btn btn-outline-dark"><img class="img-thumbnail" src="assets/images/messenger/document.png"></button>
                    <button class="btn btn-outline-dark"><img class="img-thumbnail" src="assets/images/messenger/movie.png"></button>
                    <button class="btn btn-outline-dark"><img class="img-thumbnail" src="assets/images/messenger/music.png"></button>
                    <button class="btn btn-outline-dark"><img class="img-thumbnail" src="assets/images/messenger/picture.png"></button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/messenger.js"></script>
</body>
</html>
